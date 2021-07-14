<section class="recommendations_section">
    <div class="recommendations_container">
        <?php if (get_field('recommendations-headline')) : ?>
            <h3><?php echo get_field('recommendations-headline') ?></h3>
        <?php endif; ?>
        <?php
        if (have_rows('recommendations-repeater')) : ?>
            <div class="recommendations_repeater_container">
                <?php
                while (have_rows('recommendations-repeater')) : the_row();
                ?>
                    <div class="recommendations_repeater_element">
                        <a href="<?php echo get_sub_field('link') ?>"><?php echo get_sub_field('link_text') ?> <img src="<?php echo get_field('recommendations-arrow', 'option')['url'] ?>" alt=""></a>
                        <p><?php echo get_sub_field('subtext') ?></p>
                    </div>
                <?php
                endwhile;
                ?>
            </div>
        <?php
        endif;
        ?>
    </div>
</section>