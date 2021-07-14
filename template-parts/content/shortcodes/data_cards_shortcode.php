<section class="data_cards_shortcode_section">
    <div class="data_cards_shortcode_container">
        <?php
        if (have_rows('data_cards_shortcode')) :
            while (have_rows('data_cards_shortcode')) : the_row();
        ?>
                <div class="data_cards_indv_card">
                    <h5><?php echo get_sub_field('data_card_top_headline') ?></h5>
                    <h5><?php echo get_sub_field('data_card_bottom_headline') ?></h5>
                    <p><?php echo get_sub_field('data_card_paragraph') ?></p>
                </div>
        <?php
            endwhile;
        endif;
        ?>
    </div>
</section>