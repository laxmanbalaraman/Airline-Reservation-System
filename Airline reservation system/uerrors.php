
<?php
error_disp();
function error_disp(){
 if(count($GLOBALS['errors'])>0): ?>
  <div class="alert alert-danger" role="alert">
    <?php foreach ($GLOBALS['errors'] as $error ):?>
      <p> <?php echo $error; ?></p>
    <?php endforeach  ?>
  </div>
<?php endif; } ?>
