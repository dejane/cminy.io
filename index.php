<!DOCTYPE html>
<html lang="en">

<head>
  <title>cMiny</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta charset="utf-8">
  <meta name="author" content="Dejan Lužnic">
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1"><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Favicons -->
  <link rel="icon" type="image/png" href="icon/favicon-32x32.png" sizes="32x32">
  <link rel="apple-touch-icon" href="icon/favicon-32x32.png">
  <link rel="apple-touch-icon" sizes="72x72" href="icon/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="icon/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="144x144" href="icon/apple-touch-icon-144x144.png">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Jura:600,700%7CRoboto:300,400,500,700" rel="stylesheet">

  <!-- Icons -->
  <link rel="stylesheet" href="css/linearicons.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">

  <!-- CSS -->
  <link rel="stylesheet" href="css/base.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/main-color1.css">


  <script src="js/jquery-2.2.4.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.marquee.min.js"></script>
  <script src="js/smooth-scroll.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.parallax.min.js"></script>
  <script src="js/scrolla.jquery.min.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.counterup.min.js"></script>
  <script src="js/imagesloaded.pkgd.min.js"></script>
  <script src="js/main.js"></script>

  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular-resource.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/bignumber.js/2.0.7/bignumber.js"></script>

  <script src="data/eth.json"></script>
  <script src="data/btcz.json"></script>



</head>

