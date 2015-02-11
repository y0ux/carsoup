<?php require_once('header.php'); ?>
            <section id="ad-details">
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

              <form class="form-horizontal" action="review-ad.php" method="post" role="form">
                
                <h3 class="h3-divisor"><img src="img/icons/atv-35.png"/> ATV Information</h3>
                
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="make">Type</label>
                  <div class="col-sm-10">
                    <select class="form-control" id="make" style="width: auto;">
                      <option>Performance/Racing</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="make">Make</label>
                  <div class="col-sm-10">
                    <select class="form-control" id="make" style="width: auto;">
                      <option>Select make</option>
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
                      <option>Select make first</option>
                    </select>
                  </div>
                </div>
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
                  <label  class="col-sm-2 control-label" for="mileage">Mileage</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="mileage" placeholder="" style="width: auto;">
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label" for="serial">VIN/Serial/ID</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="serial" placeholder="" style="width: auto;">
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label" for="color">Color</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="color" placeholder="" style="width: auto;">
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label" for="engine">Engine Size</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="engine" placeholder="" style="width: auto; display: inline-block"> cc
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label" for="engine">Description</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" rows="3"></textarea>
                    <p class="form-small-text">Use this space to explain why this is a great deal for someone, what you love about your vehicle and why you’re selling it. Enhance your sales pitch with a positive story or special details about your vehicle. Interested buyers will be able to email, but may prefer to call or text for more immediate communication. Improve your volume of connections; provide potential buyers a mobile phone number. <a href="#">Helpful tips</a></p>
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label" for="price">Price</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="price" placeholder="" style="width: auto;">
                    <div class="checkbox inline-block">
                      <label>
                        <input type="checkbox" value="">
                        Or best offer
                      </label>
                    </div>
                  </div>
                </div>
                
                <div class="form-divisor"></div>
                
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="photo">Photo(s)</label>
                  <div class="col-sm-5">
                    <input type="file" id="photo">
                  </div>
                  <ul class="list-unstyled">
                    <li><a tabindex="0" class="setPopover" data-placement="auto top" role="button" data-toggle="popover" data-trigger="focus" title="Tips Title" data-content="Tips content">Tips & Recomendations</a></li>
                    <li><a tabindex="0" class="setPopover" data-placement="bottom" role="button" data-toggle="popover" data-trigger="focus" title="Guidelines Title" data-content="Guidelines content">Photo Guidelines</a></li>
                  </ul>
                </div>
                
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <a class="btn btn-callOA-contrast" data-toggle="collapse" href="#collapsePhotos" aria-expanded="false" aria-controls="collapsePhotos">Add 5 additional photos for $5</a>
                    <div class="collapse margin-top" id="collapsePhotos">
                      <div class="well">
                        ...
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="video">Video</label>
                  <div class="col-sm-10">
                    <a class="btn btn-callOA-contrast" data-toggle="collapse" href="#collapseVideo" aria-expanded="false" aria-controls="collapseVideo">Add a Youtube video for $5</a>
                    <div class="collapse margin-top" id="collapseVideo">
                      <div class="well">
                        <input type="text" class="form-control" id="youtube" placeholder="place the url here">
                      </div>
                    </div>
                  </div>
                </div>
                
                <h3 class="h3-divisor"><span class="glyphicon glyphicon-user"></span> Personal Information</h3>
                
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="name">Name</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="name" placeholder="">
                  </div>
                  <div class="checkbox col-sm-5">
                    <label>
                      <input type="checkbox"> display in ad
                    </label>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="phone">Phone</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="phone" placeholder="">
                  </div>
                  <div class="checkbox col-sm-5">
                    <label>
                      <input type="checkbox"> display in ad
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="email">Email</label>
                  <div class="col-sm-5">
                    <input type="email" class="form-control" id="phone" placeholder="">
                    <p class="help-block"><span class="glyphicon glyphicon-lock"></span> Your email will not be published</p>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="password">Password</label>
                  <div class="col-sm-5">
                    <input type="password" class="form-control" id="password" placeholder="">
                  </div>
                  <div class="col-sm-5">
                    <input type="password" class="form-control" id="confirm" placeholder="confirm password">
                  </div>
                  <p class="help-block col-sm-offset-2 col-sm-10">This will create a user so you can come back and modify your ad.</p>  
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="state">State</label>
                  <div class="col-sm-10">
                    <select class="form-control" id="state" style="width: auto;">
                      <option>Select</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label" for="city">City</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="city" placeholder="" style="width: auto;">
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label" for="zip">Zip</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="zip" placeholder="" style="width: auto;">
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label" for="address">Address</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="address" placeholder="" style="width: auto;">
                    <p class="help-block"><span class="glyphicon glyphicon-lock"></span> Your address will be used for administrative purposes only and will not appear on your ad.</p>
                  </div>
                </div>
                
                <div class="form-divisor"></div>
                
                <div class="form-group">
                  <div class="pull-right">
                    <button type="button" class="btn btn-default">Cancel</button>
                    <button type="Submit" class="btn btn-lg btn-callOA-contrast">Next <span class="glyphicon glyphicon-chevron-right"></span></button>
                  </div>
                </div>
                  
                
              </form>
              
            </section>
            
        
<?php require_once('footer.php'); ?>