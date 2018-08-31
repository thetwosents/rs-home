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

<section data-jarallax data-disable-parallax="/iPad|iPhone|iPod|Android/" data-speed="0.2" class="masthead jarallax">
  <img class="jarallax-img" src="<?php echo $image; ?>" alt="">
  <div class="container">
    <div class="row middle-xs">
      <div class="col-xs-12 col-md-7 col-lg-10">
        <div class="box" >
          <!-- <h4><?php echo $above_title; ?></h4> -->
          <h1 data-aos-anchor-placement="top-bottom" data-aos="fade-up" data-aos-duration="1200"><?php echo $title; ?></h1>
          <p data-aos-anchor-placement="top-bottom" data-aos-delay="100" data-aos="fade-up" data-aos-duration="1200"><?php echo $content; ?></p>

          <?php if ($have_primary_cta) { ?>
            <a data-aos="fade-up" data-aos-delay="200" href="<?php echo $primary_cta_link; ?>" class="btn btn-secondary"><?php echo $primary_cta_text; ?></a>
          <?php } ?>
          
        </div>
      </div>
    </div>
  </div>
</section>