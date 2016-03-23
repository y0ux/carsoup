<?php
$script = basename($_SERVER['SCRIPT_NAME']);
$is_index = $script == 'index.php' || $script == 'boat.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
      <title>BoatSoup.com :: Your search engine for all engines (TM)</title>
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
              	 x="0px" y="0px" width="102.6px" height="49.5px" viewBox="0 0 102.6 49.5" style="enable-background:new 0 0 102.6 49.5;"
              	 xml:space="preserve">
              <defs>
              </defs>
              <path d="M6.3,36c2,0.7,3.6,1,5.3,1c6.9,0,13.9-6.6,13.9-6.6S32.7,37,39.3,37c6.9,0,13.9-6.6,13.9-6.6l0,0l0,0c0,0,7.3,6.6,13.9,6.6
              	c6.9,0,13.9-6.6,13.9-6.6s3,3,6.9,5c3.3-4.3,6.3-10.6,8.6-17.8l-25.1,2.3l0,0L60.1,0l-3,1.7l8.3,18.8l-54.5,5.3L6.3,36z M30,21.5
              	l2.6-5.6l-18.8,2.6l-2,4.6L30,21.5z M93.4,42.9c-6.3,0-13.9-6.6-13.9-6.6s-7.3,6.6-13.9,6.6c-6.9,0-13.9-6.6-13.9-6.6l0,0l0,0
              	c0,0-6.6,6.6-13.9,6.6s-13.9-6.6-13.9-6.6s-6.6,6.6-13.9,6.6c-3,0-6.6-1.3-10.2-4v7.9c3.3,1.7,6.9,2.6,10.2,2.6
              	c4.6,0,9.2-1.7,13.9-5c3.6,2.6,8.9,5,13.9,5s9.2-1.7,13.9-5c4.6,3.3,8.9,5,13.9,5c5,0,9.9-2,13.9-5c4.6,3.3,8.9,5,13.9,5l0,0
              	c3.3,0,6.3-0.7,9.2-2.3v-7.6C99,41.9,96,42.9,93.4,42.9z"/>
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
              <li><a href="http://www.atvsoup.com"><img src="img/u13.png" alt="ATV icon"/></a></li>
              <li class="active"><a href="http://www.boatsoup.com"><img src="img/u15.png" alt="Boat icon"/></a></li>
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
