<?php
$headline = get_sub_field('columns_section_headline');
$subheadline = get_sub_field('columns_section_subheadline');
$columns = get_sub_field('columns');
$columnContent = $columns['content'];
$columnBackgroundImage = $columns['background_image'];
$columnBackgroundColor = $columns['background_color'];
$columnsPerRow = get_sub_field('columns_per_row');
$backgroundColor = get_sub_field('background_color');
$reverseOnMobile = get_sub_field('reverse_order_on_mobile');


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

if ($columns) : ?>
    <section class="columns_content_section" style="<?= !empty($backgroundColor) ? "background:{$backgroundColor};" : "" ?>">
        <div class="columns_content-wrapper">
            <h2><? echo $headline; ?></h2>
            <p><?= $subheadline; ?></p>
            <div class="row <?= !empty($reverseOnMobile) ? 'mobile-reverse' : '' ?>">

                <?php foreach ($columns as $column) : ?>
                    <div class="<?= $columnClass ?> editor-content" style="<?= !empty($column['background_color']) ? "background:{$column['background_color']};" : "" ?> <?php echo !empty($column['background_image']) ? "background: url({$column['background_image']});" : "" ?>">
                        <?= $column['content']; ?>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </section>
<?php endif; ?>