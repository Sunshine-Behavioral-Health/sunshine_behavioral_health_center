<?php
$content = get_sub_field('content');
$backgroundColor = get_sub_field('background_color');

if ($content) : ?>
    <div class="editor-content wrapper" style="<?= !empty($backgroundColor) ? "background:{$backgroundColor};" : "" ?>">
        <?= $content; ?>
    </div>
<?php endif; ?>