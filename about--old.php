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


<main id="primary" class="maxWidth about_page">
    <?php get_template_part('template-parts/heros/desktop_and_mobile_hero_full_width_about'); ?>

    <div class="content_container">
        <!-- Content Left Drawing Right -->
        <section class="about_page_location_section">
            <div class="about_page_location_container">
                <h2><?php echo get_field('about_page_-_location_headline') ?></h2>
                <div class="about_page_location_wrapper">
                    <div class="about_page_location_content_wrapper">
                        <?php echo get_field('about_page_-_location_content_wysiwyg') ?>
                    </div>

                    <div class="about_page_location_iframe_wrapper">
                        <img src="<?php echo get_field('about_page_center_drawn_image')['url'] ?>" alt="" class="about_page_center_image">
                    </div>
                </div>
            </div>
        </section>

        <!-- Treatment List -->
        <section class="about_page_treatment_list_section">
            <div class="about_page_treatment_list_container">
                <h2><?php echo get_field('about_page_treatment_list_items_headline') ?></h2>
                <ul>
                    <?php
                    if (have_rows('about_page_treatment_list_items')) :
                        while (have_rows('about_page_treatment_list_items')) : the_row();
                    ?>
                            <li>
                                <img src="<?php echo get_template_directory_uri() . '/icons/checkmark_icon.png' ?>" alt="" loading="lazy"> <?php echo get_sub_field('text') ?>
                            </li>
                    <?php
                        endwhile;
                    endif;
                    ?>
                </ul>
            </div>
        </section>

        <!-- Accreditation and Testimonial -->
        <section class="about_page_testimonial_section">
            <div class="about_page_badge_container">
                <h2>Our Accreditation</h2>
                <div class="center_page_badges_wrapper">
                    <?php echo get_field('legitscript_html', 'option') ?>

                    <?php
                    if (have_rows('footer_badges', 'option')) :
                        while (have_rows('footer_badges', 'option')) : the_row();
                    ?>
                            <img loading="lazy" src="<?php echo get_sub_field('badge', 'option')['url']; ?>" alt="">
                    <?php
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
            <div class="about_page_testimonial_container">
                <p><?php echo get_field('about_page_testimonial') ?></p>
                <p><?php echo get_field('about_page_testimonial_name') ?></p>
                <img src="<?php echo get_template_directory_uri() . '/icons/five_stars.png' ?>" alt="" loading="lazy">
            </div>
        </section>

        <!-- Expandable Rows and Location iframe -->
        <section class="about_page_expandable_row_section">
            <div class="about_page_expandable_row_container">
                <div class="about_page_expandable_row_wrapper">
                    <?php
                    if (have_rows('about_page_expandable_rows')) :
                        while (have_rows('about_page_expandable_rows')) : the_row();
                    ?>
                            <div class="expandable_row_element">
                                <div class="expandable_row_element_headline_img_wrapper">
                                    <h5><?php echo get_sub_field('headline') ?></h5>
                                    <img src="<?php echo get_field('plus_icon', 'option')['url'] ?>" alt="">
                                </div>

                                <div class="expandable_row_content hide">
                                    <p><?php echo get_sub_field('content') ?></p>
                                    <p></p>
                                </div>
                            </div>
                    <?php
                        endwhile;
                    endif;
                    ?>
                </div>
                <div class="about_page_expandable_row_location_container">
                    <iframe src="<?php echo get_field('about_page_iframe') ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                    <div class="about_page_location_address">
                        <a href="<?php echo get_field('about_page_iframe') ?>"><span>Address: </span>27123 Calle Arroyo #2121, San Juan Capistrano, CA 92675</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Treatment Step Carousel -->
        <?php echo do_shortcode('[treatment_step_carousel]') ?>
    </div>
</main> <?php
        get_footer();
