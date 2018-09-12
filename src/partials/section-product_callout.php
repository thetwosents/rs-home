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

$has_secondary = get_sub_field('has_secondary');
$secondary_type = get_sub_field('quote_or_stat');
$quote_text = get_sub_field('quote_text');
$quote_img = get_sub_field('quote_img');

$stat_number = get_sub_field('stat_number');
$stat_text = get_sub_field('stat_text');

$class = '';

if ($product_photos) {
  $class = 'has-product';
}

if (count($images) === 1) {
  $class = $class . ' ' . 'has-single';
}

echo '<section class="product-callout ' . $left_or_right_side . ' ' . $class .'">';

?>
  <div class="row middle-md top-xs center-xs start-md">
    <?php if ($left_or_right_side === 'left') { ?>
        <?php if (!$product_photos): ?>
          <?php if( $images ): ?>
            <?php if (count($images) === 1) { ?>
              <div class="images left-aligned--single-image ">
                <img src="<?php echo wp_get_attachment_image_url( $images[0]['ID'], 'full' ); ?>">
              </div>
            <?php } else { ?>

              <?php 

              if ($top_photo === 'wide') {
                $top_photo = 'left-aligned--wide-front';
              } else {
                $top_photo = 'left-aligned--tall-front';
              }

              $alignment = 'left-aligned ' .$top_photo;
              echo '<div class="images ' . $alignment . '">' 
              ?>
                <div 
                  data-jarallax-element="40"
                  class="background jarallax" 
                  data-jarallax 
                  data-speed="0.96" data-disable-parallax="/iPad|iPhone|iPod|Android/">
                  <img 
                    class="jarallax-img" 
                    data-disable-parallax="/iPad|iPhone|iPod|Android/" src="<?php echo wp_get_attachment_image_url( $images[0]['ID'], 'full' ); ?>" alt="">
                </div>
                <div 
                  data-jarallax-element="-40"
                  class="foreground jarallax" 
                  data-jarallax 
                  data-speed="0.96" data-disable-parallax="/iPad|iPhone|iPod|Android/">
                  <img 
                    class="jarallax-img" 
                    data-disable-parallax="/iPad|iPhone|iPod|Android/" src="<?php echo wp_get_attachment_image_url( $images[1]['ID'], 'full' ); ?>" alt="">
                </div>
              </div>

            <?php } ?>
          <?php endif; ?>
        

        <?php else: ?>
          <?php echo '<div class="product-images ' . $top_photo . '">'; ?>
              <img data-disable-parallax="/iPad|iPhone|iPod|Android/" data-jarallax-element="40" class="background" src="<?php echo wp_get_attachment_image_url( $images[0]['ID'], 'full' ); ?>" alt="">
              <img data-disable-parallax="/iPad|iPhone|iPod|Android/" data-jarallax-element="-40" class="foreground" src="<?php echo wp_get_attachment_image_url( $images[1]['ID'], 'full' ); ?>" alt="">
          </div>
        <?php ?>
      <?php endif; ?>
    
      <div class="col-xs-12 col-md-4 col-lg-5" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
        <?php if (count($images) === 1) { ?>

          <div class="box content single-image">

        <?php } else { ?>

          <div class="box content">

        <?php } ?>
          <?php
            echo '<h4 class="title">' . $above_title . '</h4>';
            echo '<h2>' . $title . '</h2>';
            echo '<p>' . $content . '</p>';
          ?>

          <?php if ($have_primary_cta) {

            echo '<a data-aos-anchor-placement="center-bottom" 
            data-aos="fade-up" 
            data-aos-delay="100" href="' . $primary_cta_link . '" class="btn">' . $primary_cta_text . '</a>';

          } ?>
           <?php 
            if ($secondary_type === 'quote') { ?>
              <div class="quote">
                <p data-aos-anchor-placement="center-bottom" 
            data-aos="fade-up" 
            data-aos-duration="1200"><?php echo $quote_text; ?></p>
                <img data-aos-anchor-placement="center-bottom" 
            data-aos="fade-up" 
            data-aos-delay="100" src="<?php echo $quote_img; ?>">
              </div> 
            <?php } else if ($secondary_type === 'stat') { ?>
              <div class="stat">
                <h2 data-aos-anchor-placement="center-bottom" 
            data-aos="fade-up" 
            data-aos-duration="1200"><?php echo $stat_number; ?></h2>
                <h4 data-aos-anchor-placement="center-bottom" 
            data-aos="fade-up" 
            data-aos-delay="100"><?php echo $stat_text; ?></h4>
              </div>
            <?php } ?>
          
        </div>
      </div>

    <?php } else { ?>
      <div class="col-xs-12 col-md-4 col-lg-5 last-xs first-md right-content" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
        <?php if (count($images) === 1) { ?>
          <div class="content single-image">
        <?php } else { ?>
          <div class="content">
        <?php } ?>
          <?php 
            echo '<h4 class="title">' . $above_title . '</h4>';
            echo '<h2>' . $title . '</h2>';
            echo '<p>' . $content . '</p>';
           ?>
           <?php if ($have_primary_cta) {

            echo '<a href="' . $primary_cta_link . '" class="btn">' . $primary_cta_text . '</a>';

          } ?>

          <?php 
            if ($secondary_type === 'quote') { ?>
              <div class="quote">
                <p data-aos-anchor-placement="center-bottom" 
            data-aos="fade-up" 
            data-aos-duration="1200"><?php echo $quote_text; ?></p>
                <img data-aos-anchor-placement="center-bottom" 
            data-aos="fade-up" 
            data-aos-delay="100" src="<?php echo $quote_img; ?>">
              </div> 
            <?php } else if ($secondary_type === 'stat') { ?>
              <div class="stat">
                <h2 data-aos-anchor-placement="center-bottom" 
            data-aos="fade-up" 
            data-aos-duration="1200"><?php echo $stat_number; ?></h2>
                <h4 data-aos-anchor-placement="center-bottom" 
            data-aos="fade-up" 
            data-aos-delay="100"><?php echo $stat_text; ?></h4>
              </div>
            <?php } ?>
        </div>
      </div>
      
      <!-- <div class="col-xs-12 col-md-8 col-lg-8 right-aligned first-xs last-md"> -->
        <?php if (!$product_photos): ?>
          <?php if( $images ): ?>
            <?php if (count($images) === 1) { ?>
              <div class="images right-aligned--single-image">
                <img src="<?php echo wp_get_attachment_image_url( $images[0]['ID'], 'full' ); ?>">
              </div>
            <?php } else { ?>
            <?php 

              if ($top_photo === 'wide') {
                $top_photo = 'right-aligned--wide-front';
              } else {
                $top_photo = 'right-aligned--tall-front';
              }

              $alignment = 'right-aligned ' . $top_photo;
              echo '<div class="images ' . $alignment . '">';
              ?>
              
                <div 
                data-disable-parallax="/iPad|iPhone|iPod|Android/"
                  data-jarallax-element="-40"
                  class="background jarallax" 
                  data-jarallax
                  data-speed="0.96">
                  <img class="jarallax-img" src="<?php echo wp_get_attachment_image_url( $images[0]['ID'], 'full' ); ?>" alt="">
                </div>
                <div 
                data-disable-parallax="/iPad|iPhone|iPod|Android/"
                  data-jarallax-element="40"
                  class="foreground jarallax" 
                  data-jarallax 
                  data-speed="0.96">
                  <img class="jarallax-img" src="<?php echo wp_get_attachment_image_url( $images[1]['ID'], 'full' ); ?>" alt="">
                </div>
              </div>
            <?php } ?>
          <?php endif; ?>

          <?php else: ?>
          <?php echo '<div class="product-images ' . $top_photo . '">' ?>
              <img data-jarallax-element="40" class="background" src="<?php echo wp_get_attachment_image_url( $images[0]['ID'], 'full' ); ?>" alt="">
              <img data-jarallax-element="-40" class="foreground" src="<?php echo wp_get_attachment_image_url( $images[1]['ID'], 'full' ); ?>" alt="">
          </div>
          <?php ?>
        <?php endif; ?>
      <!-- </div> -->



    <?php } ?>
  </div>
  <!-- </div> -->
</section>

</div>

