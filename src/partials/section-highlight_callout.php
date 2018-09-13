<?php

$title = get_sub_field('title');
$subtext = get_sub_field('subtext');
$images = get_sub_field('gallery');
$url = get_sub_field('url');
$cta_text = get_sub_field('cta_text');


?>

<section class="highlight-callout light--spacing">
  <div class="container">
    <div class="row start-md center-xs">
      <div class="col-xs-12 col-md-5">
        <div class="box">
          <img data-jarallax data-disable-parallax="/iPad|iPhone|iPod|Android/" data-jarallax-element="40" class="top" src="<?php echo wp_get_attachment_image_url( $images[0]['ID'], 'full' ); ?>">
        </div> 
      </div>
      <div class="col-xs-12 col-md-7">
        <div class="box">
          <div class="content">
            <h2><?php echo $title; ?></h2>
            <p><?php echo $subtext; ?></p>
            <a href="<?php echo $url; ?>" target="_blank" class="btn"><?php echo $cta_text; ?></a>
          </div>
        </div> 
      </div>
    </div>
    <div class="row desktop">
      <div class="col-xs-12 col-md-8 col-md-offset-4">
        <div class="left">
          <img data-disable-parallax="/iPad|iPhone|iPod|Android/" data-jarallax-element="-40" src="<?php echo wp_get_attachment_image_url( $images[1]['ID'], 'full' ); ?>">
        </div>
        <div class="right">
          <img data-disable-parallax="/iPad|iPhone|iPod|Android/" data-jarallax-element="40" src="<?php echo wp_get_attachment_image_url( $images[2]['ID'], 'full' ); ?>">
        </div>
      </div>
    </div>
  </div>
</section>
