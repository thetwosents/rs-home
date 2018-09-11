<?php

$header = get_sub_field('heading');
$subheader = get_sub_field('subheading');
$isLarge = get_sub_field('is_large');

?>

<section class="mission-statement">
  <div class="container">
    <div class="row middle-xs center-xs">
      <div class="col-xs-12 col-md-10">
        <div class="box" 
          data-aos="fade-up" 
          data-aos-anchor-placement="top-bottom" 
          data-aos-duration="1200">
          <h2><?php echo $header; ?></h2>
          <?php if ($isLarge) { ?>
            <p class="subheading"><?php echo $subheader; ?></p>
          <?php } else { ?>
            <p><?php echo $subheader; ?></p>
          <?php } ?>
          
        </div>
      </div>
    </div>  
  </div>
</section>