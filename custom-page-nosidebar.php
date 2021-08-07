<?php

/**
 * Template Name: Custom Page Nosidebar
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

<?php get_template_part('template-parts/content/googleTranslate'); ?>

<main id="primary" class="maxWidth">
	<div class="custom_page_noSideBar_wrapper">
		<?php if (get_field('desktop_image')) : ?>
			<div class="page_image hero_banner_container">
				<img class="page_desktop_image hero_image hide_on_mobile show_on_tablet" src="<?= get_field('desktop_image')['url']; ?>">
				<img class="page_mobile_image hero_image hide_on_desktop hide_on_tablet" src="<?= get_field('mobile_image')['url']; ?>">
				<div class="page_mobile_image_text_and_cta_container">
					<h1><?= get_field('page_headline') ?></h1>
					<p class="hero_subheadline"><?= get_field('page_subheadline_paragraph') ?></p>
				</div>
			</div>
		<?php endif; ?>

		<div class="hide_on_mobile">
			<h1><?= get_field('page_headline') ?></h1>
			<p class="hero_subheadline"><?= get_field('page_subheadline_paragraph') ?></p>
		</div>

		<div class="page_content_below_image">
			<!-- Covid Notice -->
			<section class="covid_section hide_on_desktop">
				<a href="/our-response-to-the-corona-virus-health-concern/">Learn about Our Covid response</a>
			</section>

			<!-- Medical Review -->
			<section class="editor_and_review_section">
				<?php get_template_part('template-parts/content/author-and-medical-review--mobile'); ?>
			</section>

			<section class="page_content list_styling ">
				<?= get_field('content') ?>
			</section>

			<?php get_template_part('template-parts/content/pageDisclaimer'); ?>

			<?php get_template_part('template-parts/content/phoneTreatmentCta'); ?>
		</div>
	</div>
</main>


<?php
get_footer();
