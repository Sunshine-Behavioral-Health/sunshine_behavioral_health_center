<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package sbh_center
 */

namespace WP_Rig\WP_Rig;

get_header();

sbh_center()->print_styles('sbh_center-content');
get_template_part('template-parts/javascript/navigationJs');


?>
<?php get_template_part('template-parts/content/googleTranslate'); ?>
<main id="primary" class="site-main page_404">
	<?php get_template_part('template-parts/content/error', '404'); ?>
	<?php get_sidebar(); ?>
</main>
<?php
get_footer();
