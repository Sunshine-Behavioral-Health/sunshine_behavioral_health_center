<?php
// Content
$headline = get_sub_field('list_items_section_headline');
$subheadline = get_sub_field('list_items_section_subheadline');
$listItems = get_sub_field('list_items'); // ['list_item']
$listItemIcon = get_sub_field('list_item_icon')['url'];
$columnsPerRow = get_sub_field('columns_per_row');

// Styles
$backgroundImage = get_sub_field('background_image')['url'];
$backgroundColor = get_sub_field('background_color');
$listItemColor = get_sub_field('list_item_color');


switch ($columnsPerRow) {
    case 2:
        $columnClass = 'col col-sm-6 col-xs-12';
        break;
    case 3:
        $columnClass = 'col col-md-4 col-sm-6 col-xs-12';
        break;
    case 4:
        $columnClass = 'col col-md-3 col-sm-6 col-xs-12';
        break;
    case 6:
        $columnClass = 'col col-md-2 col-sm-3 col-xs-6';
        break;
}

if ($listItems) : ?>
    <section class="list-items" style="<?= !empty($backgroundColor) ? "background:{$backgroundColor};" : "" ?> <?= !empty($backgroundColor) ? "background-image:{$backgroundImage};" : "" ?>">
        <div class="wrapper">
            <h2><?= $headline; ?></h2>
            <p><?= $subheadline; ?></p>
            <ul class="flex">
                <?php foreach ($listItems as $listItem) : ?>
                    <li class="flex <?= $columnClass ?>" style="<?= !empty($listItemColor) ? "color:{$listItemColor};" : "" ?>"><img src="<?= $listItemIcon ?>" alt=""> <?= $listItem['list_item'] ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>
<?php endif; ?>