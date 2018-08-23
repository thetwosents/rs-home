<?php 

  $above_title = get_sub_field('above_title');
  $title = get_sub_field('title');
  $content = get_sub_field('content');
  $video = get_sub_field('video');

?>

<section class="our-story">
  <div class="container">
    <div class="row center-xs">
      <div class="col-xs-12 col-md-12">

      </div>
    </div>
    <div class="row middle-xs">
      <div class="col-xs-12 col-md-3 col-md-offset-1">
        <div class="box">
          <h2><?php echo $title; ?></h2>
          <p><?php echo $content; ?></p>
        </div>
      </div>
      <div class="col-xs-12 col-md-8">
        <div class="box">
          <img src="http://placehold.it/600x400">
        </div>
      </div>
    </div>
  </div>
</section>