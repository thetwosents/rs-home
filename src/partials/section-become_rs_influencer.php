<?php
$title = get_sub_field('title');
$subheading = get_sub_field('subheading');
$images = get_sub_field('images');
$content = get_sub_field('content');

?>

<section class="become-rs-influencer">
	<div class="container">
		<div class="row center-xs">
			<div class="col-xs-12 col-md-10">
				<div class="box">
					<h1><?php echo $title; ?></h1>
					<p><?php echo $subheading; ?></p>
				</div>
			</div>
		</div>
		<div class="row top-xs seperator">
			<div class="col-xs-12 col-md-6">
				<div class="box">
					<div class="slider">

						<?php foreach( $images as $image ): ?>
							<div>
								<img src="<?php echo wp_get_attachment_image_url( $image['ID'],'full' ); ?>">
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 content">
				<div class="box">
					<?php echo $content; ?>
				</div>
			</div>
		</div>
	</div>
</section>