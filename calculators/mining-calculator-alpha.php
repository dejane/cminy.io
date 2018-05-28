<section ng-app="ether">
  <div ng-controller="EtherMiningCtrl" ng-cloak>

    <div class="row">

      <div class="col-sm-12">
        <p><b>ETH</b> mining calculator</p>
        <p style="color: #6c71e3; font-size: 13px;">1. Input your ETH hashrate and powe consuption.</p>
        <br/>
      </div>

      <div class="col-sm-6 col-xs-12">
        <form ng-submit="computeProfits()" class="form-horizontal">
          <div class="col-xs-12 col-sm-6">

            <div class="form-group">
              <label class="col-lg-12 control-label">Hashrate</label>
              <div class="col-lg-12">
                <input type="text" class="form-control" ng-model="eth_userHash" placeholder="eth_userHash" ng-change="computeProfits()" />
              </div>
            </div>

            <div class="form-group">
              <label class="col-lg-12 control-label">Network hashrate</label>
              <div class="col-lg-12">
                <input type="text" class="form-control" ng-model="eth_netHashGH" placeholder="eth_netHashGH" ng-change="computeProfits()" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-12 control-label">Blocktime</label>
              <div class="col-lg-12">
                <input type="text" class="form-control" ng-model="eth_block_time" placeholder="eth_block_time" ng-change="computeProfits()" />
              </div>
            </div>

            <div class="form-group">
              <label class="col-lg-12 control-label">Dificutly</label>
              <div class="col-lg-12">
                <input type="text" class="form-control" ng-model="eth_dificutly" placeholder="eth_dificutly" ng-change="computeProfits()" />
              </div>
            </div>

            <div class="form-group">
              <label class="col-lg-12 control-label">Block reward</label>
              <div class="col-lg-12">
                <input type="text" class="form-control" ng-model="eth_block_revard" placeholder="eth_block_revard" ng-change="computeProfits()" />
              </div>
            </div>

          </div>
          <div class="col-xs-12 col-sm-6">

            <div class="form-group">
              <label class="col-lg-12 control-label">1 ETH price USD</label>
              <div class="col-lg-12">
                <input type="text" class="form-control" ng-model="eth_price_usd" placeholder="eth_price_usd" ng-change="computeProfits()" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-12 control-label">1 ETH price EUR</label>
              <div class="col-lg-12">
                <input type="text" class="form-control" ng-model="eth_price_eur" placeholder="eth_price_eur" ng-change="computeProfits()" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-12 control-label">1 ETH price BTC</label>
              <div class="col-lg-12">
                <input type="text" class="form-control" ng-model="eth_price_btc" placeholder="eth_price_btc" ng-change="computeProfits()" />
              </div>
            </div>

            <div class="form-group">
              <label class="col-lg-12 control-label">Power consuption</label>
              <div class="col-lg-12">
                <input type="text" class="form-control" ng-model="eth_power_consumption" placeholder="eth_power_consumption" ng-change="computeProfits()" />
              </div>
            </div>

            <div class="form-group">
              <label class="col-lg-12 control-label">Cost per kWh</label>
              <div class="col-lg-12">
                <input type="text" class="form-control" ng-model="eth_costPerKWH" placeholder="eth_costPerKWH" ng-change="computeProfits()" />
              </div>
            </div>

          </div>
        </form>
      </div>

      <div class="col-sm-6 col-xs-12">

        <table class="table table-striped">
          <thead>
            <tr>
              <th class="col-lg-4">Period</th>
              <th class="col-lg-4 text-center">ETH</th>
              <th class="col-lg-4 text-center">USD</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Minute</td>
              <td ng-bind="eth_earnings.min | number:9"></td>
              <td ng-bind="eth_earnings.min*eth_price_usd | currency"></td>
            </tr>
            <tr>
              <td>Hour</td>
              <td ng-bind="eth_earnings.hour | number:9"></td>
              <td ng-bind="eth_earnings.hour*eth_price_usd | currency"></td>
            </tr>
            <tr>
              <td>Day</td>
              <td ng-bind="eth_earnings.day | number:9"></td>
              <td ng-bind="eth_earnings.day*eth_price_usd | currency"></td>
            </tr>
            <tr>
              <td>Week</td>
              <td ng-bind="eth_earnings.week | number:9"></td>
              <td ng-bind="eth_earnings.week*eth_price_usd | currency"></td>
            </tr>
            <tr>
              <td>Month</td>
              <td ng-bind="eth_earnings.month | number:9"></td>
              <td ng-bind="eth_earnings.month*eth_price_usd | currency"></td>
            </tr>
            <tr style="border-bottom: 1px solid #ddd;">
              <td>Year</td>
              <td ng-bind="eth_earnings.year | number:9"></td>
              <td ng-bind="eth_earnings.year*eth_price_usd | currency"></td>
            </tr>
          </tbody>
        </table>
        <p style="font-size: 13px; line-height:1.3;">
          Disclosure: Mining metrics are calculated based on a network hash rate of 241,543 GH/s and using a ETH - USD exchange rate of 1 ETH = $ 545.54. (dummy text)
        </p>

      </div>

    </div>

    <br/><br/><br/>

    <div class="row">

      <div class="col-sm-12">
        <p><b>BTCZ</b> mining calculator</p>
        <p style="color: #6c71e3; font-size: 13px;">2. Input your BTCZ hashrate and powe consuption.</p><br/>
      </div>

      <div class="col-sm-6">
        <form ng-submit="computeProfits()" class="form-horizontal">

          <div class="col-sm-6 col-xs-12">

            <div class="form-group">
              <label class="col-lg-12 control-label">SOLS</label>
              <div class="col-lg-12">
                <input type="text" class="form-control" ng-model="btcz_userHash" placeholder="btcz_userHash" ng-change="computeProfits()" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-12 control-label">Network hashrate</label>
              <div class="col-lg-12">
                <input type="text" class="form-control" ng-model="btcz_networkhash" placeholder="btcz_networkhash" ng-change="computeProfits()" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-12 control-label">Blocktime</label>
              <div class="col-lg-12">
                <input type="text" class="form-control" ng-model="btcz_blockTime" placeholder="btcz_blockTime" ng-change="computeProfits()" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-12 control-label">Dificutly</label>
              <div class="col-lg-12">
                <input type="text" class="form-control" ng-model="btcz_dificutly" placeholder="btcz_dificutly" ng-change="computeProfits()" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-12 control-label">Block reward</label>
              <div class="col-lg-12">
                <input type="text" class="form-control" ng-model="btcz_block_revard" placeholder="btcz_block_revard" ng-change="computeProfits()" />
              </div>
            </div>

          </div>

          <div class="col-sm-6 col-xs-12">

            <div class="form-group">
              <label class="col-lg-12 control-label">1 BTCZ price in USD</label>
              <div class="col-lg-12">
                <input type="text" class="form-control" ng-model="btcz_price_usd" placeholder="btcz_price_usd" ng-change="computeProfits()" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-12 control-label">1 BTCZ price in EUR</label>
              <div class="col-lg-12">
                <input type="text" class="form-control" ng-model="btcz_price_eur" placeholder="btcz_price_eur" ng-change="computeProfits()" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-12 control-label">1 BTCZ price in BTC</label>
              <div class="col-lg-12">
                <input type="text" class="form-control" ng-model="btcz_price_btc" placeholder="btcz_price_btc" ng-change="computeProfits()" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-12 control-label">Power Conumption</label>
              <div class="col-lg-12">
                <input type="text" class="form-control" ng-model="btcz_powerConsumption" placeholder="btcz_powerConsumption" ng-change="computeProfits()" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-12 control-label">Cost per 1 kWh</label>
              <div class="col-lg-12">
                <input type="text" class="form-control" ng-model="btcz_costPerKWH" placeholder="btcz_costPerKWH" ng-change="computeProfits()" />
              </div>
            </div>

          </div>

        </form>
      </div>

      <div class="col-sm-6 col-xs-12">

        <table class="table table-striped">
          <thead>
            <tr>
              <th class="col-lg-4">Period</th>
              <th class="col-lg-4 text-center">BTCZ</th>
              <th class="col-lg-4 text-center">USD</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Minute</td>
              <td ng-bind="btcz_earnings.min | number:9"></td>
              <td ng-bind="btcz_earnings.min*btcz_price_usd | currency"></td>
            </tr>
            <tr>
              <td>Hour</td>
              <td ng-bind="btcz_earnings.hour | number:9"></td>
              <td ng-bind="btcz_earnings.hour*btcz_price_usd | currency"></td>
            </tr>
            <tr>
              <td>Day</td>
              <td ng-bind="btcz_earnings.day | number:9"></td>
              <td ng-bind="btcz_earnings.day*btcz_price_usd | currency"></td>
            </tr>
            <tr>
              <td>Week</td>
              <td ng-bind="btcz_earnings.week | number:9"></td>
              <td ng-bind="btcz_earnings.week*btcz_price_usd | currency"></td>
            </tr>
            <tr>
              <td>Month</td>
              <td ng-bind="btcz_earnings.month | number:9"></td>
              <td ng-bind="btcz_earnings.month*btcz_price_usd | currency"></td>
            </tr>
            <tr>
              <td>Year</td>
              <td ng-bind="btcz_earnings.year | number:9"></td>
              <td ng-bind="btcz_earnings.year*btcz_price_usd | currency"></td>
            </tr>
          </tbody>
        </table>
        <p style="font-size: 13px; line-height:1.3;">
          Disclosure: Mining metrics are calculated based on a network hash rate of 241,543 GH/s and using a ETH - USD exchange rate of 1 ETH = $ 545.54. (dummy text)
        </p>

      </div>
    </div>


    <div class="col-xs-12" data-animate="fadeIn" data-duration="1.0s" data-delay="0.2s">
     </br>
      <h2 style="font-size: 22px; margin-bottom: 0; padding-top: 15px;" class="section__title">Mining ETH today is <span style="color: #6c71e3;">13%</span> more profitable than BTCZ. <span style="font-size: 12px">(dummy text)</span></h2>
    </div>

  </div>
