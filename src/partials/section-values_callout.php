<?php 

$title = get_sub_field('title');
$above_title = get_sub_field('above_title');
$content = get_sub_field('content');
$images = get_sub_field('images');

?>


<section class="values-callout light--spacing">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-10">
        <div class="box">
          <h4><?php echo $above_title; ?></h4>
          <h1><?php echo $title; ?></h1>
          <p><?php echo $content; ?></p>
          <a href="https://www.instagram.com/rewardstylehq/?hl=en" target="_blank" class="btn">Follow Us <i class="fa-instagram"></i></a>
        </div>
      </div>
    </div>
    <div class="images">
      <div class="row bottom-xs end-xs">
        <div class="col-xs-5 col-md-5">
          <img src="<?php echo wp_get_attachment_image_url( $images[0]['ID'], 'medium' ); ?>">
        </div>
        <div class="col-xs-7">
          <img src="<?php echo wp_get_attachment_image_url( $images[1]['ID'], 'full' ); ?>">
        </div>
      </div>
      <div class="row top-xs end-xs">
        <div class="col-xs-4">
          <img src="<?php echo wp_get_attachment_image_url( $images[2]['ID'], 'full' ); ?>">
        </div>
        <div class="col-xs-4">
          <img src="<?php echo wp_get_attachment_image_url( $images[3]['ID'], 'full' ); ?>">
        </div>
        <div class="col-xs-4">
          <img src="<?php echo wp_get_attachment_image_url( $images[4]['ID'], 'full' ); ?>">
        </div>
      </div>
    </div>
  </div>
</section>
