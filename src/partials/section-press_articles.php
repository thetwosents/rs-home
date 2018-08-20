<?php



$title = get_sub_field('title');
$subtext = get_sub_field('subtext');
$count = get_sub_field('count');
$load_more = get_sub_field('load_more');

$args = array(
  'cat' => 'press',
  'posts_per_page' => $count
);

$posts = new WP_Query($args);

?>

<section class="press-articles">
  <div class="container">
    <div class="row">
    <?php if ($posts->have_posts()): while ($posts->have_posts()) : $posts->the_post(); ?>
      <div class="col-xs-12 col-md-4">
        <div class="box">
          <h4><?php echo get_the_title(); ?></h4>
          <p><?php echo get_the_excerpt(); ?></p>
          <a href="" class="btn">View</a>
        </div>
      </div>
    <?php endwhile; ?>

    <?php else : ?>

      <!-- article -->
      <article>
        <h2><?php esc_html_e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
      </article>
      <!-- /article -->

    <?php endif; ?>
    </div>
  </div>
</section>