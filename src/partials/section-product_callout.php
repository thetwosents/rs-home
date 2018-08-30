<?php

/* Variables defined in component */
$left_or_right_side = get_sub_field('left_or_right_side');
$above_title = get_sub_field('above_title');
$title = get_sub_field('title');
$content = get_sub_field('content');

$images = get_sub_field('images'); // make gallery

$product_photos = get_sub_field('product_photos?');

$have_primary_cta = get_sub_field('have_primary_cta'); // true / false
$primary_cta_text = get_sub_field('primary_cta_text');
$primary_cta_link = get_sub_field('primary_cta_link');

$have_secondary_cta = get_sub_field('have_secondary_cta'); // true / false
$secondary_cta_text = get_sub_field('secondary_cta_text');
$secondary_cta_link = get_sub_field('secondary_cta_link');

$top_photo = get_sub_field('top_photo');

$left_photo_x = get_sub_field('left_photo_x');
$left_photo_y = get_sub_field('left_photo_y');

$right_photo_x = get_sub_field('right_photo_x');
$right_photo_y = get_sub_field('right_photo_y');

?>

<section class="product-callout">
  <div class="row middle-xs center-xs start-md">

    <?php if ($left_or_right_side === 'left') { ?>
        <?php if (!$product_photos): ?>
          <?php if( $images ): ?>
              <?php 

              $alignment = 'left-aligned left-aligned--wide-front';
              echo '<div class="images ' . $alignment . '">' 
              ?>
                <div 
                  class="background jarallax" 
                  data-jarallax 
                  data-disable-parallax="/iPad|iPhone|iPod|Android/" 
                  data-speed="0.96">
                  <img 
                    class="jarallax-img" 
                    data-disable-parallax="/iPad|iPhone|iPod|Android/" src="<?php echo wp_get_attachment_image_url( $images[0]['ID'], 'full' ); ?>" alt="">
                </div>
                <div 
                  class="foreground jarallax" 
                  data-disable-parallax="/iPad|iPhone|iPod|Android/" 
                  data-jarallax 
                  data-speed="0.96">
                  <img 
                    class="jarallax-img" 
                    data-disable-parallax="/iPad|iPhone|iPod|Android/" src="<?php echo wp_get_attachment_image_url( $images[1]['ID'], 'full' ); ?>" alt="">
                </div>
              </div>
          <?php endif; ?>
        

        <?php else: ?>
          <?php echo '<div class="product-images ' . $top_photo . '">' ?>
              <img class="background" src="<?php echo wp_get_attachment_image_url( $images[0]['ID'], 'full' ); ?>" alt="">
              <img class="foreground" src="<?php echo wp_get_attachment_image_url( $images[1]['ID'], 'full' ); ?>" alt="">
          </div>
        <?php ?>
      <?php endif; ?>
    
      <div class="col-xs-12 col-md-4 col-lg-5" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
        <div class="box content">
          <?php
            echo '<h4>' . $above_title . '</h4>';
            echo '<h2>' . $title . '</h2>';
            echo '<p>' . $content . '</p>';
          ?>
        </div>
      </div>

    <?php } else { ?>
      <div class="col-xs-12 col-md-4 col-lg-5 last-xs first-md right-content" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
        <div class="content">
          <?php 
            echo '<h4>' . $above_title . '</h4>';
            echo '<h2>' . $title . '</h2>';
            echo '<p>' . $content . '</p>';
           ?>
        </div>
      </div>
      
      <!-- <div class="col-xs-12 col-md-8 col-lg-8 right-aligned first-xs last-md"> -->
        <?php if (!$product_photos): ?>
          <?php if( $images ): ?>
            <?php 

              $alignment = 'right-aligned right-aligned--tall-front';
              echo '<div class="images ' . $alignment . '">' 
              ?>
              
                <div class="background jarallax" data-disable-parallax="/iPad|iPhone|iPod|Android/" data-jarallax data-speed="0.96">
                  <img class="jarallax-img" src="<?php echo wp_get_attachment_image_url( $images[0]['ID'], 'full' ); ?>" alt="">
                </div>
                <div class="foreground jarallax" data-disable-parallax="/iPad|iPhone|iPod|Android/" data-jarallax data-speed="0.96">
                <img class="jarallax-img" src="<?php echo wp_get_attachment_image_url( $images[1]['ID'], 'full' ); ?>" alt="">
                </div>
              </div>
          <?php endif; ?>

          <?php else: ?>
          <?php echo '<div class="product-images ' . $top_photo . '">' ?>
              <img class="background" src="<?php echo wp_get_attachment_image_url( $images[0]['ID'], 'full' ); ?>" alt="">
              <img class="foreground" src="<?php echo wp_get_attachment_image_url( $images[1]['ID'], 'full' ); ?>" alt="">
          </div>
          <?php ?>
        <?php endif; ?>
      <!-- </div> -->



    <?php } ?>
  </div>
  <!-- </div> -->
</section>

<?php if ($have_primary_cta) {

  echo '<a href="' . $primary_cta_link . '">' . $primary_cta_text . '</a>';

} ?>

<?php if ($have_secondary_cta) {

  echo '<a href="' . $secondary_cta_link . '">' . $secondary_cta_text . '</a>';

} ?>

</div>

