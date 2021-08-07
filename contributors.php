<?php

/**
 * Template Name: Contributors
 * Template Post Type: Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package sbh_center
 */

namespace WP_Rig\WP_Rig;

get_header();

sbh_center()->print_styles('sbh_center-content');

//TOC
get_template_part('template-parts/javascript/navigationJs');


?>

<?php get_template_part('template-parts/content/googleTranslate'); ?>

<main id="primary" class="">
	<div class="page_wrapper">
		<div class="page_content_below_image">
			<h1><?= get_field('page_headline') ?></h1>
			<p class="hero_subheadline"><?= get_field('page_subheadline_paragraph') ?></p>

			<!-- Covid Notice -->
			<section class="covid_section hide_on_desktop">
				<a href="/our-response-to-the-corona-virus-health-concern/">Learn about Our Covid response</a>
			</section>

			<section class="page_content list_styling ">
				<?= get_field('content') ?>
				<div class="author_container">
					<h3>Authors</h3>
					<?php

					$authorArgs = array(
						'role'    => 'author+',
						'orderby' => 'user_nicename',
						'order'   => 'ASC'
					);
					$users = get_users($authorArgs);

					echo '<ul>';
					foreach ($users as $user) {
						$userdata = get_user_meta($user->ID);
						$authorAvater = get_field('tsm_local_avatar', 'user_' . $user->ID);
						$authorTitle = get_field('professional_title', 'user_' . $user->ID);
						// print_r($userdata)			

					?>
						<li id="<?= esc_html($user->first_name) . '_' .  esc_html($user->last_name) ?>" class="author_element">
							<div class="author_image_wrapper">
								<img src="<?= $authorAvater['url'] ?>" alt="" loading="lazy">
							</div>
							<div class="author_content_wrapper">
								<h5>Meet <?= esc_html($user->display_name) ?></h5>
								<?php if ($authorTitle) : ?>
									<p class="author_title"><?= $authorTitle ?></p>
								<?php endif; ?>
								<p><?= $userdata['description'][0]; ?></p>
								<div class="author_posts_wrapper">
									<h6>Articles by the Author</h6>
									<?= get_related_author_posts(); ?>
								</div>
							</div>

						</li>
						<div class="contributor_spacer"></div>
					<? }
					?>
				</div>

				<div class="medical_reviewer_container">
					<h3>Medical Reviewers</h3>
					<?php

					$medicalReviewerArgs = array(
						'role'    => 'medical_reviewer+',
						'orderby' => 'user_nicename',
						'order'   => 'ASC'
					);


					$users = get_users($medicalReviewerArgs);
					echo '<ul>';
					foreach ($users as $user) {
						$userdata = get_user_meta($user->ID);
						$medicalReviewerAvater = get_field('tsm_local_avatar', 'user_' . $user->ID);
						$medicalReviewerTitle = get_field('professional_title', 'user_' . $user->ID);

						// print_r($medicalReviewerAvater)
					?>
						<li id="<?= esc_html($user->first_name) . '_' .  esc_html($user->last_name) ?>" class="medical_reviewer_element">
							<div class="medical_reviewer_image_wrapper">
								<img src="<?= $medicalReviewerAvater['url'] ?>" loading="lazy">
							</div>
							<div class="medical_reviewer_content_wrapper">
								<h5><?= esc_html($user->display_name) ?></h5>
								<?php if ($medicalReviewerTitle) : ?>
									<p class="medical_review_title"><?= $medicalReviewerTitle ?></p>
								<?php endif; ?>
								<p><?= $userdata['description'][0]; ?></p>
							</div>
						</li>
						<div class="contributor_spacer"></div>
					<? }
					?>
				</div>
			</section>

			<?php get_template_part('template-parts/content/pageDisclaimer'); ?>

			<?php get_template_part('template-parts/content/phoneTreatmentCta'); ?>
		</div>
	</div>
</main>

<?php
get_footer();
