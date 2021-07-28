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

$centerValblock_editorue = get_field('site_name', 'option');

?>

<main id="primary" class="block_editor">
    <?php get_template_part('template-parts/acf_block_declaration'); ?>
</main> <?php
        get_footer();
