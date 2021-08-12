<section class="treatment_step_carousel_section">
    <div class="treatment_step_carousel_container custom_carousel wrapper">
        <?php
        if (have_rows('treatment_steps', 'option')) : ?>
            <h2>Our Treatment Steps</h2>
            <div class="treatment_step_carousel_wrapper">
                <?php
                while (have_rows('treatment_steps', 'option')) : the_row();
                ?>
                    <div class="treatment_step_carousel_element fade">
                        <div class="treatment_step_carousel_element_content">
                            <h4><?= get_sub_field('step_subheadline', 'option') ?></h4>
                            <h3><?= get_sub_field('step_headline', 'option') ?></h3>
                            <p><?= get_sub_field('step_paragraph', 'option') ?></p>
                            <a href="<?= get_sub_field('step_url', 'option') ?>"><?= get_sub_field('step_cta_text', 'option') ?><img src="<?= get_template_directory_uri() . '/icons/right_arrow.png' ?>" alt=""></a>
                        </div>
                        <div class="treatment_step_carousel_element_image treatment_step_carousel_element_image--mobile hide_on_desktop hide_on_tablet" style="background-image: url(' <?= get_sub_field('step_image_mobile', 'option')['url'] ?>');"></div>
                        <div class="treatment_step_carousel_element_image treatment_step_carousel_element_image--desktop hide_on_mobile show_on_tablet" style="background-image: url(' <?= get_sub_field('step_image', 'option')['url'] ?>');"></div>
                    </div>
                <?php endwhile; ?>

                <div class="treatment_step_carousel_buttons">
                    <div class="treatment_step_carousel_button prev">
                        <svg style="max-height:75px;" version="1.1" id="circle" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" xml:space="preserve">
                            <circle class="inner_circle" cx="50" cy="50" r="40" stroke-width="3" fill="none" />
                        </svg>
                        <a class="prev_arrow">&#10094;</a>

                    </div>
                    <div class="treatment_step_carousel_button next">
                        <svg style="max-height:75px;" version="1.1" id="circle" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" xml:space="preserve">
                            <circle class="animated_circle" fill="none" stroke-width="4" stroke-mitterlimit="0" cx="50" cy="50" r="48" stroke-dasharray="360" stroke-linecap="round" transform="rotate(-90 ) translate(-100 0)">
                                <animate attributeName="stroke-dashoffset" values="360;0" dur="7s" repeatCount="indefinite"></animate>
                            </circle>
                            <circle class="inner_circle" cx="50" cy="50" r="40" stroke="grey" stroke-width="3" fill="none" />
                        </svg>
                        <a class="next_arrow">&#10095;</a>
                    </div>
                </div>
            </div>
    </div>
<?php endif; ?>
</section>

<script>
    window.onload = function() {
        const slides = document.querySelectorAll('.treatment_step_carousel_element');
        slides[0].classList.add('activeSlide');
    };

    jQuery(document).ready(function($) {
        const prevBtn = document.querySelector('.prev');
        const nextBtn = document.querySelector('.next');
        const slides = document.querySelectorAll('.treatment_step_carousel_element');
        const numberOfSlides = slides.length;

        let slideNumber = 0;

        // Next Button
        nextBtn.addEventListener("click", () => {
            slides.forEach((slide) => {
                slide.classList.remove("activeSlide");
            });

            slideNumber++;

            if (slideNumber > (numberOfSlides - 1)) {
                slideNumber = 0;
            }

            slides[slideNumber].classList.add("activeSlide");
            clearInterval(playSlider);
            repeater();
            reset_animation();
        });

        // Prev Button
        prevBtn.addEventListener("click", () => {
            slides.forEach((slide) => {
                slide.classList.remove("activeSlide");
            });

            slideNumber--;

            if (slideNumber < 0) {
                slideNumber = numberOfSlides - 1;
            }

            slides[slideNumber].classList.add("activeSlide");
            clearInterval(playSlider);
            repeater();
            reset_animation();

        });

        //image slider autoplay
        let playSlider;

        let repeater = () => {
            playSlider = setInterval(function() {
                slides.forEach((slide) => {
                    slide.classList.remove("activeSlide");
                });

                slideNumber++;

                if (slideNumber > (numberOfSlides - 1)) {
                    slideNumber = 0;
                }

                slides[slideNumber].classList.add("activeSlide");
                reset_animation();
            }, 7000);
        }
        repeater();

        function reset_animation() {
            document.querySelector('animate').beginElement();
        }
    });
</script>