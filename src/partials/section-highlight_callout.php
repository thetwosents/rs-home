<?php

$title = get_sub_field('title');
$subtext = get_sub_field('subtext');
$gallery = get_sub_field('gallery');


?>

<section class="highlight-callout">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6">
        <div class="box">
          
        </div> 
      </div>
      <div class="col-xs-12 col-md-6">
        <div class="box">
          <h2><?php echo $title; ?></h2>
          <p><?php echo $subtext; ?></p>
        </div> 
      </div>
    </div>
  </div>
</section>
