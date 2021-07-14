<section id="home_staff_section" class="">
    <div class="staff_container ">
        <h2 class="staff_headline"><?php the_field('staff_headline') ?></h2>
        <div class="row staff_width">
            <?php if (have_rows('staff_repeater', 'option')) :
                while (have_rows('staff_repeater', 'option')) : the_row();
                    if (get_sub_field('on_home_page', 'option')) : ?>
                        <div class="staff_individual_card">
                            <img src="<?php echo get_sub_field('staff_image')['url'] ?>" alt="">
                            <h5 class="staff_name"><?php echo get_sub_field('staff_name'); ?></p>
                                <p><?php echo get_sub_field('staff_title', 'option'); ?></p>
                        </div>
            <?php
                    endif;
                endwhile;
            endif;
            ?>
            <div class="rest_of_staff_link_container">
                <a href="/staff/">
                    <h3>Meet the Rest of Our Staff</h3>
                </a>
            </div>
        </div>
    </div>
</section>