<?php
$sectionHeadline = get_sub_field('accreditation_and_testimonial_headline');
$testimonials = get_sub_field('testimonials'); // ['testimonial']

$testimonialBackgroundColor = get_sub_field('testimonial_background_color'); //color
$badgesBorderColor = get_sub_field('accreditation_border_color'); //color

?>

<?php if ($testimonials) : ?>
    <section class="accreditation_and_testimonial" style="<?= !empty($testimonialBackgroundColor) ? "background:{$testimonialBackgroundColor};" : "" ?>">
        <div class="wrapper relative flex justify-center flex-column">
            <div class="accreditation_and_testimonial--badges flex flex-column justify-center align-center" style="<?= !empty($badgesBorderColor) ? "border: 2px solid {$badgesBorderColor};" : "" ?>">
                <h2 class="text-center"><?= $sectionHeadline ?></h2>
                <div class="flex accreditation_and_testimonial--badges--wrapper">
                    <?php echo get_field('legitscript_html', 'option') ?>

                    <?php
                    if (have_rows('footer_badges', 'option')) :
                        while (have_rows('footer_badges', 'option')) : the_row();
                    ?>
                            <img loading="lazy" src="<?php echo get_sub_field('badge', 'option')['url']; ?>" alt="">
                    <?php
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
            <div class="accreditation_and_testimonial--testimonial flex-column wrapper">
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
    </section>
<?php endif; ?>