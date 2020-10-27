<?php

//ACF field taggs.
// title
// left
// from_who_left
// right
// from_who_right
// color
// text_color
?>

<section>
  <div
    style="background-color:<?php the_sub_field('color'); ?>"
    class="testemoneal">
    <div class="container">
      <div class="row">
        <h2 class="mt-5"
          style="color:<?php the_sub_field('text_color'); ?>; margin: auto;">
          <?php the_sub_field('title'); ?>
        </h2>
        <div class="row mt-5">
          <div class="col-md-6">
            <blockquote class="blockquote"
              style="color:<?php the_sub_field('text_color'); ?>">
              <p class="mb-0">“<?php the_sub_field('left'); ?>„
              </P>
              <footer
                style="color:<?php the_sub_field('text_color'); ?>"
                class="blockquote-footer ml-5"><cite title="Source Title"><?php the_sub_field('from_who_left'); ?></cite>
              </footer>
            </blockquote>
          </div>
          <div class="col-md-6">
            <blockquote class="blockquote"
              style="color:<?php the_sub_field('text_color'); ?>">
              <p class="mb-0">“<?php the_sub_field('right'); ?>„
              </P>
              <footer
                style="color:<?php the_sub_field('text_color'); ?>"
                class="blockquote-footer ml-5"><cite title="Source Title"><?php the_sub_field('from_who_right'); ?></cite>
              </footer>
            </blockquote>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>