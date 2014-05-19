<?php

  require_once('vehicle-types.php');
  
  for($i = 0; $i < count($vehicleTypes); $i++) :
    $vehicle = $vehicleTypes[$i];
    if (!is_array($vehicles))
      break;
  ?>

                      <div class="radio col-lg-1 col-md-1 col-sm-1 col-xs-6">
                        <label class="optionsRadios" for="BasicSearch_optionsRadios<?php echo $i + 1 ?>">
                          <input type="radio" name="type" id="BasicSearch_optionsRadios<?php echo $i + 1 ?>" value="<?php echo $vehicle['value'] ?>"/>
                          <span class="radio-substitute">
                            <img src="<?php echo $vehicle['image'] ?>" alt="<?php echo $vehicle['alt'] ?> icon" class="radio-image-foreground" />
                            <img src="<?php echo $vehicle['selected'] ?>" alt="<?php echo $vehicle['alt'] ?> icon" class="radio-image-background" />
                            <span class="type-name"><?php echo $vehicle['name'] ?></span>
                          </span>
                        </label>
                      </div>
                      
  <?php endfor; ?>