<?php get_template_part('template-parts/javascript/galleryJs'); ?>

<section class="two_column_gallery_shortcode_section">
    <div class="two_column_gallery_shortcode_container">
        <?php
        if (have_rows('two_column_gallery')) :
            while (have_rows('two_column_gallery')) : the_row();
        ?>
                <div class="two_column_gallery_image gallery_image">
                    <img src="<?php echo get_sub_field('image')['url'] ?>" alt="<?php echo get_sub_field('alt_attribute') ?>" loading="lazy">
                </div>

        <?php
            endwhile;
        endif;
        ?>
    </div>
    <!-- Image popup -->
    <div class="three_column_gallery_shortcode_popup_container hide">
        <img src="" alt="">
    </div>
</section>