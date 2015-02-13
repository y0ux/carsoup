<?php require_once('header.php'); ?>
            <article id="review-ad">
              <header class="article-header">
                <h1>Create Your Ad</h1>
              </header>
              
              <p>It’s easy. Keep in mind that shoppers are looking for reasons to buy. Providing a lot of details and fully describing the features helps.</p>
              <p class="hint">TIP, email <a href="#">help@carsoup.com</a> for additional suggestions. You can edit your ad at any time during the process.</p>
              
              <ul class="form-steps list-unstyled list-inline h4 float-fix">
                <li><span class="glyphicon glyphicon-ok"></span> Ad Details</li>
                <li><span class="glyphicon glyphicon-ok"></span> Review Ad</li>
                <li class="active"><span class="glyphicon glyphicon-chevron-down"></span> Submit</li>
              </ul>

              <form class="form-horizontal margin-top" action="submit-ad.php" method="post" role="form">
                
                

                <section class="col-sm-7">
                  <h3 class="h3-divisor reset-vertical-margin margin-bottom"><span class="glyphicon glyphicon-user"></span> Billing Information</h3>
                  <div class="form-group">
                    <label class="col-sm-4 control-label" for="firstname">First Name</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="firstname" placeholder="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label" for="lastname">Last Name</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="lastname" placeholder="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label" for="email">Email</label>
                    <div class="col-sm-8">
                      <input type="email" class="form-control" id="email" placeholder="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label" for="address1">Address 1</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="address1" placeholder="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label" for="address2">Address 2</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="address2" placeholder="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label" for="zipcode">Zip</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="zipcode" placeholder="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label" for="state">State</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="state" placeholder="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label" for="city">City</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="city" placeholder="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label" for="phone">Phone</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="phone" placeholder="">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-8">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> Save this information for future payments
                        </label>
                      </div>
                    </div>
                  </div>
                  
                  <h3 class="h3-divisor"><span class="glyphicon glyphicon-credit-card"></span> Payment Method</h3>
                  
                  <div role="tabpanel">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                      <li role="presentation" class="active"><a href="#home" aria-controls="ccard" role="tab" data-toggle="tab">Credit / Debit Card</a></li>
                      <li role="presentation"><a href="#profile" aria-controls="paypal" role="tab" data-toggle="tab">Paypal</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                      <div role="tabpanel" class="tab-pane active" id="ccard">
                        <div class="form-group">
                          <label class="col-sm-4 control-label" for="city">Card Number</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="city" placeholder="">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-4 control-label" for="nameoncard">Name on Card</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="nameoncard" placeholder="">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-4 control-label" for="securitycode">Security Code</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="securitycode" placeholder="">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-4 control-label" for="month">Expiration Date</label>
                          <div class="col-sm-8">
                            <select class="form-control" id="month" style="width: auto; display: inline-block;">
                              <option>January (01)</option>
                              <option>February (02)</option>
                              <option>March (03)</option>
                              <option>April (04)</option>
                              <option>May (05)</option>
                              <option>June (06)</option>
                            </select>
                            <select class="form-control" id="year" style="width: auto; display: inline-block;">
                              <option>2015</option>
                              <option>2016</option>
                              <option>2017</option>
                              <option>2018</option>
                              <option>2019</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div role="tabpanel" class="tab-pane" id="paypal">...</div>
                    </div>

                  </div>
                </section>
                <section id="cart-detail" class="col-sm-5">
                  <h4 class="dark-background clear-margin header-padding"><span class="glyphicon glyphicon-shopping-cart"></span> Your Cart</h4>
                  <div class="light-background padding-box">
                    <div class="float-fix margin-bottom">
                      <div class="col-sm-9 col-xs-10">
                        Free 7-day Pacakage
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
                    <div class="form-group">
                      <div class="col-xs-12">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox"> I agree with the following <a href="#">Terms of Service of the User Agreement</a>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="text-center">
                      <button type="Submit" class="btn btn-callOA-contrast">Place Order <span class="glyphicon glyphicon-chevron-right"></span></button>
                    </div>
                  </div>
                  <p class="margin-top">
                    Note: This ad packae expires after 7 days and your ad will be removed from the site and your vehicle information and photo purged from our system. To relist your vehicle after expiration you will need to re-enter vehicle information, or chose to change your ad package to a 30 day listing or 'Till it Sells. At any time during the 7 day period that your ad is active you may visit My Garage to upgrade to a paid "runs 'till it sells" package or "30 day" package without need to re-enter for upload photos.</p>
                  <p>To place a listing or purchase other products from CarSoup you must read and agree to these <a href="#">Terms of Service.</a></p>
                </section>
                
                <div class="form-divisor clear-both"></div>
                
                <div class="form-group">
                  <div class="pull-left">
                    <a href="create-ad.php" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span> Previous</a>
                  </div>
                  <div class="pull-right">
                    <button type="Submit" class="btn btn-lg btn-callOA-contrast">Place Order <span class="glyphicon glyphicon-chevron-right"></span></button>
                  </div>
                </div>
                  
                
              </form>
              
            </article>
            
        
<?php require_once('footer.php'); ?>