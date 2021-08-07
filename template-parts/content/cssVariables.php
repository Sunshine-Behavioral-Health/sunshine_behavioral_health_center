<?php

$primaryColor = get_field('primary_color', 'options');
$secondaryColor = get_field('secondary_color', 'options');
$tertiaryColor = get_field('tertiary_color', 'options');
$fourthColor = get_field('fourth_color', 'options');
$navBackgroundColor = get_field('nav_background_color', 'options');

?>
<style>
    :root {
        --primary_color: <?= $primaryColor ?>;
        /* Secondary */
        --secondary_color: <?= $secondaryColor ?>;
        /* PRIMARY */
        --tertiary_color: <?= $tertiaryColor ?>;
        /* Tertiary */
        --fourth_color: <?= $fourthColor ?>;

        --nav_background_color: <?= $navBackgroundColor ?>;
    }
</style>