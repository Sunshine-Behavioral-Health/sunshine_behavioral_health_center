<?php
// Author
$authorUser = get_field("editor_user");
$authorAvatar = get_field('tsm_local_avatar', 'user_' . $authorUser['ID']);
$AuthorMetaData = get_user_meta($authorUser['ID']);

// Medical Reviewer
$medicalReviewUser = get_field("medical_review_user");
$medicalReviewAvatar = get_field('tsm_local_avatar', 'user_' . $medicalReviewUser['ID']);
$medicalReviewMetaBio =  $medicalReviewerMetaData['description'][0];
$medicalReviewerMetaData = get_user_meta($medicalReviewUser['ID']);

?>
<?php if (get_field('editor_user') || get_field('medical_review_user')) : ?>
    <div class="author-and-medical-review author-and-medical-review--mobile m-t-15 m-b-15 flex flex-column align-center">
        <?php if (get_field("editor_user")) : ?>
            <div class="author_container flex m-b-15 p-b-10">
                <div class="author_content flex">
                    <div class="flex flex-column">
                        <p class="last-edited m-r-15">Last Edited:</p>
                        <p class="date"><?= get_field('last_edited_date'); ?></p>
                    </div>
                    <div class="flex flex-column">
                        <p class="title m-r-15">Author:</p>
                        <a class="name" href="/contributors#<?= $AuthorMetaData['first_name'][0] . '_' . $AuthorMetaData['last_name'][0] ?>"><?= $authorUser['display_name'] ?></a>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if (get_field("medical_review_user")) : ?>
            <div class="medical-reivewer_container flex">
                <img id="medical-reviewer_avatar" src="<?= $medicalReviewAvatar['url']; ?>" alt="">
                <div class="medical-reviewer_content flex flex-column">
                    <p class="last-edited">Last Edited:</p>
                    <p class="date"><?= get_field('clinically_reviewed_date'); ?></p>
                    <p class="title">Medical Reviewer:</p>
                    <a class="name" href="/contributors#<?= $medicalReviewerMetaData['first_name'][0] . '_' . $medicalReviewerMetaData['last_name'][0] ?>">
                        <?= $medicalReviewUser['display_name'] ?>
                    </a>
                </div>
            </div>
        <?php endif; ?>
    </div>
<?php endif; ?>