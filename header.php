<!DOCTYPE html>

<head>

  <title><?php the_title(); ?>
  </title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <?php
  if (have_rows('acf_sections')) {
      while (have_rows('acf_sections')) {
          the_row();
          if (get_row_layout() == 'acf_hero_section') {
              get_template_part('template-parts/hero');
          }
      }
  }
?>
  <main>