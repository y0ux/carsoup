<?php require_once('header.php'); ?>
            <article id="sell-form">
              <header class="article-header">
                <h1>Sell it Now!</h1>
                <p class="subtitle">
                  Local dealers need  for their lots and are ready to buy vehicles. 
                  Just tell us what you are looking to sell and we'll connect you with local dealers who can appraise your vehicle and make you an offer.
                </p>
              </header>
              
              <ul class="form-steps list-unstyled list-inline h4 float-fix">
                <li class="active">Vehicle Information</li>
                <li>Select Dealer</li>
                <li>Contact Information</li>
                <li>Confirmation</li>
              </ul>

              <form class="form-horizontal" action="sell-dealer.php" method="post" role="form">
                
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="year">Year</label>
                  <div class="col-sm-10">
                    <select class="form-control" id="year" style="width: auto;">
                      <option>2014</option>
                      <option>2013</option>
                      <option>2012</option>
                      <option>2011</option>
                      <option>2010</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="make">Make</label>
                  <div class="col-sm-10">
                    <select class="form-control" id="make" style="width: auto;">
                      <option default>Select make</option>
                      <option>Aprilia</option>
                      <option>Beta</option>
                      <option>BMW</option>
                      <option>Brammo</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="model">Model</label>
                  <div class="col-sm-10">
                    <select class="form-control" id="model" style="width: auto;">
                      <option default>Select make first</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label" for="mileage">Mileage</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="mileage" placeholder="" style="width: auto;">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-callOA btn-lg">Next</button>
                    <p class="small-form-text"><span class="">*</span> All fields are required</p>
                  </div>
                </div>                

              </form>

            </article>
        
<?php require_once('footer.php'); ?>