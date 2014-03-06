          <h2 class="section-title"><span class="glyphicon glyphicon-flash"></span> New Motorcycle Express Quote</h2>
          <form id="express-form" class="express-form" data-target="#express-response" action="json-sample.php" method="post">
            <div class="row">
              <div class="form-group btn-grid col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <label class="control-label" >Select a Year</label>
                <div class="row">
                  <div class="radio col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xxs-4">
                    <label for="yearRadio01">
                      <input type="radio" id="yearRadio01" name="year" value="2015" data-next="#inputMakeExpress" class="chained-input" />
                      <span class="btn btn-default">2015</span>
                    </label>
                  </div>
                  <div class="radio col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xxs-4">
                    <label for="yearRadio02">
                      <input type="radio" id="yearRadio02" name="year" value="2014" data-next="#inputMakeExpress" class="chained-input" />
                      <span class="btn btn-default">2014</span>
                    </label>
                  </div>
                  <div class="radio col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xxs-4">
                    <label for="yearRadio03">
                      <input type="radio" id="yearRadio03" name="year" value="2013" data-next="#inputMakeExpress" class="chained-input" />
                      <span class="btn btn-default">2013</span>
                    </label>
                  </div>
                </div>
              </div>
              
              <div class="form-group col-lg-4 col-md-4 col-sm-4">
                <label for="inputMakeExpress">Make</label>
                <select class="form-control chained-input" id="inputMakeExpress" disabled="disabled" data-next="#inputModelExpress" >
                  <option value="all">All</option>
                  <option value="honda">Honda</option>
                  <option value="suzuki">Suzuki</option>
                  <option value="kawasaki">Kawasaki</option>
                  <option value="bmw">BMW</option>
                  <option value="ducati">Ducati</option>
                </select>
              </div>
              <div class="form-group col-lg-4 col-md-4 col-sm-4">
                <label for="inputModelExpress">Model</label>
                <select class="form-control toggle-input" id="inputModelExpress" disabled="disabled" data-target="#express-collapse" >
                  <option value="">Select a Make first</option>
                  <option value="option1">Option 1</option>
                  <option value="option2">Option 2</option>
                </select>
              </div>
              
            </div>
            <div id="express-collapse" class="row collapse">
              
              <div class="form-group col-lg-4 col-md-4 col-sm-4">
                <label for="inputTrimExpress">Trim</label>
                <select class="form-control" id="inputTrimExpress">
                  <option value="">Select a Model first</option>
                  <option value="option1">Option 1</option>
                  <option value="option2">Option 2</option>
                </select>
              </div>
              <div class="form-group col-lg-5 col-md-5 col-sm-5 col-xs-6 col-xxs-12">
                <label for="inputZipCode" class="control-label">Zip Code</label>
                <div class="input-group">
                  <input type="text" class="form-control" id="inputZipCode" name="zipCode" placeholder="Enter your zip code"/>
                  <span class="input-group-addon geolocator-trigger" data-target="#zipCode"><span class="glyphicon icon-location"></span></span>
                </div>
              </div>
              <div class="form-group submit-group col-lg-2 col-md-2 col-sm-2 col-xs-4">
                <button type="submit" class="btn btn-callOA">Go</button>
              </div>
            </div>
            
          </form>
          <div id="express-response" class="collapse">
          
            <?php require_once('quote-message.php'); ?>
          
          </div>