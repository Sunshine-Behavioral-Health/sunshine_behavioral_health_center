<?php

/**
 * Template Name: Insurance Verification
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


<main id="primary" class="insurance_verification_page">
    <?php get_template_part('template-parts/heros/desktop_and_mobile_hero_full_width'); ?>

    <div class="content_container">
        <div class="page_wrapper">
            <!-- Page Content -->
            <section class="page_content">
                <?php get_template_part('template-parts/content/googleTranslate'); ?>
                <?= get_field('content') ?>
            </section>

            <section class="insurance_form_section">
                <div class="insurance_form_wrapper">
                    <?php $insuranceVerificationGForm = '[gravityform id="' . get_field('insurance_verification_form_id', 'option') . '" title="false" description="false"]';
                    echo do_shortcode($insuranceVerificationGForm); ?>
                </div>
            </section>

            <?php get_template_part('template-parts/content/pageDisclaimer'); ?>
        </div>
    </div>
</main>
<?php
get_footer();
