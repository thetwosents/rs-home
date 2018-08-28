<?php

$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$content = get_sub_field('content');

?>

<section class="join-the-family">
	<div class="container">
		<div class="row center-xs start-md">
			<div class="col-xs-12 col-md-12">
				<div class="box">
					<h4><?php echo $title; ?></h4>
				</div>
			</div>
		</div>
		<div class="row center-xs start-md">
			<div class="col-xs-12 col-md-12">
				<div class="box">
					<h2><?php echo $subtitle; ?></h2>
				</div>
			</div>
		</div>
		<div class="row center-xs start-md">
			<div class="col-xs-12 col-md-10">
				<div class="box">
					<p><?php echo $content; ?></p>
				</div>
			</div>
		</div>
	</div>
</section>