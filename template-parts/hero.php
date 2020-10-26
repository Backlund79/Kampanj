<?php

//ACF field taggs.
// hero_img
// hero_title
// hero_text
// cta_button_text
// cta_link
?>

<section>

  <div class="jumbotron"
    style="background-image: url('<?php the_sub_field('hero_img'); ?>')">

    <h1 class="title"><?php the_sub_field('hero_title'); ?>
    </h1>
    <p class="lead"><?php the_sub_field('hero_text'); ?>
    </p>

    <a
      href="<?php the_sub_field('cta_link'); ?>">
      <button type="button" class="btn btn-outline-light btn-lg hero-btn"><span class="cta-btn"><?php the_sub_field('cta_button_text'); ?></span><span><i
            class="fa fa-chevron-right"></i></span>
      </button>

    </a>

  </div>


</section>