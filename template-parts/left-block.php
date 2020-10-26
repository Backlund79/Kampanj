<?php

//ACF field taggs.
// image
// text
// color
// text_color
?>

<section>
  <div
    style="background-image: url('<?php the_sub_field('image'); ?>')"
    class="col-md-6 left-block vcenter-item text-center">
    <div class="left-block-text"
      style="color:<?php the_sub_field('text_color'); ?>">
      <?php the_sub_field('text') ?>
    </div>

  </div>
</section>