<?php

$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$brands = get_sub_field('brands');
$size = 'medium';

?>

<section class="brand-wall">
  <div class="container">
    <div class="row middle-xs center-xs">
      <div class="col-xs-12">
        <h1><?php echo $title; ?></h1>
        <h2><?php echo $subtitle; ?></h2>
      </div>
    </div>
    <div class="row middle-xs">
      <div class="col-xs-12">
        <div class="logo-slider">

          <?php
          if ($brands) {
            foreach($brands as $image) { ?>
                <div class="logo">

                  <?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
                </div>

             <?php 

            }

          }

          ?>
          
        </div>
      </div>
    </div>
  </div>
</section>