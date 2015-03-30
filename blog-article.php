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

<article id="blog-article">
  <div class="header">
    <div class="tags h4"><a href="#" class="label label-default label-">custom</a> <a href="#" class="label label-default">sturgis 2015</a> <a href="#" class="label label-default">south dakota</a> <a href="#" class="label label-default"></a> <a href="#" class="label label-default"></a> <a href="#" class="label label-default">rally</a></div>
    <h1><?php echo ucwords("Sturgis 2015 pre-sale starts"); ?></h1>
    <div class="subtitle"><i>Posted <?php echo _ago(strtotime('2015/03/28')) ?> ago</i> by <a href="#">John Doe</a></div>

    <div class=""><a href="#" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-comment"></span> 15</a> <a href="#" class="btn btn-sm btn-default"><span class="icon-facebook"></span></a> <a href="#" class="btn btn-sm btn-default"><span class="icon-twitter"></span></a> <a href="#" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-envelope"></span></a></div>
  </div>
  
  <img class="fluid-image main-image" src="img/motos/sturgis2015.jpg" alt="Sturgis 2015"/>
  
  <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin.</p>

  <p>He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment.</p>

  <p>His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened to me? " he thought. It wasn't a dream. His room, a proper human room although a little too small, lay peacefully between its four familiar walls.</p>

  <p>A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather. Drops</p>
  
  <div class=""><a href="#" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-comment"></span> 15</a> <a href="#" class="btn btn-sm btn-default"><span class="icon-facebook"></span></a> <a href="#" class="btn btn-sm btn-default"><span class="icon-twitter"></span></a> <a href="#" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-envelope"></span></a></div>
  
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&appId=135866833112041&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="footer row">
  <div class="col-md-9">
    <div class="fb-comments" data-href="http://carsoup.atom.com.gt" data-numposts="5" data-colorscheme="light"></div>
  </div>
  <div class="col-md-3">
    <h3>Following News</h3>
    <h5><a href="blog-article.php">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a></h5>
    <div class="subtitle"><i><?php echo _ago(strtotime('2015/03/28')) ?> ago</i></div>
    <h5><a href="blog-article.php">Li Europan lingues es membres</a></h5>
    <div class="subtitle"><i><?php echo _ago(strtotime('2015/03/23')) ?> ago</i></div>
    <h5><a href="blog-article.php">Lorem ipsum dolor sit amet, consectetuer adipiscing elite</a></h5>
    <div class="subtitle"><i><?php echo _ago(strtotime('2015/03/17')) ?> ago</i></div>
  </div>
</div>

  
</article>

<?php require_once('footer.php'); ?>
