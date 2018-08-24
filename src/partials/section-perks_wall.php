<?php

$title = get_sub_field('title');
$above_title = get_sub_field('above_title');
$content = get_sub_field('content');
$images = get_sub_field('images');

?>

<section class="perks-wall">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-4">
        <h4><?php echo $above_title; ?></h4>
        <h1><?php echo $title; ?></h1>
        <p><?php echo $content; ?></p>
      </div>
      <div class="col-xs-12 col-md-2">
        <img src="http://placehold.it/300x360">
      </div>
    </div>
    <div class="row perks">

      <?php

      $count = 1;

      $perks = get_sub_field('perks'); // make gallery

      if( have_rows('perks') ):

          while ( have_rows('perks') ) : the_row();

              // display a sub field value
              $perk_title = get_sub_field('perk_title');
              $perk_content = get_sub_field('perk_content'); ?>

              <div class="col-xs-12 col-md-3">
                <div class="box perk">
                  <div class="top-line"></div>
                  <h4><?php echo $perk_title; ?></h4>
                  <p><?php echo $perk_content; ?></p>
                </div>
              </div> 

            <?php 

            if ($count === 8) { ?>
              </div>

              <div class="row">
                <div class="col-xs-12 col-md-6">
                  <div class="jarallax perk-gallery" data-jarallax data-speed="0.96">
                    <img class="jarallax-img" src="http://placehold.it/600x600" alt="">
                  </div>
                </div> 
                <div class="col-xs-12 col-md-6">

                </div>
              </div>
            <?php }

            $count++;
         endwhile;

      else :
      endif;

      ?>
  </div>
</section>