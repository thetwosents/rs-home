<?php

$above_title = get_sub_field('above_title');
$title = get_sub_field('title');
$content = get_sub_field('content');
$image = get_sub_field('image');

$isH1 = get_sub_field('isH1');

$left_or_right = get_sub_field('left_or_right');

?>

<section class="side-by-side light--spacing">
	<div class="container">
		<div class="row center-xs top-xs start-md">
			<?php if ($left_or_right === 'left') { ?> 

				<div class="col-xs-12 col-md-6">
					<div class="box" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
						<?php if ($isH1) { ?>
							<h1><?php echo $title; ?></h1>
						<?php  } else { ?>
							<h4><?php echo $above_title; ?></h4>
							<h2><?php echo $title; ?></h2>
						<?php } ?>
						<p><?php echo $content; ?></p>
					</div>
				</div>
				<div class="col-xs-12 col-md-6">
					<div class="box">
						<!-- <div class="jarallax"> -->
							<img src="<?php echo $image; ?>">
						<!-- </div> -->
					</div>
				</div>

			<?php } else { ?>
				<div class="col-xs-12 col-md-6">
					<div class="box">
						<!-- <div class="jarallax" > -->
							<img src="<?php echo $image; ?>">
						<!-- </div> -->
					</div>
				</div>
				<div class="col-xs-12 col-md-6">
					<div class="box" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
						<?php if ($isH1) { ?>
							<h1><?php echo $title; ?>
						<?php  } else { ?>
							<h4><?php echo $above_title; ?></h4>
							<h2><?php echo $title; ?></h2>
						<?php } ?>
						<p><?php echo $content; ?></p>
					</div>
				</div>

			<?php } ?>
		</div>
	</div>
</section>