<!DOCTYPE html>

<head>

  <title>Document</title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  Head
  <hr>
  <?php
  if (have_rows('acf_hero')) {
      while (have_rows('acf_hero')) {
          the_row();
          if (get_row_layout() == 'acf_hero_section') {
              get_template_part('template-parts/hero');
          }
      }
  }
