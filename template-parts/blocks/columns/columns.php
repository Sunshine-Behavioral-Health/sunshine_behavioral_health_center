<?php
$headline = get_sub_field('section_headline');
$subheadline = get_sub_field('section_subheadline');
$columns = get_sub_field('columns');
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
            <h2><?= $headline; ?></h2>
            <p><?= $subheadline; ?></p>
            <div class="row <?= !empty($reverseOnMobile) ? 'mobile-reverse' : '' ?>">
                <?php
                if (have_rows($columns)) :
                    while (have_rows($columns)) : the_row();
                ?>
                        <div class="<?= $columnClass ?> editor-content">
                            <?= $columns['content']; ?>
                        </div>
                <?php
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </section>
<?php endif; ?>