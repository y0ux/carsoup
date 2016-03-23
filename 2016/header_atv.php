<?php
$script = basename($_SERVER['SCRIPT_NAME']);
$is_index = $script == 'index.php' || $script == 'atv.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
      <title>ATVSoup.com :: Your search engine for all engines (TM)</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="robots" content="nofollow" />

      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,500,300italic,400italic,500italic,700,700italic|Roboto+Condensed:400,300,300italic,700italic,400italic,700" type="text/css" rel="stylesheet"/>

      <link rel="stylesheet" href="css/main.css">
  </head>
  <body>
    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->
    <header id="site-header" class="navbar navbar-default navbar-fixed-top">

      <div class="first-container">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

            <a class="nav-brand scrollAnimation" data-action="shrink" data-position="200" href="/" title="Return to the homepage"><img src="img/u4.png" alt="CycleSoup.com logo" /></a>

            <button type="button" class="navbar-toggle soupsites" data-toggle="collapse" data-target="#soupsites-navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <svg version="1.1"
              	 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
              	 x="0px" y="0px" width="73.3px" height="49.5px" viewBox="0 0 73.3 49.5" style="enable-background:new 0 0 73.3 49.5;"
              	 xml:space="preserve">
                <defs>
                </defs>
                <g>
                	<path d="M56.1,8.9V1c-3,0-5.3,1.7-5.3,4S53.1,8.9,56.1,8.9z"/>
                	<path d="M64.7,23.8l2-9.2L49.8,8.9l-2.3-5c-0.7-1.3-2-2.3-3.3-3c0-0.3-1-1-1.7-1h-8.3c-1.3,0-2,1-2,2s1,2,2,2h8.3
                		c0.7,0,1-0.3,1.3-0.7c0.7,0.3,1.7,1,2,1.7l2,4l-5.9,8.6L1.3,11.9v4.3l8.9,4.6l0.7,2C4.6,24.1,0,29.7,0,36c0,7.6,5.9,13.5,13.5,13.5
                		c6.9,0,12.9-5.3,13.5-12.2h19.1c0.7,6.9,6.3,12.2,13.5,12.2c7.6,0,13.5-5.9,13.5-13.5C72.9,30.7,69.6,25.7,64.7,23.8z M13.5,42.2
                		c-3.3,0-6.3-2.6-6.3-6.3c0-3.3,2.6-6.3,6.3-6.3c3.3,0,6.3,3,6.3,6.3C19.8,39.6,16.8,42.2,13.5,42.2z M59.4,42.2
                		c-3.3,0-6.3-2.6-6.3-6.3c0-3.3,2.6-6.3,6.3-6.3c3.3,0,6.3,2.6,6.3,6.3C65.7,39.6,62.7,42.2,59.4,42.2z"/>
                </g>
              </svg>
            </button>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <nav class="collapse navbar-collapse" id="main-navbar-collapse">

            <ul class="nav navbar-nav navbar-right scrollAnimation" data-position="200" data-action="shrink">
              <li class="active"><a href="/">Search</a></li>
              <li><a href="/">Sell</a></li>
              <li><a href="/">Dealers</a></li>
              <li><a href="/">Events</a></li>
              <li><a href="/">Blog</a></li>
              <li><a href="/">Resources</a></li>
            </ul>

          </nav><!-- /.navbar-collapse -->

        </div><!-- /.container -->
      </div><!-- / .first-container -->

      <div class="second-container">
        <div class="container">
          <div class="collapse navbar-collapse" id="soupsites-navbar-collapse" role="navigation">
            <ul class="list-inline sibling-sites scrollAnimation" data-position="200" data-action="shrink">
              <li><a href="http://www.carsoup.com"><img src="img/u9.png" alt="Car icon"/></a></li>
              <li><a href="http://www.cyclesoup.com"><img src="img/moto-icon.png" alt="Moto icon"/></a></li>
              <li class="active"><a href="http://www.atvsoup.com"><img src="img/u13.png" alt="ATV icon"/></a></li>
              <li><a href="http://www.boatsoup.com"><img src="img/u15.png" alt="Boat icon"/></a></li>
              <li><a href="http://www.snowmobilesoup.com"><img src="img/u17.png" alt="Snow icon"/></a></li>
              <li><a href="http://www.rvingsoup.com"><img src="img/u19.png" alt="RV icon"/></a></li>
            </ul>
          </div>
          <div class="header-badge disapear hidden-sm hidden-xs scrollAnimation" data-position="300" data-action="bye">
            <div class="content">
              <div class="title">SELL YOURS</div>
              <div class="body">It's quick, easy & FREE</div>
              <div class="coa">GET STARTED <i class="fa fa-angle-double-right"></i></div>
            </div>
            <div class="tail">
            </div>
          </div>
        </div>
      </div><!-- / .second-container -->

    </header>



    <?php if(!$is_index) : ?>
    <main class="container">
      <!-- Main content -->
      <div id="page-content" class="col-lg-8 col-md-8">
    <?php endif; ?>
