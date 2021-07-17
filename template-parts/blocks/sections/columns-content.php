<section class="column-content <?php echo $classes; ?>" style="<?= !empty($background_color) ? "background:{$background_color};" : "" ?><?= !empty($padding) ? $padding : '' ?>">
    <div class="wrapper">
        <div class="row">
            <?php foreach ($columns as $col) : ?>
                <div class="editor-content">
                    <?php echo $col['content']; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>