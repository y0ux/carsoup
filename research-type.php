<?php
  require('vehicle-types.php');
  ?>
  <div class="row">
  <?php
  for($i = 0; $i < count($vehicleTypes); $i++) :
    $vehicle = $vehicleTypes[$i];
    if ($i != 0 && $i % 4 == 0) :
    ?>
                    </div>
                    <div class="row">
    <?php endif; ?>
                      <div class="type col-lg-3 col-md-3 col-sm-3 col-xs-6">
                          <a href="research-selection.php?type=<?php echo $vehicle['value'] ?>" title="Research <?php echo $vehicle['alt'] ?> motorcycle">
                            <img src="<?php echo $vehicle['image'] ?>" alt="<?php echo $vehicle['alt'] ?> icon" class="radio-image-foreground" />
                            <span class="type-name"><?php echo $vehicle['name'] ?></span>
                          </a>
                      </div>
                      
  <?php endfor; ?>
  </div>