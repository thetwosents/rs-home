<?php

/* Variables defined in component */

$section_title = get_sub_field('section_title');
$category = get_sub_field('category');
$number_of_posts = get_sub_field('number_of_posts');

$version = get_sub_field('version');

$across = get_sub_field('across');

?>

<?php if ($version === 'feed') { 

  $query = new WP_Query( array( 
    'cat' => $category->term_id, 
    'posts_per_page' => $number_of_posts 
  ) ); ?>



<section class="articles-by-category">
  <div class="container">
    <div class="row center-xs middle-xs">
      <div class="col-xs-12 col-md-10">
        <h1><?php echo $section_title; ?></h1>
      </div>
    </div>
    <div class="row">

    <?php if ( $query->have_posts() ) : ?>

      <!-- the loop -->
      <?php while ( $query->have_posts() ) : $query->the_post();  $post_date = get_the_date();

        $url = get_field('url');
      ?>

      <div class="col-xs-12 col-md-offset-2 col-md-8">
        <div class="box">
          <article>
            <a href="<?php echo $url; ?>" target="_blank">
              <h4><?php echo $post_date; ?></h4>
              <h2><?php the_title(); ?></h2>
              <p><?php the_excerpt(); ?></p>
            </a>
          </article>
        </div>
      </div>

        <?php endwhile; ?>
          <!-- end of the loop -->

          <?php wp_reset_postdata(); ?>

        <?php else : ?>
        <?php endif; ?>
    </div>
  </div> 
</section>

<?php } else if ($version === 'pull-quotes') { $query = new WP_Query( array( 'tag' => 'pull-quotes', 'posts_per_page' => $number_of_posts ) ); ?>

<section class="pull-quotes">
  <div class="container">
      <div class="slider">
  <?php if ( $query->have_posts() ) : ?>

      <!-- the loop -->
      <?php while ( $query->have_posts() ) : $query->the_post();  $post_date = get_the_date();

        $url = get_field('url');
        $logo_img = get_field('logo_img');

        ?>
        
          <article>
            <a href="<?php echo $url; ?>" target="_blank">
              <img src="<?php echo $logo_img; ?>">
              <p><?php echo get_the_content(); ?></p>
            </a>
          </article>

      <?php endwhile; ?>
          <!-- end of the loop -->

          <?php wp_reset_postdata(); ?>

        <?php else : ?>
        <?php endif; ?>
      </div>

    </div>
  </div>
</section>

<?php } ?>


      




    


