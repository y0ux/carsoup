<?php

  require('motorcycle-brands.php');
  
  foreach($motorcycleBrands as $key => $motorcycle) :
    //is_array($motorcycle) || break;
  ?>

                      <div class="brand col-lg-3 col-md-3 col-sm-3 col-xs-6">
                          <a href="research-model.php?make=<?php echo $motorcycle['value'] ?>" title="Research <?php echo $motorcycle['alt'] ?>">
                            <img src="<?php echo $motorcycle['image'] ?>" alt="<?php echo $motorcycle['alt'] ?> logo" class="" />
                            <span class="brand-name"><?php echo $motorcycle['name'] ?></span>
                          </a>
                      </div>
                      
  <?php endforeach; ?>