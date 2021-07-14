<?php

/**
 * Template part for displaying the footer info
 *
 * @package sbh_center
 */

namespace WP_Rig\WP_Rig;

?>

<div>
    <section class="home_footer_accredidations_section">
        <div class="home_footer_accredidations_container">
            <div class="home_footer_accredidations_wrapper">
                <img src="<?php $uploadDir = wp_upload_dir();
                            echo $uploadDir['baseurl'] . '/sbh_center_theme_images/sunshine_gold_badge.jpg' ?>" alt="">
                <?php echo get_field('legitscript_html', 'option') ?>
                <img src="<?php $uploadDir = wp_upload_dir();
                            echo $uploadDir['baseurl']  . '/sbh_center_theme_images/austin_texas_badge_150.jpg' ?>" alt="">
                <img src="<?php $uploadDir = wp_upload_dir();
                            echo $uploadDir['baseurl']  . '/sbh_center_theme_images/colorado_springs_badge_150.png' ?>" alt="">
            </div>
            <div class="footer_copyright_wrapper">
                <p>© <?php echo date("Y"); ?> <?php echo get_field('site_name', 'option') ?> | All Rights Reserved.</p>
            </div>
        </div>
    </section>
</div>