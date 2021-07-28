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
$testimonialSlideNumber = 0;

?>


<main id="primary" class="maxWidth about_page">
    <?php get_template_part('template-parts/heros/desktop_and_mobile_hero_full_width_about'); ?>
    <div class="content_container">
        <!-- Content Left Drawing Right -->
        <section class="about_page_location_section">
            <div class="about_page_location_container">
                <h2><?= get_field('about_page_-_location_headline') ?></h2>
                <div class="about_page_location_wrapper">
                    <div class="about_page_location_content_wrapper">
                        <?= get_field('about_page_-_location_content_wysiwyg') ?>
                    </div>

                    <div class="about_page_location_iframe_wrapper">
                        <img src="<?= get_field('about_page_center_drawn_image')['url'] ?>" alt="" class="about_page_center_image">
                    </div>
                </div>
            </div>
        </section>

        <!-- Treatment List -->
        <section class="about_page_treatment_list_section">
            <div class="about_page_treatment_list_container" style="<?= !empty(get_field('about_page_treatment_list_background_image')) ? 'background: no-repeat center/url(' . get_field('about_page_treatment_list_background_image')['url'] .  ');' : '' ?>">
                <h2><?= get_field('about_page_treatment_list_items_headline') ?></h2>
                <ul>
                    <?php
                    if (have_rows('about_page_treatment_list_items')) :
                        while (have_rows('about_page_treatment_list_items')) : the_row();
                    ?>
                            <li>
                                <img src="<?= get_template_directory_uri() . '/icons/checkmark_icon.png' ?>" alt="" loading="lazy"> <?= get_sub_field('text') ?>
                            </li>
                    <?php
                        endwhile;
                    endif;
                    ?>
                </ul>
            </div>
        </section>


        <!-- Expandable Row and Map -->
        <section class="about_page_expandable_row_section">
            <div class="about_page_expandable_row_container">
                <div class="about_page_expandable_row_wrapper">
                    <?php
                    if (have_rows('about_page_expandable_rows')) :
                        while (have_rows('about_page_expandable_rows')) : the_row();
                    ?>
                            <div class="expandable_row_element">
                                <div class="expandable_row_element_headline_img_wrapper">
                                    <h5><?= get_sub_field('headline') ?></h5>
                                    <img src="<?= get_field('plus_icon', 'option')['url'] ?>" alt="">
                                </div>

                                <div class="expandable_row_content hide">
                                    <p><?= get_sub_field('content') ?></p>
                                    <a href=""></a>
                                </div>
                            </div>
                    <?php
                        endwhile;
                    endif;
                    ?>
                </div>
                <div class="about_page_expandable_row_location_container">
                    <iframe src="<?= get_field('about_page_iframe') ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                    <div class="about_page_location_address">
                        <a href="<?= get_field('about_page_address_url')['url'] ?>" target="<?= get_field('about_page_address_url')['target'] ?>"><span>Address: </span><?= get_field('center_address', 'option') ?></a>
                    </div>
                </div>
            </div>`
        </section>

        <!-- Treatment Step Carousel -->
        <?= do_shortcode('[treatment_step_carousel]') ?>


        <?php

        $about_testimonials = get_field('about_page_testimonials');

        ?>
        <!-- Accreditation and Testimonial -->
        <section class="about_page_testimonial_section accreditation_and_testimonial--testimonial">
            <div class="about_page_badge_container">
                <h2>Our Accreditation</h2>
                <div class="center_page_badges_wrapper">
                    <?= get_field('legitscript_html', 'option') ?>

                    <?php
                    if (have_rows('footer_badges', 'option')) :
                        while (have_rows('footer_badges', 'option')) : the_row();
                    ?>
                            <img loading="lazy" src="<?= get_sub_field('badge', 'option')['url']; ?>" alt="">
                    <?php
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
            <div class="about_page_testimonial_container">
                <?php foreach ($about_testimonials as $testimonial) : ?>
                    <div class="carousel-slide">
                        <?= $testimonial['testimonial']; ?>
                    </div>
                <?php endforeach; ?>

                <img src="<?= get_template_directory_uri() . '/icons/five_stars.png' ?>" alt="" loading="lazy">
                <?php if (count($about_testimonials) > 1) : ?>
                    <div style="text-align:center">
                        <a class="prev m-r-150" onclick="plusSlides(-1)">&#10094;</a>
                        <?php foreach ($about_testimonials as $testimonial) : ?>
                            <span class="dot" onclick="currentSlide(<?= $testimonialSlideNumber++ ?>)"></span>
                        <?php endforeach; ?>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    </div>
                <?php endif; ?>
            </div>
        </section>
    </div>
</main> <?php
        get_footer();
