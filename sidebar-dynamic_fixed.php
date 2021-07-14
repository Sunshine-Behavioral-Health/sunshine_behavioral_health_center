<?php

/**
 * The sidebar containing the main widget area
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
<aside id="secondary" class="primary-sidebar widget-area sidebar_z_index sidebar_margin_top">
	<div class="dynamic_sidebar_container fixed_sidebar">
		<?php echo get_field('custom_sidebar') ?>
		<?php if (is_page_template('custom_border_fixed_sidebar_guide.php')) : ?>
			<?php if (get_field('include_download_page_content_button')) : ?>
				<a href="<?php echo get_field('download_page_button_link') ?>" class="download_page_content_btn" download>Download Page Content</a>
			<?php endif; ?>

		<?php endif; ?>
	</div>
</aside><!-- #secondary -->