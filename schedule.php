<?php

/**
 * Template Name: Schedule
 * Template Post Type: Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package sbh_center
 */

namespace WP_Rig\WP_Rig;

get_header();

sbh_center()->print_styles('sbh_center-content');
get_template_part('template-parts/javascript/navigationJs');
?>

<main id="primary" class="full_width_hero_no_sidebar">
	<?php get_template_part('template-parts/heros/desktop_and_mobile_hero_full_width'); ?>

	<div class="content_container">
		<div class="page_wrapper">
			<?= get_field('content') ?>
			<div class="schedule_table_container schedule_container">
				<?php $table = get_field('schedule_table');
				if (!empty($table)) {
					echo '<table >';
					if (!empty($table['caption'])) {
						echo '<caption>' . $table['caption'] . '</caption>';
					}
					if (!empty($table['header'])) {
						echo '<thead>';
						echo '<tr>';
						foreach ($table['header'] as $th) {
							echo '<th>';
							echo $th['c'];
							echo '</th>';
						}
						echo '</tr>';
						echo '</thead>';
					}
					echo '<tbody>';
					foreach ($table['body'] as $tr) {
						echo '<tr>';
						foreach ($tr as $td) {
							echo '<td>';
							echo $td['c'];
							echo '</td>';
						}
						echo '</tr>';
					}
					echo '</tbody>';
					echo '</table>';
				} ?>
			</div>


			<?php get_template_part('template-parts/content/pageDisclaimer'); ?>

			<?php get_template_part('template-parts/content/phoneTreatmentCta'); ?>
		</div>
	</div>
</main>

<?php
get_footer();
