<?php

/**
 * Template Name: No Hero No Sidebar
 * Template Post Type: Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package sbh_center
 */

namespace WP_Rig\WP_Rig;

get_header();
get_template_part('template-parts/javascript/navigationJs');

sbh_center()->print_styles('sbh_center-custom-page-nosidebar', 'sbh_center-content');
?>

<main id="primary" class="no_hero_no_sidebar_main">
    <div class="content_container">
        <div class="page_wrapper">
            <!-- Headlines -->
            <section class="no_hero_no_sidebar_headlines_section">
                <?php if (get_field('page_headline')) : ?>
                    <h1><?php echo get_field('page_headline') ?></h1>
                <?php endif; ?>

                <?php if (get_field('page_subheadline_paragraph')) : ?>
                    <p class="headlines_subheadline"><?php echo get_field('page_subheadline_paragraph') ?></p>
                <?php endif; ?>
            </section>

            <!-- Page Content -->
            <?php get_template_part('template-parts/content/googleTranslate'); ?>
            <?php echo get_field('content') ?>

            <?php get_template_part('template-parts/content/pageDisclaimer'); ?>
            <?php get_template_part('template-parts/content/phoneTreatmentCta'); ?>
        </div>
    </div>
</main>
<?php get_footer();
