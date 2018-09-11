<?php

$above_title = get_sub_field('above_title');
$title = get_sub_field('title');
$subtext = get_sub_field('subtext');
$vertical_title = '';


$args = array(
    'post_type' => 'rs_verticals',
    'posts_per_page' => -1,
    'orderby' => 'menu_order'
  );

$verticals = new WP_Query($args);
?>

<section class="vertical-carousel light--spacing">
  <div class="container">
    <div class="row center-xs">
      <div class="col-xs-12 col-md-8 col-lg-9">
        <div class="box" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
          <!-- <h4><?php //echo $above_title; ?></h4> -->
          <h1><?php echo $title; ?></h1>
          <p><?php echo $subtext; ?></p>
        </div>
      </div>
    </div>
    <div class="slider">

      <?php if ( $verticals->have_posts() ) : ?>

        <!-- the loop -->
        <?php while ( $verticals->have_posts() ) : $verticals->the_post(); 
        $image = get_the_post_thumbnail_url();
        ?>
          <div><h4><?php echo get_the_title(); ?></h4><img src="<?php echo $image; ?>"></div>
        <?php endwhile; ?>
        <!-- end of the loop -->

        <?php wp_reset_postdata(); ?>

      <?php else : ?>
      <?php endif; ?>
    </div>
  </div>
</section>