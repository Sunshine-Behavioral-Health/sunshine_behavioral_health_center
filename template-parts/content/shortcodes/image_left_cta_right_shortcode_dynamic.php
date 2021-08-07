<section class="image_left_cta_right_shortcode_section">
    <div class="image_left_cta_right_shortcode_container">
        <div class="image_left_cta_right_shortcode_left_wrapper hide_on_mobile">
            <img src="<?= get_field('image_left_cta_right-image')['url'] ?>" alt="">
        </div>
        <div class="image_left_cta_right_shortcode_right_wrapper">
            <h5><?= get_field('image_left_cta_right-headline') ?></h5>
            <p><?= get_field('image_left_cta_right-paragraph') ?></p>
            <div class="image_left_cta_right_shortcode_right_cta_wrapper">
                <a href="<?= get_field('image_left_cta_right-cta_link') ?>"><?= get_field('image_left_cta_right-cta_text') ?></a>
            </div>

        </div>
    </div>
</section>