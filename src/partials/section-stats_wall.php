<section class="stats-wall">
  <div class="container">
    <div class="row center-xs middle-md">
      <?php

      $stats = get_sub_field('stats'); // make gallery

      if( have_rows('stats') ):

        // loop through the rows of data
          while ( have_rows('stats') ) : the_row();

              // display a sub field value
              $number = get_sub_field('number');
              $subtext = get_sub_field('subtext');

              ?>

              <div class="col-xs-12 col-md-3" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                <div class="box">
                  <div class="stat">
                    <h2><?php echo $number; ?></h2>
                    <h4><?php echo $subtext; ?></h4>
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