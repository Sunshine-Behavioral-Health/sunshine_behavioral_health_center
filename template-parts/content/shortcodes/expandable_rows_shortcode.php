<?php get_template_part('template-parts/javascript/expandableRowsShortcodeJs'); ?>

<section class="expandable_rows_shortcode_section">
    <div class="expandable_rows_shortcode_container">
        <?php
        if (have_rows('expandable_row_list')) :
            while (have_rows('expandable_row_list')) : the_row();
        ?>
                <div class="expandable_row_element">
                    <div class="expandable_row_element_headline_img_wrapper">
                        <h5><?php echo get_sub_field('headline') ?></h5>
                        <img src="<?php echo get_field('plus_icon', 'option')['url'] ?>" loading="lazy" alt="">
                    </div>

                    <div class="expandable_row_content hide">
                        <p><?php echo get_sub_field('content') ?></p>
                    </div>

                </div>
        <?php
            endwhile;
        endif;
        ?>
    </div>
</section>