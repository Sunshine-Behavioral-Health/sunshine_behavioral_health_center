<?php

/**
 * Template Name: About
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


<main id="primary" class="maxWidth">
    
    <?php get_template_part('template-parts/acf_block_declaration'); ?>

</main> <?php
        get_footer();
