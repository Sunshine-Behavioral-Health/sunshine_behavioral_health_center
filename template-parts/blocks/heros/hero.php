<div class="column-content <?php echo $classes; ?>" style="<?= !empty($background_color) ? "background:{$background_color};" : "" ?><?= !empty($padding) ? $padding : '' ?>">
    <?php echo !empty($background_image) ? wp_image($background_image, 'full', ['class' => 'column-content--background']) : ''; ?>
    <div class="wrapper">
        <div class="row align-<?= $column_alignment ?> <?= !empty($reverse_order_on_mobile) ? 'mobile-reverse' : '' ?>">
            <?php foreach ($columns as $col) : ?>
                <div class="<?= $col_class ?> editor-content">
                    <?php echo $col['content']; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>