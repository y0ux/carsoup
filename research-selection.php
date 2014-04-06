<?php
require_once('header.php');

$make = 'none';
$image = '';
if (isset($_GET['make']) && !empty($_GET['make'])) {
  require_once('motorcycle-brands.php');
  if (isset($motorcycleBrands[$_GET['make']])) {
    $make = $motorcycleBrands[$_GET['make']]['name'];
    $image = '<img src="'.$motorcycleBrands[$_GET['make']]['image'].'" alt="'.$motorcycleBrands[$_GET['make']]['alt'].'" />';
  }
}

 ?>

            <article id="research-selection">
              <header class="article-header text-xxs-center">
                <h1>Motorcycle Buyer's Guide</h1>
                <p class="subtitle h4 pull-left pull-none-xxs">Find your perfect ride fast and easy!</p>
                <button type="submit" class="btn btn-important pull-right pull-none-xxs">New Research</button>
              </header>
              <h2><?php echo $image; ?> <?php echo $make; ?> <span class="subtitle">Results</span></h2>
              <div class="navigation">
                <button type="button" class="btn-xs btn-default" value="slide-next" title="Highest"><span class="glyphicon glyphicon-chevron-left"></span></button>
                <span>Select Model</span>
                <button type="button" class="btn-xs btn-default" value="slide-next" title="Lowest"><span class="glyphicon glyphicon-chevron-right"></span></button>
              </div>

              <section>
                <ul class="nav nav-tabs">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Messages</a></li>
              </ul>
                
              </section>
              
            </article>
        
<?php require_once('footer.php'); ?>