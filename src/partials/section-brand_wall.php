<?php

$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$brands = get_sub_field('brands');
$size = 'medium';

?>

<section class="brand-wall light--spacing">
  <div class="container">
    <?php if ($title) { ?>
    <div class="row middle-xs center-xs">
      <div class="col-xs-12">
        <h1 data-aos="fade-up" data-aos-anchor-placement="center-bottom"><?php echo $title; ?></h1>
        <h2 data-aos="fade-up" data-aos-anchor-placement="center-bottom"><?php echo $subtitle; ?></h2>
      </div>
    </div>
  <?php } ?>
    <div class="row middle-xs center-xs">
      <div class="col-xs-12">


        <div class="logos"></div>

        <ul class="hidden-logos" id="brandLogos">
          <?php
          if ($brands) {
            foreach($brands as $image) { ?>
              <li><?php echo wp_get_attachment_image( $image['ID'], $size ); ?></li>
             <?php 

            }

          }

          ?>

        </ul>
          
      </div>
    </div>
  </div>
</section>