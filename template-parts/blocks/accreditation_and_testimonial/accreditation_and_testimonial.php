<?php
$sectionHeadline = get_sub_field('accreditation_and_testimonial_headline');
$testimonial = get_sub_field('testimonial'); // wysiwyg
$testimonialName = get_sub_field('testimonial_name'); //string
$testimonialBackgroundColor = get_sub_field('testimonial_background_color'); //color
$badgesBorderColor = get_sub_field('accreditation_border_color'); //color

?>

<?php if ($testimonial) : ?>
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
            <div class="row accreditation_and_testimonial--testimonial flex-column wrapper">
                <?php if ($testimonial) : ?>
                    <?= $testimonial; ?>
                <?php endif; ?>
                <?php if ($testimonialName) : ?>
                    <p class="accreditation_and_testimonial--testimonial-name"><?= $testimonialName; ?></p>
                <?php endif; ?>
                <img class="five-stars" src="<?php echo get_template_directory_uri() . '/icons/five_stars.png' ?>" alt="" loading="lazy">
            </div>
        </div>
    </section>
<?php endif; ?>