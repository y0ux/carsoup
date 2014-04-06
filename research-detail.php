<?php
require_once('header.php');

require_once('motorcycle-brands.php');
$image = '<img src="'.$motorcycleBrands['honda']['image'].'" alt="'.$motorcycleBrands['honda']['alt'].'" />';
require_once('hondaDb.php');
$brand = 'honda';   // don't change, its just for testing, there are no other images
$model = array();
$search = isset($_GET['model']) && !empty($_GET['model'])? $_GET['model'] : 'cbr';
$year = isset($_GET['year']) && !empty($_GET['year'])? $_GET['year'] : '2014';
//echo $search." ".$year;
if (isset($imageModels[$brand][$year][$search]) ) {
  $model = $imageModels[$brand][$year][$search];
}
//print_r( $imageModels);
?>

            <article id="research-detail">
              <header class="article-header text-xxs-center">
                <h1>Motorcycle Buyer's Guide</h1>
                <p class="subtitle h4 pull-left pull-none-xxs">Find your perfect ride fast and easy!</p>
                <div class="pull-right pull-none-xxs">
                  <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span> Change Trim</button>
                  <a href="research.php" class="btn btn-important">New Research</a>
                </div>
              </header>
              
              <h2><?php echo $image; ?> <?php echo $model['alt'] ?></h2>
              <div class="row">
                <img src="img/research/<?php echo $brand; ?>/<?php echo $model['file']; ?>" alt="<?php echo $model['alt']; ?>" class="col-lg-7 col-md-7 col-sm-7 col-xs-12" />
                <dl class="general-detail col-lg-5 col-md-5 col-sm-5 col-xs-12 dl-horizontal">
                  <dt>MSRP</dt><dd>$12,800</dd>
                  <dt>Warranty(Months)</dt> <dd>12</dd>
                  <dt>Engine Type</dt><dd>Horizontal In-line</dd>
                  <dt>Cylinders</dt><dd>4</dd>
                  <dt>Engine Stroke</dt><dd>4-Stroke</dd>
                  <dt>Displacement(cc)</dt> <dd>998</dd>
                  <dt>Transmission Type</dt><dd>Manual</dd>
                  <dt>Number of Speeds</dt><dd>6</dd>
                  <dt>Body Type</dt><dd>Standard</dd>
                  <dt>Available Colors</dt><dd><span class="detail-color" style="background-color: #eee"></span> <span class="detail-color" style="background-color: #cf1a23"></span></dd>
                </dl>
              </div>
              <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                  <ul class="nav nav-tabs text-center">
                    <li class="active"><a href="#specs" data-toggle="tab">Specifications</a></li>
                    <li><a href="#options" data-toggle="tab">Options</a></li>
                    <li><a href="#financing" data-toggle="tab">Financing</a></li>
                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div class="tab-pane active" id="specs">
                    
                      <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                Engine
                              </a>
                            </h4>
                          </div>
                          <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                              <dl class="dl-horizontal">
                                <dt>Displacement(cc)</dt><dd>599</dd>
                                <dt>Engine Type</dt><dd>Horizontal In-line</dd>
                                <dt>Cylinders</dt><dd>4</dd>
                                <dt>Engine Stroke</dt><dd>4-Stroke</dd>
                                <dt>Valve Configuration</dt><dd>DOHC</dd>
                                <dt>Carburetion Type</dt><dd>Fuel Injected</dd>
                              </dl>
                            </div>
                          </div>
                        </div>
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                Specifications
                              </a>
                            </h4>
                          </div>
                          <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                              <dl class="dl-horizontal">
                                <dt>Fuel Capacity(gal)</dt><dd>4.8</dd>
                                <dt>Number of Seats</dt><dd>2</dd>
                                <dt>Wheelbase(in)</dt><dd>53.9</dd>
                              </dl>
                            </div>
                          </div>
                        </div>
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                Transmission
                              </a>
                            </h4>
                          </div>
                          <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                              <dl class="dl-horizontal">
                                <dt>Transmission Type</dt><dd>Manual</dd>
                                <dt>Number of Speeds</dt><dd>6</dd>
                              </dl>
                            </div>
                          </div>
                        </div>
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                Brakes & Tires
                              </a>
                            </h4>
                          </div>
                          <div id="collapseFour" class="panel-collapse collapse">
                            <div class="panel-body">
                              <dl class="dl-horizontal">
                                <dt>Front Brakes</dt><dd>Dual Hydraulic Disc</dd>
                                <dt>Rear Brakes</dt><dd>Hydraulic Disc</dd>
                                <dt>Front Tires</dt><dd>120/70 ZR17</dd>
                                <dt>Rear Tires</dt><dd>180/55 ZR17</dd>
                              </dl>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane" id="options">
                      <ul class="list-unstyled">
                        <li>Carbon Fiber Rear Fender</li>
                        <li>Carbon Fiber Tank Pad</li>
                        <li>Cycle Cover</li>
                        <li>Passenger Seat Cowl (Color-Matched)</li>
                        <li>Racing Cover</li>
                        <li>Red</li>
                        <li>Sportscreen</li>
                      </ul>
                    </div>
                    <div class="tab-pane" id="financing">
                      <a href="dealer-profile.php">Ray's Sport & Cycle</a>
                      <div class="subtitle">Grand Rapids, MN</div>
                    </div>
                  </div>
                </div>
                <aside class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                  <div class="blatant-section float-fix dealer-quote">
                    <h3>Get a Free Dealer Quote</h3>
                    <p>No obligation to buy</p>
                    <form id="" action="/" method="post" class="">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Zip code" name="zipcode" />
                      </div>
                      <button type="submit" class="btn btn-callOA">Go</button>
                    </form>
                  </div>
                  <div class="insurance-quote">
                    <a href="submit" class="btn btn-default">Get an Insurance Quote &raquo;</a>
                  </div>
                  <div class="local-dealers">
                    <h3>Local Dealers</h3>
                    <article class="dealer-item row">
                      <a href="#" class="col-lg-6" ><img src="img/dealers/dealer01.png" alt="Dealer 01" class="img-responsive" /></a>
                      <dl class="dl-horizontal address text-sm col-lg-6">
                        <dt><span class="glyphicon glyphicon-earphone"></span></dt><dd>(888) 254 5927</dd>
                        <dt><span class="glyphicon glyphicon-map-marker"></span></dt><dd>3310 10th St NE<br/>Sauk Rapids<br/>MN 56379</dd>
                      </dl>
                    </article>
                    <article class="dealer-item row">
                      <a href="#" class=" col-lg-6" ><img src="img/dealers/dealer02.png" alt="Dealer 02" class="img-responsive" /></a>
                      <dl class="dl-horizontal address text-sm col-lg-6">
                        <dt><span class="glyphicon glyphicon-earphone"></span></dt><dd>(888) 254 5927</dd>
                        <dt><span class="glyphicon glyphicon-map-marker"></span></dt><dd>3310 10th St NE<br/>Sauk Rapids<br/>MN 56379</dd>
                      </dl>
                    </article>
                  </div>
                </aside>
              </div>
              
              
            </article>
        
<?php require_once('footer.php'); ?>