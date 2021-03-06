<?php require_once('header.php'); ?>

<link href="css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
<script src="js/fileinput.min.js" type="text/javascript"></script>

            <section id="login">
              <header class="article-header no-border reset-margin-padding">
                <h1>Welcome to ATVSoup.com</h1>
              </header>
              <div class="border-element">
                
                <div class="">
                  <button type="button" class="btn btn-default btn-lg btn-facebook full-width-xxs margin-bottom"><span class="glyphicon icon-facebook"></span> Log in with Facebook</button>
                  <button type="button" class="btn btn-default btn-lg btn-google full-width-xxs margin-bottom"><span class="glyphicon icon-google-plus"></span> Log in with Google</button>
                </div>
                <p class="text-sm subtitle text-xxs-center">We never post anything without your permission.</p>
                <h4 class="horizontal-line text-center"><span>Or</span></h4>
                <h3 class="header-divisor"><span class="glyphicon glyphicon-user"></span> Login with your Email</h3>

                <form class="form-horizontal">
                  <div class="">
                    <!--label for="email" class="col-sm-1 control-label"><span class="glyphicon glyphicon-envelope"></span></label-->
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-envelope"></span></span>
                      <input type="email" class="form-control" id="email" placeholder="Email" aria-describedby="basic-addon1">
                      
                    </div>
                    <p class="subtitle text-sm">Your email will not be displayed.</p>
                  </div>
                  <div class="">
                    <!--label for="email" class="col-sm-1 control-label"><span class="glyphicon glyphicon-envelope"></span></label-->
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon2"><span class="glyphicon glyphicon-lock"></span></span>
                      <input type="email" class="form-control" id="password" placeholder="Password" aria-describedby="basic-addon2">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> Remember me
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-lg btn-callOA-contrast full-width-xxs">Sign in</button>
                    </div>
                  </div>
                  <div class="form-group reset-vertical-margin">
                    <div class="col-sm-10 text-xxs-center">
                      <a href="#" class="" data-toggle="modal" data-target="#forgotPassword">Forgot your password?</a>
                    </div>
                  </div>
                </form>
                
              </div>
              <p class="margin-top text-xxs-center">Not a member yet? <a href="signup.php">Create an Account</a></p>
            </section>

            <!-- Forgot Password -->
            <div class="modal fade" id="forgotPassword" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <form class="form-horizontal" action="#">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">Get Your Password By Email</h4>
                    </div>
                    <div class="modal-body">
                      <p>Simply provide us with the email address and zip code used when registering with CarSoup, and your password will be emailed to you in a matter of minutes. If you do not receive your password shortly, please contact us at <a href="#">help@carsoup.com</a> and we will be happy to assist you.</p>
                      
                      <div class="margin-bottom">
                        <!--label for="email" class="col-sm-1 control-label"><span class="glyphicon glyphicon-envelope"></span></label-->
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon3"><span class="glyphicon glyphicon-envelope"></span></span>
                          <input type="email" class="form-control" id="email" placeholder="Email" aria-describedby="basic-addon3">
                        </div>
                      </div>
                      <div class="">
                        <!--label for="email" class="col-sm-1 control-label"><span class="glyphicon glyphicon-envelope"></span></label-->
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon4"><span class="glyphicon glyphicon-map-marker"></span></span>
                          <input type="email" class="form-control" id="forgotZip" placeholder="Zip Code" aria-describedby="basic-addon4">
                        </div>
                      </div>
                    </div>
                    
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-callOA-contrast">Submit</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            
        
<?php require_once('footer.php'); ?>