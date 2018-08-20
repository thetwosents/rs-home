<?php

$title = get_sub_field('title'); // Title
$image = get_sub_field('image'); // Image
$name = get_sub_field('name'); // Name
$bio = get_sub_field('bio'); // Bio

$left_or_right = get_sub_field('left_or_right');

?>


<div class="row">

  <?php if ($left_or_right === 'left') { ?>

    <div class="col-xs-12 col-md-6">
      <img src="<?php echo $image; ?>">
    </div>
    <div class="col-xs-12 col-md-6">
      <div class="content">
        <h4><?php echo $title; ?></h4>
        <h1><?php echo $name; ?></h1>
        <p><?php echo $bio; ?></p>
      </div>
    </div>

  <?php } else { ?>

    <div class="col-xs-12 col-md-6">
      <div class="content">
        <h4><?php echo $title; ?></h4>
        <h1><?php echo $name; ?></h1>
        <p><?php echo $bio; ?></p>
      </div>
    </div>
    <div class="col-xs-12 col-md-6">
      <img src="<?php echo $image; ?>">
    </div>

  <?php } ?>

</div>

