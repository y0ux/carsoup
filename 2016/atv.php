<?php require_once('header_atv.php'); ?>

  <div class="frontpage-bg">
    <img class="" src="img/background_image_u1.jpg" />
    <div class="container">
      <h1><i class="fa fa-search"></i> SEARCH ATVs FOR SALE</h1>
      <div class="frontpage-search">
        <form>
          <div class="form-group col-md-6">
            <label for="selectMake">Make</label>
            <select class="form-control" id="selectMake">
              <option value="" disabled selected>Any make</option>
              <option>Artic Cat</option>
              <option>BMS</option>
              <option>Bennche</option>
              <option>...</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label for="inputMode">Model</label>
            <input type="text" class="form-control" id="inputModel" placeholder="Enter model name (optional)">
          </div>
          <div class="form-group col-sm-6">
            <label for="selectType">Type</label>
            <select class="form-control" id="selectType">
              <option value="" disabled selected>Any type</option>
              <option>2x4</option>
              <option>4x4</option>
              <option>Sport</option>
              <option>Youth</option>
              <option>Utility</option>
              <option>Performance/Racing</option>
              <option>Other ATV</option>
            </select>
          </div>
          <div class="form-group col-sm-6">
            <label for="selectPrice">Max. Price</label>
            <select class="form-control" id="selectPrice">
              <option value="" disabled selected>Any price</option>
              <option>$1,000 or less</option>
              <option>$2,000 or less</option>
              <option>$3,000 or less</option>
              <option>etc.</option>
            </select>
          </div>
          <div class="form-group col-md-3 col-xs-6">
            <label for="selectMake">Zip Code</label>
            <input type="text" class="form-control" id="inputZipCode" placeholder="Enter zip code">
          </div>
          <div class="form-group col-md-3 col-xs-6">
            <label for="selectDistance">Distance</label>
            <select class="form-control" id="selectDistance">
              <option value="" selected>Within 100 mi.</option>
              <option>Within 200 mi.</option>
              <option>Within 300 mi.</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <button type="submit" class="btn btn-callOA btn-lg full-width">SEARCH</button>
          </div>
        </form>
      </div><!-- frontpage-search -->
      <div class="frontpage-adv">
        <img  src="img/u26.png"/>
      </div>
    </div><!-- .container -->

    <div class="frontpage-getstarted hidden-md hidden-lg">
      <div class="container">
        <div class="sides left-side col-xs-6 col-xxs-12">
          <div>SELL YOURS</div>
          <div>It's quick, easy & FREE</div>
        </div>
        <div class="sides right-side col-xs-6 col-xxs-12">
          GET STARTED <i class="fa fa-angle-double-right"></i>
        </div>
      </div>
    </div><!-- .frontpage-getstarted -->

  </div><!-- .frontpage-bg -->

  <div class="container">
    <div class="col-sm-6">
      <h3>Great Selection</h3>
      <p>
        ATVSoup.com is the leader in new and used ATVs for sale by owner and by dealer. Featuring a great selection of ATVs from most every year, make and model, including Bennche, Yamaha, Kawasaki, Can-Am, Polaris, Honda, Suzuki and more.
      </p>
    </div><!-- .col-sm-6 -->
    <div class="col-sm-6">
      <h3>Stay Informed</h3>
      <p>
        Search locally or nationwide for the ATVs of your dreams. Check out our blog and other resources for great information, news, events, and other valuable information that is relevant to all ATV riders.
      </p>
    </div><!-- .col-sm-6 -->

  </div><!-- .container -->

<?php require_once('footer_atv.php'); ?>
