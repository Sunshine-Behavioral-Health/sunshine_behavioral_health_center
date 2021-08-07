<section class="faq_sidebar_section">
    <div class="faq_sidebar_container">
        <h5><?= get_field('faq_sidebar_headline', 'option') ?></h5>
        <div class="faq_sidebar_elements_wrapper">
            <?php
            if (have_rows('faq_sidebar_element', 'option')) :
                while (have_rows('faq_sidebar_element', 'option')) : the_row();
            ?>
                    <div class="faq_sidebar_element">
                        <a href="/<?= get_sub_field('link', 'option') ?>/" class="<?= get_sub_field('class', 'option') ?>">
                            <img src="<?= get_sub_field('icon', 'option')['url'] ?>" alt="">
                            <h6><?= get_sub_field('text', 'option') ?></h6>
                        </a>
                    </div>
            <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>