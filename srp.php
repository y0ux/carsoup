<?php
$make = isset($_GET['make']) && $_GET['make']? ucwords($_GET['make']) : "All";
$model = isset($_GET['model']) && $_GET['model']? " - ".ucwords($_GET['model']) : "";
$type = isset($_GET['type']) && $_GET['type']? ucwords($_GET['type']) : "";
$price = isset($_GET['anyPrice']) && $_GET['anyPrice']? "Any Price" : ( isset($_GET['maxPrice']) && $_GET['maxPrice']? "$".number_format(intval($_GET['maxPrice']))." max" : "No Bottom Price"  ) ;
$zipCode = isset($_GET['zipCode']) && $_GET['zipCode']? ucwords($_GET['zipCode']) : "Somewhere over the rainbow";;

?>

<?php require_once('header.php'); ?>

        <!-- content -->
        <section id="srp-page">
        
          <!-- header -->
          <header class="">
            <h1 class="section-title"><?php echo $make.$model ?> <span class="h4 subtitle"><?php echo $type ?> </span></h1>
            <div class="h5 col-md-10 col-sm-8 col-xs-12 reset-margin-padding subtitle">
              <div class="h4 reset-margin-padding"><?php echo $price ?>  - <span class="glyphicon glyphicon-map-marker"></span> <?php echo $zipCode ?> <span class="geocode-zipcode" data-value="<?php echo $zipCode ?>"><span></div>
              <div>(3,500 results)</div>
            </div>
            <div class="action-group col-lg-2 col-md-2 col-sm-2 col-xs-12 pull-right text-right reset-side-padding hidden-xs">
              <a class="btn btn-lg btn-default search-button" href="/"><span class="glyphicon glyphicon-search"></span> New</a>
            </div>
          </header>
          
          <?php require_once('modal-filter.php'); ?>
          <?php require_once('modal-sort.php'); ?>
          
          <?php require_once('search-results.php'); ?>
        
        </section>

        <script type="text/javascript" src="http://pop1.screenpopper.com/p-hub/434/1147/c798aa9e806659c5504c5be9ad7d186e/start.js"></script>

<?php require_once('footer.php'); ?>