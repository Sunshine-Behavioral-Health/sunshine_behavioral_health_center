<section class="faq_sidebar_section">
    <div class="faq_sidebar_container">
        <h5><?php echo get_field('faq_sidebar_headline', 'option') ?></h5>
        <div class="faq_sidebar_elements_wrapper">
            <?php
            if (have_rows('faq_sidebar_element', 'option')) :
                while (have_rows('faq_sidebar_element', 'option')) : the_row();
            ?>
                    <div class="faq_sidebar_element">
                        <a href="/<?php echo get_sub_field('link', 'option') ?>/" class="<?php echo get_sub_field('class', 'option') ?>">
                            <img src="<?php echo get_sub_field('icon', 'option')['url'] ?>" alt="">
                            <h6><?php echo get_sub_field('text', 'option') ?></h6>
                        </a>
                    </div>
            <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>