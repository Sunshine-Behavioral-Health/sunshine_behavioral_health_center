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
            <div class="author-and-medical-review--desktop--author flex">
                <img id="author_avatar" src="<?= $authorAvatar['url']; ?>" alt="">
                <div class="author-and-medical-review--desktop--author--content flex flex-column">
                    <p class="author-and-medical-review--desktop--author--content--last-edited">Last Edited:</p>
                    <p class="author-and-medical-review--desktop--author--content--date"><?= get_field('last_edited_date'); ?></p>
                    <p class="author-and-medical-review--desktop--author--content--title">Author:</p>
                    <p class="author-and-medical-review--desktop--author--content--name"><?= $AuthorUser['display_name'] ?></p>
                    <div class="author-and-medical-review--desktop--author--bio hide">
                        <h6 class="">Meet <?= $AuthorUser['display_name'] ?></h6>

                        <div> <?= shorten_string($AuthorMetaData['description'][0], 30); ?>... <a href="/contributors#<?= $AuthorMetaData['first_name'][0] . '_' . $AuthorMetaData['last_name'][0] ?>"> Read More</a></div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if (get_field("medical_review_user")) : ?>
            <div class="author-and-medical-review--desktop--medical-reviewer flex">
                <img id="medical_review_avatar_reference" src="<?= $medicalReviewAvatar['url']; ?>" alt="">
                <div class="author-and-medical-review--desktop--medical-reviewer--content flex flex-column">
                    <p class="author-and-medical-review--desktop--medical-reviewer--content--last-edited">Last Edited:</p>
                    <p class="author-and-medical-review--desktop--medical-reviewer--content--date"><?= get_field('clinically_reviewed_date'); ?></p>
                    <p class="author-and-medical-review--desktop--medical-reviewer--content--title">Medical Reviewer:</p>
                    <p class="author-and-medical-review--desktop--medical-reviewer--content--medical-reviewer-title">Medical Reviewer:</p>
                    <p class="author-and-medical-review--desktop--medical-reviewer--content--name"><?php echo $medicalReviewUser['display_name'] ?></p>

                    <div class="author-and-medical-review--desktop--medical-reviewer--bio hide">
                        <h6 class="">Meet <?= $medicalReviewUser['display_name'] ?></h6>
                        <div> <?= shorten_string($medicalReviewerMetaData['description'][0], 30); ?>...<a href="/contributors#<?= $medicalReviewerMetaData['first_name'][0] . '_' . $medicalReviewerMetaData['last_name'][0] ?>"> Read More</a></div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
<?php endif; ?>