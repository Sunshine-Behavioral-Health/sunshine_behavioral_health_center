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
            <div class="about_page_treatment_list_container" <?= !empty(get_field('about_page_treatment_list_background_image')) ? 'style= url(' . get_field('about_page_treatment_list_background_image') .  ');' : '' ?>>
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



        <!-- Expandable Rows and Location iframe -->
        <section class="location-and-accordion" style="<?= !empty($backgroundImage) ? "background-image:url({$backgroundImage}) !important;" : "" ?>">
            <div class="row wrapper">
                <div class="col-xs-12 col-md-5">
                    <div class="center_location flex flex-column justify-center">
                        <iframe src="<?= $iframe ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                        <a href="<?= $link['url'] ?>" style="<?= !empty($addressBackgroundColor) ? "background-color:{$addressBackgroundColor} !important;" : "" ?>"><span>Address: </span><?= $address ?></a>
                    </div>
                </div>
                <div class="col-xs-12 col-md-7 flex flex-column justify-center">
                    <?php foreach ($accordions as $accordion) : ?>
                        <div class="accordion" style="<?= !empty($borderColor) ? "border-color:{$borderColor} !important;" : "" ?>">
                            <div class="accordion_top">
                                <h5 style="<?= !empty($borderColor) ? "color:{$borderColor} !important;" : "" ?>"><?= $accordion['headline'] ?></h5>
                                <img class="accordion_icon" src="<?php echo get_field('plus_icon', 'option')['url'] ?>" loading="lazy" alt="Plus icon">
                            </div>

                            <div class="accordion_bottom flex flex-column">
                                <p><?= $accordion['content'] ?></p>

                                <?php if ($accordion['add_cta']) : ?>
                                    <?php if ($accordion['cta_type'] == "link") : ?>
                                        <a class="button" href="<?= $accordion['link']['url'] ?>" target="<?= $accordion['link']['target'] ?>"><?= $accordion['link']['title'] ?></a>
                                    <?php else : ?>
                                        <a class="invocaNumber button" href="tel:949-276-2886">949-276-2886</a>
                                <?php endif;
                                endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Treatment Step Carousel -->
        <?php echo do_shortcode('[treatment_step_carousel]') ?>

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

    </div>
</main> <?php
        get_footer();
