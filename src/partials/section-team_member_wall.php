

<section class="team-member-wall">
	<div class="container">
		<div class="row">
			<?php

				$team_members = get_sub_field('team_members');

				  if( have_rows('team_members') ):

					  // loop through the rows of data
				    while ( have_rows('team_members') ) : the_row();

				    	// display a sub field value
              $title = get_sub_field('title');
              $name = get_sub_field('name');
              $image = get_sub_field('image');

						?>

						<div class="col-xs-12 col-md-3">
							<div class="box team-member">
								<img src="<?php echo $image; ?>">
								<p><?php echo $title; ?></p>
								<h4><?php echo $name; ?></h4>
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