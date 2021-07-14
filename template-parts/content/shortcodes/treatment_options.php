<?php if (get_field('treatment_options_element', 'option')) : ?>
    <section class="related_pages_section treatment_options_section">
        <div class="related_pages_headline">
            <h4><?php echo get_field('treatment_options_headline', 'option') ?></h4>
        </div>
        <div class="related_pages_wrapper">
            <?php
            if (have_rows('treatment_options_element', 'option')) :
                while (have_rows('treatment_options_element', 'option')) : the_row();
            ?>
                    <div class="related_pages_element">
                        <?php
                        if (have_rows('treatment_options_group', 'option')) :
                            while (have_rows('treatment_options_group', 'option')) : the_row();
                        ?>
                                <?php if (get_sub_field('headline', 'option')) : ?>
                                    <h6><?php echo get_sub_field('text', 'option') ?></h6>
                                <?php else : ?>
                                    <a href="/<?php echo get_sub_field('link', 'option') ?>">
                                        <p>—<?php echo get_sub_field('text', 'option') ?></p>
                                    </a>
                                <?php endif; ?>
                        <?php
                            endwhile;
                        endif;
                        ?>
                    </div>
            <?php
                endwhile;
            endif;
            ?>
        </div>
    </section>
<?php endif; ?>