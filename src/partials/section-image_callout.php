<?php 


$title = get_sub_field('title');
$subheading = get_sub_field('subheading');
$image = get_sub_field('image_block'); 
$bottom_text = get_sub_field('bottom_text');

?>

<section class="image-callout light--spacing">
  <div class="container">
    <div class="row center-xs">
      <div class="col-xs-12 col-md-10">
        <div class="box">
          <h2><?php echo $title; ?></h2>
          <h3><?php echo $subheading; ?></h3>
        </div>
      </div>
    </div>
    <div class="row center-xs middle-xs">
      <div class="col-xs-12 col-md-10">
        <div class="box">
          <img src="<?php echo $image; ?>">
        </div>
      </div>  
    </div>
    <div class="row center-xs">
      <div class="col-xs-12 col-md-10">
        <div class="box">
          <h4><?php echo $bottom_text; ?></h4>
        </div>
      </div>
    </div>
  </div>
</section>