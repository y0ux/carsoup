<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function _ago($tm,$rcs = 0) {
   $cur_tm = time(); $dif = $cur_tm-$tm;
   $pds = array('second','minute','hour','day','week','month','year','decade');
   $lngh = array(1,60,3600,86400,604800,2630880,31570560,315705600);
   for($v = sizeof($lngh)-1; ($v >= 0)&&(($no = $dif/$lngh[$v])<=1); $v--); if($v < 0) $v = 0; $_tm = $cur_tm-($dif%$lngh[$v]);

   $no = floor($no); if($no <> 1) $pds[$v] .='s'; $x=sprintf("%d %s ",$no,$pds[$v]);
   if(($rcs == 1)&&($v >= 1)&&(($cur_tm-$_tm) > 0)) $x .= time_ago($_tm);
   return $x;
}
?>
<?php require_once('header.php'); ?>

<section id="blog">
  
  <article class="featured">
    <div class="header">
      <h2 class="h1"><a href="blog-article.php">Sturgis 2015 pre-sale starts</a></h2>
      <a href="blog-article.php" class=""><img class="fluid-image" src="img/motos/sturgis2015.jpg" alt="Sturgis 2015"/></a>
    </div>
    <div class="">
      <div class="subtitle"><i><?php echo _ago(strtotime('2015/03/28')) ?> ago</i> by <a href="#">John Doe</a> <a href="#" class="label label-default">custom</a> <a href="#" class="label label-default">sturgis 2015</a> <a href="#" class="label label-default">south dakota</a> <a href="#" class="label label-default"></a> <a href="#" class="label label-default"></a> <a href="#" class="label label-default">rally</a></div>
      <p class="intro-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo... <a href="blog-article.php" class="bolder">Read More</a></p>
    </div>
    
    <div class="social"><a href="#" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-comment"></span> 15</a> <a href="#" class="btn btn-sm btn-default"><span class="icon-facebook"></span></a> <a href="#" class="btn btn-sm btn-default"><span class="icon-twitter"></span></a> <a href="#" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-envelope"></span></a></div>
  </article>

  <article class="row">
    <div class="col-xs-8 col-xxs-8">
      <h2 class=""><a href="blog-article.php">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a></h2>
      <div class="subtitle"><i><?php echo _ago(strtotime('2015/03/30 08:15:00')) ?> ago</i> by <a href="#">Billy Jean</a> <a href="#" class="label label-default">sport bike</a> <a href="#" class="label label-default"></a> <a href="#" class="label label-default">kawasaki</a></div>
      <p class="intro-text hidden-xs">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate... <a href="#" class="bolder">Read More</a></p>
      <div class="social hidden-xxs"><a href="#" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-comment"></span> 15</a> <a href="#" class="btn btn-sm btn-default"><span class="icon-facebook"></span></a> <a href="#" class="btn btn-sm btn-default"><span class="icon-twitter"></span></a> <a href="#" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-envelope"></span></a></div>
    </div>
    <div class="col-xs-4 col-xxs-4">
      <a href="#"><img src="img/motos/moto-01.png" alt="moto 01" class="fluid-image blog-image"/></a>
    </div>
  </article>
  
  <article class="row">
    <div class="col-xs-8 col-xxs-8">
      <h2 class=""><a href="blog-article.php">Li Europan lingues es membres</a></h2>
      <div class="subtitle"><i><?php echo _ago(strtotime('2015/03/23')) ?> ago</i> by <a href="#">Michel Bolton</a> <a href="#" class="label label-default">dirt</a> <a href="#" class="label label-default"></a> <a href="#" class="label label-default">honda</a></div>
      <p class="intro-text hidden-xs">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo... <a href="blog-article.php" class="bolder">Read More</a></p>
      <div class="social hidden-xxs"><a href="#" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-comment"></span> 15</a> <a href="#" class="btn btn-sm btn-default"><span class="icon-facebook"></span></a> <a href="#" class="btn btn-sm btn-default"><span class="icon-twitter"></span></a> <a href="#" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-envelope"></span></a></div>
    </div>
    <div class="col-xs-4 col-xxs-4">
      <a href="blog-article.php"><img src="img/motos/moto-03.png" alt="moto 03" class="fluid-image blog-image"/></a>
    </div>
  </article>
  
  <article class="row">
    <div class="col-xs-8 col-xxs-8">
      <h2 class=""><a href="blog-article.php">Lorem ipsum dolor sit amet, consectetuer adipiscing elite</a></h2>
      <div class="subtitle"><i><?php echo _ago(strtotime('2015/03/18')) ?> ago</i> by <a href="#">Billy Jean</a> <a href="#" class="label label-default">sport bike</a> <a href="#" class="label label-default"></a> <a href="#" class="label label-default">kawasaki</a></div>
      <p class="intro-text hidden-xs">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate... <a href="blog-article.php" class="bolder">Read More</a></p>
      <div class="social hidden-xxs"><a href="#" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-comment"></span> 15</a> <a href="#" class="btn btn-sm btn-default"><span class="icon-facebook"></span></a> <a href="#" class="btn btn-sm btn-default"><span class="icon-twitter"></span></a> <a href="#" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-envelope"></span></a></div>
    </div>
    <div class="col-xs-4 col-xxs-4">
      <a href="blog-article.php"><img src="img/motos/moto-01.png" alt="moto 01" class="fluid-image blog-image"/></a>
    </div>
  </article>
  
  <article class="row">
    <div class="col-xs-8 col-xxs-8">
      <h2 class=""><a href="blog-article.php">Li Europan lingues es membres</a></h2>
      <div class="subtitle"><i><?php echo _ago(strtotime('2015/03/27')) ?> ago</i> by <a href="#">Michel Bolton</a> <a href="#" class="label label-default">dirt</a> <a href="#" class="label label-default"></a> <a href="#" class="label label-default">honda</a></div>
      <p class="intro-text hidden-xs">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo... <a href="blog-article.php" class="bolder">Read More</a></p>
      <div class="social hidden-xxs"><a href="#" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-comment"></span> 15</a> <a href="#" class="btn btn-sm btn-default"><span class="icon-facebook"></span></a> <a href="#" class="btn btn-sm btn-default"><span class="icon-twitter"></span></a> <a href="#" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-envelope"></span></a></div>
    </div>
    <div class="col-xs-4 col-xxs-4">
      <a href="blog-article.php"><img src="img/motos/moto-03.png" alt="moto 03" class="fluid-image blog-image"/></a>
    </div>
  </article>
  
  <nav>
    <ul class="pager">
      <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span> Newest</a></li>
      <li><a href="#">Oldest <span class="glyphicon glyphicon-chevron-right"></span></a></li>
    </ul>
  </nav>
  
</section>



<?php require_once('footer.php'); ?>