<?php $centerValue = get_field('job_application_center'); ?>
<div class="desktop_and_mobile_hero_image_wrapper">
    <?php if ($centerValue == "Chapters Capistrano") : ?>
        <img class="page_desktop_image hero_image hide_on_mobile show_on_tablet" src="<?php echo get_field('chapters_capistrano_hero_desktop', 'option')['url'] ?>">
    <?php elseif ($centerValue == "Lincoln Recovery") : ?>
        <img class="page_desktop_image hero_image hide_on_mobile show_on_tablet" src="<?php echo get_field('willow_springs_hero_desktop', 'option')['url'] ?>">
    <?php elseif ($centerValue == "Monarch Shores") : ?>
        <img class="page_desktop_image hero_image hide_on_mobile show_on_tablet" src="<?php echo get_field('lincoln_recovery_hero_desktop', 'option')['url'] ?>">
    <?php elseif ($centerValue == "Mountain Springs") : ?>
        <img class="page_desktop_image hero_image hide_on_mobile show_on_tablet" src="<?php echo get_field('monarch_shores_hero_desktop', 'option')['url'] ?>">
    <?php elseif ($centerValue == "Willow Springs") : ?>
        <img class="page_desktop_image hero_image hide_on_mobile show_on_tablet" src="<?php echo get_field('mountain_springs_hero_desktop', 'option')['url'] ?>">
    <?php elseif ($centerValue == "Sunshine Behavioral Health") : ?>
        <img class="page_desktop_image hero_image hide_on_mobile show_on_tablet" src="<?php echo get_field('sunshine_hero_desktop', 'option')['url'] ?>">
    <?php else : ?>
        <img class="page_desktop_image hero_image hide_on_mobile show_on_tablet" src="<?php echo get_field('default_hero_desktop', 'option')['url'] ?>" alt="">
    <?php endif; ?>

    <?php if ($centerValue == "Chapters Capistrano") : ?>
        <img class="page_mobile_image hero_image hide_on_desktop hide_on_tablet" src="<?php echo get_field('chapters_capistrano_hero_mobile', 'option')['url'] ?>">
    <?php elseif ($centerValue == "Lincoln Recovery") : ?>
        <img class="page_mobile_image hero_image hide_on_desktop hide_on_tablet" src="<?php echo get_field('willow_springs_hero_mobile', 'option')['url'] ?>">
    <?php elseif ($centerValue == "Monarch Shores") : ?>
        <img class="page_mobile_image hero_image hide_on_desktop hide_on_tablet" src="<?php echo get_field('lincoln_recovery_hero_mobile', 'option')['url'] ?>">
    <?php elseif ($centerValue == "Mountain Springs") : ?>
        <img class="page_mobile_image hero_image hide_on_desktop hide_on_tablet" src="<?php echo get_field('monarch_shores_hero_mobile', 'option')['url'] ?>">
    <?php elseif ($centerValue == "Willow Springs") : ?>
        <img class="page_mobile_image hero_image hide_on_desktop hide_on_tablet" src="<?php echo get_field('mountain_springs_hero_mobile', 'option')['url'] ?>">
    <?php elseif ($centerValue == "Sunshine Behavioral Health") : ?>
        <img class="page_mobile_image hero_image hide_on_desktop hide_on_tablet" src="<?php echo get_field('sunshine_hero_mobile', 'option')['url'] ?>">
    <?php else : ?>
        <img class="page_mobile_image hero_image hide_on_desktop hide_on_tablet" src="<?php echo get_field('default_hero_mobile', 'option')['url'] ?>" alt="">
    <?php endif; ?>

    <div class="hero_banner_headlines_container">
        <div class="hero_banner_headlines_wrapper">
            <?php if ($centerValue == "Chapters Capistrano") : ?>
                <img class="hero_center_logo" src="<?php echo get_field('chapters_capistrano_logo', 'option')['url'] ?>" alt="">
            <?php elseif ($centerValue == "Lincoln Recovery") : ?>
                <img class="hero_center_logo" src="<?php echo get_field('lincoln_recovery_logo', 'option')['url'] ?>" alt="">
            <?php elseif ($centerValue == "Monarch Shores") : ?>
                <img class="hero_center_logo" src="<?php echo get_field('monarch_shores_logo', 'option')['url'] ?>" alt="">
            <?php elseif ($centerValue == "Mountain Springs") : ?>
                <img class="hero_center_logo" src="<?php echo get_field('mountain_springs_logo', 'option')['url'] ?>" alt="">
            <?php elseif ($centerValue == "Willow Springs") : ?>
                <img class="hero_center_logo" src="<?php echo get_field('willow_springs_logo', 'option')['url'] ?>" alt="">
            <?php elseif ($centerValue == "Sunshine Behavioral Health") : ?>
                <img class="hero_center_logo" src="<?php echo get_field('sunshine_logo', 'option')['url'] ?>" alt="">
            <?php endif; ?>
            <?php if ($centerValue == "Chapters Capistrano") : ?>
                <h1>Chapters Capistrano Careers</h1>
            <?php elseif ($centerValue == "Lincoln Recovery") : ?>
                <h1>Lincoln Recovery Careers</h1>
            <?php elseif ($centerValue == "Monarch Shores") : ?>
                <h1>Monarch Shores Careers</h1>
            <?php elseif ($centerValue == "Mountain Springs") : ?>
                <h1>Mountain Springs Careers</h1>
            <?php elseif ($centerValue == "Willow Springs") : ?>
                <h1>Willow Springs Careers</h1>
            <?php else : ?>
                <h1>Sunshine Behavioral Health Careers</h1>
            <?php endif; ?>
            <?php if (get_field('page_subheadline_paragraph')) : ?>
                <?php if (get_field('page_subheadline_paragraph')) : ?>
                    <p class="hero_subheadline"><?php echo get_field('page_subheadline_paragraph') ?></p>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
</div>