<?php 

$testimonials = get_sub_field('testimonials');

?>

<section class="employee-spotlight light--spacing">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="slider">
						<?php
						if( have_rows('employees') ): while ( have_rows('employees') ) : the_row(); 

							$title = get_sub_field('title');
							$quote = get_sub_field('quote');
							$name = get_sub_field('name');
							$image = get_sub_field('image');
							?>
						<div>
							<div class="row">
								<div class="col-xs-12 col-md-3">
									<img src="<?php echo $image; ?>">
								</div>
								<div class="col-xs-12 col-md-offset-1 col-md-8">
									<h2><?php echo $name; ?></h2>
									<h4><?php echo $title; ?></h4>
									<?php echo $quote; ?>
								</div>
							</div>
						</div>
						<?php endwhile; else : endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
