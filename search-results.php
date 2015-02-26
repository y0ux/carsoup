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
            
            <!--div class="action-group-mobile visible-xs">
              <button class="btn col-xs-4 col-xxs-4" data-toggle="modal" data-target="#filterModal"><span class="glyphicon glyphicon-filter"></span> Filter</button>
              <button class="btn col-xs-4 col-xxs-4" data-toggle="modal" data-target="#sortModal"><span class="glyphicon glyphicon-sort"></span> Sort</button>
              <a class="btn col-xs-4 col-xxs-4" href="/"><span class="glyphicon glyphicon-search"></span> New</a>
            </div-->
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
          <div class="row row-offcanvas row-offcanvas-left">
            <div class="offcanvas-container">
              
              <div class="col-sm-3 sidebar-offcanvas">
                <form class="sorting-box" action="srp.php" method="post">
                  <h4 class="h2"><span class="glyphicon glyphicon-filter"></span> Filter</h4>

                  <div class="padding-left padding-right">
                    
                    <div class="form-group h4">
                      <a href="#" data-toggle="modal" data-target="#makeModal">Make <span class="glyphicon glyphicon-plus"></span></a>
                    </div>
                    
                    <div class="form-group h4">
                      <a href="#" data-toggle="modal" data-target="#conditionModal">Condition <span class="glyphicon glyphicon-plus"></span></a>
                    </div>
                    
                    <div class="form-group h4">
                      <a href="#" data-toggle="modal" data-target="#priceModal">Price <span class="glyphicon glyphicon-plus"></span></a>
                    </div>
                    
                    <div class="form-group h4">
                      <a href="#" data-toggle="modal" data-target="#yearModal">Year <span class="glyphicon glyphicon-plus"></span></a>
                    </div>
                    
                    <div class="form-group h4">
                      <a href="#" data-toggle="modal" data-target="#colorModal">Exterior Color <span class="glyphicon glyphicon-plus"></span></a>
                    </div>
                    
                    <div class="form-group h4">
                      <a href="#" data-toggle="modal" data-target="#bodyModal">Body Style <span class="glyphicon glyphicon-plus"></span></a>
                    </div>

                    

                  </div>

                </form>
                
                <!-- Make Modal -->
                <div class="modal fade" id="makeModal" tabindex="-1" role="dialog" aria-labelledby="makeModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Select a Make</h4>
                      </div>
                      <div class="modal-body">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox"> Make 1
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox"> Make 2
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox"> Make 3
                          </label>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-callOA-contrast">Apply Changes</button>
                      </div>
                    </div>
                  </div>
                </div>
                
                <!-- Condition Modal -->
                <div class="modal fade" id="conditionModal" tabindex="-1" role="dialog" aria-labelledby="conditionModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Select a Condition</h4>
                      </div>
                      <div class="modal-body">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox"> New
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox"> Used
                          </label>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-callOA-contrast">Apply Changes</button>
                      </div>
                    </div>
                  </div>
                </div>
                
                <!-- Price Modal -->
                <div class="modal fade" id="priceModal" tabindex="-1" role="dialog" aria-labelledby="priceModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Select a Price</h4>
                      </div>
                      <div class="modal-body">
                        <div class="checkbox col-xs-4 col-xxs-6"><label>
                          <input type="checkbox" id="inlineCheckbox4" value="option2"> <span class="checkbox-text"><span class="checkbox-box"></span><span class="glyphicon glyphicon-ok"></span> $25,001-$30,000 (4)</span>
                        </label></div>
                        <div class="checkbox col-xs-4 col-xxs-6"><label>
                          <input type="checkbox" id="inlineCheckbox5" value="option2"> <span class="checkbox-text"><span class="checkbox-box"></span><span class="glyphicon glyphicon-ok"></span> $30,001-$35,000 (10)</span>
                        </label></div>
                        <div class="checkbox col-xs-4 col-xxs-6"><label>
                          <input type="checkbox" id="inlineCheckbox6" value="option2"> <span class="checkbox-text"><span class="checkbox-box"></span><span class="glyphicon glyphicon-ok"></span> $35,001-$40,000 (26)</span>
                        </label></div>
                        <div class="checkbox col-xs-4 col-xxs-6"><label>
                          <input type="checkbox" id="inlineCheckbox7" value="option2"> <span class="checkbox-text"><span class="checkbox-box"></span><span class="glyphicon glyphicon-ok"></span> $40,001-$45,000 (43)</span>
                        </label></div>
                        <div class="checkbox col-xs-4 col-xxs-6"><label>
                          <input type="checkbox" id="inlineCheckbox8" value="option2"> <span class="checkbox-text"><span class="checkbox-box"></span><span class="glyphicon glyphicon-ok"></span> $45,001-$50,000 (55)</span>
                        </label></div>
                        <div class="checkbox col-xs-4 col-xxs-6"><label>
                          <input type="checkbox" id="inlineCheckbox9" value="option2"> <span class="checkbox-text"><span class="checkbox-box"></span><span class="glyphicon glyphicon-ok"></span> $50,001-$55,000 (12)</span>
                        </label></div>
                        <div class="checkbox col-xs-4 col-xxs-6"><label>
                          <input type="checkbox" id="inlineCheckbox10" value="option2"> <span class="checkbox-text"><span class="checkbox-box"></span><span class="glyphicon glyphicon-ok"></span> $55,001-$60,000 (11)</span>
                        </label></div>
                        <div class="checkbox col-xs-4 col-xxs-6"><label>
                          <input type="checkbox" id="inlineCheckbox11" value="option2"> <span class="checkbox-text"><span class="checkbox-box"></span><span class="glyphicon glyphicon-ok"></span> $60,001-$65,000 (6)</span>
                        </label></div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-callOA-contrast">Apply Changes</button>
                      </div>
                    </div>
                  </div>
                </div>
                
                <!-- Year Modal -->
                <div class="modal fade" id="yearModal" tabindex="-1" role="dialog" aria-labelledby="yearModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Select a Year</h4>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                          <div class="checkbox col-xs-4 col-xxs-6"><label>
                            <input type="checkbox" id="inlineCheckbox12" value="option2"> <span class="checkbox-text"><span class="checkbox-box"></span><span class="glyphicon glyphicon-ok"></span> Any Year (167)</span>
                          </label></div>
                          <div class="checkbox col-xs-4 col-xxs-6"><label>
                            <input type="checkbox" id="inlineCheckbox13" value="option2"> <span class="checkbox-text"><span class="checkbox-box"></span><span class="glyphicon glyphicon-ok"></span> 2015 (3)</span>
                          </label></div>
                          <div class="checkbox col-xs-4 col-xxs-6"><label>
                            <input type="checkbox" id="inlineCheckbox14" value="option2"> <span class="checkbox-text"><span class="checkbox-box"></span><span class="glyphicon glyphicon-ok"></span> 2014 (134)</span>
                          </label></div>
                          <div class="checkbox col-xs-4 col-xxs-6"><label>
                            <input type="checkbox" id="inlineCheckbox15" value="option2"> <span class="checkbox-text"><span class="checkbox-box"></span><span class="glyphicon glyphicon-ok"></span> 2013 (30)</span>
                          </label></div>
                        </div>
                        
                        <div class="checkbox col-xs-4 col-xxs-6"><label>
                          <input type="checkbox" id="inlineCheckbox4" value="option2"> <span class="checkbox-text"><span class="checkbox-box"></span><span class="glyphicon glyphicon-ok"></span> $25,001-$30,000 (4)</span>
                        </label></div>
                        <div class="checkbox col-xs-4 col-xxs-6"><label>
                          <input type="checkbox" id="inlineCheckbox5" value="option2"> <span class="checkbox-text"><span class="checkbox-box"></span><span class="glyphicon glyphicon-ok"></span> $30,001-$35,000 (10)</span>
                        </label></div>
                        <div class="checkbox col-xs-4 col-xxs-6"><label>
                          <input type="checkbox" id="inlineCheckbox6" value="option2"> <span class="checkbox-text"><span class="checkbox-box"></span><span class="glyphicon glyphicon-ok"></span> $35,001-$40,000 (26)</span>
                        </label></div>
                        <div class="checkbox col-xs-4 col-xxs-6"><label>
                          <input type="checkbox" id="inlineCheckbox7" value="option2"> <span class="checkbox-text"><span class="checkbox-box"></span><span class="glyphicon glyphicon-ok"></span> $40,001-$45,000 (43)</span>
                        </label></div>
                        <div class="checkbox col-xs-4 col-xxs-6"><label>
                          <input type="checkbox" id="inlineCheckbox8" value="option2"> <span class="checkbox-text"><span class="checkbox-box"></span><span class="glyphicon glyphicon-ok"></span> $45,001-$50,000 (55)</span>
                        </label></div>
                        <div class="checkbox col-xs-4 col-xxs-6"><label>
                          <input type="checkbox" id="inlineCheckbox9" value="option2"> <span class="checkbox-text"><span class="checkbox-box"></span><span class="glyphicon glyphicon-ok"></span> $50,001-$55,000 (12)</span>
                        </label></div>
                        <div class="checkbox col-xs-4 col-xxs-6"><label>
                          <input type="checkbox" id="inlineCheckbox10" value="option2"> <span class="checkbox-text"><span class="checkbox-box"></span><span class="glyphicon glyphicon-ok"></span> $55,001-$60,000 (11)</span>
                        </label></div>
                        <div class="checkbox col-xs-4 col-xxs-6"><label>
                          <input type="checkbox" id="inlineCheckbox11" value="option2"> <span class="checkbox-text"><span class="checkbox-box"></span><span class="glyphicon glyphicon-ok"></span> $60,001-$65,000 (6)</span>
                        </label></div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-callOA-contrast">Apply Changes</button>
                      </div>
                    </div>
                  </div>
                </div>
                
                <!-- Exerior Color Modal -->
                <div class="modal fade" id="colorModal" tabindex="-1" role="dialog" aria-labelledby="colorModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Select a Exterior Color</h4>
                      </div>
                      <div class="modal-body">
                        
                          <div class="row">
                            <div class="checkbox col-xs-4 col-xxs-6">
                              <label>
                                <input type="checkbox" id="inlineCheckbox16" value="option2"> <span class="checkbox-text"><span class="checkbox-box"></span><span class="glyphicon glyphicon-ok"></span> Any Exterior Color (167)</span>
                              </label>
                            </div>
                            <div class="checkbox col-xs-4 col-xxs-6"><label>
                              <input type="checkbox" id="inlineCheckbox17" value="option2"> <span class="checkbox-text"><span class="checkbox-box"></span><span class="glyphicon glyphicon-ok"></span> Black (41)</span>
                            </label></div>
                            <div class="checkbox col-xs-4 col-xxs-6"><label>
                              <input type="checkbox" id="inlineCheckbox18" value="option2"> <span class="checkbox-text"><span class="checkbox-box"></span><span class="glyphicon glyphicon-ok"></span> Blue (15)</span>
                            </label></div>
                            <div class="checkbox col-xs-4 col-xxs-6"><label>
                              <input type="checkbox" id="inlineCheckbox19" value="option2"> <span class="checkbox-text"><span class="checkbox-box"></span><span class="glyphicon glyphicon-ok"></span> Gray (40)</span>
                            </label></div>
                            <div class="checkbox col-xs-4 col-xxs-6"><label>
                              <input type="checkbox" id="inlineCheckbox20" value="option2"> <span class="checkbox-text"><span class="checkbox-box"></span><span class="glyphicon glyphicon-ok"></span> Red (31)</span>
                            </label></div>
                            <div class="checkbox col-xs-4 col-xxs-6"><label>
                              <input type="checkbox" id="inlineCheckbox21" value="option2"> <span class="checkbox-text"><span class="checkbox-box"></span><span class="glyphicon glyphicon-ok"></span> White (35)</span>
                            </label></div>
                            <div class="checkbox col-xs-4 col-xxs-6"><label>
                              <input type="checkbox" id="inlineCheckbox22" value="option2"> <span class="checkbox-text"><span class="checkbox-box"></span><span class="glyphicon glyphicon-ok"></span> Other (5)</span>
                            </label></div>
                          </div>
]]
                        
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-callOA-contrast">Apply Changes</button>
                      </div>
                    </div>
                  </div>
                </div>
                
                
                <!-- Body Style Modal -->
                <div class="modal fade" id="bodyModal" tabindex="-1" role="dialog" aria-labelledby="bodyModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Select a Body Style</h4>
                      </div>
                      <div class="modal-body">
                        
                         <div class="row">
                          <div class="checkbox col-xs-4 col-xxs-6">
                            <label>
                              <input type="checkbox" id="inlineCheckbox23" value="option2"> <span class="checkbox-text"><span class="checkbox-box"></span><span class="glyphicon glyphicon-ok"></span> Any Body Style (167)</span>

                            </label>
                          </div>
                          <div class="checkbox col-xs-4 col-xxs-6"><label>
                            <input type="checkbox" id="inlineCheckbox24" value="option2"> <span class="checkbox-text"><span class="checkbox-box"></span><span class="glyphicon glyphicon-ok"></span> Dual Purppose (41)</span>
                          </label></div>
                          <div class="checkbox col-xs-4 col-xxs-6"><label>
                            <input type="checkbox" id="inlineCheckbox25" value="option2"> <span class="checkbox-text"><span class="checkbox-box"></span><span class="glyphicon glyphicon-ok"></span> Road/Street (86)</span>
                          </label></div>
                          <div class="checkbox col-xs-4 col-xxs-6"><label>
                            <input type="checkbox" id="inlineCheckbox26" value="option2"> <span class="checkbox-text"><span class="checkbox-box"></span><span class="glyphicon glyphicon-ok"></span> Other (40)</span>
                          </label></div>
                        </div>
                        
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-callOA-contrast">Apply Changes</button>
                      </div>
                    </div>
                  </div>
                </div>
                
                
              </div>

              <div class="col-sm-9 content-offcanvas">
                <div id="search-results" class="search-view-list">
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
              </div>
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