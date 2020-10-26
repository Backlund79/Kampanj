<?php

//ACF field taggs.
// title
// color
// text
// text_color
?>

<section>
  <div class="container-fluid text-center full-width">
    <div class="spacer"
      style="background-color:<?php the_sub_field('color'); ?>">
      <h2
        style="color:<?php the_sub_field('text_color'); ?>">
        <?php the_sub_field('title'); ?>
      </h2>
      <div
        style="color:<?php the_sub_field('text_color'); ?>">
        <?php the_sub_field('text'); ?>
      </div>
    </div>
  </div>
</section>