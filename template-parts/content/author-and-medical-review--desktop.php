<?php
// Author

$AuthorUser = get_field("editor_user");
$AuthorMetaData = get_user_meta($AuthorUser['ID']);
$authorAvatar = get_field('tsm_local_avatar', 'user_' . $AuthorUser['ID']);

// Medical Reviewer
$medicalReviewerMetaData = get_user_meta($medicalReviewUser['ID']);
$medicalReviewAvatar = get_field('tsm_local_avatar', 'user_' . $medicalReviewUser['ID']);
$medicalReviewMetaBio =  $medicalReviewerMetaData['description'][0];
$medicalReviewUser = get_field("medical_review_user");
?>


<section class="author-and-medical-review--desktop">
<h2>AUTHOR AND MEDICAL REVIEW DESKTOP</h2>
    <div class="wrapper">
        <?php if (get_field("editor_user")) : ?>

            <div class="author-and-medical-review--mobile--editor">
                <img id="editor_avatar_reference" src="<?= $authorAvatar['url']; ?>" alt="">
                <div class="author-and-medical-review--mobile--editor--content flex flex-column">
                    <p>Last Edited:</p>
                    <p><?= get_field('last_edited_date'); ?></p>
                    <p>Author:</p>
                    <p><?= $AuthorUser['display_name'] ?></p>

                    <div class="editor_meta_bio_container hide">
                        <h6 class="">Meet <?= $AuthorUser['display_name'] ?></h6>

                        <div> <?= shorten_string($AuthorMetaData['description'][0], 30); ?>... <a href="/contributors#<?= $AuthorMetaData['first_name'][0] . '_' . $AuthorMetaData['last_name'][0] ?>"> Read More</a></div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if (get_field("medical_review_user")) : ?>
            <div class="author-and-medical-review--mobile--medical-reviewer">
                <img id="medical_review_avatar_reference" src="<?= $medicalReviewAvatar['url']; ?>" alt="">
                <div class="author-and-medical-review--mobile--medical-reviewer--content flex flex-column">
                    <p>Last Edited:</p>
                    <p><?= get_field('clinically_reviewed_date'); ?></p>
                    <p>Medical Reviewer:</p>
                    <p class="medical_review_meta_name hide_on_mobile"><?= $medicalReviewUser['display_name'] ?></p>
                    <div class="medical_review_meta_bio_container hide hide_on_mobile">
                        <h6 class="">Meet <?= $medicalReviewUser['display_name'] ?></h6>
                        <div> <?= shorten_string($medicalReviewerMetaData['description'][0], 30); ?>...<a href="/contributors#<?= $medicalReviewerMetaData['first_name'][0] . '_' . $medicalReviewerMetaData['last_name'][0] ?>"> Read More</a></div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>