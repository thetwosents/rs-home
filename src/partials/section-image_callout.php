<?php 

$image = get_sub_field('image_block'); 

?>

<section class="image-callout">
  <div class="container">
    <!-- <div class="row center-xs">
      <div class="col-xs-12 col-md-10">
        <div class="box">
          <h2>Title of image</h2>
          <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</h3>
        </div>
      </div>
    </div> -->
    <div class="row center-xs middle-xs">
      <div class="col-xs-12 col-md-10">
        <div class="box">
          <img src="<?php echo $image; ?>">
        </div>
      </div>  
    </div>
  </div>
</section>