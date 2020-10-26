<?php get_header(); ?>

<?php
if (have_rows('acf_sections')) {
    while (have_rows('acf_sections')) {
        the_row();
        if (get_row_layout() == 'acf_spacer_section') {
            get_template_part('template-parts/spacer');
        }
        if (get_row_layout() == 'acf_left_block_section') {
            get_template_part('template-parts/left-block');
        }
        if (get_row_layout() == 'acf_right_block_section') {
            get_template_part('template-parts/right-block');
        }
        if (get_row_layout() == 'acf_center_section') {
            get_template_part('template-parts/center-img');
        }
        if (get_row_layout() == 'acf_testeminal_section') {
            get_template_part('template-parts/');
        }
    }
}
?>
<?php get_footer();
