<?php 

$title = get_sub_field('title');
$above_title = get_sub_field('above_title');
$content = get_sub_field('content');
$images = get_sub_field('images');

?>

<section class="values-callout">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-10">
        <div class="box">
          <h4><?php echo $above_title; ?></h4>
          <h1><?php echo $title; ?></h1>
          <p><?php echo $content; ?></p>
          <a href="" class="btn btn-secondary">View positions</a>
        </div>
      </div>
    </div>
    <div class="images">
      <div class="row bottom-xs end-xs">
        <div class="col-xs-8 col-md-8">
          <img src="http://placehold.it/400x300">
        </div>
        <div class="col-xs-4">
          <img src="http://placehold.it/250x150">
        </div>
      </div>
      <div class="row top-xs end-xs">
        <div class="col-xs-offset-1 col-xs-3">
          <img src="http://placehold.it/400x300">
        </div>
        <div class="col-xs-3">
          <img src="http://placehold.it/300x350">
        </div>
        <div class="col-xs-3">
          <img src="http://placehold.it/300x300">
        </div>
      </div>
    </div>
  </div>
</section>
