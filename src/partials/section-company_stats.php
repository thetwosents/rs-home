<?php

?>

<section class="company-stats">
	<div class="container">
		<div class="row top-xs start-xs">

			<?php 

			if( have_rows('steps') ): while ( have_rows('steps') ) : the_row();


				$title = get_sub_field('title');
				$content = get_sub_field('content');

				$stat_1_number = get_sub_field('stat_1_number');
				$stat_1_text = get_sub_field('stat_1_text');
				$stat_2_number = get_sub_field('stat_2_number');
				$stat_2_text = get_sub_field('stat_2_text');

				$cta_text = get_sub_field('cta_text');
				$cta_link = get_sub_field('cta_link');

			?>
			

			<div class="col-xs-12 col-md-4">
				<div class="box">
					<div class="content">
						<h2><?php echo $title; ?></h2>
						<?php echo $content; ?>
						<div class="mobile">
							<div class="stat">
								<h1><?php echo $stat_1_number; ?></h1>
								<h4><?php echo $stat_1_text; ?></h4>
							</div>
							<div class="stat">
								<h1><?php echo $stat_2_number; ?></h1>
								<h4><?php echo $stat_2_text; ?></h4>
							</div>
							<a href="<?php echo $cta_link; ?>" class="btn"><?php echo $cta_text; ?></a>
						</div>
					</div>
				</div>	
			</div>
			<div class="col-xs-12">
				<div class="box desktop">
					<div class="stat">
						<h1><?php echo $stat_1_number; ?></h1>
						<h4><?php echo $stat_1_text; ?></h4>
					</div>
					<div class="stat">
						<h1><?php echo $stat_2_number; ?></h1>
						<h4><?php echo $stat_2_text; ?></h4>
					</div>
					<a href="<?php echo $cta_link; ?>" class="btn"><?php echo $cta_text; ?></a>
				</div>
			</div>

			<?php endwhile; else : endif; ?>
			
		</div>
		<!-- <div class="row center-xs top-xs">
			<div class="col-xs-12 col-md-4">
				<div class="box">
					<div class="stat">
						<h1>4,500+</h1>
						<h4>Retailers</h4>
					</div>
					<div class="stat">
						<h1>1M</h1>
						<h4>Brands</h4>
					</div>

				</div>
			</div>
			<div class="col-xs-12 col-md-4">
				<div class="box">
					<div class="stat">
						<h1>30K</h1>
						<h4>Influencers</h4>
					</div>
					<div class="stat">
						<h1>100+</h1>
						<h4>Countries</h4>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-4">
				<div class="box">
					<div class="stat">
						<h1>430M</h1>
						<h4>Unique Consumers</h4>
					</div>
					<div class="stat">
						<h1>$1B</h1>
						<h4>Annual Online Sales</h4>
					</div>
				</div>
			</div>
		</div> -->
	</div>
</section>