<?php

$title = get_sub_field('title'); // Title
$image = get_sub_field('image'); // Image
$name = get_sub_field('name'); // Name
$bio = get_sub_field('bio'); // Bio

$left_or_right = get_sub_field('left_or_right');

?>



      <?php if ($left_or_right === 'left') { ?>
        <section class="team-member-bio">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-md-4 col-md-offset-1">
                <img src="<?php echo $image; ?>">
              </div>
              <div class="col-xs-12 col-md-6">
                <div class="content">
                  <h4><?php echo $title; ?></h4>
                  <h1><?php echo $name; ?></h1>
                  <p><?php echo $bio; ?></p>
                </div>
              </div>
            </div>
          </div>
        </section>

      <?php } else { ?>
        <section class="team-member-bio">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-md-6 col-md-offset-1">
                <div class="content">
                  <h4><?php echo $title; ?></h4>
                  <h1><?php echo $name; ?></h1>
                  <p><?php echo $bio; ?></p>
                </div>
              </div>
              <div class="col-xs-12 col-md-4">
                <img src="<?php echo $image; ?>">
              </div>
            </div>
          </div>
        </section>

      <?php } ?>

