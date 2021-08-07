<?php
// Author

$AuthorUser = get_field("editor_user");
$AuthorMetaData = get_user_meta($AuthorUser['ID']);
$authorAvatar = get_field('tsm_local_avatar', 'user_' . $AuthorUser['ID']);

// Medical Reviewer
$medicalReviewUser = get_field("medical_review_user");
$medicalReviewerMetaData = get_user_meta($medicalReviewUser['ID']);
$medicalReviewAvatar = get_field('tsm_local_avatar', 'user_' . $medicalReviewUser['ID']);
$medicalReviewMetaBio =  $medicalReviewerMetaData['description'][0];
?>

<?php if (get_field('editor_user') || get_field('medical_review_user')) : ?>
    <div class="author-and-medical-review author-and-medical-review--desktop">
        <?php if (get_field("editor_user")) : ?>
            <div class="author_container flex m-b-15">
                <img id="author_avatar" src="<?= $authorAvatar['url']; ?>" alt="">
                <div class="author_content relative flex flex-column">
                    <p class="last-edited">Last Edited:</p>
                    <p class="date"><?= get_field('last_edited_date'); ?></p>
                    <p class="title">Author:</p>
                    <p class="name"><?= $AuthorUser['display_name'] ?></p>
                    <div class="bio hide">
                        <h6 class="">Meet <?= $AuthorUser['display_name'] ?></h6>

                        <div> <?= shorten_string($AuthorMetaData['description'][0], 30); ?>... <a href="/contributors#<?= $AuthorMetaData['first_name'][0] . '_' . $AuthorMetaData['last_name'][0] ?>"> Read More</a></div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if (get_field("medical_review_user")) : ?>
            <div class="medical-reviewer_container flex">
                <img id="medical_review_avatar_reference" src="<?= $medicalReviewAvatar['url']; ?>" alt="">
                <div class="medical-reviewer_content relative flex flex-wrap">
                    <p class="last-edited">Last Edited:</p>
                    <p class="date"><?= get_field('clinically_reviewed_date'); ?></p>
                    <p class="title">Medical Reviewer:</p>
                    <p class="name"><?= $medicalReviewUser['display_name'] ?></p>
                    <div class="bio hide">
                        <h6 class="">Meet <?= $medicalReviewUser['display_name'] ?></h6>
                        <div> <?= shorten_string($medicalReviewerMetaData['description'][0], 30); ?>...<a href="/contributors#<?= $medicalReviewerMetaData['first_name'][0] . '_' . $medicalReviewerMetaData['last_name'][0] ?>"> Read More</a></div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
<?php endif; ?>