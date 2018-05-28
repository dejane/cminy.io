<?php
require 'libs\kint\src\kint.php';

$btcz_stats_data = array();
$eth_stats_data = array();

// get data from apis
$eth_data 	      = json_decode(file_get_contents('https://whattomine.com/coins/151.json'));
$btcz_data	      = json_decode(file_get_contents('https://whattomine.com/coins/207.json'));
$eth_price_data   = json_decode(file_get_contents('https://api.coinmarketcap.com/v1/ticker/ethereum/'));
$btcz_price_data  = json_decode(file_get_contents('https://api.coinmarketcap.com/v1/ticker/bitcoinz/'));


// USD EUR conversion rate
$fiat_rates   =  json_decode(file_get_contents('http://api.fixer.io/latest?base=USD'));
$ust_eur_rate = $fiat_rates->rates->EUR;


$eth_stats_data['id']            =  1;
$eth_stats_data['name']          =  "ETH";
$eth_stats_data['price_usd']     =  (double) $eth_price_data[0]->price_usd;
$eth_stats_data['price_eur']     =  (double) $eth_price_data[0]->price_usd * $ust_eur_rate;
$eth_stats_data['price_btc']     =  (double) $eth_price_data[0]->price_btc;
$eth_stats_data['dificutly']     =  (double) $eth_data->difficulty24;
$eth_stats_data['networkhash']   =  (double) $eth_data->nethash;
$eth_stats_data['block_time']    =  (double) $eth_data->block_time;
$eth_stats_data['block_revard']  = 	(double) $eth_data->block_reward24;
$eth_stats_data['last_update']   =  date('d.m.Y H:i:s');

$btcz_stats_data['id']            =  2;
$btcz_stats_data['name']          =  "BTCZ";
$btcz_stats_data['price_usd']     =  (double) $btcz_price_data[0]->price_usd;
$btcz_stats_data['price_eur']     =  (double) $btcz_price_data[0]->price_usd * $ust_eur_rate;
$btcz_stats_data['price_btc']     =  (double) $btcz_price_data[0]->price_btc;
$btcz_stats_data['dificutly']     =  (double) $btcz_data->difficulty24;
$btcz_stats_data['networkhash']   =  (double) $btcz_data->nethash;
$btcz_stats_data['block_time']    =  (double) $btcz_data->block_time;
$btcz_stats_data['block_revard']  =  (double) $btcz_data->block_reward24;
$btcz_stats_data['last_update']   =  date('d.m.Y H:i:s');

$fp = fopen('data/btcz.json', 'w');
fwrite($fp, "btcz_stats = ");   //here it will print the array pretty
fwrite($fp, json_encode($btcz_stats_data, JSON_PRETTY_PRINT));   //here it will print the array pretty
fclose($fp);

$fp = fopen('data/eth.json', 'w');
fwrite($fp, "eth_stats = ");   //here it will print the array pretty
fwrite($fp, json_encode($eth_stats_data, JSON_PRETTY_PRINT));   //here it will print the array pretty
fclose($fp);

echo "done";
die();
?>
