<?php

/**
 * ACF Color Palette
 *
 * Add default color palatte to ACF color picker for branding
 * Match these colors to colors in /functions.php & /assets/scss/partials/base/variables.scss
 *
 */


add_action('acf/input/admin_footer', 'wd_acf_color_palette');
function wd_acf_color_palette()
{
    $primaryColor = get_field('primary_color', 'options');
    $secondaryColor = get_field('secondary_color', 'options');
    $tertiaryColor = get_field('tertiary_color', 'options');
    $fourthColor = get_field('fourth_color', 'options');
    $navBackgroundColor = get_field('nav_background_color', 'options'); ?>
    <script type="text/javascript">
        (function($) {
            acf.add_filter('color_picker_args', function(args, $field) {
                // add the hexadecimal codes here for the colors you want to appear as swatches
                args.palettes = ['<?php echo $primaryColor ?>', '<?php echo $secondaryColor ?>', '<?php echo $tertiaryColor ?>', '<?php echo $fourthColor ?>', '<?php echo $navBackgroundColor ?>', '#fffff', '#000000']
                // return colors
                return args;
            });
        })(jQuery);
    </script>
<?php }


function my_mce4_options($init)
{
    $primaryColor = get_field('primary_color', 'options');
    $secondaryColor = get_field('secondary_color', 'options');
    $tertiaryColor = get_field('tertiary_color', 'options');
    $fourthColor = get_field('fourth_color', 'options');
    $navBackgroundColor = get_field('nav_background_color', 'options');

    $custom_colours = array(
        strval($primaryColor), "Primary",
        strval($secondaryColor), "Secondary",
        strval($tertiaryColor), "Tertiary",
        strval($fourthColor), "Fourth",
        strval($navBackgroundColor), "Nav Bkg",
        "#ffff", "White",
        "#000000", "Black"
    );

    // build colour grid default+custom colors
    $init['textcolor_map'] = '[' . $custom_colours . ']';

    // change the number of rows in the grid if the number of colors changes
    // 8 swatches per row
    $init['textcolor_rows'] = 1;

    return $init;
}
add_filter('tiny_mce_before_init', 'my_mce4_options');
