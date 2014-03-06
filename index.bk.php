<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
      <title>CycleSoup.com :: Your search engine for all engines (TM)</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width">

      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!--link rel="stylesheet" href="css/bootstrap-theme.min.css"-->
      <link rel="stylesheet" href="css/slider.css">
      <link rel="stylesheet" href="css/main.css">

      <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
      <script src="js/vendor/jquery-1.10.1.min.js"></script>
  </head>
  <body>
    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->
    <header class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="nav-logo" id="logo" href="#" title="Return to the homepage"><img src="img/cyclesoup-logo-white.png" alt="CycleSoup.com logo" /></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <nav class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" role="navigation">          
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#">Search</a></li>
            <li><a href="#">Dealers</a></li>
            <li><a href="#">Sell</a></li>
            <li><a href="#">Research</a></li>
          </ul>
        </nav><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </header>

    <!-- Example horizontal advertising -->
    <div class="advertising-space top-banner">
      <img src="img/728x90_uap.gif" alt="Banner Top"/>
    </div>
  
    <main class="container">
      <!-- Main content -->
      <div class="col-lg-8 col-md-8">
        <!-- Nav tabs -->
        <aside id="search-criteria" class="search-criteria">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#basic-search" data-toggle="tab">Search</a></li>
            <li><a href="#recent-searches" data-toggle="tab">Recent</a></li>
            <li><a href="#saved-list" data-toggle="tab">Saved</a></li>
          </ul>
          <!-- Tab panes -->
          <div class="tab-content">          
            <form id="basic-search" class="basic-search tab-pane active">
              <div class="row">
                <div class="col-lg-6 col-md-5">
                  <div class="form-group">
                    <label for="inputMake">Make</label>
                    <select class="form-control" id="inputMake">
                      <option value="">All</option>
                      <option value="honda">Honda</option>
                      <option value="suzuki">Suzuki</option>
                      <option value="kawasaki">Kawasaki</option>
                      <option value="bmw">BMW</option>
                      <option value="ducati">Ducati</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="inputModel">Model</label>
                    <select class="form-control" id="inputModel">
                      <option value="">Select a Make first</option>
                    </select>
                  </div>
                  <div class="form-group price-group">
                    <div class="row">
                      <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <label for="inputMaxPrice">Max Price</label>
                      </div>
                      <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <div class="checkbox">
                          <label class="small-form-text">
                            <input id="anyPrice" type="checkbox"> Any Price
                          </label>
                        </div>
                      </div>
                      <p class="col-lg-4 col-md-4 col-sm-4 col-xs-6 currentMaxPriceValue">$<span class="maxPriceValue">1,000</span></p>
                    </div>
                    <input id="inputMaxPrice" class="generic-slider span2" value="" data-slider-id='inputMaxPrice' type="text" data-slider-min="1000" data-slider-max="500000" data-slider-step="1000" data-slider-destiny=".maxPriceValue" data-slider-value="1000"/>
                    <div class="form-group small-form-text">
                      <span class="slider-limit slider-min">$1,000</span>
                      <span class="slider-limit slider-max">$500,000</span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-7">
                  <div class="form-group col-lg-12 radio-grid">
                    <label>Select Type</label>
                    <div class="row">
                      <div class="radio col-lg-3 col-md-3 col-sm-3 col-xs-6">
                        <label class="optionsRadios" for="optionsRadios1">
                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="cruiser"/>
                          <img src="img/icons/cruiser.png" alt="Cruiser icon">
                          <span class="type-name">Cruiser</span>
                        </label>
                      </div>
                      <div class="radio col-lg-3 col-md-3 col-sm-3 col-xs-6">
                        <label class="optionsRadios" for="optionsRadios2">
                          <input type="radio" name="optionsRadios" id="optionsRadios2" value="dirt"/>
                          <img src="img/icons/dirt.png" alt="Dirt Bike icon">
                          <span class="type-name">Dirt</span>
                        </label>
                      </div>
                      <div class="radio col-lg-3 col-md-3 col-sm-3 col-xs-6">
                        <label class="optionsRadios" for="optionsRadios3">
                          <input type="radio" name="optionsRadios" id="optionsRadios3" value="dual purpose"/>
                          <img src="img/icons/dual-purpose.png" alt="Dual Purpose icon">
                          <span class="type-name">Dual Purpose</span>
                        </label>
                      </div>
                      <div class="radio col-lg-3 col-md-3 col-sm-3 col-xs-6">
                        <label class="optionsRadios" for="optionsRadios4">
                          <input type="radio" name="optionsRadios" id="optionsRadios4" value="custom"/>
                          <img src="img/icons/custom.png" alt="Custom bike icon">
                          <span class="type-name">Custom</span>
                        </label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="radio col-lg-3 col-md-3 col-sm-3 col-xs-6">
                        <label class="optionsRadios" for="optionsRadios5">
                          <input type="radio" name="optionsRadios" id="optionsRadios5" value="mx"/>
                          <img src="img/icons/mx.png" alt="MX icon">
                          <span class="type-name">MX</span>
                        </label>
                      </div>
                      <div class="radio col-lg-3 col-md-3 col-sm-3 col-xs-6">
                        <label class="optionsRadios" for="optionsRadios6">
                          <input type="radio" name="optionsRadios" id="optionsRadios6" value="scooter"/>
                          <img src="img/icons/scooter.png" alt="Scooter icon">
                          <span class="type-name">Scooter</span>
                        </label>
                      </div>
                      <div class="radio col-lg-3 col-md-3 col-sm-3 col-xs-6">
                        <label class="optionsRadios" for="optionsRadios7">
                          <input type="radio" name="optionsRadios" id="optionsRadios7" value="sport touring"/>
                          <img src="img/icons/sport-touring.png" alt="Sport Touring icon">
                          <span class="type-name">Sport Touring</span>
                        </label>
                      </div>
                      <div class="radio col-lg-3 col-md-3 col-sm-3 col-xs-6">
                        <label class="optionsRadios" for="optionsRadios8">
                          <input type="radio" name="optionsRadios" id="optionsRadios8" value="sport bike"/>
                          <img src="img/icons/sport-bike.png" alt="Sport Bike icon">
                          <span class="type-name">Sport Bike</span>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group col-lg-9 col-md-8 col-sm-9">
                    <label for="zipCode">Search Near</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="zipCode" placeholder="Enter your zip code"/>
                      <span class="input-group-addon"><span class="glyphicon glyphicon-globe"></span></span>
                    </div>
                  </div>
                  <div class="form-group col-lg-3 col-md-4 col-sm-3 submit-group">
                    <button type="submit" class="btn btn-callOA .btn-lg">Go</button>
                  </div>
                </div>
              </div>
            </form>
            <div id="recent-searches" class="tab-pane">
              <p class="tab-header">Check again your recent searches</p>
              <ul class="recent-list">
                <li>
                  <a href="#" class="recent-go-link btn btn-callOA">Go</a>
                  <p class="recent-head"><span class="recent-make">All makes</span> - <span class="recent-type">MX</span></p>
                  <p class="recent-desc"><span class="recent-price">$5,000 max</span> - <span class="recent-location">90003 Los Angeles</span></p>
                </li>
                <li>
                  <a href="#" class="recent-go-link btn btn-callOA">Go</a>
                  <p class="recent-head"><span class="recent-make">Honda</span>, <span class="recent-model">CRF100F</span></p>
                  <p class="recent-desc"><span class="recent-price">Any price</span> - <span class="recent-location">90038 Los Angeles, West Hollywood</span></p>
                </li>
                <li>
                  <a href="#" class="recent-go-link btn btn-callOA">Go</a>
                  <p class="recent-head"><span class="recent-make">Kawasaki</span>, <span class="recent-model">Any Model</span> - <span class="recent-type">Cruiser</span></p>
                  <p class="recent-desc"><span class="recent-price">$18,000 max</span> - <span class="recent-location">90042 Los Angeles, Highland Park</span></p>
                </li>
                <li>
                  <a href="#" class="recent-go-link btn btn-callOA">Go</a>
                  <p class="recent-head"><span class="recent-make">All makes</span> - <span class="recent-type">MX</span></p>
                  <p class="recent-desc"><span class="recent-price">$5,000 max</span> - <span class="recent-location">90003 Los Angeles</span></p>
                </li>
                <li>
                  <a href="#" class="recent-go-link btn btn-callOA">Go</a>
                  <p class="recent-head"><span class="recent-make">Honda</span>, <span class="recent-model">CRF100F</span></p>
                  <p class="recent-desc"><span class="recent-price">Any price</span> - <span class="recent-location">90038 Los Angeles, West Hollywood</span></p>
                </li>
                <li>
                  <a href="#" class="recent-go-link btn btn-callOA">Go</a>
                  <p class="recent-head"><span class="recent-make">Kawasaki</span>, <span class="recent-model">Any Model</span> - <span class="recent-type">Cruiser</span></p>
                  <p class="recent-desc"><span class="recent-price">$18,000 max</span> - <span class="recent-location">90042 Los Angeles, Highland Park</span></p>
                </li>
                <li>
                  <a href="#" class="recent-go-link btn btn-callOA">Go</a>
                  <p class="recent-head"><span class="recent-make">Honda</span>, <span class="recent-model">CRF100F</span></p>
                  <p class="recent-desc"><span class="recent-price">Any price</span> - <span class="recent-location">90038 Los Angeles, West Hollywood</span></p>
                </li>
                <li>
                  <a href="#" class="recent-go-link btn btn-callOA">Go</a>
                  <p class="recent-head"><span class="recent-make">Kawasaki</span>, <span class="recent-model">Any Model</span> - <span class="recent-type">Cruiser</span></p>
                  <p class="recent-desc"><span class="recent-price">$18,000 max</span> - <span class="recent-location">90042 Los Angeles, Highland Park</span></p>
                </li>
              </ul>
            </div>
            <div id="saved-list" class="tab-pane">
              <p class="tab-header">Saved List</p>
            </div>
          </div>
        </aside>
        
        <section id="featured-vehicles" class="carousel slide" data-ride="carousel">
          <header>
            <h1 class="section-title">Featured Motorcycles</h1>
            <!-- Indicators -->
            <p class="view-more align-right"><a href="#">View all &#187;</a></p>
            <ol class="carousel-indicators">
              <li data-target="#featured-vehicles" data-slide-to="0" class="active"></li>
              <li data-target="#featured-vehicles" data-slide-to="1"></li>
              <li data-target="#featured-vehicles" data-slide-to="2"></li>
            </ol>
          </header>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <div class="row">
                  <article class="elem1 col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <img src="img/motos/moto-01.png" alt="moto 01">
                    <div class="item-price">$1,500</div>
                    <div class="item-desc">
                      <h3>2008 Triumph</h3>
                      <p class="item-model">Street Triple 675</p>
                      <p class="item-dealer">
                        <a href="#">Motoprimo</a>
                        <a href="#" class="readmore label label-default">See all motorcycles &#187;</a>
                      </p>
                    </div>
                  </article>
                  <article class="elem2 col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <img src="img/motos/moto-02.png" alt="moto 02">
                    <div class="item-price">$790</div>
                    <div class="item-desc">
                      <h3>2008 Big Dog Studio</h3>
                      <p class="item-model">Custom Chooper</p>
                      <p class="item-dealer">
                        <a href="#">Moon Motor Sports</a>
                        <a href="#" class="readmore label label-default">See all motorcycles &#187;</a>
                      </p>
                    </div>
                  </article>
                  <article class="elem3 col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <img src="img/motos/moto-03.png" alt="moto 03">
                    <div class="item-price">$1,670</div>
                    <div class="item-desc">
                      <h3 class="item-make">2011 SAJAO</h3>
                      <p class="item-model">SJ125PY-6</p>
                      <p class="item-dealer">
                        <a href="#">Luther Honda House Powersports</a>
                        <a href="#" class="readmore label label-default">See all motorcycles &#187;</a>
                      </p>
                    </div>
                  </article>
                </div>
              </div>
              <div class="item">
                <div class="row">
                  <article class="elem2 col-lg-4 col-md-4">
                    <img src="img/motos/moto-02.png" alt="moto 02">
                    <div class="item-price">$3,100</div>
                    <div class="item-desc">
                      <h3>2008 Big Dog Studio</h3>
                      <p class="item-model">Custom Chooper</p>
                      <p class="item-dealer">
                        <a href="#">Moon Motor Sports</a>
                        <a href="#" class="readmore label label-default">See all motorcycles &#187;</a>
                      </p>
                    </div>
                  </article>
                  <article class="elem3 col-lg-4 col-md-4">
                    <img src="img/motos/moto-03.png" alt="moto 03">
                    <div class="item-price">$1,800</div>
                    <div class="item-desc">
                      <h3 class="item-make">2011 SAJAO</h3>
                      <p class="item-model">SJ125PY-6</p>
                      <p class="item-dealer">
                        <a href="#">Luther Honda House Powersports</a>
                        <a href="#" class="readmore label label-default">See all motorcycles &#187;</a>
                      </p>
                    </div>
                  </article>
                  <article class="elem1 col-lg-4 col-md-4">
                    <img src="img/motos/moto-01.png" alt="moto 01">
                    <div class="item-price">$2,240</div>
                    <div class="item-desc">
                      <h3>2008 Triumph</h3>
                      <p class="item-model">Street Triple 675</p>
                      <p class="item-dealer">Motoprimo</p>
                      <p><a href="#" class="readmore label label-default">See all motorcycles &#187;</a></p>
                    </div>
                  </article>
                  
                </div>
              </div>
              <div class="item">
                <div class="row">
                  <article class="elem3 col-lg-4 col-md-4">
                    <img src="img/motos/moto-03.png" alt="moto 03">
                    <div class="item-price">$7,005</div>
                    <div class="item-desc">
                      <h3 class="item-make">2011 SAJAO</h3>
                      <p class="item-model">SJ125PY-6</p>
                      <p class="item-dealer">
                        <a href="#">Luther Honda House Powersports</a>
                        <a href="#" class="readmore label label-default">See all motorcycles &#187;</a>
                      </p>
                    </div>
                  </article>
                  <article class="elem2 col-lg-4 col-md-4">
                    <img src="img/motos/moto-02.png" alt="moto 02">
                    <div class="item-price">$1,900</div>
                    <div class="item-desc">
                      <h3>2008 Big Dog Studio</h3>
                      <p class="item-model">Custom Chooper</p>
                      <p class="item-dealer">
                        <a href="#">Moon Motor Sports</a>
                        <a href="#" class="readmore label label-default">See all motorcycles &#187;</a>
                      </p>
                    </div>
                  </article>
                  <article class="elem1 col-lg-4 col-md-4">
                    <img src="img/motos/moto-01.png" alt="moto 01">
                    <div class="item-price">$9,500</div>
                    <div class="item-desc">
                      <h3>2008 Triumph</h3>
                      <p class="item-model">Street Triple 675</p>
                      <p class="item-dealer">Motoprimo</p>
                      <p><a href="#" class="readmore label label-default">See all motorcycles &#187;</a></p>
                    </div>
                  </article>
                  
                </div>
              </div>
              
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#featured-vehicles" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#featured-vehicles" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
            </a>

        </section>
        
        <section id="express-quote" class="blatant-section">
          <h2 class="section-title">New Motorcycle Express Quote</h2>
          <form>
            <div class="row">
              <div class="form-group col-lg-4">
                <label for="inputMakeExpress">Make</label>
                <select class="form-control" id="inputMakeExpress">
                  <option value="">All</option>
                  <option value="honda">Honda</option>
                  <option value="suzuki">Suzuki</option>
                  <option value="kawasaki">Kawasaki</option>
                  <option value="bmw">BMW</option>
                  <option value="ducati">Ducati</option>
                </select>
              </div>
              <div class="form-group col-lg-4">
                <label for="inputModelExpress">Model</label>
                <select class="form-control" id="inputModelExpress">
                  <option value="">Select a Make first</option>
                </select>
              </div>
              <div class="form-group col-lg-4">
                <label for="inputTrimExpress">Trim</label>
                <select class="form-control" id="inputTrimExpress">
                  <option value="">Select a Model first</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="form-group btn-grid col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <label class="control-label pull-left" >Select a Year</label>
                <input type="hidden" class="form-control" id="inputYear" value=""/>
                <div class="btn-toolbar pull-left" role="toolbar">
                  <div class="btn-group">
                    <button type="button" class="btn btn-default active" value="2015">2015</button>
                  </div>
                  <div class="btn-group">
                    <button type="button" class="btn btn-default" value="2014">2014</button>
                  </div>
                  <div class="btn-group">
                    <button type="button" class="btn btn-default" value="2013">2013</button>
                  </div>
                </div>
              </div>
              <div class="form-group col-lg-5 col-md-5 col-sm-5 col-xs-6">
                <label for="inputZipCode" class="pull-left control-label">Zip Code</label>
                <div class="pull-left">
                  <input type="text" class="form-control" id="inputZipCode" placeholder="Enter your zip code"/>
                </div>
              </div>
              <div class="form-group submit-group col-lg-2 col-md-2 col-sm-2 col-xs-4">
                <button type="submit" class="btn btn-callOA">Go</button>
              </div>
            </div>
          </form>
        </section>
        
        <aside id="research-list">
          <h3 class="mobile-expandable mobile-toggle-title">Motorcycle Research</h3>
          <ul class="rl-lg-3 rl-md-3 rl-sm-2 mobile-list">
            <li>
              <a href="#"><!--img src=""/-->Aprilia</a>
            </li>
            <li>
              <a href="#"><!--img src=""/-->BETA</a>
            </li>
            <li>
              <a href="#"><!--img src=""/-->BMW</a>
            </li>
            <li>
              <a href="#"><!--img src=""/-->Brammo</a>
            </li>
            <li>
              <a href="#"><!--img src=""/-->California Scooter Co.</a>
            </li>
            <li>
              <a href="#"><!--img src=""/-->Can-Am</a>
            </li>
            <li>
              <a href="#"><!--img src=""/-->CFMoto</a>
            </li>
            <li>
              <a href="#"><!--img src=""/-->Ducati</a>
            </li>
            <li>
              <a href="#"><!--img src=""/-->Erik Buell Racing</a>
            </li>
            <li>
              <a href="#"><!--img src=""/-->GAS GAS</a>
            </li>
            <li>
              <a href="#"><!--img src=""/-->Lance</a>
            </li>
            <li>
              <a href="#"><!--img src=""/-->Moto Guzzi</a>
            </li>
            <li>
              <a href="#"><!--img src=""/-->MV Agusta</a>
            </li>
            <li>
              <a href="#"><!--img src=""/-->Peirspeed</a>
            </li>
            <li>
              <a href="#"><!--img src=""/-->Piaggio</a>
            </li>
            <li>
              <a href="#"><!--img src=""/-->QLINK</a>
            </li>
            <li>
              <a href="#"><!--img src=""/-->Royal Enfield</a>
            </li>
            <li>
              <a href="#"><!--img src=""/-->Suzuki</a>
            </li>
            <li>
              <a href="#"><!--img src=""/-->SYM</a>
            </li>
            <li>
              <a href="#"><!--img src=""/-->Tomos</a>
            </li>
            <li>
              <a href="#"><!--img src=""/-->Triumph</a>
            </li>
            <li>
              <a href="#"><!--img src=""/-->Ural</a>
            </li>
            <li>
              <a href="#"><!--img src=""/-->Vectrix</a>
            </li>
            <li>
              <a href="#"><!--img src=""/-->Vespa</a>
            </li>
            <li>
              <a href="#"><!--img src=""/-->Victory</a>
            </li>
            <li>
              <a href="#"><!--img src=""/-->Yamaha</a>
            </li>
            <li>
              <a href="#"><!--img src=""/-->Zero</a>
            </li>
          </ul>          
        </aside>
        
      </div>
      
      
      <div class="right-column">
        <div class="advertising-space right-banner col-lg-12 col-md-12 col-sm-6">
          <img src="img/300x250_uap.gif" alt="Banner Top"/>
        </div>
        
        <div class="advertising-space right-banner col-lg-12 col-md-12  col-sm-6">
          <img src="img/300x250_uap.gif" alt="Banner Top"/>
        </div>
      </div>
        
    </main><!-- /container -->
      
    <!-- Example horizontal advertising -->
    <div class="advertising-space bottom-banner">
      <img src="img/728x90_uap.gif" alt="Banner Top"/>
    </div>
    
    <footer class="">
      <div class="menu-footer">
        <div class="container">
          <div class="col-lg-4 col-md-4">
            <h3>
              Other Vehicles
            </h3>
            <ul class="nav">
              <li class="active"><a href="#">Car &amp; Trucks <span> - CarSoup.com</span></a></li>
              <li><a href="#">Motorcycles <span> - CycleSoup.com</span></a></li>
              <li><a href="#">ATV <span> - ATVSoup.com</span></a></li>
              <li><a href="#">Boats <span> - BoatingSoup.com</span></a></li>
              <li><a href="#">Persona Watercraft <span> - PWCsoup.com</span></a></li>
              <li><a href="#">Snowmobiles <span> - SnowmobileSoup.com</span></a></li>
              <li><a href="#">RV &amp; Campers <span> - RVingSoup.com</span></a></li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-4">
            <h3>
              Explore CarSoup
            </h3>
            <ul class="nav">
              <li><a href="#">Home</a></li>
              <li><a href="#">Contact Us</a></li>
              <li><a href="#">Careers</a></li>
              <li><a href="#">Become a CarSoup Dealer</a></li>
              <li><a href="#">Advertise</a></li>
              <li><a href="#">Markets</a></li>
              <li><a href="#">Help</a></li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-4">
            <h3>
              Sell on CarSoup
            </h3>
            <ul class="nav">
              <li><a href="#">Pricing &amp; Packages</a></li>
              <li><a href="#">Sell to a Dealer</a></li>
              <li><a href="#">Selling Tips</a></li>
              <li><a href="#">Manage Listings</a></li>
            </ul>
            <form class="newsletter">
              <p>Be the first to hear from our specials</p>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter your email here">
                <button type="submit" class="btn btn-default">Sign Up</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="copyright-notice">
        <div class="container">
          <ul class="nav navbar-right">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">User Terms</a></li>
            <li><a href="#">Dealer Terms</a></li>
          </ul>
          <p class="">&copy; 2014 CarSoup. All Rights Reserved.</p>
        </div>
      </div>
    </footer>
    
    <!-- javascript loaders -->
    <!--script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script-->
    <!--script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script-->
    
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/vendor/bootstrap-slider.js"></script>
    <script src="js/main.js"></script>
    <!--script>
        var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
        (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src='//www.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
    </script-->
  </body>
</html>
