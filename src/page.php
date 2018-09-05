<?php 

get_header(); ?>

<main class="main" role="main">
<?php // open the WordPress loop
if (have_posts()) : while (have_posts()) : the_post();
the_content();
endwhile; endif; // close the WordPress loop ?>
</main>

<?php get_footer(); ?>
