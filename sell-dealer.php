<?php require_once('header.php'); ?>
            <article id="sell-form">
              <header class="article-header">
                <h1>Select Dealers</h1>
                <p class="subtitle">
                  Select a dealer(s) you would like to consider your vehicle.
                </p>
              </header>
                
              <ul class="form-steps list-unstyled list-inline h4 float-fix">
                <li>Vehicle Information</li>
                <li class="active">Select Dealer</li>
                <li>Contact Information</li>
                <li>Confirmation</li>
              </ul>
                
              <p class="form-small-text">
                <span class="small-form-text-tip" style="color: #333">Here’s a tip:</span> Dealers that sell your make of vehicle may make better offers, since they market to customers looking for that brand. Offers will be less than retail prices, but you may be able to get a check for your vehicle right on the spot.
              </p>

              <form class="form-inline" action="ajax-dealer.php" method="post" role="form">
                  
                <div class="form-group">
                  <label class="control-label" for="range">Select dealers within</label>
                    <select class="form-control" id="range" style="width: auto;">
                      <option>50 miles</option>
                      <option>150 miles</option>
                      <option>200 miles</option>
                      <option>300 miles</option>
                      <option>500 miles</option>
                    </select>
                </div>
                <div class="form-group">
                  <label  class="control-label" for="zipcode">of</label>
                    <input type="text" class="form-control" id="of" placeholder="Zip Code" style="width: auto;">
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Search</button>
                  </div>
                </div>
              </form>
              
              <form class="" action="sell-contact.php" method="post" role="form">
                <div class="form-group">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"> Century Power Sports<br/><span class="small-form-text"><span class="glyphicon glyphicon-map-marker"></span> Stillwater, MN (16 miles)</span>
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"> Fury Motorcycles<br/><span class="small-form-text"><span class="glyphicon glyphicon-map-marker"></span> South St. Paul, MN (18 miles)</span>
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"> Hitching Post-South St. Paul<br/><span class="small-form-text"><span class="glyphicon glyphicon-map-marker"></span> South St. Paul, MN (19 miles)</span>
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"> Hitching Post- Hopkins<br/><span class="small-form-text"><span class="glyphicon glyphicon-map-marker"></span> SHopkins, MN (22 miles)</span>
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"> Simply Street Bikes<br/><span class="small-form-text"><span class="glyphicon glyphicon-map-marker"></span> Eden Prairie, MN (25 miles)</span>
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"> Motoprimo<br/><span class="small-form-text"><span class="glyphicon glyphicon-map-marker"></span> Lakeville, MN (32 miles)</span>
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"> River Valley Power and Sports (Red Wing)<br/><span class="small-form-text"><span class="glyphicon glyphicon-map-marker"></span> Red Wing, MN (49 miles)</span>
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"> Bristows<br/><span class="small-form-text"><span class="glyphicon glyphicon-map-marker"></span> St. Cloud, MN (53 miles)</span>
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"> Luther Honda House Powersports<br/><span class="small-form-text"><span class="glyphicon glyphicon-map-marker"></span> St. Cloud, MN (56 miles)</span>
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"> River Valley Power and Sport (Rochester)<br/><span class="small-form-text"><span class="glyphicon glyphicon-map-marker"></span> Rochester, MN (81 miles)</span>
                    </label>
                  </div>
                </div>
                
                <div class="form-group">
                  <div class="pull-right">
                    <button type="submit" class="btn btn-callOA btn-lg">Next</button>
                  </div>
                </div>

              </form>

            </article>
        
<?php require_once('footer.php'); ?>