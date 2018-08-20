<?php 

 $process_title = get_sub_field('process_title');
  $process_subheading = get_sub_field('process_subheading');

?>

<section class="process-steps">
  <div class="container">
    <div class="row center-xs middle-xs">
      <div class="col-xs-12 col-md-12">
        <h1><?php echo $process_title; ?></h1>
        <h3><?php echo $process_subheading; ?></h3>
      </div>
    </div>
    <div class="row center-xs top-md">

      <?php

     

      $steps = get_sub_field('steps'); // make gallery

        if( have_rows('steps') ):

          // loop through the rows of data
            while ( have_rows('steps') ) : the_row();

            $title = get_sub_field('title');
            $subtext = get_sub_field('subtext');
            $image = get_sub_field('image');

      ?>

      <div class="col-xs-12 col-md-3" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
        <div class="box">
          <div class="step">
            <img src="<?php echo $image; ?>">
            <h2><?php echo $title; ?></h2>
            <p><?php echo $subtext; ?></p>
          </div>
        </div>
      </div>


<?php 

   endwhile;

else :

    // no rows found

endif;

?>

</div>
</div>
</section>