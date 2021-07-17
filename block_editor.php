<?php

/**
 * Template Name: Block Editor
 * Template Post Type: Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package sbh_center
 */

namespace WP_Rig\WP_Rig;

get_header();
get_template_part('template-parts/javascript/navigationJs');
get_template_part('template-parts/javascript/expandableRowsShortcodeJs');


$centerValue = get_field('site_name', 'option');

?>


<main id="primary" class="maxWidth about_page">
    <?php get_template_part('template-parts/content/acf_block_declaration'); ?>
</main> <?php
        get_footer();