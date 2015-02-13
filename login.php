<?php require_once('header.php'); ?>

<link href="css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
<script src="js/fileinput.min.js" type="text/javascript"></script>

            <section id="login">
              <header class="article-header no-border reset-margin-padding">
                <h1>Welcome to ATVSoup.com</h1>
              </header>
              <div class="border-element">
                
                <div class="">
                  <button type="button" class="btn btn-default btn-lg btn-facebook"><span class="glyphicon icon-facebook"></span> Log in with Facebook</button>
                  <button type="button" class="btn btn-default btn-lg btn-google"><span class="glyphicon icon-google"></span> Log in with Google</button>
                </div>
                <p class="text-sm subtitle margin-top">We never post anything without your permission.</p>
                <h4 class="horizontal-line text-center"><span>Or</span></h4>
                <h3 class="header-divisor"><span class="glyphicon glyphicon-user"></span> Login with your Email</h3>

                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-1 control-label"><span class="glyphicon glyphicon-envelope"></span></label>
                    <div class="col-sm-6">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-1 control-label"><span class="glyphicon glyphicon-lock"></span></label>
                    <div class="col-sm-6">
                      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-1 col-sm-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> Remember me
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-1 col-sm-10">
                      <button type="submit" class="btn btn-lg btn-callOA-contrast">Sign in</button>
                    </div>
                  </div>
                  <div class="form-group reset-vertical-margin">
                    <div class="col-sm-offset-1 col-sm-10">
                      <a href="#" class="" data-toggle="modal" data-target="#forgotPassword">Forgot your password?</a>
                    </div>
                  </div>
                </form>
                
              </div>
              <p class="margin-top">Not a member yet? <a href="#">Create an Account</a></p>
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
                      <div class="form-group">
                        <label for="forgotEmail" class="col-sm-1 control-label"><span class="glyphicon glyphicon-envelope"></span></label>
                        <div class="col-sm-6">
                          <input type="email" class="form-control" id="forgotEmail" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="forgotZip" class="col-sm-1 control-label"><span class="glyphicon glyphicon-map-marker"></span></label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" id="forgotZip" placeholder="Zip code">
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