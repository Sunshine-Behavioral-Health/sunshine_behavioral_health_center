<?php if (get_field('related_pages_drugs', 'option')) : ?>
    <section class="related_pages_section related_pages_drugs related_pages_section_nonsidebar">
        <div class="related_pages_headline">
            <h4><?php echo get_field('related_pages_drugs_title', 'option') ?></h4>
            <p><?php echo get_field('related_pages_subheadline', 'option') ?></p>
        </div>
        <div class="related_pages_wrapper">
            <?php
            if (have_rows('related_pages_drugs', 'option')) :
                while (have_rows('related_pages_drugs', 'option')) : the_row();
            ?>
                    <div class="related_pages_element">
                        <a href="<?php echo get_sub_field('link') ?>"><?php echo get_sub_field('text') ?></a>
                    </div>
            <?php
                endwhile;
            endif;
            ?>
        </div>
    </section>
<?php endif; ?>