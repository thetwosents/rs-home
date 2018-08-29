<?php

$title = get_sub_field('title');
$subtext = get_sub_field('subtext');
$images = get_sub_field('gallery');


?>

<section class="highlight-callout">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-5">
        <div class="box">
          <img class="top" src="<?php echo wp_get_attachment_image_url( $images[0]['ID'], 'full' ); ?>">
        </div> 
      </div>
      <div class="col-xs-12 col-md-7">
        <div class="box">
          <div class="content">
            <h2><?php echo $title; ?></h2>
            <p><?php echo $subtext; ?></p>
            <a href="" class="btn">Buy The Book</a>
          </div>
        </div> 
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-md-8 col-md-offset-4">
        <div class="left">
          <img src="<?php echo wp_get_attachment_image_url( $images[1]['ID'], 'full' ); ?>">
        </div>
        <div class="right">
          <img src="<?php echo wp_get_attachment_image_url( $images[2]['ID'], 'full' ); ?>">
        </div>
      </div>
    </div>
  </div>
</section>
