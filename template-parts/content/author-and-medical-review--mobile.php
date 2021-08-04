<?php
// Author
$AuthorUser = get_field("editor_user");
$authorAvatar = get_field('tsm_local_avatar', 'user_' . $AuthorUser['ID']);
$AuthorMetaData = get_user_meta($AuthorUser['ID']);

// Medical Reviewer
$medicalReviewAvatar = get_field('tsm_local_avatar', 'user_' . $medicalReviewUser['ID']);
$medicalReviewMetaBio =  $medicalReviewerMetaData['description'][0];
$medicalReviewerMetaData = get_user_meta($medicalReviewUser['ID']);
$medicalReviewUser = get_field("medical_review_user");
?>

<div class="author-and-medical-review--mobile">
    <?php if (get_field("editor_user")) : ?>
        <div class="author-and-medical-review--mobile--editor">
            <img id="editor_avatar_reference" src="<?= $authorAvatar['url']; ?>" alt="">
            <div class="author-and-medical-review--mobile--editor--content flex flex-column">
                <p>Last Edited:</p>
                <p><?= get_field('last_edited_date'); ?></p>
                <p>Author:</p>
                <a href="/contributors#<?= $AuthorMetaData['first_name'][0] . '_' . $AuthorMetaData['last_name'][0] ?>"><?= $AuthorUser['display_name'] ?></a>
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
                <a class="" href="/contributors#<?= $medicalReviewerMetaData['first_name'][0] . '_' . $medicalReviewerMetaData['last_name'][0] ?>">
                    <?= $medicalReviewUser['display_name'] ?>
                </a>
            </div>
        </div>
    <?php endif; ?>
</div>