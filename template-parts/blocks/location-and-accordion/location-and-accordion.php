<?php

$accordions = get_sub_field('accordions');
$borderColor = get_sub_field('border_color');

$iframe = get_sub_field('iframe');
$link = get_sub_field('link');
$address = get_field('center_address', 'option');
$addressBackgroundColor = get_sub_field('address_background_color');

?>

<section class="location-and-accordion">
    <div class="row wrapper">
        <div class="col-xs-12 col-md-6">
            <div class="center_location flex flex-column justify-center">
                <iframe src="<?= $iframe ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                <a href="<?= $link['url'] ?>" style="<?= !empty($addressBackgroundColor) ? "background-color:{$addressBackgroundColor} !important;" : "" ?>"><span>Address: </span><?= $address ?></a>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 flex flex-column justify-center">
            <?php foreach ($accordions as $accordion) : ?>
                <div class="accordion" style="<?= !empty($borderColor) ? "border-color:{$borderColor} !important;" : "" ?>">
                    <div class="accordion_top">
                        <h5 style="<?= !empty($borderColor) ? "color:{$borderColor} !important;" : "" ?>"><?= $accordion['headline'] ?></h5>
                        <img class="accordion_icon" src="<?php echo get_field('plus_icon', 'option')['url'] ?>" loading="lazy" alt="Plus icon">
                    </div>

                    <div class="accordion_bottom">
                        <p><?= $accordion['content'] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>