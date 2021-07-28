<?php
$content = get_sub_field('wysiwyg');
$backgroundColor = get_sub_field('background_color');

?>

<div class="editor-content wrapper" style="<?= !empty($backgroundColor) ? "background:{$backgroundColor};" : "" ?>">
    <?= $content; ?>
</div>