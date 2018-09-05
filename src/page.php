<?php 

get_header(); ?>

<main class="main" role="main">
<?php // open the WordPress loop
if (have_posts()) : while (have_posts()) : the_post(); ?>

  <section class="page">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-12">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </section>
<?php endwhile; endif; // close the WordPress loop ?>
</main>

<?php get_footer(); ?>
