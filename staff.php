<?php

/**
 * Template Name: Staff
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package sbh_center
 */

namespace WP_Rig\WP_Rig;

get_header();

sbh_center()->print_styles('sbh_center-content');

// Read Bio Function

get_template_part('template-parts/javascript/readBio');
get_template_part('template-parts/javascript/navigationJs');


?>


<main id="primary" class="maxWidth">
	<?php get_template_part('template-parts/heros/desktop_and_mobile_hero_full_width'); ?>

	<div class="content_container">
		<div class="page_wrapper">
			<!-- Page Content -->
			<section class="page_content list_styling">
				<section class="staff_page_content">
					<?= get_field('page_content'); ?>
				</section>

				<?php get_template_part('template-parts/content/universal_staff'); ?>
			</section>

			<?php get_template_part('template-parts/content/pageDisclaimer'); ?>

			<?php get_template_part('template-parts/content/phoneTreatmentCta'); ?>
		</div>
	</div>
</main>
<?php
get_footer();
