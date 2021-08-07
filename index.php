<?php

/**
 * The main template file / Blog Archive
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package sbh_center
 */

namespace WP_Rig\WP_Rig;

get_header();

get_template_part('template-parts/javascript/navigationJs');
sbh_center()->print_styles('sbh_center-content');

?>
<main id="primary" class="site-main blog_collection">
	<div>
		<h1><?= get_field('site_name', 'option') ?> Blog</h1>
		<?php
		if (have_posts()) {
			while (have_posts()) {
				the_post();
				get_template_part('template-parts/content/entry', get_post_type());
			}
			get_template_part('template-parts/content/pagination');
		} else {
			get_template_part('template-parts/content/error');
		}
		?>
	</div>
	<?php get_sidebar(); ?>

	<?php get_template_part('template-parts/content/pageDisclaimer'); ?>
</main>



<?php
get_footer();
