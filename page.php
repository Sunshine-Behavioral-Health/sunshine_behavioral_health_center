<?php

/**
 * The template for displaying all pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package sbh_center
 */

namespace WP_Rig\WP_Rig;

get_header();

sbh_center()->print_styles('sbh_center-content');

//TOC
get_template_part('template-parts/javascript/tableOfContents');
get_template_part('template-parts/javascript/navigationJs');


?>

<?php get_template_part('template-parts/content/googleTranslate'); ?>

<main id="primary" class="">
	<div class="hero_banner_container">
		<img class="page_mobile_image hero_image hide_on_desktop hide_on_tablet" src="<?= get_field('mobile_image')['url']; ?>">
		<div class="hero_banner_headlines_container">
			<h1><?= get_field('page_headline') ?></h1>
			<p class="hero_subheadline"><?= get_field('page_subheadline_paragraph') ?></p>
		</div>

	</div>
	<div class="page_grid">
		<div class="page_wrapper">
			<!-- Covid Notice -->
			<?php get_template_part('template-parts/content/mobileCovidNotice'); ?>


			<!-- Medical Review -->
			<section class="editor_and_review_section hide_on_desktop">
				<?php get_template_part('template-parts/content/author-and-medical-review--mobile'); ?>
			</section>

			<!-- Page Content -->
			<section class="page_content list_styling ">
				<?= get_field('content') ?>
			</section>

			<!-- Sources -->
			<?php get_template_part('template-parts/content/sources'); ?>

			<!-- Disclosure -->
			<?php get_template_part('template-parts/content/pageDisclaimer'); ?>

			<!-- Treatment Phone CTA -->
			<?php get_template_part('template-parts/content/phoneTreatmentCta'); ?>

		</div>
		<?php get_sidebar(); ?>
	</div>
</main>

<?php
get_footer();
