<?php
require_once('header.php');

///// TESTING PURPOSES ONLY - START ////
require('hondaDb.php');

$make = 'none';
$image = '';
// just for filling the header with a real value
if (isset($_GET['make']) && !empty($_GET['make'])) {
  require_once('motorcycle-brands.php');
  if (isset($motorcycleBrands[$_GET['make']])) {
    $make = $motorcycleBrands[$_GET['make']]['name'];
    $image = '<img src="'.$motorcycleBrands[$_GET['make']]['image'].'" alt="'.$motorcycleBrands[$_GET['make']]['alt'].'" class="" />';
  }
}

// Find all values of a key recursively and return array
function seekKey($haystack, $needle){
  $output = array();
  foreach($haystack as $key => $value){
    if($key == $needle) {
      $output[] = $value;
    }
    elseif(is_array($value)) {
      $output = array_merge($output, seekKey($value, $needle));
    }
  }
  return $output;
}
$bodyTypes = array_unique(seekKey($imageModels, 'body'));
$years = array_keys($imageModels['honda']);

///// TESTING PURPOSES ONLY - END ////

 ?>
            <article id="research-selection">
            
              <header class="article-header text-xxs-center">
                <h1>Motorcycle Buyer's Guide</h1>
                <p class="subtitle h4 pull-left pull-none-xxs">Find your perfect ride fast and easy!</p>
                <a href="research.php" class="btn btn-important pull-right pull-none-xxs"><span class="glyphicon glyphicon-chevron-left"></span> New Research</a>
              </header>
              
              <h2><?php echo $image; ?> <span class="inline-block"><?php echo $make; ?> <span class="subtitle">Results</span></h2>
              
              <div class="navigation">
                <!-- Split button -->
                <!--div class="btn-group">
                  <button type="button" class="btn btn-danger">Action</button>
                  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div-->
                
                <div class="filter-options col-sm-6">
                  <select class="form-control filter-select">
                    <option value="">Any</option>
                  <?php foreach ($bodyTypes as $type) : ?> 
                    <!--button class="btn btn-default" data-group="<?php //echo str_replace(" ", "", strtolower($type) ); ?>"><?php //echo ucwords($type); ?></button-->
                    <option value="<?php echo str_replace(" ", "", strtolower($type) ); ?>"><?php echo ucwords($type); ?></option>
                  <?php endforeach; ?>
                  </select>
                </div>
                <div class="filter-options">  
                  <?php foreach ($years as $year) : ?> 
                  <button class="btn btn-default filter-btn" data-group="<?php echo "y".$year ?>"><?php echo $year; ?></button>
                  <?php endforeach; ?>
                </div>
              </div>
              
              <section id="model-grid">
              <?php foreach ($imageModels as $brand => $brandList) : ?>
                <?php foreach ($brandList as $year => $yearList) : ?>
                  <?php foreach ($yearList as $model => $modelDetail) : ?>
                <article class="item col-lg-4 col-md-4 col-sm-6" data-groups='["<?php echo str_replace(" ", "", strtolower($modelDetail['body']) ); ?>","<?php echo "y".$year; ?>"]' data-title="<?php echo strtolower($modelDetail['name']); ?>">
                  <div class="article-wrapper">
                    <h3 class="text-center"><a href="research-detail.php"><?php echo ucwords($model); ?></a></h3>
                    <a href="research-trim.php" title="<?php echo $modelDetail['file']; ?>" class="img-link" ><img src="img/research/<?php echo $brand ?>/<?php echo $modelDetail['file']; ?>" alt="<?php echo $modelDetail['alt']; ?>" /></a>
                    <h4>General Details</h4>
                    <p><span class="label label-default"><?php echo $year; ?></span></p>
                    <dl class="dl-horizontal">
                      <dt>Warranty(Months)</dt><dd>36</dd>
                      <dt>Engine Type</dt><dd>Parallel Twin</dd>
                      <dt>Cylinders</dt><dd>2</dd>
                      <dt>Engine Stroke</dt><dd>4-Stroke</dd>
                      <dt>Transmission Type</dt><dd>Manual</dd>
                      <dt>Body Type</dt><dd><?php echo $modelDetail['body']; ?></dd>
                    </dl>
                  </div>
                </article>
                  <?php endforeach; ?>
                <?php endforeach; ?>
              <?php endforeach; ?>
              </section>
              
            </article>
        
<?php require_once('footer.php'); ?>