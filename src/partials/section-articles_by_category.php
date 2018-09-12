<?php

/* Variables defined in component */

$section_title = get_sub_field('section_title');
$category = get_sub_field('category');
$number_of_posts = get_sub_field('number_of_posts');

$version = get_sub_field('version');

$across = get_sub_field('across');

$selected_articles = get_sub_field('selected_posts');

$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;


?>

<?php if ($version === 'feed') { 

  if ($selected_articles) {
    $query = new WP_Query(array(
      'post__in' => $selected_articles,
      'posts_per_page' => $number_of_posts,
      'suppress_filters' => false,
      'orderby' => 'menu_order',
      'paged'         => $paged,
    ));
  } else {
    $query = query_posts( 
      array( 
      'cat' => $category->term_id, 
      'posts_per_page' => $number_of_posts,
      'paged'         => $paged,
      'suppress_filters' => false // https://wpml.org/documentation/support/wpml-coding-api/
      ) 
    );
  }
   ?>

<section class="articles-by-category light--spacing">
  <div class="container">
    <div class="row center-xs middle-xs">
      <div class="col-xs-12 col-md-10">
        <h1><?php echo $section_title; ?></h1>
      </div>
    </div>
    <div class="row">

    <?php if ( have_posts() ) : ?>

      <!-- the loop -->
      <?php while ( have_posts() ) : the_post();  $post_date = get_the_date();

        $url = get_field('url');
        $logo_img = get_field('logo_img');
      ?>

      <div class="col-xs-12 col-md-12">
        <div class="box">
          <article>
            <div class="row start-xs middle-xs">
              <div class="col-xs-12 col-md-2 image col-md-offset-2">
                <img src="<?php echo $logo_img; ?>">
              </div>
              <div class="col-xs-12 col-md-8">
                <a href="<?php echo $url; ?>" target="_blank">
                  <h4><?php echo $post_date; ?></h4>
                  <h2><?php the_title(); ?></h2>
                  <p><?php the_excerpt(); ?></p>
                </a>
              </div>
            </div>
          </article>
        </div>
      </div>

        <?php endwhile; ?>
          <!-- end of the loop -->

         <!--  <div class="navigation">
            <ul>
              <li><a href="" class="btn">Load more</a></li>
            </ul>
          </div> -->

          <?php wp_reset_postdata(); ?>



        <?php else : ?>


        <?php endif; ?>
    </div>
    <div class="row">
      <div class="col-xs-12 col-md-12">

      </div>
    </div>
  </div> 
</section>

<?php } else if ($version === 'pull-quotes') { 

  if ($selected_articles) {
    $query = new WP_Query(array(
      'post__in' => $selected_articles,
      'posts_per_page' => $number_of_posts,
      'suppress_filters' => false,
      'paged'         => $paged,
      'orderby' => 'menu_order'
    ));
  } else {
  
  $query = new WP_Query( 
    array( 
      'tag' => 'pull-quotes', 
      'paged'         => $paged,
      'posts_per_page' => $number_of_posts 
    ) 
  ); 

  } ?>

<section class="pull-quotes light--spacing">
  <div class="container">
    <div class="row">
      <!-- <div class="slider"> -->
  <?php if ( $query->have_posts() ) : $count = 0; ?>

        <!-- the loop -->
      <?php while ( $query->have_posts() ) : $query->the_post();  $post_date = get_the_date();

        $url = get_field('url');
        $logo_img = get_field('logo_img');
        if ($count < 6) {

        ?>
        <div class="col-xs-12 col-md-4">
          <article>
            <a href="<?php echo $url; ?>" target="_blank">
              <img src="<?php echo $logo_img; ?>">
              <p><?php echo get_the_content(); ?></p>
            </a>
          </article>
        </div>

      <?php } $count++; endwhile; ?>
          <!-- end of the loop -->

          <?php wp_reset_postdata(); ?>

        <?php else : ?>
        <?php endif; ?>
      </div>
    </div>

    </div>
  </div>
</section>

<?php } ?>


      




    


