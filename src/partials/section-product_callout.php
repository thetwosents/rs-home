<?php

/* Variables defined in component */
$left_or_right_side = get_sub_field('left_or_right_side');
$above_title = get_sub_field('above_title');
$title = get_sub_field('title');
$content = get_sub_field('content');

$images = get_sub_field('images'); // make gallery

$product_photos = get_sub_field('product_photos');

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

<section class="product-callout <?php if ($product_photos) {echo 'product-photos'; } ?>">
  <div class="container">
    <div class="row middle-xs">

  <?php if ($left_or_right_side === 'left') { ?>

    <div class="col-xs-12 col-md-8 col-lg-7">
      <?php if( $images ): ?>
          <div class="images">
            <div class="background jarallax" style="margin-top: <?php echo $left_photo_y; ?>px; margin-left: <?php echo $left_photo_x; ?>px;" data-jarallax data-disable-parallax="/iPad|iPhone|iPod|Android/" data-speed="0.96">
              <img class="jarallax-img" data-disable-parallax="/iPad|iPhone|iPod|Android/" src="<?php echo wp_get_attachment_image_url( $images[0]['ID'], 'full' ); ?>" alt="">
            </div>
            <div class="foreground jarallax" style="margin-top: <?php echo $right_photo_y; ?>px; margin-left: <?php echo $right_photo_x; ?>px;" data-disable-parallax="/iPad|iPhone|iPod|Android/" data-jarallax data-speed="0.96">
            <img class="jarallax-img" data-disable-parallax="/iPad|iPhone|iPod|Android/" src="<?php echo wp_get_attachment_image_url( $images[1]['ID'], 'full' ); ?>" alt="">
            </div>
          </div>
      <?php endif; ?>
    </div>
    <div class="col-xs-12 col-md-4 col-lg-4 content" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
      <?php if ($above_title) {
        echo '<h4>' . $above_title . '</h4>';
      } ?>

      <?php if ($title) {
        echo '<h2>' . $title . '</h2>';
      } ?>

      <?php if ($content) {
        echo '<p>' . $content . '</p>';
      } ?>
    </div>

    <?php } else { ?>

      <div class="col-xs-12 col-md-4 col-lg-4 content last-xs first-md" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
        <?php if ($above_title) {
          echo '<h4>' . $above_title . '</h4>';
        } ?>

        <?php if ($title) {
          echo '<h2>' . $title . '</h2>';
        } ?>

        <?php if ($content) {
          echo '<p>' . $content . '</p>';
        } ?>
      </div>
      <div class="col-xs-12 col-md-8 col-lg-8 right-aligned first-xs last-md">
        <?php if( $images ): ?>
            <div class="images">
              <div class="background jarallax" style="margin-top: <?php echo $left_photo_y; ?>px; margin-left: <?php echo $left_photo_x; ?>px;" data-disable-parallax="/iPad|iPhone|iPod|Android/" data-jarallax data-speed="0.96">
                <img class="jarallax-img" src="<?php echo wp_get_attachment_image_url( $images[0]['ID'], 'full' ); ?>" alt="">
              </div>
              <div class="foreground jarallax" style="margin-top: <?php echo $right_photo_y; ?>px; margin-left: <?php echo $right_photo_x; ?>px;" data-disable-parallax="/iPad|iPhone|iPod|Android/" data-jarallax data-speed="0.96">
              <img class="jarallax-img" src="<?php echo wp_get_attachment_image_url( $images[1]['ID'], 'full' ); ?>" alt="">
              </div>
            </div>
        <?php endif; ?>
      </div>

    <?php } ?>
  </div>
  </div>
</section>

<?php if ($have_primary_cta) {

  echo '<a href="' . $primary_cta_link . '">' . $primary_cta_text . '</a>';

} ?>

<?php if ($have_secondary_cta) {

  echo '<a href="' . $secondary_cta_link . '">' . $secondary_cta_text . '</a>';

} ?>

</div>

