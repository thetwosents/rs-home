<section class="brand-wall">
  <div class="container">
    <div class="row middle-xs">
      <div class="col-xs-12">
        <div class="logo-slider">

          <?php

          $brands = get_sub_field('brands');
          $size = 'medium';

          if ($brands) {
            foreach($brands as $image) { ?>
                <div class="logo">

                  <?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
                </div>

             <?php 

            }

          }

          ?>
          
        </div>
      </div>
    </div>
  </div>
</section>