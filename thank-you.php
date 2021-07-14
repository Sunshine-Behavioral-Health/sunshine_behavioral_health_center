<?php

/**
 * Template Name: Thank You
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

<main id="primary" class="thank_you_page">
    <?php get_template_part('template-parts/heros/desktop_and_mobile_hero_full_width'); ?>
    
    <div class="thank_you_page_main_content">
        <!-- Page Content -->
        <section class="page_content list_styling">
            <?php echo get_field('thank_you_top_content') ?>
        </section>
    </div>

    <div class="page_grid">
        <div class="page_wrapper thank_you_page_wrapper">
            <section class="page_content thank_you_infographic_container">
                <?php echo get_field('thank_you_infographic_wysiwyg') ?>
            </section>
        </div>
        <?php get_sidebar('dynamic'); ?>
    </div>
</main>
<?php
get_footer();
