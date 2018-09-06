<?php

$highlights = get_sub_field('articles');

?>

<section class="press-timeline">
	<div class="container">
		<div class="row middle-xs center-xs">
			<div class="col-xs-1">
				<div class="circle prev">
					<i class="fas fa-angle-left"></i>
				</div>
			</div>
			<div class="col-xs-10">
				<div class="box">
					<div class="slider">
						<?php 
							if( have_rows('articles') ): while ( have_rows('articles') ) : the_row();

							$title = get_sub_field('title');
							$content = get_sub_field('content');
							$image = get_sub_field('image');
							$url = get_sub_field('url');

							?>
						<div>
							<div class="row middle-xs start-xs">
								<div class="col-xs-3">
									<img src="<?php echo $image; ?>">
								</div>
								<div class="col-xs-9">
									<div class="content">
										<h2><?php echo $title; ?></h2>
										<p><?php echo $content; ?></p>
										<a href="<?php echo $url; ?>" class="btn" target="_blank">View Article</a>
									</div>
								</div>
							</div>	
						</div>

						<?php endwhile; else : endif; ?>
					</div>
				</div>
			</div>
			<div class="col-xs-1 end-xs">
				<div class="circle next">
					<i class="fas fa-angle-right"></i>
				</div>
			</div>
		</div>
	</div>
</section>