<?php
$is_index = basename($_SERVER['SCRIPT_NAME']) == 'index.php';   
?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
      <title>CycleSoup.com :: Your search engine for all engines (TM)</title>
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
	 x="0px" y="0px" width="71.1px" height="49.5px" viewBox="0 0 71.1 49.5" style="enable-background:new 0 0 71.1 49.5;"
	 xml:space="preserve">
                <defs>
                </defs>
                <path d="M66.9,26.2c-2.3-2.3-5.9-3.9-9.5-3.9c-0.7,0-1.6,0-2.3,0.3l-1.6-4.3C54.8,18,55.7,18,57,18c2.3,0,4.6,0.3,6.9,1.3l1-2
                      c-2.3-1-4.9-1.6-7.5-1.6c-1.6,0-3,0.3-4.3,0.7l-3.3-9.5c-0.3-0.7-1-1.3-1.6-1.3l-0.7-1.3c-0.7-1.3-2-2.3-3.3-3
                      c-0.3-0.7-1.3-1.3-2-1.3H37c-1,0-2,1-2,2s1,2,2,2h5.2c0.7,0,1-0.3,1.3-0.7c0.7,0.3,1.6,1,2,1.6l0.3,1.3c-0.7,0.7-1,1.3-0.7,2.3l1,3
                      c-1.3-0.7-2.6-1.3-3.9-1.3c0-0.7-0.7-1-1.3-1h-1.6c-0.7,0-1.3,0.7-1.3,1c-3,0.7-5.2,2.3-6.6,3.9L5.6,10.5v3.3l4.3,2.3
                      c-1.3,0.3-3,0.7-4.3,1.3l1,2c2-1,4.3-1.3,6.6-1.3s4.6,0.3,6.9,1.3c2,1,3.9,2.3,5.6,3.6c0.7,0.7,1,1,1.6,1.6l2.3,7.9h-3.3
                      c-1.3-5.9-6.6-10.2-13.1-10.2C5.9,22.3,0,28.5,0,35.7c0,7.5,5.9,13.4,13.4,13.4c6.9,0,12.8-5.2,13.4-12.1c2.6-0.3,4.9-0.3,5.6-0.3
                      c4.9-0.3,6.6-3,8.9-7.9c1-2,2.3-3.9,3.6-5.6c1.3-1.3,3-2.3,4.6-3.3l1.6,4.3c-1,0.7-2,1.3-3,2.3c-2.3,2.3-3.9,5.9-3.9,9.5
                      s1.6,6.9,3.9,9.5c2.3,2.3,5.9,3.9,9.5,3.9s6.9-1.6,9.5-3.9c2.3-2.3,3.9-5.9,3.9-9.5C70.5,32.1,69.2,28.9,66.9,26.2z M13.4,43.3
                      c-3.9,0-7.5-3.3-7.5-7.5c0-3.9,3.3-7.5,7.5-7.5c3.3,0,5.9,2,6.9,4.6l-7.2,1c-1.3,0-2,1-2,2.3c0,1,1,2,2.3,2c0,0,0,0,0.3,0
                      c0,0,3.3-0.3,7.2-0.7C20,40.7,17,43.3,13.4,43.3z M57.4,43.3c-3.9,0-7.5-3.3-7.5-7.5c0-2.3,1.3-4.6,3-5.9l2.3,6.6
                      c0.3,1,1.3,1.3,2,1.3c0.3,0,0.3,0,0.7,0c1-0.3,1.6-1.6,1.3-2.6l-2.3-6.6H57c3.9,0,7.5,3.3,7.5,7.5C64.6,40,61.3,43.3,57.4,43.3z"/>
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
              <li class="active"><a href="http://www.cyclesoup.com"><img src="img/moto-icon.png" alt="Moto icon"/></a></li>
              <li><a href="http://www.atvsoup.com"><img src="img/u13.png" alt="ATV icon"/></a></li>
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