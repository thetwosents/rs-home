<?php

/* Variables defined in component */
$above_title = get_sub_field('above_title');
$title = get_sub_field('title');
$content = get_sub_field('content');

$image = get_sub_field('image'); // make gallery

$have_primary_cta = get_sub_field('have_primary_cta'); // true / false
$primary_cta_text = get_sub_field('primary_cta_text');
$primary_cta_link = get_sub_field('primary_cta_link');

?>

<section data-jarallax data-speed="0.2" class="masthead jarallax">
  <img class="jarallax-img" src="<?php echo $image; ?>" alt="">
  <div class="container">
    <div class="row middle-xs">
      <div class="col-xs-12 col-md-7 col-lg-9">
        <div class="box">
          <h4><?php echo $above_title; ?></h4>
          <h1><?php echo $title; ?></h1>
          <p><?php echo $content; ?></p>
        </div>
      </div>
    </div>
  </div>
</section>