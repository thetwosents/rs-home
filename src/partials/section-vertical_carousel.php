<?php

$above_title = get_sub_field('above_title');
$title = get_sub_field('title');
$subtext = get_sub_field('subtext');
$vertical_title = '';

?>



<section class="vertical-carousel">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-8">
        <div class="box" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
          <h4><?php echo $above_title; ?></h4>
          <h1><?php echo $title; ?></h1>
          <p><?php echo $subtext; ?></p>
        </div>
      </div>
    </div>
    <div class="slider">
      <div><img src="http://placehold.it/400x600"></div>
      <div><img src="http://placehold.it/400x600"></div>
      <div><img src="http://placehold.it/400x600"></div>
      <div><img src="http://placehold.it/400x600"></div>
      <div><img src="http://placehold.it/400x600"></div>
      <div><img src="http://placehold.it/400x600"></div>
      <div><img src="http://placehold.it/400x600"></div>
      <div><img src="http://placehold.it/400x600"></div>
      <div><img src="http://placehold.it/400x600"></div>
    </div>
  </div>
</section>