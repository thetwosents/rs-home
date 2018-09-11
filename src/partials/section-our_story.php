<?php 

  $above_title = get_sub_field('above_title');
  $title = get_sub_field('title');
  $content = get_sub_field('content');
  $video = get_sub_field('video');

?>

<section class="our-story light--spacing">
  <div class="container">
    <div class="row center-xs middle-xs">
      <div class="col-xs-12 col-md-12">

      </div>
    </div>
    <div class="row middle-xs">
      <div class="col-xs-12 col-md-4">
        <div class="box">
          <h4><?php echo $above_title; ?></h4>
          <h2><?php echo $title; ?></h2>
          <p><?php echo $content; ?></p>
        </div>
      </div>
      <div class="col-xs-12 col-md-7 col-md-offset-1">
        <div class="box">
          <!-- <iframe width="100%" height="500" src="https://www.youtube.com/embed/CF-sUDSnJz4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> -->
        </div>
      </div>
    </div>
  </div>
</section>