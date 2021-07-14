<?php get_template_part('template-parts/javascript/expandableRowsShortcodeJs'); ?>
<?php get_template_part('template-parts/javascript/accordion_with_toc_JS'); ?>

<div class="accordion_with_toc_container">
    <section class="accordion_with_toc_toc_section">
        <!-- Table of Contents for Accordions with TOC inserted here-->
    </section>
    <?php
    if (have_rows('accordions_with_toc-repeater')) :
        while (have_rows('accordions_with_toc-repeater')) : the_row(); ?>
            <section class="expandable_rows_shortcode_section">
                <div class="expandable_rows_shortcode_container">
                    <?php
                    if (have_rows('accordions_with_toc-element_repeater')) :
                        while (have_rows('accordions_with_toc-element_repeater')) : the_row();
                    ?>
                            <?php if (get_sub_field('is_group_headline')) : ?>
                                <h2><?php echo get_sub_field('headline_text') ?></h2>
                            <?php else : ?>
                                <div class="expandable_row_element">
                                    <div class="expandable_row_element_headline_img_wrapper">
                                        <h3><?php echo get_sub_field('headline_text') ?></h3>
                                        <img src="<?php echo get_field('plus_icon', 'option')['url'] ?>" loading="lazy" alt="">
                                    </div>
                                    <div class="expandable_row_content hide">
                                        <p><?php echo get_sub_field('content') ?></p>
                                    </div>
                                </div>
                            <?php endif; ?>
                    <?php
                        endwhile;
                    endif;
                    ?>
                </div>
            </section>
    <?php
        endwhile;
    endif;
    ?>
</div>