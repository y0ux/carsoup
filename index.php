<?php require_once('header.php'); ?>

        <!-- Nav tabs -->
        <aside id="search-criteria" class="search-criteria">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#basic-search" data-toggle="tab"><span class="glyphicon glyphicon-search hidden-xxs"></span> Search</a></li>
            <li><a href="#recent-searches" data-toggle="tab"><span class="glyphicon glyphicon-time  hidden-xxs"></span> Recent</a></li>
            <li><a href="#saved-list" data-toggle="tab"><span class="glyphicon glyphicon-saved  hidden-xxs"></span> Saved</a></li>
          </ul>
          <!-- Tab panes -->
          <div class="tab-content">          
            <form id="basic-search" class="basic-search tab-pane active" action="srp.php" method="get">
              <div class="row">
                <div class="col-lg-6 col-md-5">
                  <div class="form-group">
                    <label for="BasicSearch_make">Make</label>
                    <select class="form-control" id="BasicSearch_make" name="make">
                      <option value="all">All</option>
                      <option value="honda">Honda</option>
                      <option value="suzuki">Suzuki</option>
                      <option value="kawasaki">Kawasaki</option>
                      <option value="bmw">BMW</option>
                      <option value="ducati">Ducati</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="BasicSearch_model">Model <span class="optionalLabel">(Optional)</span></label>
                    <select class="form-control" id="BasicSearch_model" name="model">
                      <option value="">Select a Make first</option>
                    </select>
                  </div>
                  
                  <div class="form-group">
                    <label for="BasicSearch_priceRange">Price Range <span class="optionalLabel">(Optional)</span></label>
                    <div class="row">
                      <div class="col-sm-5">
                        <select class="form-control" id="BasicSearch_priceRange" name="priceMin">
                          <option value="">No Limit</option>
                          <option value="5000">$100</option>
                          <option value="10000">$1,000</option>
                          <option value="20000">$5,000</option>
                          <option value="30000">$10,000</option>
                          <option value="40000">$20,000</option>
                          <option value="unlimited">$45,000</option>
                        </select>
                      </div>
                      <div class="col-sm-2 hidden-xs text-center">
                        <span>To</span>
                      </div>
                      <br class="visible-xs">
                      <div class="col-sm-5">
                        <select class="form-control" id="BasicSearch_priceRangeMax" name="priceMax">
                          <option value="">No Limit</option>
                          <option value="5000">$5,000</option>
                          <option value="10000">$10,000</option>
                          <option value="20000">$20,000</option>
                          <option value="30000">$30,000</option>
                          <option value="40000">$40,000</option>
                          <option value="unlimited">$50,000+</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="BasicSearch_yearRange">Year Range <span class="optionalLabel">(Optional)</span></label>
                    <div class="row">
                      <div class="col-sm-5">
                        <select class="form-control" id="BasicSearch_priceRange" name="yearMin">
                          <option value="">Any</option>
                          <option value="5000">$100</option>
                          <option value="10000">$1,000</option>
                          <option value="20000">$5,000</option>
                          <option value="30000">$10,000</option>
                          <option value="40000">$20,000</option>
                          <option value="unlimited">$45,000</option>
                        </select>
                      </div>
                      <div class="col-sm-2 hidden-xs text-center">
                        <span>To</span>
                      </div>
                      <br class="visible-xs">
                      <div class="col-sm-5">
                        <select class="form-control" id="BasicSearch_priceRangeMax" name="yearMax">
                          <option value="">Any</option>
                          <option value="5000">$5,000</option>
                          <option value="10000">$10,000</option>
                          <option value="20000">$20,000</option>
                          <option value="30000">$30,000</option>
                          <option value="40000">$40,000</option>
                          <option value="unlimited">$50,000+</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="col-lg-6 col-md-7">
                  <div class="form-group col-lg-12 radio-grid">
                    <label>Select Type</label>
                    <div style="margin-bottom: 30px" class="hidden-sm"></div>
                    <div class="row">
                      <div class="radio col-lg-3 col-md-3 col-sm-3 col-xs-6">
                        <label class="optionsRadios" for="BasicSearch_optionsRadios1">
                          <input type="radio" name="type" id="BasicSearch_optionsRadios1" value="cruiser"/>
                          <span class="radio-substitute">
                            <img src="img/icons/cruiser.png" alt="Cruiser icon" class="radio-image-foreground" />
                            <img src="img/icons/cruiser-selected.png" alt="Cruiser icon" class="radio-image-background" />
                            <span class="type-name">Cruiser</span>
                          </span>
                        </label>
                      </div>
                      <div class="radio col-lg-3 col-md-3 col-sm-3 col-xs-6">
                        <label class="optionsRadios" for="BasicSearch_optionsRadios2">
                          <input type="radio" name="type" id="BasicSearch_optionsRadios2" value="dirt"/>
                          <span class="radio-substitute">
                            <img src="img/icons/dirt.png" alt="Dirt Bike icon" class="radio-image-foreground" />
                            <img src="img/icons/dirt-selected.png" alt="Dirt Bike icon" class="radio-image-background" />
                            <span class="type-name">Dirt</span>
                          </span>
                        </label>
                      </div>
                      <div class="radio col-lg-3 col-md-3 col-sm-3 col-xs-6">
                        <label class="optionsRadios" for="BasicSearch_optionsRadios3">
                          <input type="radio" name="type" id="BasicSearch_optionsRadios3" value="dual purpose"/>
                          <span class="radio-substitute">
                            <img src="img/icons/dual-purpose.png" alt="Dual Purpose icon" class="radio-image-foreground" />
                            <img src="img/icons/dual-purpose-selected.png" alt="Dual Purpose icon" class="radio-image-background" />
                            <span class="type-name">Dual Purpose</span>
                          </span>
                        </label>
                      </div>
                      <div class="radio col-lg-3 col-md-3 col-sm-3 col-xs-6">
                        <label class="optionsRadios" for="BasicSearch_optionsRadios4">
                          <input type="radio" name="type" id="BasicSearch_optionsRadios4" value="custom"/>
                          <span class="radio-substitute">
                            <img src="img/icons/custom.png" alt="Custom bike icon" class="radio-image-foreground" />
                            <img src="img/icons/custom-selected.png" alt="Custom bike icon" class="radio-image-background" />
                            <span class="type-name">Custom</span>
                          </span>
                        </label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="radio col-lg-3 col-md-3 col-sm-3 col-xs-6">
                        <label class="optionsRadios" for="BasicSearch_optionsRadios5">
                          <input type="radio" name="type" id="BasicSearch_optionsRadios5" value="mx"/>
                          <span class="radio-substitute">
                            <img src="img/icons/mx.png" alt="MX icon" class="radio-image-foreground" />
                            <img src="img/icons/mx-selected.png" alt="MX icon" class="radio-image-background" />
                            <span class="type-name">MX</span>
                          </span>
                        </label>
                      </div>
                      <div class="radio col-lg-3 col-md-3 col-sm-3 col-xs-6">
                        <label class="optionsRadios" for="BasicSearch_optionsRadios6">
                          <input type="radio" name="type" id="BasicSearch_optionsRadios6" value="scooter"/>
                          <span class="radio-substitute">
                            <img src="img/icons/scooter.png" alt="Scooter icon" class="radio-image-foreground" />
                            <img src="img/icons/scooter-selected.png" alt="Scooter icon" class="radio-image-background" />
                            <span class="type-name">Scooter</span>
                          </span>
                        </label>
                      </div>
                      <div class="radio col-lg-3 col-md-3 col-sm-3 col-xs-6">
                        <label class="optionsRadios" for="BasicSearch_optionsRadios7">
                          <input type="radio" name="type" id="BasicSearch_optionsRadios7" value="sport touring"/>
                          <span class="radio-substitute">
                            <img src="img/icons/sport-touring.png" alt="Sport Touring icon" class="radio-image-foreground" />
                            <img src="img/icons/sport-touring-selected.png" alt="Sport Touring icon" class="radio-image-background" />
                            <span class="type-name">Sport Touring</span>
                          </span>
                        </label>
                      </div>
                      <div class="radio col-lg-3 col-md-3 col-sm-3 col-xs-6">
                        <label class="optionsRadios" for="BasicSearch_optionsRadios8">
                          <input type="radio" name="type" id="BasicSearch_optionsRadios8" value="sport bike"/>
                          <span class="radio-substitute">
                            <img src="img/icons/sport-bike.png" alt="Sport Bike icon" class="radio-image-foreground" />
                            <img src="img/icons/sport-bike-selected.png" alt="Sport Bike icon" class="radio-image-background" />
                            <span class="type-name">Sport Bike</span>
                          </span>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group col-sm-9" style="margin-bottom: 0;">
                    <label for="BasicSearch_zipCode">Search Near</label>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="input-group">
                          <input type="text" class="form-control" id="BasicSearch_zipCode" name="zipCode" placeholder="Zip code"/>
                          <span class="input-group-addon geolocator-trigger" data-target="#zipCode"><span class="glyphicon icon-location"></span></span>
                        </div>
                      </div>
                      <br class="visible-xs">
                      <div class="col-sm-6">
                        <div class="form-group ">
                          <select class="form-control" id="BasicSearch_priceRangeMax" name="yearMax">
                            <option value="10">Within 10 miles</option>
                            <option value="25">Within 25 miles</option>
                            <option value="50">Within 50 miles</option>
                            <option value="100" selected>Within 100 miles</option>
                            <option value="200">Within 200 miles</option>
                            <option value="400">Within 400 miles</option>
                            <option value="nation">Nationwide</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group col-sm-3 submit-group">
                    <button type="submit" class="btn btn-callOA">Go</button>
                  </div>
                  
                </div>
              </div>
            </form>
            <div id="recent-searches" class="tab-pane">
              <p class="tab-header">Check again your recent searches</p>
              <ul class="recent-list">
                
              </ul>
            </div>
            <div id="saved-list" class="tab-pane">
              <p class="tab-header">Saved List</p>
              <ul class="list-inline saved-items">
              </ul>
            </div>
          </div>
        </aside>
        
        <section id="featured-vehicles" class="carousel slide carousel-responsive" data-ride="carousel">
          <header>
            <h1 class="section-title"><span class="glyphicon glyphicon-asterisk"></span> Featured Motorcycles</h1>
            <!-- Indicators -->
            <p class="view-more text-right"><a href="#">View all &#187;</a></p>
            <ol class="carousel-indicators">
              <li data-target="#featured-vehicles" data-slide-to="0" class="active"></li>
              <li data-target="#featured-vehicles" data-slide-to="1"></li>
              <li data-target="#featured-vehicles" data-slide-to="2"></li>
            </ol>
          </header>
          
          <!-- Wrapper for slides -->
          <div class="carousel-inner text-sm-center">
            <div class="item active">
              <div class="row">
                <article class="elem1 col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <a href="vdp.php"><img src="img/motos/moto-01.png" alt="moto 01"/></a>
                  <div class="item-price label-price">$1,500</div>
                  <div class="item-desc">
                    <h3><a href="vdp.php">2008 Triumph</a></h3>
                    <p class="item-model">Street Triple 675</p>
                    <p class="item-dealer">
                      <a href="dealer-profile.php">Motoprimo</a>
                      <a href="dealer-profile.php" class="readmore btn-xs btn btn-default relevant">See all motorcycles &#187;</a>
                    </p>
                  </div>
                </article>
                <article class="elem2 col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <a href="vdp.php"><img src="img/motos/moto-02.png" alt="moto 02"></a>
                  <div class="item-price">$790</div>
                  <div class="item-desc">
                    <h3><a href="vdp.php">2008 Big Dog Studio</a></h3>
                    <p class="item-model">Custom Chooper</p>
                    <p class="item-dealer">
                      <a href="dealer-profile.php">Moon Motor Sports</a>
                      <a href="dealer-profile.php" class="readmore btn-xs btn btn-default relevant">See all motorcycles &#187;</a>
                    </p>
                  </div>
                </article>
                <article class="elem3 col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <a href="vdp.php"><img src="img/motos/moto-03.png" alt="moto 03"></a>
                  <div class="item-price">$1,670</div>
                  <div class="item-desc">
                    <h3 class="item-make"><a href="vdp.php">2011 SAJAO</a></h3>
                    <p class="item-model">SJ125PY-6</p>
                    <p class="item-dealer">
                      <a href="dealer-profile.php">Luther Honda House Powersports</a>
                      <a href="dealer-profile.php" class="readmore btn-xs btn btn-default relevant">See all motorcycles &#187;</a>
                    </p>
                  </div>
                </article>
              </div>
            </div>
            <div class="item">
              <div class="row">
                <article class="elem2 col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <img src="img/motos/moto-02.png" alt="moto 02">
                  <div class="item-price">$3,100</div>
                  <div class="item-desc">
                    <h3>2008 Big Dog Studio</h3>
                    <p class="item-model">Custom Chooper</p>
                    <p class="item-dealer">
                      <a href="dealer-profile.php">Moon Motor Sports</a>
                      <a href="#" class="readmore label label-default">See all motorcycles &#187;</a>
                    </p>
                  </div>
                </article>
                <article class="elem3 col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <img src="img/motos/moto-03.png" alt="moto 03">
                  <div class="item-price">$1,800</div>
                  <div class="item-desc">
                    <h3 class="item-make">2011 SAJAO</h3>
                    <p class="item-model">SJ125PY-6</p>
                    <p class="item-dealer">
                      <a href="dealer-profile.php">Luther Honda House Powersports</a>
                      <a href="#" class="readmore label label-default">See all motorcycles &#187;</a>
                    </p>
                  </div>
                </article>
                <article class="elem1 col-lg-4 col-md-4 col-sm-4 col-xs-12">
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
                <article class="elem3 col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <img src="img/motos/moto-03.png" alt="moto 03">
                  <div class="item-price">$7,005</div>
                  <div class="item-desc">
                    <h3 class="item-make">2011 SAJAO</h3>
                    <p class="item-model">SJ125PY-6</p>
                    <p class="item-dealer">
                      <a href="dealer-profile.php">Luther Honda House Powersports</a>
                      <a href="#" class="readmore label label-default">See all motorcycles &#187;</a>
                    </p>
                  </div>
                </article>
                <article class="elem2 col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <img src="img/motos/moto-02.png" alt="moto 02">
                  <div class="item-price">$1,900</div>
                  <div class="item-desc">
                    <h3>2008 Big Dog Studio</h3>
                    <p class="item-model">Custom Chooper</p>
                    <p class="item-dealer">
                      <a href="dealer-profile.php">Moon Motor Sports</a>
                      <a href="#" class="readmore label label-default">See all motorcycles &#187;</a>
                    </p>
                  </div>
                </article>
                <article class="elem1 col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <img src="img/motos/moto-01.png" alt="moto 01">
                  <div class="item-price">$9,500</div>
                  <div class="item-desc">
                    <h3>2008 Triumph</h3>
                    <p class="item-model">Street Triple 675</p>
                    <p class="item-dealer"><a href="dealer-profile.php">Motoprimo</a></p>
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
          <?php require_once("express-quote.php"); ?>
        </section>
        
        <aside id="research-list">
          <header class="research-header float-fix">
            <h3 class="pull-left">
              <span class="glyphicon icon-meter"></span> Motorcycle Research
            </h3>
            <button type="button" class="btn btn-xs btn-default pull-right visible-xs visible-xxs toggle-button" data-toggle="collapse" data-target="#collapse-research">
              <span class="glyphicon glyphicon-plus off"></span><span class="glyphicon glyphicon-minus on"></span>
            </button>
          </header>
          <div id="collapse-research" class=" collapse in">
            <ul class="rl-lg-3 rl-md-3 rl-sm-2 mobile-list">
              <li>
                <a href="srp.php"><!--img src=""/-->Aprilia</a>
              </li>
              <li>
                <a href="srp.php"><!--img src=""/-->BETA</a>
              </li>
              <li>
                <a href="srp.php"><!--img src=""/-->BMW</a>
              </li>
              <li>
                <a href="srp.php"><!--img src=""/-->Brammo</a>
              </li>
              <li>
                <a href="srp.php"><!--img src=""/-->California Scooter Co.</a>
              </li>
              <li>
                <a href="srp.php"><!--img src=""/-->Can-Am</a>
              </li>
              <li>
                <a href="srp.php"><!--img src=""/-->CFMoto</a>
              </li>
              <li>
                <a href="srp.php"><!--img src=""/-->Ducati</a>
              </li>
              <li>
                <a href="srp.php"><!--img src=""/-->Erik Buell Racing</a>
              </li>
              <li>
                <a href="srp.php"><!--img src=""/-->GAS GAS</a>
              </li>
              <li>
                <a href="srp.php"><!--img src=""/-->Lance</a>
              </li>
              <li>
                <a href="srp.php"><!--img src=""/-->Moto Guzzi</a>
              </li>
              <li>
                <a href="srp.php"><!--img src=""/-->MV Agusta</a>
              </li>
              <li>
                <a href="srp.php"><!--img src=""/-->Peirspeed</a>
              </li>
              <li>
                <a href="srp.php"><!--img src=""/-->Piaggio</a>
              </li>
              <li>
                <a href="srp.php"><!--img src=""/-->QLINK</a>
              </li>
              <li>
                <a href="srp.php"><!--img src=""/-->Royal Enfield</a>
              </li>
              <li>
                <a href="srp.php"><!--img src=""/-->Suzuki</a>
              </li>
              <li>
                <a href="srp.php"><!--img src=""/-->SYM</a>
              </li>
              <li>
                <a href="srp.php"><!--img src=""/-->Tomos</a>
              </li>
              <li>
                <a href="srp.php"><!--img src=""/-->Triumph</a>
              </li>
              <li>
                <a href="srp.php"><!--img src=""/-->Ural</a>
              </li>
              <li>
                <a href="srp.php"><!--img src=""/-->Vectrix</a>
              </li>
              <li>
                <a href="srp.php"><!--img src=""/-->Vespa</a>
              </li>
              <li>
                <a href="srp.php"><!--img src=""/-->Victory</a>
              </li>
              <li>
                <a href="srp.php"><!--img src=""/-->Yamaha</a>
              </li>
              <li>
                <a href="srp.php"><!--img src=""/-->Zero</a>
              </li>
            </ul>          
          </div>
        </aside>
        
<?php require_once('footer.php'); ?>