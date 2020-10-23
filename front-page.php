<?php get_header(); ?>
frontpage
<?php
if (have_rows('acf_spacer')) {
    while (have_rows('acf_spacer')) {
        the_row();
        if (get_row_layout() == 'acf_spacer_section') {
            get_template_part('template-parts/spacer');
        }
    }
}
?>
<?php get_footer();
