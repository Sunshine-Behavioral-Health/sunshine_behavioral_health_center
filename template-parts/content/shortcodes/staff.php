<?php get_template_part('template-parts/javascript/readBio'); ?>

<section>
    <div class="staff_cards_container">
        <?php if (have_rows('staff_repeater', 'option')) :
            while (have_rows('staff_repeater', 'option')) : the_row(); ?>
                <div class="staff_card">
                    <div class="staff_card_wrapper">
                        <div class="staff_card_image">
                            <img src="<?php echo get_sub_field('staff_image')['url'] ?>" alt="">
                        </div>
                        <div class="staff_card_content">
                            <h5 class="staff_name"><?php echo get_sub_field('staff_name'); ?></h5>
                            <?php if (get_sub_field('staff_title')) : ?>
                                <h6 class="staff_title"><?php echo get_sub_field('staff_title', 'option'); ?></h6>
                            <?php endif; ?>

                            <?php if (get_sub_field('staff_team')) : ?>
                                <p><?php echo get_sub_field('staff_team', 'option') ?></p>
                            <?php endif; ?>

                            <?php if (get_sub_field('staff_bio')) : ?>
                                <button class="read_more_button" type="button" data-toggle="collapse" data-target="#staff_bio<?php echo get_sub_field('card_number') ?>" aria-expanded="false" aria-controls="staff_bio<?php echo get_sub_field('card_number', 'option') ?>">Read Bio</button>
                            <?php endif; ?>
                            <div class="bio collapse multi-collapse 
							<?php if (get_sub_field('staff_bio', 'option')) {
                                echo 'hide_bio';
                            } ?> " id="staff_bio<?php echo $staffCounter++; ?>">
                                <p><?php echo get_sub_field('staff_bio', 'option'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
        <?php
            endwhile;
        endif;
        ?>
    </div>
</section>