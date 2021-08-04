<?php
// Author
$AuthorUser = get_field("editor_user");
$authorAvatar = get_field('tsm_local_avatar', 'user_' . $AuthorUser['ID']);
$AuthorMetaData = get_user_meta($AuthorUser['ID']);

// Medical Reviewer
$medicalReviewUser = get_field("medical_review_user");
$medicalReviewAvatar = get_field('tsm_local_avatar', 'user_' . $medicalReviewUser['ID']);
$medicalReviewMetaBio =  $medicalReviewerMetaData['description'][0];
$medicalReviewerMetaData = get_user_meta($medicalReviewUser['ID']);

?>
<?php if (get_field('editor_user') || get_field('medical_review_user')) : ?>
    <div class="author-and-medical-review author-and-medical-review--mobile">
        <?php if (get_field("editor_user")) : ?>
            <div class="author-and-medical-review--mobile--author">
                <img id="author_avatar" src="<?= $authorAvatar['url']; ?>" alt="">
                <div class="author-and-medical-review--mobile--author--content flex flex-column">
                    <p class="author-and-medical-review--mobile--author--content--last-edited">Last Edited:</p>
                    <p class="author-and-medical-review--mobile--author--content--date"><?= get_field('last_edited_date'); ?></p>
                    <p class="author-and-medical-review--mobile--author--content--author-title">Author:</p>
                    <a class="author-and-medical-review--mobile--author--content--name" href="/contributors#<?= $AuthorMetaData['first_name'][0] . '_' . $AuthorMetaData['last_name'][0] ?>"><?= $AuthorUser['display_name'] ?></a>
                </div>
            </div>
        <?php endif; ?>

        <?php if (get_field("medical_review_user")) : ?>
            <div class="author-and-medical-review--mobile--medical-reviewer">
                <img id="medical-reviewer_avatar" src="<?= $medicalReviewAvatar['url']; ?>" alt="">
                <div class="author-and-medical-review--mobile--medical-reviewer--content flex flex-column">
                    <p class="author-and-medical-review--mobile--medical-reviewer--content--last-edited">Last Edited:</p>
                    <p class="author-and-medical-review--mobile--medical-reviewer--content--last-edited"><?= get_field('clinically_reviewed_date'); ?></p>
                    <p class="author-and-medical-review--mobile--medical-reviewer--content--last-edited">Medical Reviewer:</p>
                    <a class="author-and-medical-review--mobile--medical-reviewer--content--last-edited" href="/contributors#<?= $medicalReviewerMetaData['first_name'][0] . '_' . $medicalReviewerMetaData['last_name'][0] ?>">
                        <?= $medicalReviewUser['display_name'] ?>
                    </a>
                </div>
            </div>
        <?php endif; ?>
    </div>
<?php endif; ?>