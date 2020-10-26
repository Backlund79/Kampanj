<?php

//ACF field taggs.
// image
// text
// color
// text_color
?>

<div class="row ">
  <div
    style="background-image: url('<?php the_sub_field('image'); ?>'); background-color: <?php the_sub_field('color'); ?>)"
    class="col-md-6 left-block text-center d-flex align-items-center">
    <div class="left-block-text"
      style="color:<?php the_sub_field('text_color'); ?>">
      <?php the_sub_field('text') ?>
    </div>
  </div>