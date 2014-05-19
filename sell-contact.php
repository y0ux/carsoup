<?php require_once('header.php'); ?>
            <article id="sell-form">
              <header class="article-header">
                <h1>Contact Information</h1>
                <p class="subtitle">
                  Provide us with the information to contact you.
                </p>
              </header>
              
              <ul class="form-steps list-unstyled list-inline float-fix">
                <li>Vehicle Information</li>
                <li>Select Dealer</li>
                <li class="active">Contact Information</li>
                <li>Confirmation</li>
              </ul>
              
              <form class="" action="sell-confirmation.php" method="post" role="form">
                <div class="row">
                  <div class="form-group col-sm-3">
                    <label  class="control-label form-required" for="firstName">First Name</label>
                    <input type="text" class="form-control" id="firstName" placeholder="">
                  </div>

                  <div class="form-group col-sm-3">
                    <div class="">
                      <label  class="control-label form-required" for="lastName">Last Name</label>
                      <input type="text" class="form-control" id="lastName" placeholder="">
                    </div>
                  </div>

                  <div class="form-group col-sm-2">
                    <div class="">
                      <label  class="control-label form-required" for="zipCode">Zip Code</label>
                      <input type="text" class="form-control" id="zipCode" placeholder="">
                    </div>
                  </div>

                  <div class="form-group col-sm-2">
                    <div class="">
                      <label  class="control-label form-required" for="phone">Phone</label>
                      <input type="text" class="form-control" id="phone" placeholder="">
                    </div>
                  </div>

                  <div class="form-group col-sm-2">
                    <div class="">
                      <label  class="control-label form-required" for="email">Email</label>
                      <input type="text" class="form-control" id="email" placeholder="">
                    </div>
                  </div>
                </div>
                <br/>
                <div class="row block-relative-sm">
                  <div class="form-group col-sm-9">
                    <div class="">
                      <label  class="control-label" for="comment">Comment</label>
                      <textarea class="form-control" id="comment" rows="3"></textarea>
                    </div>
                  </div>

                  <div class="form-group col-sm-3 block-bottom-right-sm">
                    <div class="">
                      <button type="submit" class="btn btn-callOA btn-lg">Next</button>
                    </div>
                  </div>
                </div>
                <p class="form-group form-small-text">
                  Fields marked with <span class="form-required"></span> are required
                </p>

              </form>

            </article>
        
<?php require_once('footer.php'); ?>