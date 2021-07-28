<?php
// Content
$headline = get_sub_field('testimonials_section_headline');
$subheadline = get_sub_field('testimonials_section_subheadline');
$testimonials = get_sub_field('testimonials'); /*['testimonial'] ['testimonial_name']*/

// Styles
$backgroundImage = get_sub_field('background_image');
$backgroundColor = get_sub_field('background_color');

$testimonialSlideNumber = 0;

if ($testimonials) : ?>
    <section class="testimonials" style="<?= !empty($backgroundColor) ? "background:{$backgroundColor};" : "" ?> <?= !empty($backgroundImage) ? "background-image:{$backgroundImage} !important;" : "" ?>">
        <div class="testimonials--wrapper wrapper">
            <h2><? echo $headline; ?></h2>
            <p><?= $subheadline; ?></p>
            <div class="row relative">
                <div class="col-xs-12">
                    <?php foreach ($testimonials as $testimonial) : ?>
                        <div class="editor-content carousel-slide">
                            <?= $testimonial['testimonial']; ?>
                        </div>
                    <?php endforeach; ?>
                    <?php if (count($testimonials) > 1) : ?>
                        <div style="text-align:center">
                            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>

                            <?php foreach ($testimonials as $testimonial) : ?>
                                <span class="dot" onclick="currentSlide(<?= $testimonialSlideNumber++ ?>)"></span>
                            <?php endforeach; ?>
                            <a class="next" onclick="plusSlides(1)">&#10095;</a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>