<?php
$accordions = get_sub_field('accordions');
$accordionSectionHeadline = get_sub_field('accordion_section_headline');
$accordionSectionSubheadline = get_sub_field('accordion_section_subheadline');
$backgroundColor = get_sub_field('background_color');
$accordionBorderColor = get_sub_field('border_color');


?>

<?php if ($accordions) : ?>
    <div class="accordion" style="<?= !empty($backgroundColor) ? "background:{$backgroundColor};" : "" ?>">
        <div class="wrapper">
            <?php if ($accordionSectionHeadline) : ?>
                <h2><?= $accordionSectionHeadline ?></h2>
            <?php endif; ?>

            <?php if ($accordionSectionSubheadline) : ?>
                <p><?= $accordionSectionSubheadline ?></p>
            <?php endif; ?>

            <?php foreach ($accordions as $accordion) : ?>
                <div class="accordion" style="<?= !empty($accordionBorderColor) ? "border-color:{$accordionBorderColor} !important;" : "" ?>">
                    <div class="accordion_top">
                        <h5 style="<?= !empty($accordionBorderColor) ? "color:{$accordionBorderColor} !important;" : "" ?>"><?= $accordion['headline'] ?></h5>
                        <img class="accordion_icon" src="<?= get_field('plus_icon', 'option')['url'] ?>" loading="lazy" alt="Plus icon">
                    </div>

                    <div class="accordion_bottom">
                        <p><?= $accordion['content'] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif;  ?>