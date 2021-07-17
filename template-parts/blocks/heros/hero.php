<section class="hero_section">
    <?php if (get_sub_field('type') == 'full_width') : ?>
        <div class="full_width_hero_container">
            <p>Full Width Hero TOP</p>
            <?php if (get_sub_field('desktop_image')) : ?>
                <img class="hide_on_mobile show_on_tablet" src="<?php echo get_sub_field('desktop_image')['url']; ?>">
            <?php endif; ?>

            <?php if (get_sub_field('mobile_image')) : ?>
                <img class="hide_on_desktop hide_on_tablet" src="<?php echo get_sub_field('mobile_image')['url']; ?>">
            <?php endif; ?>

            <?php if (get_sub_field('headline')) : ?>
                <h1><?= get_sub_field('headline'); ?></h1>
            <?php endif; ?>

            <?php if (get_sub_field('subheadline')) : ?>
                <p><?= get_sub_field('subheadline'); ?></p>
            <?php endif; ?>

            <?php if (get_sub_field('link')) : ?>
                <a href="<?= get_sub_field('link')['url']; ?>" target="<?= get_sub_field('link')['target'] ?>"><?= get_sub_field('')['title']; ?></a>
            <?php endif; ?>
        </div>
    <?php endif ?>

    <?php if (get_sub_field('type') == 'content_width') : ?>
        <div class="content_width_hero_container">
            <img src="" alt="">
            <img src="" alt="">
            <h1><?= get_sub_field('headline'); ?></h1>
            <p><?= get_sub_field('subheadline'); ?></p>
            <a href="<?= get_sub_field('link')['url']; ?>" target="<?= get_sub_field('link')['target'] ?>"><?= get_sub_field('')['title']; ?></a>
        </div>
    <?php endif ?>
</section>