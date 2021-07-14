<?php if (get_field('insurance_list_and_cta_universal_element')) : ?>
    <section class="list_and_cta_section insurance_list_and_cta">
        <div class="list_and_cta_container">
            <div class="list_and_cta_top">
                <h5><?php echo get_field('insurance_list_and_cta_universal_-_headline', 'options') ?></h5>
            </div>
            <div class="list_and_cta_bottom">
                <div class="list_and_cta_list_wrapper">
                    <?php
                    if (have_rows('insurance_list_and_cta_universal_element')) :
                        while (have_rows('insurance_list_and_cta_universal_element')) : the_row();
                    ?>
                            <div class="list_and_cta_list_element">
                                <div class="list_and_cta_list_element_wrapper">
                                    <a href="<?php echo get_sub_field('url') ?>" class="<?php echo get_sub_field('class') ?>">
                                        <img src="<?php $uploadDir = wp_upload_dir();
                                                    echo $uploadDir['baseurl'] . '/sbh_center_theme_images/icons/navbar_icon_treatment.png' ?>" alt="">
                                        <p><?php echo get_sub_field('text') ?></p>
                                    </a>
                                </div>
                            </div>
                    <?php
                        endwhile;
                    endif;
                    ?>
                </div>
                <div class="list_and_cta_bottom_container">
                    <p>Don't see your Insurance Provider?</p>
                    <div class="list_and_cta_bottom_cta_wrapper">
                        <a href="<?php echo get_field('insurance_url', 'option') ?>">Verify Your Insurance</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>