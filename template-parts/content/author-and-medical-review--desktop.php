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

<?php if (get_field('editor_user') || get_field('medical_review_user')) : ?>
    <div class="author-and-medical-review--desktop">
        <h2>AUTHOR AND MEDICAL REVIEW MOBILE</h2>
        <?php if (get_field("editor_user")) : ?>

            <div class="author-and-medical-review--desktop--editor">
                <img id="editor_avatar_reference" src="<?= $authorAvatar['url']; ?>" alt="">
                <div class="author-and-medical-review--desktop--editor--content flex flex-column">
                    <p>Last Edited:</p>
                    <p><?= get_field('last_edited_date'); ?></p>
                    <p>Author:</p>
                    <a href="/contributors#<?= $AuthorMetaData['first_name'][0] . '_' . $AuthorMetaData['last_name'][0] ?>"><?= $AuthorUser['display_name'] ?></a>
                </div>
            </div>
        <?php endif; ?>

        <?php if (get_field("medical_review_user")) : ?>
            <div class="author-and-medical-review--desktop--medical-reviewer">
                <img id="medical_review_avatar_reference" src="<?= $medicalReviewAvatar['url']; ?>" alt="">
                <div class="author-and-medical-review--desktop--medical-reviewer--content flex flex-column">
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
<?php endif; ?>