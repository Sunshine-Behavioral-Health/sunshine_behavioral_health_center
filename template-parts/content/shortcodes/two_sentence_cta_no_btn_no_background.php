<?php if (get_field('cta_no_btn_no_background_link')) : ?>
    <section class="cta_no_btn_no_bkg_section">
        <div class="cta_no_btn_no_bkg_container">
            <a href="<?= get_field('cta_no_btn_no_background_link') ?>">
                <span class="cta_no_btn_no_bkg_sentence_1"><?= get_field('cta_no_btn_no_background_sentence_1') ?></span>
                <span class="cta_no_btn_no_bkg_sentence_2"><?= get_field('cta_no_btn_no_background_sentence_2') ?></span>
            </a>
        </div>
    </section>
<?php endif; ?>