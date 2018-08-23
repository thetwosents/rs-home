

<section class="testimonial-slider">
  <div class="container">
    <div class="row center-xs">
      <div class="col-xs-12 col-md-10">
        <div class="slider">

          <?php

          $testimonials = get_sub_field('testimonials');

          if( have_rows('testimonials') ):

              while ( have_rows('testimonials') ) : the_row(); 
                $quote = get_sub_field('quote'); 
                $author = get_sub_field('author');
                ?>

          ?>

          <div class="testimonial">
            <h1 class="quote">
              <?php echo $quote; ?>
            </h1>
          </div>

          <?php

             endwhile;
          else :

          endif;

          ?>


        </div>
      </div>
    </div>
  </div>
</section>