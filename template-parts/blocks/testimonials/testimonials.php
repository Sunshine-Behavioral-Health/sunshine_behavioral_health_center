<?php
// Content
$headline = get_sub_field('testimonials_section_headline');
$subheadline = get_sub_field('testimonials_section_subheadline');
$testimonials = get_sub_field('list_items'); /*['testimonial'] ['name']*/

// Styles
$backgroundImage = get_sub_field('background_image');
$backgroundColor = get_sub_field('background_color');

$testimonialSlideNumber = 0;

if ($testimonials) : ?>
    <section class="list-items" style="<?= !empty($backgroundColor) ? "background:{$backgroundColor};" : "" ?> <?= !empty($backgroundImage) ? "background-image:{$backgroundImage} !important;" : "" ?>">
        <div class="columns_content-wrapper wrapper">
            <h2><? echo $headline; ?></h2>
            <p><?= $subheadline; ?></p>
            <div class="row">
                <div class="col-xs-12">
                    <?php foreach ($testimonials as $testimonial) : ?>
                        <div class="editor-content carousel-slide">
                            <?= $testimonial['testimonial']; ?>
                            <p><?= $testimonial['name']; ?></p>
                        </div>
                    <?php endforeach; ?>

                    <div style="text-align:center">
                        <?php foreach ($testimonials as $testimonial) : ?>
                            <span class="dot" onclick="currentSlide(<?= $testimonialSlideNumber++ ?>)"></span>
                        <?php endforeach; ?>
                    </div>

                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>