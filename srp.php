<?php
$make = isset($_GET['make']) && $_GET['make']? ucwords($_GET['make']) : "Search Results";
$model = isset($_GET['model']) && $_GET['model']? " - ".ucwords($_GET['model']) : "";
$type = isset($_GET['type']) && $_GET['type']? ucwords($_GET['type']) : "";
$price = isset($_GET['anyPrice']) && $_GET['anyPrice']? "Any Price" : ( isset($_GET['maxPrice']) && $_GET['maxPrice']? "$".number_format(intval($_GET['maxPrice']))." max" : "No Bottom Price"  ) ;
$zipCode = isset($_GET['zipCode']) && $_GET['zipCode']? ucwords($_GET['zipCode']) : "Somewhere over the rainbow";;

?>

<?php require_once('header.php'); ?>

        <!-- content -->
        <section id="srp-page">
        
          <!-- header -->
          <header class="row">
            <h1 class="section-title col-md-7 col-sm-8"><?php echo $make.$model ?> <span class="h4 subtitle"><?php echo $type ?> </span></h1>
            <!--div class="h5 col-md-10 col-sm-8 col-xs-12 reset-margin-padding subtitle">
              <div class="h4 reset-margin-padding"><?php //echo $price ?>  - <span class="glyphicon glyphicon-map-marker"></span> <?php //echo $zipCode ?> <span class="geocode-zipcode" data-value="<?php //echo $zipCode ?>"><span></div>
              <div>(3,500 results)</div>
            </div-->
            <div class="action-group col-lg-4 col-md-5 col-sm-4 col-xs-12 pull-right text-right hidden-xs">
              <!--button class="btn btn-lg btn-default relevant button-expand-xxs" data-target="#filterModal" data-toggle="modal" id="filter-button">
                <span class="glyphicon glyphicon-filter"></span>
                Filter
              </button-->
              <!--a class="btn btn-lg btn-default" href="/"><span class="glyphicon glyphicon-filter"></span> Filter</a-->
              <a class="btn btn-lg btn-default search-button fl" href="/"><span class="glyphicon glyphicon-search"></span> New</a>
              <button type="button" class="btn btn-lg btn-default view-button" value="grid-view" title="Grid View" data-target="#search-results" data-view="search-view-grid"><span class="glyphicon glyphicon-th"></span></button>
              <button type="button" class="btn btn-lg btn-default view-button active" value="list-view" title="List View" data-target="#search-results" data-view="search-view-list"><span class="glyphicon glyphicon-th-list"></span></button>
              
            </div>
            
            <div class="col-sm-12">
              <a href="#" class="popover-trigger" id="form-popover" data-content-ref="#popover-form" data-side="bottom">234 results within 100 miles of 55110</a>
            </div>
            
            <div class="hidden">
              <div id="popover-form">
                <form class="">
                  <button class="close hide-popover" data-reference="#form-popover"><span class="glyphicon glyphicon-remove"></span></button>
                  <div class="form-group">
                    <label for="selectDistance">Search</label>
                    <select id="selectDistance" class="form-control">
                      <option>30 miles</option>
                      <option>50 miles</option>
                      <option>100 miles</option>
                      <option>250 miles</option>
                      <option>400+ miles</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="inputZipCode" class="">Of</label>
                    <input type="text" class="form-control" id="inputZipCode" value="55110">
                  </div>
                  <button type="submit" class="btn btn-default">Update</button>
                </form>
              </div>
            </div>
            
            
            <div class="action-group-mobile visible-xs">
              
              <button class="btn btn-lg btn-default col-xs-5 col-xxs-6" data-toggle="offcanvas">
                <span class="glyphicon glyphicon-filter"></span>
                Filter
              </button>
              <!--a class="btn btn-lg btn-default" href="/"><span class="glyphicon glyphicon-filter"></span> Filter</a-->
              <a class="btn btn-lg btn-default search-button col-xs-5 col-xxs-6" href="/"><span class="glyphicon glyphicon-search"></span> New</a>
              <button type="button" class="btn btn-lg btn-default view-button col-xs-1 hidden-xxs" value="grid-view" title="Grid View" data-target="#search-results" data-view="search-view-grid"><span class="glyphicon glyphicon-th"></span></button>
              <button type="button" class="btn btn-lg btn-default view-button active col-xs-1 hidden-xxs" value="list-view" title="List View" data-target="#search-results" data-view="search-view-list"><span class="glyphicon glyphicon-th-list"></span></button>
            </div>
          </header>
          
          <?php //require_once('featured-dealer.php'); ?>
          
          <?php //require_once('modal-filter.php'); ?>
          <?php //require_once('modal-sort.php'); ?>
          
          <?php require_once('search-results.php'); ?>
        
        </section>

        <script type="text/javascript" src="http://pop1.screenpopper.com/p-hub/434/1147/c798aa9e806659c5504c5be9ad7d186e/start.js"></script>

<?php require_once('footer.php'); ?>