<body class="body" data-spy="scroll" data-target=".header" data-offset="60">
  <!-- header -->
  <header class="header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12">
          <!-- btn -->
          <button class="header__btn" type="button">
						<span class="lnr lnr-menu"></span>
						<span class="lnr lnr-cross"></span>
					</button>
          <!-- end btn -->

          <!-- logo -->
          <a data-scroll href="#home" class="header__logo">
						<img class="header__logo-white" src="img/logo.png" alt="Logo">
						<img class="header__logo-dark" src="img/logo--dark.png" alt="Logo">
					</a>
          <!-- end logo -->

          <!-- navigation -->
          <ul class="nav header__nav">
            <li>
              <a data-scroll href="#calculator">Mining calculator</a>
            </li>
            <li>
              <a data-scroll href="#info">Optimize your profits</a>
            </li>
            <li>
              <a data-scroll href="#features">Features</a>
            </li>
            <li>
              <a data-scroll href="#roadmap">Roadmap</a>
            </li>
          </ul>
          <!-- end navigation -->

        </div>
      </div>
    </div>
  </header>
  <!-- end header -->




  <!-- about -->
  <section id="calculator" class="about about--arrow section--gradient">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h2 class="section__title section__title--white section__title--margin"><br/>cminy.io - optimize your mining earnings</h2>
        </div>

        <div class="col-xs-12">

          <div class="about__text">

            <!-- eth calculator -->
            <div class="row eth-calculator-row">
              <?php include 'calculators/mining-calculator-alpha.php'; ?>
            </div>
            <!-- eth calculator -->

            <!-- btcz calculator -->

            <!-- btcz calculator -->

          </div>

        </div>

      </div>
    </div>
  </section>
  <!-- end about -->

  <!-- info -->
	<section id="info" class="section" style="padding-bottom: 0;padding-top: 0;">
		<div class="container">
			<div class="row">
				<!-- section title -->
				<div class="col-xs-12 animate" data-animate="fadeIn" data-duration="1.0s" data-delay="0.2s">
					<h2 class="section__title">Why use cminy.io?</h2><br/>
					<span class="section__tagline">Cryptocurreny prices are changing rapidly practicly every second </br>and you always want to <b>mine the most profitable coin.</b></br>... but you dont have the time to switch miners?</span></br>
				</div>
				<!-- end section title -->

				<div class="col-xs-12 col-sm-12 col-md-12 text-center">

						<p class="box2__text"> Cminy.io is a minner switching service for small and medium sized farms. </br>Service enable you to calculate your mining earnings for each rig (if you have different GPUS)
              and save the stats for each rig. </br>App wil autocalculate the most profitable coin to mine for the day. Api will be avaiable online to comunicate with each mining rig and autoswtich miner top the most
              profitable coin of the day. Stats and assets portfolio will also be enabled.
            </p>
					</div>

				</div>


				</div>
			</div>
		</div>
	</section>
	<!-- end info -->

  <!-- features -->
	<section id="features" class="section">
		<div class="container">
			<div class="row">
				<!-- section title -->
				<div class="col-xs-12 animate" data-animate="fadeIn" data-duration="1.0s" data-delay="0.2s">
					<h2 class="section__title">Features</h2>
					<span class="section__tagline">Optimize your mining profitability</span>
				</div>
				<!-- end section title -->

				<div class="col-xs-12 col-sm-6 col-md-4">
					<!-- box (style 2) -->
					<div class="box2 animate" data-animate="flipInX" data-duration="1.0s" data-delay="0.4s">
						<span class="lnr lnr-diamond box2__icon"></span>
						<h3 class="box2__title">Mining calculator</h3>
						<p class="box2__text"> Multiple coins mining calculator. Support all algorithems included ethash, equihash, cryptonight and more.</p>
					</div>
					<!-- end box (style 2) -->
				</div>

				<div class="col-xs-12 col-sm-6 col-md-4">
					<!-- box (style 2) -->
					<div class="box2 animate" data-animate="flipInX" data-duration="1.0s" data-delay="0.6s">
						<span class="lnr lnr-magic-wand box2__icon"></span>
						<h3 class="box2__title">Real time data</h3>
						<p class="box2__text">Price and dificutly data are updated every hour. For dificutly we use last 24h average dificulty and predict dificulty for next day.</p>
					</div>
					<!-- end box (style 2) -->
				</div>

				<div class="col-xs-12 col-sm-6 col-md-4">
					<!-- box (style 2) -->
					<div class="box2 animate" data-animate="flipInX" data-duration="1.0s" data-delay="0.8s">
						<span class="lnr lnr-leaf box2__icon"></span>
						<h3 class="box2__title">Your farm (rigs) data</h3>
						<p class="box2__text">Register and input you rigs data. For each rig you can input hashrate and power conumption for differenct coins.</p>
					</div>
					<!-- end box (style 2) -->
				</div>

				<div class="col-xs-12 col-sm-6 col-md-4">
					<!-- box (style 2) -->
					<div class="box2 animate" data-animate="flipInX" data-duration="1.0s" data-delay="0.4s">
						<span class="lnr lnr-laptop-phone box2__icon"></span>
						<h3 class="box2__title">Online API</h3>
						<p class="box2__text">For each account API will be online shown which coin for the rig is the most profitable to mine.</p>
					</div>
					<!-- end box (style 2) -->
				</div>

				<div class="col-xs-12 col-sm-6 col-md-4">
					<!-- box (style 2) -->
					<div class="box2 animate" data-animate="flipInX" data-duration="1.0s" data-delay="0.6s">
						<span class="lnr lnr-layers box2__icon"></span>
						<h3 class="box2__title">Windows/Linux batch script</h3>
						<p class="box2__text">Shell script (.bat on windows) will be avaiable. Script will read the online ALI every 24h and auto switch the miner to the most profitable for the day.</p>
					</div>
					<!-- end box (style 2) -->
				</div>

				<div class="col-xs-12 col-sm-6 col-md-4">
					<!-- box (style 2) -->
					<div class="box2 animate" data-animate="flipInX" data-duration="1.0s" data-delay="0.8s">
						<span class="lnr lnr-rocket box2__icon"></span>
						<h3 class="box2__title">Assets portofilo</h3>
						<p class="box2__text"> Select your assets portfolio of coins which you want to held. App will auto calculate how much of mined coins you trade to kep your portfolio as you wish.</p>
					</div>
					<!-- end box (style 2) -->
				</div>
			</div>
		</div>
	</section>
	<!-- end features -->

  <!-- roadmap -->
  <section id="roadmap" class="section section--pt0">
    <div class="container-fluid">
      <div class="row">
        <!-- section title -->
        <div class="col-xs-12">
          <h2 class="section__title">Roadmap</h2>
          <span class="section__tagline">Progress is made each month</span>
        </div>
        <!-- end section title -->

        <!-- roadmap -->
        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-lg-12 col-lg-offset-0">
          <ul class="roadmap">
            <li>
              <span>May 2018</span>
              <p>Project architecture made. Mining calculator for ethash and equihash. </p>
            </li>
            <li>
              <span>June 2018</span>
              <p>Cryptonight algo calculator. Power consumption feature in calculator.</p>
            </li>
            <li>
              <span>August 2016</span>
              <p>Service beta version release. Api and windows/linux script. Testing.</p>
            </li>
            <li>
              <span>Q3 2018</span>
              <p>Public release of the service.</p>
            </li>
            <li>
              <span>Q4 2018</span>
              <p>Further development of the service. Expansion and marketing. Extra features..</p>
            </li>
          </ul>
        </div>
        <!-- end roadmap -->

        <!-- section button -->
        <div class="col-xs-12">
          <a href="https://github.com/dejane/cminy.io" target="_blank" class="section__btn">More on github</a>
        </div>
        <!-- end section button -->
      </div>
    </div>
  </section>
  <!-- end roadmap -->



  <!-- footer -->
  <footer style="padding: 30px 0;" class="footer">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <small class="footer__copyright">© 2018 <a href="http://cminy.io">cminy.io</a>. Created by <a href="https://www.linkedin.com/in/dejan-lu%C5%BEnic/"> dejan</a> with love and passion.</small>
        </div>
      </div>
    </div>
  </footer>
  <!-- end footer -->



  <!-- preloader -->
  <div class="preloader">
    <div class="preloader__logo">
    </div>
    <div class="preloader__spinner">
    </div>
  </div>
  <!-- end preloader -->


</body>

</html>
