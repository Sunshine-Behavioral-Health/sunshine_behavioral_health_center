<?php

$primaryColor = get_field('primary_color', 'options');
$secondaryColor = get_field('secondary_color', 'options');
$tertiaryColor = get_field('tertiary_color', 'options');
$fourthColor = get_field('fourth_color', 'options');
$navBackgroundColor = get_field('nav_background_color', 'options');

?>
<style>
    :root {
        --primary_color: <?php echo $primaryColor ?>;
        /* Secondary */
        --secondary_color: <?php echo $secondaryColor ?>;
        /* PRIMARY */
        --tertiary_color: <?php echo $tertiaryColor ?>;
        /* Tertiary */
        --fourth_color: <?php echo $fourthColor ?>;

        --nav_background_color: <?php echo $navBackgroundColor ?>;
    }
</style>