</section>

<script>
  function getParameterByName(name) {

    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
      results = regex.exec(location.search);

    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
  }

  angular.module('ether', ['ngResource']).config(['$controllerProvider', function($controllerProvider) {
    $controllerProvider.allowGlobals();
  }]);

  console.log(getParameterByName('myParam'));

  function EtherMiningCtrl($scope, $http, $log) {

    $scope.eth_price_usd = eth_stats.price_usd;
    $scope.eth_price_eur = eth_stats.price_eur;
    $scope.eth_price_btc = eth_stats.price_btc;
    $scope.eth_dificutly = eth_stats.dificutly;
    $scope.eth_block_time = eth_stats.block_time;
    $scope.eth_block_revard = eth_stats.block_revard;
    $scope.eth_netHashGH = (eth_stats.dificutly / eth_stats.block_time) / 1e9;
    $scope.eth_earnings = {};

    $scope.btcz_price_usd = btcz_stats.price_usd;
    $scope.btcz_price_eur = btcz_stats.price_eur;
    $scope.btcz_price_btc = btcz_stats.price_btc;
    $scope.btcz_dificutly = btcz_stats.dificutly;
    $scope.btcz_networkhash = btcz_stats.networkhash;
    $scope.btcz_block_revard = btcz_stats.block_revard;
    $scope.btcz_blockTime = btcz_stats.block_time;
    $scope.btcz_earnings = {};

    $scope.computeProfits = function() {

      var eth_userRatio = $scope.eth_userHash * 1e6 / ($scope.eth_netHashGH * 1e9);
      var eth_blocksPerMin = 60.0 / $scope.eth_block_time;
      var eth_ethPerMin = eth_blocksPerMin * $scope.eth_block_revard;
      $scope.eth_earnings.min = eth_userRatio * eth_ethPerMin;

      $scope.eth_earnings.hour = $scope.eth_earnings.min * 60;
      $scope.eth_earnings.day = $scope.eth_earnings.hour * 24;
      $scope.eth_earnings.week = $scope.eth_earnings.day * 7;
      $scope.eth_earnings.month = $scope.eth_earnings.day * 30;
      $scope.eth_earnings.year = $scope.eth_earnings.day * 365;

      var btcz_userRatio = ($scope.btcz_userHash * 1) / $scope.btcz_networkhash;
      var btcz_blocksPerMin = 60.0 / $scope.btcz_blockTime;
      var btcz_coinPermine = btcz_blocksPerMin * $scope.btcz_block_revard
      var btcz_earnings_min = btcz_userRatio * btcz_coinPermine;

      $scope.btcz_earnings.min = btcz_earnings_min;
      $scope.btcz_earnings.hour = btcz_earnings_min * 60;
      $scope.btcz_earnings.day = $scope.btcz_earnings.hour * 24;
      $scope.btcz_earnings.week = $scope.btcz_earnings.day * 7;
      $scope.btcz_earnings.month = $scope.btcz_earnings.day * 30;
      $scope.btcz_earnings.year = $scope.btcz_earnings.day * 365;

    };

    $scope.updateUserHash = function() {
      var value = $scope.userChoice;
      $scope.userHash = value;
      $scope.computeProfits();
    };

  }
</script>
