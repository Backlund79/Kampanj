<?php

//ACF field taggs.
// image
// text
// text_color
// cta_button_text
// cta_link
?>

<section>
  <div class="center-image"
    style="background-image: url('<?php the_sub_field('image'); ?>')">
    <div class="container">
      <div class="row center">
        <div class="mt-5 text-shadow"
          style="color: <?php the_sub_field('text_color'); ?>">
          <?php the_sub_field('text'); ?>
        </div>
        <a
          href="<?php the_sub_field('cta_link'); ?>">
          <button type="button" class="btn btn-outline-light btn-lg hero-btn"><span class="cta-btn"><?php the_sub_field('cta_button_text'); ?></span><span><i
                class="fa fa-chevron-right"></i></span>
          </button>

        </a>
      </div>
    </div>
  </div>
</section>