<?
/* 
* Add width restriction on headline/subheadlien so doesn't overlap image
*/

?>

<section class="hero_section">
    <?php if (get_sub_field('type') == 'full_width') : ?>
        <div class="full_width_hero relative">
            <?php if (get_sub_field('desktop_image')) : ?>
                <img class="hide_on_mobile show_on_tablet width100 hero-image" src="<?php echo get_sub_field('desktop_image')['url']; ?>">
            <?php endif; ?>

            <?php if (get_sub_field('mobile_image')) : ?>
                <img class="hide_on_desktop hide_on_tablet width100 hero-image" src="<?php echo get_sub_field('mobile_image')['url']; ?>">
            <?php endif; ?>

            <div class="absolute absolute-top-left full-cover flex flex-column justify-center">
                <div class="wrapper hero_section-content_wrapper">

                    <?php if (get_sub_field('image')) : ?>
                        <img src="<?= get_sub_field('image')['url']; ?>" alt="">
                    <?php endif; ?>
                    <?php if (get_sub_field('headline')) : ?>
                        <h1 class="full_width_hero--headline"><?= get_sub_field('headline'); ?></h1>
                    <?php endif; ?>

                    <?php if (get_sub_field('subheadline')) : ?>
                        <p class="full_width_hero--subheadline"><?= get_sub_field('subheadline'); ?></p>
                    <?php endif; ?>

                    <?php if (get_sub_field('add_cta')) :
                        if (get_sub_field('cta_type') == "link") : ?>
                            <a class="button" href="<?= get_sub_field('link')['url']; ?>" target="<?= get_sub_field('link')['target'] ?>"><?= get_sub_field('link')['title']; ?></a>
                        <?php else : ?>
                            <a class="invocaNumber button" href="tel:949-276-2886">949-276-2886</a>
                    <?php endif;
                    endif; ?>
                </div>
            </div>


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