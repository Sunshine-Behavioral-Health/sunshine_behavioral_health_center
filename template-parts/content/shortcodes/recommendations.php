<section class="recommendations_section">
    <div class="recommendations_container">
        <?php if (get_field('recommendations-headline')) : ?>
            <h3><?= get_field('recommendations-headline') ?></h3>
        <?php endif; ?>
        <?php
        if (have_rows('recommendations-repeater')) : ?>
            <div class="recommendations_repeater_container">
                <?php
                while (have_rows('recommendations-repeater')) : the_row();
                ?>
                    <div class="recommendations_repeater_element">
                        <a href="<?= get_sub_field('link') ?>"><?= get_sub_field('link_text') ?> <img src="<?= get_field('recommendations-arrow', 'option')['url'] ?>" alt=""></a>
                        <p><?= get_sub_field('subtext') ?></p>
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