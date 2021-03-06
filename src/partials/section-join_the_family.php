<?php

$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$content = get_sub_field('content');

?>

<section class="join-the-family light--spacing">
	<div class="container">
		<div class="row start-xs center-md start-md">
			<div class="col-xs-12 col-md-12">
				<div class="box">
					<h4><?php echo $title; ?></h4>
				</div>
			</div>
		</div>
		<div class="row start-xs start-md">
			<div class="col-xs-12 col-md-12">
				<div class="box">
					<h2><?php echo $subtitle; ?></h2>
				</div>
			</div>
		</div>
		<div class="row start-xs start-md">
			<div class="col-xs-12 col-md-10">
				<div class="box">
					<?php echo $content; ?>
				</div>
			</div>
		</div>
	</div>
</section>