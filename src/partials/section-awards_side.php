<?php

$awards = get_sub_field('awards');

?>

<section class="awards-side light--spacing">
	<div class="container">
		<div class="row center-xs middle-xs">
			<div class="col-xs-12 col-md-12">
				<div class="row middle-xs start-xs">

					<?php if( have_rows('awards') ): while ( have_rows('awards') ) : the_row(); 

						$title = get_sub_field('title');
						$image = get_sub_field('image');
						?>

					<div class="col-xs-12 col-md-4">
						<div class="box">
							<div class="row middle-xs">
								<div class="col-xs-12 col-md-3">
									<img src="<?php echo $image; ?>">
								</div>
								<div class="col-xs-12 col-md-9">
									<h4><?php echo $title; ?></h4>
								</div>
							</div>
						</div>
					</div>

					<?php endwhile; else : endif; ?>

				</div>
			</div>
		</div>
	</div>
</section>