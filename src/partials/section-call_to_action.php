<?php 


$title = get_sub_field('title');
$subtext = get_sub_field('subtext');
$cta_text = get_sub_field('cta_text');
$link = get_sub_field('cta_link');
$is_external = get_sub_field('is_external');
$img = get_sub_field('image');
$internal_link = get_sub_field('internal_link');


// Add option to change text color based on the type of bg image
?>


<section data-jarallax data-speed="0.2" class="jarallax call-to-action-banner">
  <img class="jarallax-img" src="<?php echo $img; ?>" alt="">
  <div class="container">
    <div class="row middle-xs center-xs">
      <div class="col-xs-12 col-md-8">
        <div class="box" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
          <h1 class="text-white"><?php echo $title; ?></h1>
          <p class="text-white"><?php echo $subtext; ?></p>

          <?php if ($is_external) { ?>

            <a class="btn btn-secondary" href="<?php echo $link; ?>" target="_blank"><?php echo $cta_text; ?></a>

          <?php } else { ?>

            <a class="btn btn-secondary" href="<?php echo $internal_link; ?>"><?php echo $cta_text; ?></a>

          <?php } ?>          
        </div>
      </div>
    </div>
  </div>
</section>