<?php

/**
 * Template part for displaying the page content when a 404 error has occurred
 *
 * @package sbh_center
 */

namespace WP_Rig\WP_Rig;

?>
<section class="error">
	<h1>It appears we could not find that page</h1>
	<h2>You can still get the help you need</h2>

	<div>
		<?php echo do_shortcode('[phone_cta_shortcode]') ?>
	</div>

	<div class="page-content">
		<?php
		get_search_form();

		the_widget('WP_Widget_Recent_Posts');
		?>
	</div><!-- .page-content -->
</section><!-- .error -->