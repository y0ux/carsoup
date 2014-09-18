          <!-- sorting -->
          <div class="page-sorting float-fix">
            <!--ul class="list-unstyled ordering-view hidden-xs row">
              <li class="col-sm-5"><button class="btn btn-lg btn-default toggleSlide-trigger" data-slide-target="#st1"><span class="glyphicon glyphicon-filter"></span> Filter</button></li>
              <li class="col-sm-5"><button class="btn btn-lg btn-default toggleSlide-trigger" data-slide-target="#st2"><span class="glyphicon glyphicon-sort"></span> Sort</button></li>
              <li class="col-sm-1"><button type="button" class="btn btn-lg btn-default view-button active" value="grid-view" title="Grid View" data-target="#search-results" data-view="search-view-grid"><span class="glyphicon glyphicon-th"></span></button></li>
              <li class="col-sm-1"><button type="button" class="btn btn-lg btn-default view-button" value="list-view" title="List View" data-target="#search-results" data-view="search-view-list"><span class="glyphicon glyphicon-th-list"></span></button></li>
            </ul-->
            
            <div class="filter-container">
              <?php require_once('search-sort.php'); ?>
              <?php require_once('search-filter.php'); ?>
            </div>
            
            <div class="action-group-mobile visible-xs">
              <button class="btn col-xs-4 col-xxs-4" data-toggle="modal" data-target="#filterModal"><span class="glyphicon glyphicon-filter"></span> Filter</button>
              <button class="btn col-xs-4 col-xxs-4" data-toggle="modal" data-target="#sortModal"><span class="glyphicon glyphicon-sort"></span> Sort</button>
              <a class="btn col-xs-4 col-xxs-4" href="/"><span class="glyphicon glyphicon-search"></span> New</a>
            </div>
          </div>
          
          <!-- navigation -->
          <div class="page-pagination text-center top-pagination">            
            <ul class="pagination">
              <li><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">...</a></li>
              <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
            </ul>
          </div>
          
          <!-- search results -->
          <div id="search-results" class="row search-view-grid">
            <div class="row">
              <article class="elem col-lg-4 col-md-4 col-sm-4 col-xs-6 col-xxs-12">
                <div class="article-image-container">
                  <a href="vdp.php"><img src="img/motos/moto-01.png" alt="moto 01"/></a>
                  <div class="image-counter text-sm label"><span class="glyphicon glyphicon-camera"></span> 53</div>
                </div>
                <div class="article-header reset-side-margin">
                  <h3 class="h6">2009 California Scooter Co.<br/><span class="article-subtitle">KX450F</span></h3>
                  <p class="vehicle-price label-price">$992,500</p>
                </div>
                <dl class="dl-horizontal article-desc text-sm reset-margin-padding">
                  <dt><span class="glyphicon glyphicon-road"></span> Mileage</dt>
                  <dd>6,547 mi.</dd>
                  <dt><span class="glyphicon glyphicon-barcode"></span> Code </dt>
                  <dd>DIY48687</dd>
                  <dt class="grid-off"><span></span> Condition </dt>
                  <dd class="grid-off">Used</dd>
                  <dt class="grid-off"><span></span> Type </dt>
                  <dd class="grid-off">Dirt Bike</dd>
                  <dt class="grid-off"><span></span> Color </dt>
                  <dd class="grid-off">Red Cross</dd>
                  <dt><span class="glyphicon glyphicon-certificate"></span> Dealer</dt>
                  <dd>Luther Honda House Powersports</dd>
                </dl>
                <div class="article-footer">
                  <button class="btn btn-xs btn-default relevant save-vehicle-trigger toggle-button" data-vid="z403827001" data-img="img/motos/moto-01.png" data-make="California Scooter Co." data-year="2009" data-model="CRF100F AH4K" data-status="unsaved" data-price="$3,400">
                    <span class="off"><span class="glyphicon glyphicon-save"></span> Save</span> <span class="on"><span class="glyphicon glyphicon-remove"></span> Remove</span>
                  </button>
                  <span class="badge pull-right">
                    <span class="glyphicon glyphicon-map-marker"></span> 321 mi.
                  </span>
                </div>
              </article>
              <article class="elem col-lg-4 col-md-4 col-sm-4 col-xs-6 col-xxs-12">
                <div class="article-image-container">
                  <a href="vdp.php"><img src="img/motos/moto-02.png" alt="moto 02"/></a>
                  <div class="image-counter text-sm label"><span class="glyphicon glyphicon-camera"></span> 53</div>
                </div>
                <div class="article-header reset-side-margin">
                  <h3 class="h6">2009 California Scooter Co.<br/><span class="article-subtitle">KX450F</span></h3>
                  <p class="vehicle-price label-price">$992,500</p>
                </div>
                <dl class="dl-horizontal article-desc text-sm reset-margin-padding">
                  <dt><span class="glyphicon glyphicon-road"></span> Mileage</dt>
                  <dd>6,547 mi.</dd>
                  <dt><span class="glyphicon glyphicon-barcode"></span> Code </dt>
                  <dd>DIY48687</dd>
                  <dt class="grid-off"><span></span> Condition </dt>
                  <dd class="grid-off">Used</dd>
                  <dt class="grid-off"><span></span> Type </dt>
                  <dd class="grid-off">Dirt Bike</dd>
                  <dt class="grid-off"><span></span> Color </dt>
                  <dd class="grid-off">Red Cross</dd>
                  <dt><span class="glyphicon glyphicon-certificate"></span> Dealer</dt>
                  <dd>Luther Honda House Powersports</dd>
                </dl>
                <div class="article-footer">
                  <button class="btn btn-xs btn-default relevant save-vehicle-trigger toggle-button" data-vid="z403827002" data-img="img/motos/moto-02.png" data-make="California Scooter Co." data-year="2009" data-model="CRF100F AH4K" data-status="unsaved" data-price="$3,400">
                    <span class="off"><span class="glyphicon glyphicon-save"></span> Save</span> <span class="on"><span class="glyphicon glyphicon-remove"></span> Remove</span>
                  </button>
                  <span class="badge pull-right">
                    <span class="glyphicon glyphicon-map-marker"></span> 321 mi.
                  </span>
                </div>
              </article>
              <article class="elem col-lg-4 col-md-4 col-sm-4 col-xs-6 col-xxs-12">
                <div class="article-image-container">
                  <a href="vdp.php"><img src="img/motos/moto-03.png" alt="moto 03"/></a>
                  <div class="image-counter text-sm label"><span class="glyphicon glyphicon-camera"></span> 53</div>
                </div>
                <div class="article-header reset-side-margin">
                  <h3 class="h6">2009 California Scooter Co.<br/><span class="article-subtitle">KX450F</span></h3>
                  <p class="vehicle-price label-price">$992,500</p>
                </div>
                <dl class="dl-horizontal article-desc text-sm reset-margin-padding">
                  <dt><span class="glyphicon glyphicon-road"></span> Mileage</dt>
                  <dd>6,547 mi.</dd>
                  <dt><span class="glyphicon glyphicon-barcode"></span> Code </dt>
                  <dd>DIY48687</dd>
                  <dt class="grid-off"><span></span> Condition </dt>
                  <dd class="grid-off">Used</dd>
                  <dt class="grid-off"><span></span> Type </dt>
                  <dd class="grid-off">Dirt Bike</dd>
                  <dt class="grid-off"><span></span> Color </dt>
                  <dd class="grid-off">Red Cross</dd>
                  <dt><span class="glyphicon glyphicon-certificate"></span> Dealer</dt>
                  <dd>Luther Honda House Powersports</dd>
                </dl>
                <div class="article-footer">
                  <button class="btn btn-xs btn-default relevant save-vehicle-trigger toggle-button" data-vid="z403827003" data-img="img/motos/moto-03.png" data-make="California Scooter Co." data-year="2009" data-model="CRF100F AH4K" data-status="unsaved" data-price="$3,400">
                    <span class="off"><span class="glyphicon glyphicon-save"></span> Save</span> <span class="on"><span class="glyphicon glyphicon-remove"></span> Remove</span>
                  </button>
                  <span class="badge pull-right">
                    <span class="glyphicon glyphicon-map-marker"></span> 321 mi.
                  </span>
                </div>
              </article>
            </div>
            <div class="row">
              <article class="elem col-lg-4 col-md-4 col-sm-4 col-xs-6 col-xxs-12">
                <div class="article-image-container">
                  <a href="vdp.php"><img src="img/motos/moto-02.png" alt="moto 02"/></a>
                  <div class="image-counter text-sm label"><span class="glyphicon glyphicon-camera"></span> 53</div>
                </div>
                <div class="article-header reset-side-margin">
                  <h3 class="h6">2009 California Scooter Co.<br/><span class="article-subtitle">KX450F</span></h3>
                  <p class="vehicle-price label-price">$992,500</p>
                </div>
                <dl class="dl-horizontal article-desc text-sm reset-margin-padding">
                  <dt><span class="glyphicon glyphicon-road"></span> Mileage</dt>
                  <dd>6,547 mi.</dd>
                  <dt><span class="glyphicon glyphicon-barcode"></span> Code </dt>
                  <dd>DIY48687</dd>
                  <dt class="grid-off"><span></span> Condition </dt>
                  <dd class="grid-off">Used</dd>
                  <dt class="grid-off"><span></span> Type </dt>
                  <dd class="grid-off">Dirt Bike</dd>
                  <dt class="grid-off"><span></span> Color </dt>
                  <dd class="grid-off">Red Cross</dd>
                  <dt><span class="glyphicon glyphicon-certificate"></span> Dealer</dt>
                  <dd>Luther Honda House Powersports</dd>
                </dl>
                <div class="article-footer">
                  <button class="btn btn-xs btn-default relevant save-vehicle-trigger toggle-button" data-vid="z403827004" data-img="img/motos/moto-01.png" data-make="California Scooter Co." data-year="2009" data-model="CRF100F AH4K" data-status="unsaved" data-price="$3,400">
                    <span class="off"><span class="glyphicon glyphicon-save"></span> Save</span> <span class="on"><span class="glyphicon glyphicon-remove"></span> Remove</span>
                  </button>
                  <span class="badge pull-right">
                    <span class="glyphicon glyphicon-map-marker"></span> 321 mi.
                  </span>
                </div>
              </article>
              <article class="elem col-lg-4 col-md-4 col-sm-4 col-xs-6 col-xxs-12">
                <div class="article-image-container">
                  <a href="vdp.php"><img src="img/motos/moto-03.png" alt="moto 03"/></a>
                  <div class="image-counter text-sm label"><span class="glyphicon glyphicon-camera"></span> 53</div>
                </div>
                <div class="article-header reset-side-margin">
                  <h3 class="h6">2009 California Scooter Co.<br/><span class="article-subtitle">KX450F</span></h3>
                  <p class="vehicle-price label-price">$992,500</p>
                </div>
                <dl class="dl-horizontal article-desc text-sm reset-margin-padding">
                  <dt><span class="glyphicon glyphicon-road"></span> Mileage</dt>
                  <dd>6,547 mi.</dd>
                  <dt><span class="glyphicon glyphicon-barcode"></span> Code </dt>
                  <dd>DIY48687</dd>
                  <dt class="grid-off"><span></span> Condition </dt>
                  <dd class="grid-off">Used</dd>
                  <dt class="grid-off"><span></span> Type </dt>
                  <dd class="grid-off">Dirt Bike</dd>
                  <dt class="grid-off"><span></span> Color </dt>
                  <dd class="grid-off">Red Cross</dd>
                  <dt><span class="glyphicon glyphicon-certificate"></span> Dealer</dt>
                  <dd>Luther Honda House Powersports</dd>
                </dl>
                <div class="article-footer">
                  <button class="btn btn-xs btn-default relevant save-vehicle-trigger toggle-button" data-vid="z403827005" data-img="img/motos/moto-02.png" data-make="California Scooter Co." data-year="2009" data-model="CRF100F AH4K" data-status="unsaved" data-price="$3,400">
                    <span class="off"><span class="glyphicon glyphicon-save"></span> Save</span> <span class="on"><span class="glyphicon glyphicon-remove"></span> Remove</span>
                  </button>
                  <span class="badge pull-right">
                    <span class="glyphicon glyphicon-map-marker"></span> 321 mi.
                  </span>
                </div>
              </article>
              <article class="elem col-lg-4 col-md-4 col-sm-4 col-xs-6 col-xxs-12">
                <div class="article-image-container">
                  <a href="vdp.php"><img src="img/motos/moto-01.png" alt="moto 01"/></a>
                  <div class="image-counter text-sm label"><span class="glyphicon glyphicon-camera"></span> 53</div>
                </div>
                <div class="article-header reset-side-margin">
                  <h3 class="h6">2009 California Scooter Co.<br/><span class="article-subtitle">KX450F</span></h3>
                  <p class="vehicle-price label-price">$992,500</p>
                </div>
                <dl class="dl-horizontal article-desc text-sm reset-margin-padding">
                  <dt><span class="glyphicon glyphicon-road"></span> Mileage</dt>
                  <dd>6,547 mi.</dd>
                  <dt><span class="glyphicon glyphicon-barcode"></span> Code </dt>
                  <dd>DIY48687</dd>
                  <dt class="grid-off"><span></span> Condition </dt>
                  <dd class="grid-off">Used</dd>
                  <dt class="grid-off"><span></span> Type </dt>
                  <dd class="grid-off">Dirt Bike</dd>
                  <dt class="grid-off"><span></span> Color </dt>
                  <dd class="grid-off">Red Cross</dd>
                  <dt><span class="glyphicon glyphicon-certificate"></span> Dealer</dt>
                  <dd>Luther Honda House Powersports</dd>
                </dl>
                <div class="article-footer">
                  <button class="btn btn-xs btn-default relevant save-vehicle-trigger toggle-button" data-vid="z403827006" data-img="img/motos/moto-03.png" data-make="California Scooter Co." data-year="2009" data-model="CRF100F AH4K" data-status="unsaved" data-price="$3,400">
                    <span class="off"><span class="glyphicon glyphicon-save"></span> Save</span> <span class="on"><span class="glyphicon glyphicon-remove"></span> Remove</span>
                  </button>
                  <span class="badge pull-right">
                    <span class="glyphicon glyphicon-map-marker"></span> 321 mi.
                  </span>
                </div>
              </article>
            </div>
            <div class="row">
              <article class="elem col-lg-4 col-md-4 col-sm-4 col-xs-6 col-xxs-12">
                <div class="article-image-container">
                  <a href="vdp.php"><img src="img/motos/moto-01.png" alt="moto 01"/></a>
                  <div class="image-counter text-sm label"><span class="glyphicon glyphicon-camera"></span> 53</div>
                </div>
                <div class="article-header reset-side-margin">
                  <h3 class="h6">2009 California Scooter Co.<br/><span class="article-subtitle">KX450F</span></h3>
                  <p class="vehicle-price label-price">$992,500</p>
                </div>
                <dl class="dl-horizontal article-desc text-sm reset-margin-padding">
                  <dt><span class="glyphicon glyphicon-road"></span> Mileage</dt>
                  <dd>6,547 mi.</dd>
                  <dt><span class="glyphicon glyphicon-barcode"></span> Code </dt>
                  <dd>DIY48687</dd>
                  <dt class="grid-off"><span></span> Condition </dt>
                  <dd class="grid-off">Used</dd>
                  <dt class="grid-off"><span></span> Type </dt>
                  <dd class="grid-off">Dirt Bike</dd>
                  <dt class="grid-off"><span></span> Color </dt>
                  <dd class="grid-off">Red Cross</dd>
                  <dt><span class="glyphicon glyphicon-certificate"></span> Dealer</dt>
                  <dd>Luther Honda House Powersports</dd>
                </dl>
                <div class="article-footer">
                  <button class="btn btn-xs btn-default relevant save-vehicle-trigger toggle-button" data-vid="z403827007" data-img="img/motos/moto-01.png" data-make="California Scooter Co." data-year="2009" data-model="CRF100F AH4K" data-status="unsaved" data-price="$3,400">
                    <span class="off"><span class="glyphicon glyphicon-save"></span> Save</span> <span class="on"><span class="glyphicon glyphicon-remove"></span> Remove</span>
                  </button>
                  <span class="badge pull-right">
                    <span class="glyphicon glyphicon-map-marker"></span> 321 mi.
                  </span>
                </div>
              </article>
              <article class="elem col-lg-4 col-md-4 col-sm-4 col-xs-6 col-xxs-12">
                <div class="article-image-container">
                  <a href="vdp.php"><img src="img/motos/moto-02.png" alt="moto 02"/></a>
                  <div class="image-counter text-sm label"><span class="glyphicon glyphicon-camera"></span> 53</div>
                </div>
                <div class="article-header reset-side-margin">
                  <h3 class="h6">2009 California Scooter Co.<br/><span class="article-subtitle">KX450F</span></h3>
                  <p class="vehicle-price label-price">$992,500</p>
                </div>
                <dl class="dl-horizontal article-desc text-sm reset-margin-padding">
                  <dt><span class="glyphicon glyphicon-road"></span> Mileage</dt>
                  <dd>6,547 mi.</dd>
                  <dt><span class="glyphicon glyphicon-barcode"></span> Code </dt>
                  <dd>DIY48687</dd>
                  <dt class="grid-off"><span></span> Condition </dt>
                  <dd class="grid-off">Used</dd>
                  <dt class="grid-off"><span></span> Type </dt>
                  <dd class="grid-off">Dirt Bike</dd>
                  <dt class="grid-off"><span></span> Color </dt>
                  <dd class="grid-off">Red Cross</dd>
                  <dt><span class="glyphicon glyphicon-certificate"></span> Dealer</dt>
                  <dd>Luther Honda House Powersports</dd>
                </dl>
                <div class="article-footer">
                  <button class="btn btn-xs btn-default relevant save-vehicle-trigger toggle-button" data-vid="z40382708" data-img="img/motos/moto-02.png" data-make="California Scooter Co." data-year="2009" data-model="CRF100F AH4K" data-status="unsaved" data-price="$3,400">
                    <span class="off"><span class="glyphicon glyphicon-save"></span> Save</span> <span class="on"><span class="glyphicon glyphicon-remove"></span> Remove</span>
                  </button>
                  <span class="badge pull-right">
                    <span class="glyphicon glyphicon-map-marker"></span> 321 mi.
                  </span>
                </div>
              </article>
              <article class="elem col-lg-4 col-md-4 col-sm-4 col-xs-6 col-xxs-12">
                <div class="article-image-container">
                  <a href="vdp.php"><img src="img/motos/moto-03.png" alt="moto 03"/></a>
                  <div class="image-counter text-sm label"><span class="glyphicon glyphicon-camera"></span> 53</div>
                </div>
                <div class="article-header reset-side-margin">
                  <h3 class="h6">2009 California Scooter Co.<br/><span class="article-subtitle">KX450F</span></h3>
                  <p class="vehicle-price label-price">$992,500</p>
                </div>
                <dl class="dl-horizontal article-desc text-sm reset-margin-padding">
                  <dt><span class="glyphicon glyphicon-road"></span> Mileage</dt>
                  <dd>6,547 mi.</dd>
                  <dt><span class="glyphicon glyphicon-barcode"></span> Code </dt>
                  <dd>DIY48687</dd>
                  <dt class="grid-off"><span></span> Condition </dt>
                  <dd class="grid-off">Used</dd>
                  <dt class="grid-off"><span></span> Type </dt>
                  <dd class="grid-off">Dirt Bike</dd>
                  <dt class="grid-off"><span></span> Color </dt>
                  <dd class="grid-off">Red Cross</dd>
                  <dt><span class="glyphicon glyphicon-certificate"></span> Dealer</dt>
                  <dd>Luther Honda House Powersports</dd>
                </dl>
                <div class="article-footer">
                  <button class="btn btn-xs btn-default relevant save-vehicle-trigger toggle-button" data-vid="z403827009" data-img="img/motos/moto-03.png" data-make="California Scooter Co." data-year="2009" data-model="CRF100F AH4K" data-status="unsaved" data-price="$3,400">
                    <span class="off"><span class="glyphicon glyphicon-save"></span> Save</span> <span class="on"><span class="glyphicon glyphicon-remove"></span> Remove</span>
                  </button>
                  <span class="badge pull-right">
                    <span class="glyphicon glyphicon-map-marker"></span> 321 mi.
                  </span>
                </div>
              </article>
            </div>
            <div class="search-advertising text-center">
              <img src="img/300x250_uap.gif" alt="Banner Top"/>
            </div>
            <div class="row">
              <article class="elem col-lg-4 col-md-4 col-sm-4 col-xs-6 col-xxs-12">
                <div class="article-image-container">
                  <a href="vdp.php"><img src="img/motos/moto-01.png" alt="moto 01"/></a>
                  <div class="image-counter text-sm label"><span class="glyphicon glyphicon-camera"></span> 53</div>
                </div>
                <div class="article-header reset-side-margin">
                  <h3 class="h6">2009 California Scooter Co.<br/><span class="article-subtitle">KX450F</span></h3>
                  <p class="vehicle-price label-price">$992,500</p>
                </div>
                <dl class="dl-horizontal article-desc text-sm reset-margin-padding">
                  <dt><span class="glyphicon glyphicon-road"></span> Mileage</dt>
                  <dd>6,547 mi.</dd>
                  <dt><span class="glyphicon glyphicon-barcode"></span> Code </dt>
                  <dd>DIY48687</dd>
                  <dt class="grid-off"><span></span> Condition </dt>
                  <dd class="grid-off">Used</dd>
                  <dt class="grid-off"><span></span> Type </dt>
                  <dd class="grid-off">Dirt Bike</dd>
                  <dt class="grid-off"><span></span> Color </dt>
                  <dd class="grid-off">Red Cross</dd>
                  <dt><span class="glyphicon glyphicon-certificate"></span> Dealer</dt>
                  <dd>Luther Honda House Powersports</dd>
                </dl>
                <div class="article-footer">
                  <button class="btn btn-xs btn-default relevant save-vehicle-trigger toggle-button" data-vid="z403827010" data-img="img/motos/moto-01.png" data-make="California Scooter Co." data-year="2009" data-model="CRF100F AH4K" data-status="unsaved" data-price="$3,400">
                    <span class="off"><span class="glyphicon glyphicon-save"></span> Save</span> <span class="on"><span class="glyphicon glyphicon-remove"></span> Remove</span>
                  </button>
                  <span class="badge pull-right">
                    <span class="glyphicon glyphicon-map-marker"></span> 321 mi.
                  </span>
                </div>
              </article>
              <article class="elem col-lg-4 col-md-4 col-sm-4 col-xs-6 col-xxs-12">
                <div class="article-image-container">
                  <a href="vdp.php"><img src="img/motos/moto-02.png" alt="moto 02"/></a>
                  <div class="image-counter text-sm label"><span class="glyphicon glyphicon-camera"></span> 53</div>
                </div>
                <div class="article-header reset-side-margin">
                  <h3 class="h6">2009 California Scooter Co.<br/><span class="article-subtitle">KX450F</span></h3>
                  <p class="vehicle-price label-price">$992,500</p>
                </div>
                <dl class="dl-horizontal article-desc text-sm reset-margin-padding">
                  <dt><span class="glyphicon glyphicon-road"></span> Mileage</dt>
                  <dd>6,547 mi.</dd>
                  <dt><span class="glyphicon glyphicon-barcode"></span> Code </dt>
                  <dd>DIY48687</dd>
                  <dt class="grid-off"><span></span> Condition </dt>
                  <dd class="grid-off">Used</dd>
                  <dt class="grid-off"><span></span> Type </dt>
                  <dd class="grid-off">Dirt Bike</dd>
                  <dt class="grid-off"><span></span> Color </dt>
                  <dd class="grid-off">Red Cross</dd>
                  <dt><span class="glyphicon glyphicon-certificate"></span> Dealer</dt>
                  <dd>Luther Honda House Powersports</dd>
                </dl>
                <div class="article-footer">
                  <button class="btn btn-xs btn-default relevant save-vehicle-trigger toggle-button" data-vid="z403827011" data-img="img/motos/moto-02.png" data-make="California Scooter Co." data-year="2009" data-model="CRF100F AH4K" data-status="unsaved" data-price="$3,400">
                    <span class="off"><span class="glyphicon glyphicon-save"></span> Save</span> <span class="on"><span class="glyphicon glyphicon-remove"></span> Remove</span>
                  </button>
                  <span class="badge pull-right">
                    <span class="glyphicon glyphicon-map-marker"></span> 321 mi.
                  </span>
                </div>
              </article>
              <article class="elem col-lg-4 col-md-4 col-sm-4 col-xs-6 col-xxs-12">
                <div class="article-image-container">
                  <a href="vdp.php"><img src="img/motos/moto-03.png" alt="moto 03"/></a>
                  <div class="image-counter text-sm label"><span class="glyphicon glyphicon-camera"></span> 53</div>
                </div>
                <div class="article-header reset-side-margin">
                  <h3 class="h6">2009 California Scooter Co.<br/><span class="article-subtitle">KX450F</span></h3>
                  <p class="vehicle-price label-price">$992,500</p>
                </div>
                <dl class="dl-horizontal article-desc text-sm reset-margin-padding">
                  <dt><span class="glyphicon glyphicon-road"></span> Mileage</dt>
                  <dd>6,547 mi.</dd>
                  <dt><span class="glyphicon glyphicon-barcode"></span> Code </dt>
                  <dd>DIY48687</dd>
                  <dt class="grid-off"><span></span> Condition </dt>
                  <dd class="grid-off">Used</dd>
                  <dt class="grid-off"><span></span> Type </dt>
                  <dd class="grid-off">Dirt Bike</dd>
                  <dt class="grid-off"><span></span> Color </dt>
                  <dd class="grid-off">Red Cross</dd>
                  <dt><span class="glyphicon glyphicon-certificate"></span> Dealer</dt>
                  <dd>Luther Honda House Powersports</dd>
                </dl>
                <div class="article-footer">
                  <button class="btn btn-xs btn-default relevant save-vehicle-trigger toggle-button" data-vid="z40382701" data-img="img/motos/moto-03.png" data-make="California Scooter Co." data-year="2009" data-model="CRF100F AH4K" data-status="unsaved" data-price="$3,400">
                    <span class="off"><span class="glyphicon glyphicon-save"></span> Save</span> <span class="on"><span class="glyphicon glyphicon-remove"></span> Remove</span>
                  </button>
                  <span class="badge pull-right">
                    <span class="glyphicon glyphicon-map-marker"></span> 321 mi.
                  </span>
                </div>
              </article>
            </div>
            <div class="row">
              <article class="elem col-lg-4 col-md-4 col-sm-4 col-xs-6 col-xxs-12">
                <div class="article-image-container">
                  <a href="vdp.php"><img src="img/motos/moto-02.png" alt="moto 02"/></a>
                  <div class="image-counter text-sm label"><span class="glyphicon glyphicon-camera"></span> 53</div>
                </div>
                <div class="article-header reset-side-margin">
                  <h3 class="h6">2009 California Scooter Co.<br/><span class="article-subtitle">KX450F</span></h3>
                  <p class="vehicle-price label-price">$992,500</p>
                </div>
                <dl class="dl-horizontal article-desc text-sm reset-margin-padding">
                  <dt><span class="glyphicon glyphicon-road"></span> Mileage</dt>
                  <dd>6,547 mi.</dd>
                  <dt><span class="glyphicon glyphicon-barcode"></span> Code </dt>
                  <dd>DIY48687</dd>
                  <dt class="grid-off"><span></span> Condition </dt>
                  <dd class="grid-off">Used</dd>
                  <dt class="grid-off"><span></span> Type </dt>
                  <dd class="grid-off">Dirt Bike</dd>
                  <dt class="grid-off"><span></span> Color </dt>
                  <dd class="grid-off">Red Cross</dd>
                  <dt><span class="glyphicon glyphicon-certificate"></span> Dealer</dt>
                  <dd>Luther Honda House Powersports</dd>
                </dl>
                <div class="article-footer">
                  <button class="btn btn-xs btn-default relevant save-vehicle-trigger toggle-button" data-vid="z403827013" data-img="img/motos/moto-01.png" data-make="California Scooter Co." data-year="2009" data-model="CRF100F AH4K" data-status="unsaved" data-price="$3,400">
                    <span class="off"><span class="glyphicon glyphicon-save"></span> Save</span> <span class="on"><span class="glyphicon glyphicon-remove"></span> Remove</span>
                  </button>
                  <span class="badge pull-right">
                    <span class="glyphicon glyphicon-map-marker"></span> 321 mi.
                  </span>
                </div>
              </article>
              <article class="elem col-lg-4 col-md-4 col-sm-4 col-xs-6 col-xxs-12">
                <div class="article-image-container">
                  <a href="vdp.php"><img src="img/motos/moto-03.png" alt="moto 03"/></a>
                  <div class="image-counter text-sm label"><span class="glyphicon glyphicon-camera"></span> 53</div>
                </div>
                <div class="article-header reset-side-margin">
                  <h3 class="h6">2009 California Scooter Co.<br/><span class="article-subtitle">KX450F</span></h3>
                  <p class="vehicle-price label-price">$992,500</p>
                </div>
                <dl class="dl-horizontal article-desc text-sm reset-margin-padding">
                  <dt><span class="glyphicon glyphicon-road"></span> Mileage</dt>
                  <dd>6,547 mi.</dd>
                  <dt><span class="glyphicon glyphicon-barcode"></span> Code </dt>
                  <dd>DIY48687</dd>
                  <dt class="grid-off"><span></span> Condition </dt>
                  <dd class="grid-off">Used</dd>
                  <dt class="grid-off"><span></span> Type </dt>
                  <dd class="grid-off">Dirt Bike</dd>
                  <dt class="grid-off"><span></span> Color </dt>
                  <dd class="grid-off">Red Cross</dd>
                  <dt><span class="glyphicon glyphicon-certificate"></span> Dealer</dt>
                  <dd>Luther Honda House Powersports</dd>
                </dl>
                <div class="article-footer">
                  <button class="btn btn-xs btn-default relevant save-vehicle-trigger toggle-button" data-vid="z403827014" data-img="img/motos/moto-02.png" data-make="California Scooter Co." data-year="2009" data-model="CRF100F AH4K" data-status="unsaved" data-price="$3,400">
                    <span class="off"><span class="glyphicon glyphicon-save"></span> Save</span> <span class="on"><span class="glyphicon glyphicon-remove"></span> Remove</span>
                  </button>
                  <span class="badge pull-right">
                    <span class="glyphicon glyphicon-map-marker"></span> 321 mi.
                  </span>
                </div>
              </article>
              <article class="elem col-lg-4 col-md-4 col-sm-4 col-xs-6 col-xxs-12">
                <div class="article-image-container">
                  <a href="vdp.php"><img src="img/motos/moto-01.png" alt="moto 01"/></a>
                  <div class="image-counter text-sm label"><span class="glyphicon glyphicon-camera"></span> 53</div>
                </div>
                <div class="article-header reset-side-margin">
                  <h3 class="h6">2009 California Scooter Co.<br/><span class="article-subtitle">KX450F</span></h3>
                  <p class="vehicle-price label-price">$992,500</p>
                </div>
                <dl class="dl-horizontal article-desc text-sm reset-margin-padding">
                  <dt><span class="glyphicon glyphicon-road"></span> Mileage</dt>
                  <dd>6,547 mi.</dd>
                  <dt><span class="glyphicon glyphicon-barcode"></span> Code </dt>
                  <dd>DIY48687</dd>
                  <dt class="grid-off"><span></span> Condition </dt>
                  <dd class="grid-off">Used</dd>
                  <dt class="grid-off"><span></span> Type </dt>
                  <dd class="grid-off">Dirt Bike</dd>
                  <dt class="grid-off"><span></span> Color </dt>
                  <dd class="grid-off">Red Cross</dd>
                  <dt><span class="glyphicon glyphicon-certificate"></span> Dealer</dt>
                  <dd>Luther Honda House Powersports</dd>
                </dl>
                <div class="article-footer">
                  <button class="btn btn-xs btn-default relevant save-vehicle-trigger toggle-button" data-vid="z403827015" data-img="img/motos/moto-03.png" data-make="California Scooter Co." data-year="2009" data-model="CRF100F AH4K" data-status="unsaved" data-price="$3,400">
                    <span class="off"><span class="glyphicon glyphicon-save"></span> Save</span> <span class="on"><span class="glyphicon glyphicon-remove"></span> Remove</span>
                  </button>
                  <span class="badge pull-right">
                    <span class="glyphicon glyphicon-map-marker"></span> 321 mi.
                  </span>
                </div>
              </article>
            </div>
            <div class="row">
              <article class="elem col-lg-4 col-md-4 col-sm-4 col-xs-6 col-xxs-12">
                <div class="article-image-container">
                  <a href="vdp.php"><img src="img/motos/moto-01.png" alt="moto 01"/></a>
                  <div class="image-counter text-sm label"><span class="glyphicon glyphicon-camera"></span> 53</div>
                </div>
                <div class="article-header reset-side-margin">
                  <h3 class="h6">2009 California Scooter Co.<br/><span class="article-subtitle">KX450F</span></h3>
                  <p class="vehicle-price label-price">$992,500</p>
                </div>
                <dl class="dl-horizontal article-desc text-sm reset-margin-padding">
                  <dt><span class="glyphicon glyphicon-road"></span> Mileage</dt>
                  <dd>6,547 mi.</dd>
                  <dt><span class="glyphicon glyphicon-barcode"></span> Code </dt>
                  <dd>DIY48687</dd>
                  <dt class="grid-off"><span></span> Condition </dt>
                  <dd class="grid-off">Used</dd>
                  <dt class="grid-off"><span></span> Type </dt>
                  <dd class="grid-off">Dirt Bike</dd>
                  <dt class="grid-off"><span></span> Color </dt>
                  <dd class="grid-off">Red Cross</dd>
                  <dt><span class="glyphicon glyphicon-certificate"></span> Dealer</dt>
                  <dd>Luther Honda House Powersports</dd>
                </dl>
                <div class="article-footer">
                  <button class="btn btn-xs btn-default relevant save-vehicle-trigger toggle-button" data-vid="z403827016" data-img="img/motos/moto-01.png" data-make="California Scooter Co." data-year="2009" data-model="CRF100F AH4K" data-status="unsaved" data-price="$3,400">
                    <span class="off"><span class="glyphicon glyphicon-save"></span> Save</span> <span class="on"><span class="glyphicon glyphicon-remove"></span> Remove</span>
                  </button>
                  <span class="badge pull-right">
                    <span class="glyphicon glyphicon-map-marker"></span> 321 mi.
                  </span>
                </div>
              </article>
              <article class="elem col-lg-4 col-md-4 col-sm-4 col-xs-6 col-xxs-12">
                <div class="article-image-container">
                  <a href="vdp.php"><img src="img/motos/moto-02.png" alt="moto 02"/></a>
                  <div class="image-counter text-sm label"><span class="glyphicon glyphicon-camera"></span> 53</div>
                </div>
                <div class="article-header reset-side-margin">
                  <h3 class="h6">2009 California Scooter Co.<br/><span class="article-subtitle">KX450F</span></h3>
                  <p class="vehicle-price label-price">$992,500</p>
                </div>
                <dl class="dl-horizontal article-desc text-sm reset-margin-padding">
                  <dt><span class="glyphicon glyphicon-road"></span> Mileage</dt>
                  <dd>6,547 mi.</dd>
                  <dt><span class="glyphicon glyphicon-barcode"></span> Code </dt>
                  <dd>DIY48687</dd>
                  <dt class="grid-off"><span></span> Condition </dt>
                  <dd class="grid-off">Used</dd>
                  <dt class="grid-off"><span></span> Type </dt>
                  <dd class="grid-off">Dirt Bike</dd>
                  <dt class="grid-off"><span></span> Color </dt>
                  <dd class="grid-off">Red Cross</dd>
                  <dt><span class="glyphicon glyphicon-certificate"></span> Dealer</dt>
                  <dd>Luther Honda House Powersports</dd>
                </dl>
                <div class="article-footer">
                  <button class="btn btn-xs btn-default relevant save-vehicle-trigger toggle-button" data-vid="z403827017" data-img="img/motos/moto-02.png" data-make="California Scooter Co." data-year="2009" data-model="CRF100F AH4K" data-status="unsaved" data-price="$3,400">
                    <span class="off"><span class="glyphicon glyphicon-save"></span> Save</span> <span class="on"><span class="glyphicon glyphicon-remove"></span> Remove</span>
                  </button>
                  <span class="badge pull-right">
                    <span class="glyphicon glyphicon-map-marker"></span> 321 mi.
                  </span>
                </div>
              </article>
              <article class="elem col-lg-4 col-md-4 col-sm-4 col-xs-6 col-xxs-12">
                <div class="article-image-container">
                  <a href="vdp.php"><img src="img/motos/moto-03.png" alt="moto 03"/></a>
                  <div class="image-counter text-sm label"><span class="glyphicon glyphicon-camera"></span> 53</div>
                </div>
                <div class="article-header reset-side-margin">
                  <h3 class="h6">2009 California Scooter Co.<br/><span class="article-subtitle">KX450F</span></h3>
                  <p class="vehicle-price label-price">$992,500</p>
                </div>
                <dl class="dl-horizontal article-desc text-sm reset-margin-padding">
                  <dt><span class="glyphicon glyphicon-road"></span> Mileage</dt>
                  <dd>6,547 mi.</dd>
                  <dt><span class="glyphicon glyphicon-barcode"></span> Code </dt>
                  <dd>DIY48687</dd>
                  <dt class="grid-off"><span></span> Condition </dt>
                  <dd class="grid-off">Used</dd>
                  <dt class="grid-off"><span></span> Type </dt>
                  <dd class="grid-off">Dirt Bike</dd>
                  <dt class="grid-off"><span></span> Color </dt>
                  <dd class="grid-off">Red Cross</dd>
                  <dt><span class="glyphicon glyphicon-certificate"></span> Dealer</dt>
                  <dd>Luther Honda House Powersports</dd>
                </dl>
                <div class="article-footer">
                  <button class="btn btn-xs btn-default relevant save-vehicle-trigger toggle-button" data-vid="z403827018" data-img="img/motos/moto-03.png" data-make="California Scooter Co." data-year="2009" data-model="CRF100F AH4K" data-status="unsaved" data-price="$3,400">
                    <span class="off"><span class="glyphicon glyphicon-save"></span> Save</span> <span class="on"><span class="glyphicon glyphicon-remove"></span> Remove</span>
                  </button>
                  <span class="badge pull-right">
                    <span class="glyphicon glyphicon-map-marker"></span> 321 mi.
                  </span>
                </div>
              </article>
            </div>
            <div class="search-advertising text-center">
              <img src="img/300x250_uap.gif" alt="Banner Top"/>
            </div>
            <div class="row">
              <article class="elem col-lg-4 col-md-4 col-sm-4 col-xs-6 col-xxs-12">
                <div class="article-image-container">
                  <a href="vdp.php"><img src="img/motos/moto-01.png" alt="moto 01"/></a>
                  <div class="image-counter text-sm label"><span class="glyphicon glyphicon-camera"></span> 53</div>
                </div>
                <div class="article-header reset-side-margin">
                  <h3 class="h6">2009 California Scooter Co.<br/><span class="article-subtitle">KX450F</span></h3>
                  <p class="vehicle-price label-price">$992,500</p>
                </div>
                <dl class="dl-horizontal article-desc text-sm reset-margin-padding">
                  <dt><span class="glyphicon glyphicon-road"></span> Mileage</dt>
                  <dd>6,547 mi.</dd>
                  <dt><span class="glyphicon glyphicon-barcode"></span> Code </dt>
                  <dd>DIY48687</dd>
                  <dt class="grid-off"><span></span> Condition </dt>
                  <dd class="grid-off">Used</dd>
                  <dt class="grid-off"><span></span> Type </dt>
                  <dd class="grid-off">Dirt Bike</dd>
                  <dt class="grid-off"><span></span> Color </dt>
                  <dd class="grid-off">Red Cross</dd>
                  <dt><span class="glyphicon glyphicon-certificate"></span> Dealer</dt>
                  <dd>Luther Honda House Powersports</dd>
                </dl>
                <div class="article-footer">
                  <button class="btn btn-xs btn-default relevant save-vehicle-trigger toggle-button" data-vid="z403827019" data-img="img/motos/moto-01.png" data-make="California Scooter Co." data-year="2009" data-model="CRF100F AH4K" data-status="unsaved" data-price="$3,400">
                    <span class="off"><span class="glyphicon glyphicon-save"></span> Save</span> <span class="on"><span class="glyphicon glyphicon-remove"></span> Remove</span>
                  </button>
                  <span class="badge pull-right">
                    <span class="glyphicon glyphicon-map-marker"></span> 321 mi.
                  </span>
                </div>
              </article>
              <article class="elem col-lg-4 col-md-4 col-sm-4 col-xs-6 col-xxs-12">
                <div class="article-image-container">
                  <a href="vdp.php"><img src="img/motos/moto-02.png" alt="moto 02"/></a>
                  <div class="image-counter text-sm label"><span class="glyphicon glyphicon-camera"></span> 53</div>
                </div>
                <div class="article-header reset-side-margin">
                  <h3 class="h6">2009 California Scooter Co.<br/><span class="article-subtitle">KX450F</span></h3>
                  <p class="vehicle-price label-price">$992,500</p>
                </div>
                <dl class="dl-horizontal article-desc text-sm reset-margin-padding">
                  <dt><span class="glyphicon glyphicon-road"></span> Mileage</dt>
                  <dd>6,547 mi.</dd>
                  <dt><span class="glyphicon glyphicon-barcode"></span> Code </dt>
                  <dd>DIY48687</dd>
                  <dt class="grid-off"><span></span> Condition </dt>
                  <dd class="grid-off">Used</dd>
                  <dt class="grid-off"><span></span> Type </dt>
                  <dd class="grid-off">Dirt Bike</dd>
                  <dt class="grid-off"><span></span> Color </dt>
                  <dd class="grid-off">Red Cross</dd>
                  <dt><span class="glyphicon glyphicon-certificate"></span> Dealer</dt>
                  <dd>Luther Honda House Powersports</dd>
                </dl>
                <div class="article-footer">
                  <button class="btn btn-xs btn-default relevant save-vehicle-trigger toggle-button" data-vid="z403827020" data-img="img/motos/moto-02.png" data-make="California Scooter Co." data-year="2009" data-model="CRF100F AH4K" data-status="unsaved" data-price="$3,400">
                    <span class="off"><span class="glyphicon glyphicon-save"></span> Save</span> <span class="on"><span class="glyphicon glyphicon-remove"></span> Remove</span>
                  </button>
                  <span class="badge pull-right">
                    <span class="glyphicon glyphicon-map-marker"></span> 321 mi.
                  </span>
                </div>
              </article>
              <article class="elem col-lg-4 col-md-4 col-sm-4 col-xs-6 col-xxs-12">
                <div class="article-image-container">
                  <a href="vdp.php"><img src="img/motos/moto-03.png" alt="moto 03"/></a>
                  <div class="image-counter text-sm label"><span class="glyphicon glyphicon-camera"></span> 53</div>
                </div>
                <div class="article-header reset-side-margin">
                  <h3 class="h6">2009 California Scooter Co.<br/><span class="article-subtitle">KX450F</span></h3>
                  <p class="vehicle-price label-price">$992,500</p>
                </div>
                <dl class="dl-horizontal article-desc text-sm reset-margin-padding">
                  <dt><span class="glyphicon glyphicon-road"></span> Mileage</dt>
                  <dd>6,547 mi.</dd>
                  <dt><span class="glyphicon glyphicon-barcode"></span> Code </dt>
                  <dd>DIY48687</dd>
                  <dt class="grid-off"><span></span> Condition </dt>
                  <dd class="grid-off">Used</dd>
                  <dt class="grid-off"><span></span> Type </dt>
                  <dd class="grid-off">Dirt Bike</dd>
                  <dt class="grid-off"><span></span> Color </dt>
                  <dd class="grid-off">Red Cross</dd>
                  <dt><span class="glyphicon glyphicon-certificate"></span> Dealer</dt>
                  <dd>Luther Honda House Powersports</dd>
                </dl>
                <div class="article-footer">
                  <button class="btn btn-xs btn-default relevant save-vehicle-trigger toggle-button" data-vid="z403827021" data-img="img/motos/moto-03.png" data-make="California Scooter Co." data-year="2009" data-model="CRF100F AH4K" data-status="unsaved" data-price="$3,400">
                    <span class="off"><span class="glyphicon glyphicon-save"></span> Save</span> <span class="on"><span class="glyphicon glyphicon-remove"></span> Remove</span>
                  </button>
                  <span class="badge pull-right">
                    <span class="glyphicon glyphicon-map-marker"></span> 321 mi.
                  </span>
                </div>
              </article>
            </div>
            <div class="row">
              <article class="elem col-lg-4 col-md-4 col-sm-4 col-xs-6 col-xxs-12">
                <div class="article-image-container">
                  <a href="vdp.php"><img src="img/motos/moto-02.png" alt="moto 02"/></a>
                  <div class="image-counter text-sm label"><span class="glyphicon glyphicon-camera"></span> 53</div>
                </div>
                <div class="article-header reset-side-margin">
                  <h3 class="h6">2009 California Scooter Co.<br/><span class="article-subtitle">KX450F</span></h3>
                  <p class="vehicle-price label-price">$992,500</p>
                </div>
                <dl class="dl-horizontal article-desc text-sm reset-margin-padding">
                  <dt><span class="glyphicon glyphicon-road"></span> Mileage</dt>
                  <dd>6,547 mi.</dd>
                  <dt><span class="glyphicon glyphicon-barcode"></span> Code </dt>
                  <dd>DIY48687</dd>
                  <dt class="grid-off"><span></span> Condition </dt>
                  <dd class="grid-off">Used</dd>
                  <dt class="grid-off"><span></span> Type </dt>
                  <dd class="grid-off">Dirt Bike</dd>
                  <dt class="grid-off"><span></span> Color </dt>
                  <dd class="grid-off">Red Cross</dd>
                  <dt><span class="glyphicon glyphicon-certificate"></span> Dealer</dt>
                  <dd>Luther Honda House Powersports</dd>
                </dl>
                <div class="article-footer">
                  <button class="btn btn-xs btn-default relevant save-vehicle-trigger toggle-button" data-vid="z403827022" data-img="img/motos/moto-01.png" data-make="California Scooter Co." data-year="2009" data-model="CRF100F AH4K" data-status="unsaved" data-price="$3,400">
                    <span class="off"><span class="glyphicon glyphicon-save"></span> Save</span> <span class="on"><span class="glyphicon glyphicon-remove"></span> Remove</span>
                  </button>
                  <span class="badge pull-right">
                    <span class="glyphicon glyphicon-map-marker"></span> 321 mi.
                  </span>
                </div>
              </article>
              <article class="elem col-lg-4 col-md-4 col-sm-4 col-xs-6 col-xxs-12">
                <div class="article-image-container">
                  <a href="vdp.php"><img src="img/motos/moto-03.png" alt="moto 03"/></a>
                  <div class="image-counter text-sm label"><span class="glyphicon glyphicon-camera"></span> 53</div>
                </div>
                <div class="article-header reset-side-margin">
                  <h3 class="h6">2009 California Scooter Co.<br/><span class="article-subtitle">KX450F</span></h3>
                  <p class="vehicle-price label-price">$992,500</p>
                </div>
                <dl class="dl-horizontal article-desc text-sm reset-margin-padding">
                  <dt><span class="glyphicon glyphicon-road"></span> Mileage</dt>
                  <dd>6,547 mi.</dd>
                  <dt><span class="glyphicon glyphicon-barcode"></span> Code </dt>
                  <dd>DIY48687</dd>
                  <dt class="grid-off"><span></span> Condition </dt>
                  <dd class="grid-off">Used</dd>
                  <dt class="grid-off"><span></span> Type </dt>
                  <dd class="grid-off">Dirt Bike</dd>
                  <dt class="grid-off"><span></span> Color </dt>
                  <dd class="grid-off">Red Cross</dd>
                  <dt><span class="glyphicon glyphicon-certificate"></span> Dealer</dt>
                  <dd>Luther Honda House Powersports</dd>
                </dl>
                <div class="article-footer">
                  <button class="btn btn-xs btn-default relevant save-vehicle-trigger toggle-button" data-vid="z403827023" data-img="img/motos/moto-02.png" data-make="California Scooter Co." data-year="2009" data-model="CRF100F AH4K" data-status="unsaved" data-price="$3,400">
                    <span class="off"><span class="glyphicon glyphicon-save"></span> Save</span> <span class="on"><span class="glyphicon glyphicon-remove"></span> Remove</span>
                  </button>
                  <span class="badge pull-right">
                    <span class="glyphicon glyphicon-map-marker"></span> 321 mi.
                  </span>
                </div>
              </article>
              <article class="elem col-lg-4 col-md-4 col-sm-4 col-xs-6 col-xxs-12">
                <div class="article-image-container">
                  <a href="vdp.php"><img src="img/motos/moto-01.png" alt="moto 01"/></a>
                  <div class="image-counter text-sm label"><span class="glyphicon glyphicon-camera"></span> 53</div>
                </div>
                <div class="article-header reset-side-margin">
                  <h3 class="h6">2009 California Scooter Co.<br/><span class="article-subtitle">KX450F</span></h3>
                  <p class="vehicle-price label-price">$992,500</p>
                </div>
                <dl class="dl-horizontal article-desc text-sm reset-margin-padding">
                  <dt><span class="glyphicon glyphicon-road"></span> Mileage</dt>
                  <dd>6,547 mi.</dd>
                  <dt><span class="glyphicon glyphicon-barcode"></span> Code </dt>
                  <dd>DIY48687</dd>
                  <dt class="grid-off"><span></span> Condition </dt>
                  <dd class="grid-off">Used</dd>
                  <dt class="grid-off"><span></span> Type </dt>
                  <dd class="grid-off">Dirt Bike</dd>
                  <dt class="grid-off"><span></span> Color </dt>
                  <dd class="grid-off">Red Cross</dd>
                  <dt><span class="glyphicon glyphicon-certificate"></span> Dealer</dt>
                  <dd>Luther Honda House Powersports</dd>
                </dl>
                <div class="article-footer">
                  <button class="btn btn-xs btn-default relevant save-vehicle-trigger toggle-button" data-vid="z403827024" data-img="img/motos/moto-03.png" data-make="California Scooter Co." data-year="2009" data-model="CRF100F AH4K" data-status="unsaved" data-price="$3,400">
                    <span class="off"><span class="glyphicon glyphicon-save"></span> Save</span> <span class="on"><span class="glyphicon glyphicon-remove"></span> Remove</span>
                  </button>
                  <span class="badge pull-right">
                    <span class="glyphicon glyphicon-map-marker"></span> 321 mi.
                  </span>
                </div>
              </article>
            </div>
            <div class="row">
              <article class="elem col-lg-4 col-md-4 col-sm-4 col-xs-6 col-xxs-12">
                <div class="article-image-container">
                  <a href="vdp.php"><img src="img/motos/moto-01.png" alt="moto 01"/></a>
                  <div class="image-counter text-sm label"><span class="glyphicon glyphicon-camera"></span> 53</div>
                </div>
                <div class="article-header reset-side-margin">
                  <h3 class="h6">2009 California Scooter Co.<br/><span class="article-subtitle">KX450F</span></h3>
                  <p class="vehicle-price label-price">$992,500</p>
                </div>
                <dl class="dl-horizontal article-desc text-sm reset-margin-padding">
                  <dt><span class="glyphicon glyphicon-road"></span> Mileage</dt>
                  <dd>6,547 mi.</dd>
                  <dt><span class="glyphicon glyphicon-barcode"></span> Code </dt>
                  <dd>DIY48687</dd>
                  <dt class="grid-off"><span></span> Condition </dt>
                  <dd class="grid-off">Used</dd>
                  <dt class="grid-off"><span></span> Type </dt>
                  <dd class="grid-off">Dirt Bike</dd>
                  <dt class="grid-off"><span></span> Color </dt>
                  <dd class="grid-off">Red Cross</dd>
                  <dt><span class="glyphicon glyphicon-certificate"></span> Dealer</dt>
                  <dd>Luther Honda House Powersports</dd>
                </dl>
                <div class="article-footer">
                  <button class="btn btn-xs btn-default relevant save-vehicle-trigger toggle-button" data-vid="z403827025" data-img="img/motos/moto-01.png" data-make="California Scooter Co." data-year="2009" data-model="CRF100F AH4K" data-status="unsaved" data-price="$3,400">
                    <span class="off"><span class="glyphicon glyphicon-save"></span> Save</span> <span class="on"><span class="glyphicon glyphicon-remove"></span> Remove</span>
                  </button>
                  <span class="badge pull-right">
                    <span class="glyphicon glyphicon-map-marker"></span> 321 mi.
                  </span>
                </div>
              </article>
              <article class="elem col-lg-4 col-md-4 col-sm-4 col-xs-6 col-xxs-12">
                <div class="article-image-container">
                  <a href="vdp.php"><img src="img/motos/moto-02.png" alt="moto 02"/></a>
                  <div class="image-counter text-sm label"><span class="glyphicon glyphicon-camera"></span> 53</div>
                </div>
                <div class="article-header reset-side-margin">
                  <h3 class="h6">2009 California Scooter Co.<br/><span class="article-subtitle">KX450F</span></h3>
                  <p class="vehicle-price label-price">$992,500</p>
                </div>
                <dl class="dl-horizontal article-desc text-sm reset-margin-padding">
                  <dt><span class="glyphicon glyphicon-road"></span> Mileage</dt>
                  <dd>6,547 mi.</dd>
                  <dt><span class="glyphicon glyphicon-barcode"></span> Code </dt>
                  <dd>DIY48687</dd>
                  <dt class="grid-off"><span></span> Condition </dt>
                  <dd class="grid-off">Used</dd>
                  <dt class="grid-off"><span></span> Type </dt>
                  <dd class="grid-off">Dirt Bike</dd>
                  <dt class="grid-off"><span></span> Color </dt>
                  <dd class="grid-off">Red Cross</dd>
                  <dt><span class="glyphicon glyphicon-certificate"></span> Dealer</dt>
                  <dd>Luther Honda House Powersports</dd>
                </dl>
                <div class="article-footer">
                  <button class="btn btn-xs btn-default relevant save-vehicle-trigger toggle-button" data-vid="z403827026" data-img="img/motos/moto-02.png" data-make="California Scooter Co." data-year="2009" data-model="CRF100F AH4K" data-status="unsaved" data-price="$3,400">
                    <span class="off"><span class="glyphicon glyphicon-save"></span> Save</span> <span class="on"><span class="glyphicon glyphicon-remove"></span> Remove</span>
                  </button>
                  <span class="badge pull-right">
                    <span class="glyphicon glyphicon-map-marker"></span> 321 mi.
                  </span>
                </div>
              </article>
              <article class="elem col-lg-4 col-md-4 col-sm-4 col-xs-6 col-xxs-12">
                <div class="article-image-container">
                  <a href="vdp.php"><img src="img/motos/moto-03.png" alt="moto 03"/></a>
                  <div class="image-counter text-sm label"><span class="glyphicon glyphicon-camera"></span> 53</div>
                </div>
                <div class="article-header reset-side-margin">
                  <h3 class="h6">2009 California Scooter Co.<br/><span class="article-subtitle">KX450F</span></h3>
                  <p class="vehicle-price label-price">$992,500</p>
                </div>
                <dl class="dl-horizontal article-desc text-sm reset-margin-padding">
                  <dt><span class="glyphicon glyphicon-road"></span> Mileage</dt>
                  <dd>6,547 mi.</dd>
                  <dt><span class="glyphicon glyphicon-barcode"></span> Code </dt>
                  <dd>DIY48687</dd>
                  <dt class="grid-off"><span></span> Condition </dt>
                  <dd class="grid-off">Used</dd>
                  <dt class="grid-off"><span></span> Type </dt>
                  <dd class="grid-off">Dirt Bike</dd>
                  <dt class="grid-off"><span></span> Color </dt>
                  <dd class="grid-off">Red Cross</dd>
                  <dt><span class="glyphicon glyphicon-certificate"></span> Dealer</dt>
                  <dd>Luther Honda House Powersports</dd>
                </dl>
                <div class="article-footer">
                  <button class="btn btn-xs btn-default relevant save-vehicle-trigger toggle-button" data-vid="z403827027" data-img="img/motos/moto-03.png" data-make="California Scooter Co." data-year="2009" data-model="CRF100F AH4K" data-status="unsaved" data-price="$3,400">
                    <span class="off"><span class="glyphicon glyphicon-save"></span> Save</span> <span class="on"><span class="glyphicon glyphicon-remove"></span> Remove</span>
                  </button>
                  <span class="badge pull-right">
                    <span class="glyphicon glyphicon-map-marker"></span> 321 mi.
                  </span>
                </div>
              </article>
            </div>
            <div class="search-advertising text-center">
              <img src="img/300x250_uap.gif" alt="Banner Top"/>
            </div>
            <div class="row">
              <article class="elem col-lg-4 col-md-4 col-sm-4 col-xs-6 col-xxs-12">
                <div class="article-image-container">
                  <a href="vdp.php"><img src="img/motos/moto-01.png" alt="moto 01"/></a>
                  <div class="image-counter text-sm label"><span class="glyphicon glyphicon-camera"></span> 53</div>
                </div>
                <div class="article-header reset-side-margin">
                  <h3 class="h6">2009 California Scooter Co.<br/><span class="article-subtitle">KX450F</span></h3>
                  <p class="vehicle-price label-price">$992,500</p>
                </div>
                <dl class="dl-horizontal article-desc text-sm reset-margin-padding">
                  <dt><span class="glyphicon glyphicon-road"></span> Mileage</dt>
                  <dd>6,547 mi.</dd>
                  <dt><span class="glyphicon glyphicon-barcode"></span> Code </dt>
                  <dd>DIY48687</dd>
                  <dt class="grid-off"><span></span> Condition </dt>
                  <dd class="grid-off">Used</dd>
                  <dt class="grid-off"><span></span> Type </dt>
                  <dd class="grid-off">Dirt Bike</dd>
                  <dt class="grid-off"><span></span> Color </dt>
                  <dd class="grid-off">Red Cross</dd>
                  <dt><span class="glyphicon glyphicon-certificate"></span> Dealer</dt>
                  <dd>Luther Honda House Powersports</dd>
                </dl>
                <div class="article-footer">
                  <button class="btn btn-xs btn-default relevant save-vehicle-trigger toggle-button" data-vid="z403827028" data-img="img/motos/moto-01.png" data-make="California Scooter Co." data-year="2009" data-model="CRF100F AH4K" data-status="unsaved" data-price="$3,400">
                    <span class="off"><span class="glyphicon glyphicon-save"></span> Save</span> <span class="on"><span class="glyphicon glyphicon-remove"></span> Remove</span>
                  </button>
                  <span class="badge pull-right">
                    <span class="glyphicon glyphicon-map-marker"></span> 321 mi.
                  </span>
                </div>
              </article>
              <article class="elem col-lg-4 col-md-4 col-sm-4 col-xs-6 col-xxs-12">
                <div class="article-image-container">
                  <a href="vdp.php"><img src="img/motos/moto-02.png" alt="moto 02"/></a>
                  <div class="image-counter text-sm label"><span class="glyphicon glyphicon-camera"></span> 53</div>
                </div>
                <div class="article-header reset-side-margin">
                  <h3 class="h6">2009 California Scooter Co.<br/><span class="article-subtitle">KX450F</span></h3>
                  <p class="vehicle-price label-price">$992,500</p>
                </div>
                <dl class="dl-horizontal article-desc text-sm reset-margin-padding">
                  <dt><span class="glyphicon glyphicon-road"></span> Mileage</dt>
                  <dd>6,547 mi.</dd>
                  <dt><span class="glyphicon glyphicon-barcode"></span> Code </dt>
                  <dd>DIY48687</dd>
                  <dt class="grid-off"><span></span> Condition </dt>
                  <dd class="grid-off">Used</dd>
                  <dt class="grid-off"><span></span> Type </dt>
                  <dd class="grid-off">Dirt Bike</dd>
                  <dt class="grid-off"><span></span> Color </dt>
                  <dd class="grid-off">Red Cross</dd>
                  <dt><span class="glyphicon glyphicon-certificate"></span> Dealer</dt>
                  <dd>Luther Honda House Powersports</dd>
                </dl>
                <div class="article-footer">
                  <button class="btn btn-xs btn-default relevant save-vehicle-trigger toggle-button" data-vid="z403827029" data-img="img/motos/moto-02.png" data-make="California Scooter Co." data-year="2009" data-model="CRF100F AH4K" data-status="unsaved" data-price="$3,400">
                    <span class="off"><span class="glyphicon glyphicon-save"></span> Save</span> <span class="on"><span class="glyphicon glyphicon-remove"></span> Remove</span>
                  </button>
                  <span class="badge pull-right">
                    <span class="glyphicon glyphicon-map-marker"></span> 321 mi.
                  </span>
                </div>
              </article>
              <article class="elem col-lg-4 col-md-4 col-sm-4 col-xs-6 col-xxs-12">
                <div class="article-image-container">
                  <a href="vdp.php"><img src="img/motos/moto-03.png" alt="moto 03"/></a>
                  <div class="image-counter text-sm label"><span class="glyphicon glyphicon-camera"></span> 53</div>
                </div>
                <div class="article-header reset-side-margin">
                  <h3 class="h6">2009 California Scooter Co.<br/><span class="article-subtitle">KX450F</span></h3>
                  <p class="vehicle-price label-price">$992,500</p>
                </div>
                <dl class="dl-horizontal article-desc text-sm reset-margin-padding">
                  <dt><span class="glyphicon glyphicon-road"></span> Mileage</dt>
                  <dd>6,547 mi.</dd>
                  <dt><span class="glyphicon glyphicon-barcode"></span> Code </dt>
                  <dd>DIY48687</dd>
                  <dt class="grid-off"><span></span> Condition </dt>
                  <dd class="grid-off">Used</dd>
                  <dt class="grid-off"><span></span> Type </dt>
                  <dd class="grid-off">Dirt Bike</dd>
                  <dt class="grid-off"><span></span> Color </dt>
                  <dd class="grid-off">Red Cross</dd>
                  <dt><span class="glyphicon glyphicon-certificate"></span> Dealer</dt>
                  <dd>Luther Honda House Powersports</dd>
                </dl>
                  
                <div class="article-footer">
                  <button class="btn btn-xs btn-default relevant save-vehicle-trigger toggle-button" data-vid="z403827030" data-img="img/motos/moto-03.png" data-make="California Scooter Co." data-year="2009" data-model="CRF100F AH4K" data-status="unsaved" data-price="$3,400">
                    <span class="off"><span class="glyphicon glyphicon-save"></span> Save</span> <span class="on"><span class="glyphicon glyphicon-remove"></span> Remove</span>
                  </button>
                  <span class="badge pull-right">
                    <span class="glyphicon glyphicon-map-marker"></span> 321 mi.
                  </span>
                </div>
              </article>
            </div>
          </div>
          
          <!-- navigation -->
          <div class="page-pagination text-center bottom-pagination">            
            <ul class="pagination">
              <li><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">...</a></li>
              <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
            </ul>
          </div>