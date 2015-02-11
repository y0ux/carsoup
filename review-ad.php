<?php require_once('header.php'); ?>
            <article id="review-ad">
              <header class="article-header">
                <h1>Create Your Ad</h1>
              </header>
              
              <p>It’s easy. Keep in mind that shoppers are looking for reasons to buy. Providing a lot of details and fully describing the features helps.</p>
              <p class="hint">TIP, email <a href="#">help@carsoup.com</a> for additional suggestions. You can edit your ad at any time during the process.</p>
              
              <ul class="form-steps list-unstyled list-inline h4 float-fix">
                <li><span class="glyphicon glyphicon-ok"></span> Ad Details</li>
                <li class="active"><span class="glyphicon glyphicon-chevron-down"></span> Review Ad</li>
                <li><span class="glyphicon glyphicon-chevron-right"></span> Submit</li>
              </ul>

              <form class="form-horizontal" action="submit-ad.php" method="post" role="form">
                
                <h3 class="h3-divisor"><span class="glyphicon glyphicon-check"></span> Review Your Ad</h3>
                
                <p>Please review your information before submiting. Keep in mind you can edit your ad at any time after this process.x</p>

                <section class="col-sm-7">
                  <div>
                    <img src="img/ppa/kawasaki.jpg" alt="Kawasaki Prarie 360" class="fluid-image img-thumbnail"/>
                  </div>
                  <div class="float-fix margin-top">
                    <img src="img/ppa/kawasaki/kawasaki-1.jpg" alt="Kawasaki 1" class="col-xs-2 img-thumbnail clear-padding"/>
                    <img src="img/ppa/kawasaki/kawasaki-2.jpg" alt="Kawasaki 2" class="col-xs-2 img-thumbnail clear-padding"/>
                    <img src="img/ppa/kawasaki/kawasaki-3.jpg" alt="Kawasaki 3" class="col-xs-2 img-thumbnail clear-padding"/>
                    <img src="img/ppa/kawasaki/kawasaki-4.jpg" alt="Kawasaki 4" class="col-xs-2 img-thumbnail clear-padding"/>
                    <img src="img/ppa/kawasaki/kawasaki-5.jpg" alt="Kawasaki 5" class="col-xs-2 img-thumbnail clear-padding"/>
                  </div>
                  <h4 class="float-fix clear-margin margin-top bolder"><span class="pull-left">Kawasaki 2011</span> <span class="pull-right">$ 1,520</span></h4>
                  <div class="subtitle margin-bottom">Prairie 360</div>
                  <dl class="dl-horizontal">
                    <dt>Type</dt><dd>4x4</dd>
                    <dt>VIN/Serial/ID</dt><dd>23k4kf99413</dd>
                    <dt>Mileage</dt><dd>15,800 miles</dd>
                    <dt>Color</dt><dd>Green Commando</dd>
                    <dt>Engine Size</dt><dd>362 cc</dd>
                    <dt>Video URL</dt><dd>https://www.youtube.com/watch?v=xcalpGft2og</dd>
                    <dt>Descripiton</dt><dd>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et</dd>
                  </dl>
                </section>
                <section id="cart-detail" class="col-sm-5">
                  <h4 class="dark-background clear-margin header-padding"><span class="glyphicon glyphicon-shopping-cart"></span> Your Cart</h4>
                  <div class="light-background padding-box">
                    <div class="float-fix">
                      <div class="col-sm-9 col-xs-10">
                        Free 7-day Pacakage
                        <ul class="list-unstyled list-icon list-chevron-right subtitle">
                          <li>Runs 7 days</li>
                          <li>Single photo</li>
                          <li>Detailed description</li>
                          <li>Phone & email contacts</li>
                        </ul>
                      </div>
                      <div class="col-sm-3 col-xs-2 text-right">
                        $0<sup>.00</sup>
                      </div>
                    </div>
                    <div class="float-fix margin-bottom">
                      <div class="col-sm-9 col-xs-10">
                        Add 5 more photos
                      </div>
                      <div class="col-sm-3 col-xs-2 text-right">
                        $5<sup>.00</sup>
                      </div>
                    </div>
                    <div class="float-fix margin-bottom">
                      <div class="col-sm-9 col-xs-10">
                        Add Youtube video
                      </div>
                      <div class="col-sm-3 col-xs-2 text-right">
                        $5<sup>.00</sup>
                      </div>
                    </div>
                    <div class="form-divisor"></div>
                    <div class="float-fix margin-bottom h4">
                      <div class="col-sm-9 col-xs-10">
                        Total
                      </div>
                      <div class="col-sm-3 col-xs-2 text-right">
                        $10<sup>.00</sup>
                      </div>
                    </div>
                  </div>
                </section>
                
                <div class="form-divisor clear-both"></div>
                
                <div class="form-group">
                  <div class="pull-left">
                    <a href="create-ad.php" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span> Previous</a>
                  </div>
                  <div class="pull-right">
                    <button type="button" class="btn btn-default">Cancel</button>
                    <button type="Submit" class="btn btn-lg btn-callOA-contrast">Next <span class="glyphicon glyphicon-chevron-right"></span></button>
                  </div>
                </div>
                  
                
              </form>
              
            </article>
            
        
<?php require_once('footer.php'); ?>