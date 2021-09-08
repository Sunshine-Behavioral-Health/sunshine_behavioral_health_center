<?php

/**
 * Template Name: Full Width Hero with Sidebar
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

sbh_center()->print_styles('sbh_center-custom-page-nosidebar', 'sbh_center-content');

$centerValue = get_field('center')

?>



<main id="primary" class="full_width_hero_with_sidebar_page">
    <?php get_template_part('template-parts/heros/desktop_and_mobile_hero_full_width'); ?>
    <div class="page_grid">
        <div class="page_wrapper">
            <!-- Page Content -->
            <section class="page_content list_styling">
                <?php get_template_part('template-parts/content/googleTranslate'); ?>
                <?= get_field('content') ?>
            </section>

            <?php get_template_part('template-parts/content/pageDisclaimer'); ?>

            <?php get_template_part('template-parts/content/phoneTreatmentCta'); ?>
        </div>
        <?php get_sidebar(''); ?>
    </div>
</main> <?php
        get_footer();
