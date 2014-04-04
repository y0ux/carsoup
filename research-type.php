<?php

  require_once('vehicle-types.php');
  
  for($i = 0; $i < count($vehicleTypes); $i++) :
    $vehicle = $vehicleTypes[$i];
    //is_array($vehicles) || break;
  ?>

                      <div class="type ">
                          <a href="research.php?type=<?php echo $vehicle['value'] ?>" title="Research <?php echo $vehicle['alt'] ?> motorcycle">
                            <img src="<?php echo $vehicle['image'] ?>" alt="<?php echo $vehicle['alt'] ?> icon" class="radio-image-foreground" />
                            <span class="type-name"><?php echo $vehicle['name'] ?></span>
                          </a>
                      </div>
                      
  <?php endfor; ?>