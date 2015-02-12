<?php require_once('header.php'); ?>

<link href="css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
<script src="js/fileinput.min.js" type="text/javascript"></script>

          <section id="ad-list">
            <div class="alert alert-success alert-dismissible fade in" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              Thank you for renewing your ad for the <strong>Kawasaki Prairie 360 - 2011</strong>.
            </div>


            <div role="tabpanel">

              <!-- Nav tabs -->
              <ul class="nav nav-tabs nav-justified" role="tablist">
                <li role="presentation" class="active"><a href="#ads" aria-controls="ads" role="tab" data-toggle="tab" class="h4">My Ads</a></li>
                <li role="presentation"><a href="#account" aria-controls="account" role="tab" data-toggle="tab" class="h4">My Account</a></li>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="ads">
                  <header class="article-header float-fix row">
                    <div class="col-md-8 col-sm-7">
                      <h1 class="col-sm-8">My Vehicles <span class="subtitle text-sm">(3)</span></h1>
                      <div class="col-sm-4" style="padding-top:20px">
                        <button type="button" class="btn btn-sm btn-callOA-contrast full-width-xs"><span class="glyphicon glyphicon-plus-sign"></span> Create New Ad</button>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-5">
                      <form class="form-inline text-right">
                        <div class="form-group text-sm" style="padding-top: 20px">
                          <label for="inputFilter">Sort by</label>
                          <select id="inputFilter" class="form-control">
                            <option>Expires soon</option>
                            <option>Oldest</option>
                            <option>Newest</option>
                            <option>Free first</option>
                            <option>Free last</option>
                          </select>
                        </div>
                      </form>                      
                    </div>
                  </header>
                  <div class="ads-list">
                    <article class="row">
                      <div class="col-sm-3 half-width-sm text-sm-center">
                        <img src="img/ppa/kawasaki.jpg" alt="Kawasaki Priarie" class="full-width">
                      </div>
                      <div class="col-sm-9">
                        <div class="row">
                          <h2 class="col-sm-9"><a href="eedit-ad.php">Kawasaki - Priarie 360 - 2011</a></h2>
                          <div class="col-sm-3 h2 text-right text-sm-left">$1,750</div>
                        </div>
                        <div>Display in <strong>5 searches</strong> and <strong>view 40 times</strong>.</div>
                        <div class="text-danger">Status <strong>Inactive</strong></div>
                        <div>Published on <strong>February 01, 2015</strong></div>
                        <div class="row margin-top">
                          <div class="col-sm-7"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-edit"></span> Edit Ad</button> <button class="btn btn-callOA-contrast"><span class="glyphicon glyphicon-repeat"></span> Renew Ad</button></div>
                          <div class="col-sm-5 text-danger text-right">Expired on February 8, 2015</div>
                        </div>
                        
                      </div>
                    </article>
                    <article class="row">
                      <div class="col-sm-3 half-width-sm text-sm-center">
                        <img src="img/ppa/kawasaki/kawasaki-1.jpg" alt="Kawasaki Priarie" class="full-width">
                      </div>
                      <div class="col-sm-9">
                        <div class="row">
                          <h2 class="col-sm-9"><a href="eedit-ad.php">Kawasaki - Priarie 360 - 2012</a></h2>
                          <div class="col-sm-3 h2 text-right text-sm-left">$1,900</div>
                        </div>
                        <div>Display in <strong>5 searches</strong> and <strong>view 40 times</strong>.</div>
                        <div>Status <strong>Active</strong></div>
                        <div>Published on <strong>February 08, 2015</strong></div>
                        <div class="row margin-top">
                          <div class="col-sm-7"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-edit"></span> Edit Ad</button></div>
                          <div class="col-sm-5 text-right">Expires in 2 days</div>
                        </div>
                        
                      </div>
                    </article>
                  </div>
                  
                  <nav>
                    <ul class="pagination pagination-lg">
                      <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                      <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                      <li class="active"><a href="#">2</a></li>
                      <li class="active"><a href="#">3</a></li>
                      <li class="active"><a href="#">4</li>
                    </ul>
                  </nav>
                  
                </div>
                <div role="tabpanel" class="tab-pane" id="account">
                  
                </div>
              </div>

            </div>
          </section>
            
        
<?php require_once('footer.php'); ?>