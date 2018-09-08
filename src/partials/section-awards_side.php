<?php

$awards = get_sub_field('awards');

?>

<section class="awards-side light--spacing">
	<div class="container">
		<div class="row center-xs middle-xs">
			<div class="col-xs-12 col-md-10">
				<div class="slider">
					<?php if( have_rows('awards') ): while ( have_rows('awards') ) : the_row(); 

						$title = get_sub_field('title');
						$image = get_sub_field('image');
						?>
						<div class="logo">
							<img src="<?php echo $image; ?>">
						</div>

					<?php endwhile; else : endif; ?>

				</div>
			</div>
		</div>
	</div>
</section>