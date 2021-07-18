<?php
$content = 
$backgroundColor = get_sub_field('background_color');

 ?>

<div class="editor-content wrapper" style="<?= !empty($backgroundColor) ? "background:{$backgroundColor};" : "" ?>">
    <?= get_sub_field('wysiwyg'); ?>
</div>