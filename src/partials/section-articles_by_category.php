<?php

/* Variables defined in component */

$section_title = get_sub_field('section_title');
$category = get_sub_field('category');
$number_of_posts = get_sub_field('number_of_posts');

echo '<h2>' . $section_title . '</h2>';
print_r($category); 
echo '<h4>' . $number_of_posts . '</h4>';
$query = new WP_Query( array( 'cat' => $category->term_id ) );
?>

<?php if ( $query->have_posts() ) : ?>

  <!-- the loop -->
  <?php while ( $query->have_posts() ) : $query->the_post(); ?>
    <h2><?php the_title(); ?></h2>
    <p><?php the_excerpt(); ?></p>
  <?php endwhile; ?>
  <!-- end of the loop -->

  <?php wp_reset_postdata(); ?>

<?php else : ?>
  <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
