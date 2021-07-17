<div class="accordion <?php echo $classes; ?>" style="<?= !empty($background_color) ? "background:{$background_color};" : "" ?><?= !empty($padding) ? $padding : '' ?>">
    <?php echo !empty($background_image) ? wp_image($background_image, 'full', ['class' => 'accordion--background']) : ''; ?>
    <div class="wrapper">
        <?php foreach ($rows as $row) : ?>
            <ada-toggler id="toggle-<?= $row['id'] ?>" for="content-<?= $row['id'] ?>" group="<?= $group_id ?>">
                <h3><?= $row['title'] ?></h3>
            </ada-toggler>
            <div id="content-<?= $row['id'] ?>" class="editor-content"><?php echo $row['content']; ?></div>
        <?php endforeach; ?>
    </div>
</div>