<?php
  if (have_rows('acf_sections')) {
      while (have_rows('acf_sections')) {
          the_row();
          if (get_row_layout() == 'acf_footer_section') {
              get_template_part('template-parts/footer');
          }
      }
  }
  ?>


<hr>
footer

<?php wp_footer(); ?>
</body>

</html>