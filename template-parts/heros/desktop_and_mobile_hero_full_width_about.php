<div class="desktop_and_mobile_hero_image_wrapper center_page_hero about_hero">
    <?php if (get_field('desktop_image')) : ?>
        <img class="page_desktop_image hero_image hide_on_mobile show_on_tablet" src="<?= get_field('desktop_image')['url']; ?>">
    <?php endif; ?>

    <?php if (get_field('mobile_image')) : ?>
        <img class="page_mobile_image hero_image hide_on_desktop hide_on_tablet" src="<?= get_field('mobile_image')['url']; ?>">
    <?php endif; ?>
    <div class="hero_banner_headlines_container">
        <div class="hero_banner_headlines_wrapper">
            <img class="hero_center_logo" src="<?= get_field('navigation_logo', 'option')['url']; ?>" alt="">

            <h1><?= get_field('page_headline') ?></h1>
            <?php if (get_field('page_subheadline_paragraph')) : ?>
                <?php if (get_field('page_subheadline_paragraph')) : ?>
                    <p class="hero_subheadline"><?= get_field('page_subheadline_paragraph') ?></p>
                <?php endif; ?>
            <?php endif; ?>
            <p class="center_page_hero_cta_top_text">Talk to an Intake Specialist</p>
            <a id="centerPageHeroPhone" class="button invocaNumber centerPageHeroPhone" onclick="dataLayer.push({'event': 'phone_click', 'shortcode_type' : 'centerPageHeroPhone'});" href="tel:949-276-2886">949-276-2886</a>
        </div>
    </div>
</div>