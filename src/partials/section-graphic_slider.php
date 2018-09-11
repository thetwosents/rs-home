<?php

$title = get_sub_field('title');
$subheader = get_sub_field('subheader');

?>

<section class="graphic-slider">
	<div class="container">
		<div class="row title middle-xs center-xs">
			<div class="col-xs-12 col-md-6">
				<div class="box">
					<div class="content">
						<h4><?php echo $title; ?></h4>
						<p><?php echo $subheader; ?></p>
					</div>
				</div>
			</div>
		</div>
		<div class="row contents middle-xs center-xs">
			
				<?php

				if( have_rows('steps') ): while ( have_rows('steps') ) : the_row();

					$icon = get_sub_field('icon');
					$title = get_sub_field('title');
					$description = get_sub_field('description');

					?>
					<div class="col-xs">
						<div class="box">
							<div class="content">
								<div class="align">
									<div class="icon">
										<img src="<?php echo $icon; ?>">
									</div>
									<h4><?php echo $title; ?></h4>
								</div>
								<p><?php echo $description; ?></p>
							</div>
						</div>
					</div>
					
					<?php endwhile; else : endif; ?>
			</div>
		</div>
	</div>
</section>