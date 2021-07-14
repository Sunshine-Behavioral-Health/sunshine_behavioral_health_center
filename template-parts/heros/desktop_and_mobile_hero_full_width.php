<?php $centerValue = get_field('center'); ?>

<div class="desktop_and_mobile_hero_image_wrapper">
    <?php if (get_field('desktop_image')) : ?>
        <img class="page_desktop_image hero_image hide_on_mobile show_on_tablet" src="<?php echo get_field('desktop_image')['url']; ?>">
    <?php endif; ?>

    <?php if (get_field('mobile_image')) : ?>
        <img class="page_mobile_image hero_image hide_on_desktop hide_on_tablet" src="<?php echo get_field('mobile_image')['url']; ?>">
    <?php endif; ?>

    <div class="hero_banner_headlines_container">
        <div class="hero_banner_headlines_wrapper">
            <?php if ($centerValue == "Chapters Capistrano") : ?>
                <img class="hero_center_logo" src="<?php echo get_field('chapters_capistrano_logo', 'option')['url']; ?>" alt="">
            <?php elseif ($centerValue == "Lincoln Recovery") : ?>
                <img class="hero_center_logo" src="<?php echo get_field('lincoln_recovery_logo', 'option')['url']; ?>" alt="">
            <?php elseif ($centerValue == "Monarch Shores") : ?>
                <img class="hero_center_logo" src="<?php echo get_field('monarch_shores_logo', 'option')['url']; ?>" alt="">
            <?php elseif ($centerValue == "Mountain Springs") : ?>
                <img class="hero_center_logo" src="<?php echo get_field('mountain_springs_logo', 'option')['url']; ?>" alt="">
            <?php elseif ($centerValue == "Willow Springs") : ?>
                <img class="hero_center_logo" src="<?php echo get_field('willow_springs_logo', 'option')['url']; ?>" alt="">
            <?php endif; ?>
            <h1><?php echo get_field('page_headline') ?></h1>
            <?php if (get_field('page_subheadline_paragraph')) : ?>
                <p class="hero_subheadline"><?php echo get_field('page_subheadline_paragraph') ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>