<?php

$title = get_sub_field('title');
$above_title = get_sub_field('above_title');
$content = get_sub_field('content');
$image = get_sub_field('image');

?>

<section class="perks-wall">
  <div class="container">
    <div class="row start-xs middle-xs start-md">
      <div class="col-xs-12 col-md-5">
        <h4><?php echo $above_title; ?></h4>
        <h1><?php echo $title; ?></h1>
        <p><?php echo $content; ?></p>
      </div>
      <div class="col-xs-12 col-md-2 award">

      </div>
    </div>
    <div class="row start-xs start-md perks">

      <?php

      $count = 1;

      $perks = get_sub_field('perks'); // make gallery

      if( have_rows('perks') ):

          while ( have_rows('perks') ) : the_row();

              // display a sub field value
              $perk_title = get_sub_field('perk_title');
              $perk_content = get_sub_field('perk_content'); ?>

              
            <?php 

            if ($count < 9) { ?>

              <div class="col-xs-12 col-md-3">
                <div class="box perk">
                  <div class="top-line"></div>
                  <h4><?php echo $perk_title; ?></h4>
                  <p><?php echo $perk_content; ?></p>
                </div>
              </div> 


            <?php  }

            if ($count === 8) { ?>
              </div>

              <div class="row start-xs start-md first-md last-xs">
                <div class="col-xs-12 col-md-6">
                  <div class="jarallax perk-gallery" data-jarallax data-speed="0.96">
                    <img class="jarallax-img" src="<?php echo $image; ?>" alt="">
                  </div>
                </div> 
                <div class="col-xs-12 col-md-6 first-xs last-md extra-perks">
                  <div class="row">
            <?php }

            if ($count > 8) { ?>

              <div class="col-xs-12 col-md-6">
                <div class="box perk">
                  <div class="top-line"></div>
                  <h4><?php echo $perk_title; ?></h4>
                  <p><?php echo $perk_content; ?></p>
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