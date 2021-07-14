<?php

/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sbh_center
 */

namespace WP_Rig\WP_Rig;

sbh_center()->print_styles('wp-rig-sidebar');


if (!sbh_center()->is_primary_sidebar_active()) {
	return;
}

sbh_center()->print_styles('sbh_center-sidebar', 'sbh_center-widgets');

?>
<aside id="secondary" class="primary-sidebar widget-area sidebar_margin_top">
	<?php
	if (!is_page_template('index.php')) : get_template_part('template-parts/content/authorMedicalReviewSidebar');
	endif; ?>
	<?php sbh_center()->display_primary_sidebar(); ?>
</aside><!-- #secondary -->