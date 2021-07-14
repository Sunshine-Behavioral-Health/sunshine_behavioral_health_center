<?php

/**
 * Template Name: Standard post, Fixed Sidebar
 * Template Post Type: post
 * p
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package sbh_center
 */

namespace WP_Rig\WP_Rig;

get_header();
get_template_part('template-parts/javascript/navigationJs');

sbh_center()->print_styles('sbh_center-content');

//TOC
get_template_part('template-parts/javascript/tableOfContents');

?>


<?php get_template_part('template-parts/content/googleTranslate'); ?>

<main id="primary" class="site-main single_post_main">


	<div class="page_wrapper">
		<?php

		while (have_posts()) {
			the_post(); ?>
			<div class="post_image">
				<?php
				if (!is_search()) {
					get_template_part('template-parts/content/entry_thumbnail', get_post_type());
				} ?>
			</div>
			<!-- <div class="table_of_contents"></div> -->

			<!-- Medical Review -->
			<section class="editor_and_review_section">
				<?php get_template_part('template-parts/content/mobile_author_and_medical_review'); ?>
			</section>


			<section class="page_content list_styling ">
				<?php the_content(); ?>
			</section>
		<?php }
		?>
		<?php get_template_part('template-parts/content/phoneTreatmentCta'); ?>
	</div>
	<?php get_sidebar('fixed'); ?>
</main>
<?php

get_footer();
