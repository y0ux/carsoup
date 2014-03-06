<?php require_once('header.php'); ?>

        <!-- content -->
        <article id="dealer-profile-page">
        
          <!-- header -->
          <header class="float-fix">
            <img src="img/dealers/dealer-log01.gif" alt="Dealer Logo" class="dealer-logo col-lg-4 col-md-5 col-sm-6 col-xs-12" />
            <div class="dealer-title col-lg-5 col-md-6 col-sm-6 col-xs-6 col-xxs-12">
              <h1 class="section-title">Krenzen Auto Mall</h1>
              <ul class="list-unstyled subtitle">
                <li><span class="glyphicon glyphicon-map-marker"></span> 2500 Mall Drive, Duluth, MN 55811</li>
                <li><span class="glyphicon glyphicon-earphone"></span> (888) 440-6187</li>
                <li><span class="glyphicon glyphicon-envelope"></span><a href="#" data-toggle="modal" data-target="#messageModal"> Email Us</a></li>
                <li><span class="glyphicon icon-map"></span><a href="#"> Map & Directions</a></li>
                <li><span class="glyphicon glyphicon-home"></span><a href="#"> Website</a></li>
              </ul>
            </div>
            <div class="dealer-buttons text-right col-lg-3 col-md-12 col-sm-12 col-xs-4 col-xxs-12 pull-right">
              <button class="btn btn-sm btn-important" >Free Dealer Quote</button>
              <button class="btn btn-sm btn-important" >Used Inventory</button>
              <button class="btn btn-sm btn-important" >Schedule Service</button>
            </div>
          </header>
          
          <!-- Nav tabs -->
          <ul class="nav nav-tabs">
            <li class="active"><a href="#about" data-toggle="tab"><span class="glyphicon glyphicon-certificate hidden-xs"></span> About</a></li>
            <li><a href="#specials" data-toggle="tab"><span class="glyphicon glyphicon-pushpin hidden-xs"></span> Specials</a></li>
            <li><a href="#inventory" data-toggle="tab"><span class="glyphicon glyphicon-list-alt hidden-xs"></span> Inventory</a></li>
            <li><a href="#finance" data-toggle="tab"><span class="glyphicon glyphicon-briefcase  hidden-xs"></span> Finance</a></li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
            <section class="tab-pane active float-fix" id="about">
              <div class="about-desc col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <p>At Krenzen you will find a great selection of new and pre-owned cars, trucks, and SUV's that fit any budget. Shoppers can view pricing, mileage, and pictures of quality new and pre-owned vehicles in the Duluth, St. Cloud, Cloquet, Virginia, and Hibbing areas. Krenzen Auto Mall makes buying a car easy with their friendly and knowledgeable staff who are always ready to answer your questions. Call us and one of our sales specialists will be happy to assist you. At Krenzen, you'll get a great deal on the vehicle that you need.</p>
                <p>*Home of the non-commission sales staff*</p>
                <p>Nearly 40 years have passed since we opened our doors. We at Krenzen realize Duluth-Superior is a great community and an excellent place to live and work. Over 12,000 local people voted and ackowledged Krenzen as the best place for purchasing and servicing your vehicle. We at Krenzen are proud to be recognized by Duluth-Superior Magazine as the most preferred auto dealership in the Twin Ports. No matter where you are heading in life, Krenzen can get you there.</p>
                <div class="contact-personnel float-fix">
                  <article>
                    <img src="img/dealers/sales-man.gif" alt="Sales Contact Image" class="pull-left" />
                    <div class="personnel-desc margin-left pull-left">
                      <h3 class="reset-vertical-margin margin-bottom margin-top-xxs" >Buckley Simmons</h3>
                      <ul class="list-unstyled">
                        <li class="subtitle"><span class="glyphicon glyphicon-earphone"></span> (888) 440-6187</li>
                        <li><span class="badge badge-important">Sales</span></li>
                      </ul>
                    </div>
                  </article>
                </div>
              </div>
              <div class="about-links col-lg-4 col-md-4 col-sm-4 col-xs-12 margin-top-xs">
                <h3>Specials</h3>
                <ul class="list-unstyled">
                  <li><a href="#">Used Car Specials</a></li>
                  <li><a href="#">Must Go - Priced to Move</a></li>
                </ul>
                <h3>Inventory</h3>
                <ul class="list-unstyled">
                  <li><a href="#">Used Vehicles (236)</a></li>
                  <li><a href="#">Under $10,000 (47)</a></li>
                </ul>
                <h3>Finance</h3>
                <ul class="list-unstyled">
                  <li><a href="#">Compare Rates & Terms</a></li>
                  <li><a href="#">Payment Calculator</a></li>
                </ul>
                <h3>Service</h3>
                <ul class="list-unstyled">
                  <li><a href="#">Schedule Service Online</a></li>
                </ul>
              </div>
              <section class="dealer-hours col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2><span class="glyphicon glyphicon-time"></span> Hours</h2>
                <article class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <h3>Sales Hours</h3>
                  <ul class="list-unstyled">
                    <li>Mon - Thurs 8:30 AM - 7:00 PM</li>
                    <li>Fri 8:00 AM - 6:00 PM</li>
                    <li>Sat 9 AM - 5:00 PM</li>
                  </ul>
                  <button class="btn btn-xs btn-important" >After hours contact</button>
                </article>
                <article class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <h3>Service Hours</h3>
                  <ul class="list-unstyled">
                    <li>Mon - Fri 7:30 - 5:00 PM</li>
                  </ul>
                  <button class="btn btn-xs btn-important" >Schedule service online</button>
                </article>
                <article class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <h3>Parts Hours</h3>
                  <ul class="list-unstyled">
                    <li>Mon - Fri 7:30 - 5:00 PM</li>
                  </ul>
                </article>
              </section>
            </section>
            <section class="tab-pane" id="specials">
              <div class="float-fix">
                <h2 class="header-important"><span class="glyphicon glyphicon-asterisk"></span> Today's Specials</h2>
                <?php require('small-search.php'); ?>
                
                <h2><span class="glyphicon glyphicon-bullhorn"></span> Must Go!</h2>
                <?php require('small-search.php'); ?>
              
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
            </section>
            <section class="tab-pane" id="inventory">
              <header class="">
                <h2 class="section-title pull-left">Krenzen Auto Mall <span class="h4 subtitle">(3,500 results)</span></h2>
                <div class="action-group pull-right text-right reset-side-padding remove-float-xxs">
                  <!-- Standard button -->
                  <button class="btn btn-lg btn-default relevant button-expand-xxs" data-toggle="modal" data-target="#filterModal"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                </div>
              </header>
              
              <?php require_once('search-results.php'); ?>
            </section>
            <section class="tab-pane" id="finance">
              <h2>Finance Contacts</h2>
              <div class="float-fix">
                <img src="img/dealers/sales-man.gif" alt="Sales Contact Image" class="pull-left" />
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-8 col-xxs-12">
                  <h3 class="margin-top-xxs">Kraig Kalan</h3>
                  <p class="text-xxs-center"><span class="badge badge-important">Finance Manager</span></p>
                  <p>Thanks for checking out our dealership. Our staff is anxious to assist you in locating your next vehicle, answering any questions about the many vehicles listed here on CarSoup, or we can work to locate that special vehicle you are looking for.</p>
                  <p>Whatever your need, feel free to contact us. You will not be disappointed.</p>
                  <p><a href="#" class="btn btn-callOA pull-right">Click here to apply now</a></p>
                </div>
              </div>
              <h2>Estimate Payments</h2>
              <div class="compare-rate payment-tools col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <?php require_once('compare-rates.php'); ?>
              </div>
              <div class="payment-calculator payment-tools col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <?php require_once('payment-calculator.php'); ?>
              </div>
            </section>
          </div>
          
          <?php require_once('modal-contact-dealer.php'); ?>
          <?php require_once('modal-filter.php'); ?>
          
          
          
          
          
           
        
        </article>

<?php require_once('footer.php'); ?>