<section class="list_and_cta_section list_and_cta_dynamic_shortcode">
    <div class="list_and_cta_container">
        <div class="list_and_cta_top">
            <h5><?php echo get_field('list_and_cta-headline') ?></h5>
            <p><?php echo get_field('list_and_cta-subheadline') ?></p>
        </div>
        <div class="list_and_cta_bottom">
            <div class="list_and_cta_list_wrapper">
                <?php
                if (have_rows('list_and_cta-list')) :
                    while (have_rows('list_and_cta-list')) : the_row();
                ?>
                        <div class="list_and_cta_list_element">
                            <img src="<?php echo get_sub_field('image')['url'] ?>" alt="">
                            <p><?php echo get_sub_field('text') ?></p>
                        </div>
                <?php
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>
</section>