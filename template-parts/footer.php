<?php

//ACF field taggs.
// left_title
// left_text
// center_title
// center_text
// right_title
// color
// text_color

// ACF repeater field
    // social_media_links
      // social_media_icons
        // dashicons dashicons-facebook : Facebook
        // dashicons dashicons-linkedin : LinkedIn
        // dashicons dashicons-instagram : Instagram
        // dashicons dashicons-twitter : Twitter
      // media_link
      // social_media_icon_color

?>

<footer>
  <div
    style="background-color:<?php the_sub_field('color'); ?>"
    class="footer">

    <div class="row pt-5">
      <div class="col-md-4 text-center">
        <h2
          style="color:<?php the_sub_field('text_color'); ?>">
          <?php the_sub_field('left_title'); ?>
        </h2>

        <p class="pl-4"
          style="color:<?php the_sub_field('text_color'); ?>">
          <?php the_sub_field('left_text'); ?>
        </p>

      </div>
      <div class="col-md-4">
        <h2
          style="text-align:center; color:<?php the_sub_field('text_color'); ?>">
          <?php the_sub_field('center_title'); ?>
        </h2>
        <p class="pl-4"
          style="color:<?php the_sub_field('text_color'); ?>">
          <?php the_sub_field('center_text'); ?>
        </p>
      </div>
      <div class="col-md-4">
        <h2 class="pr-4"
          style="color:<?php the_sub_field('text_color'); ?>; text-align: right;">
          <?php the_sub_field('right_title'); ?>
        </h2>
        <ul>
          <?php
          if (have_rows('social_media_links')) {
              while (have_rows('social_media_links')) {
                  the_row(); ?>
          <li class="social-media pr-4"> <a
              href="<?php the_field('media_link') ?>">
              <span
                style="color:<?php the_sub_field('social_media_icon_color'); ?>"
                class="dashicons <?php the_sub_field('social_media_icons') ?> "></span>
            </a></li>

          <?php
              }
          }
        ?>
        </ul>
      </div>
    </div>

  </div>

</footer>