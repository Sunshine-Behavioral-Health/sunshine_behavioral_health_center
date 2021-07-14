<?php

/**
 * The Fixed sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sbh_center
 */

namespace WP_Rig\WP_Rig;

if (!sbh_center()->is_primary_sidebar_active()) {
	return;
}

sbh_center()->print_styles('sbh_center-sidebar', 'sbh_center-widgets');

?>

<?php
add_filter('template_include', 'var_template_include', 1000);
function var_template_include($t)
{
	$GLOBALS['current_theme_template'] = basename($t);
	return $t;
}

function get_current_template($echo = false)
{
	if (!isset($GLOBALS['current_theme_template']))
		return false;
	if ($echo)
		echo $GLOBALS['current_theme_template'];
	else
		return $GLOBALS['current_theme_template'];
}

?>


<aside id="secondary" class="primary-sidebar widget-area sidebar_margin_top">
	<div class="fixed_sidebar">
		<?php sbh_center()->display_primary_sidebar(); ?>
	</div>

</aside><!-- #secondary -->