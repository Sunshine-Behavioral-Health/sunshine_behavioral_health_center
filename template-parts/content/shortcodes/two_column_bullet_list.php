<section class="two_column_bullet_list_section">
    <div class="two_column_bullet_list_container">
        <div class="two_column_bullet_list_headline_container">
            <h3><?= get_field('two_column_bullet_list_headline') ?></h3>
        </div>
        <div class="two_column_bullet_list_content_container">
            <?= get_field('two_column_bullet_list_content_headline') ?>
            <div class="two_column_bullet_list_bullet_container">
                <ul>
                    <?php
                    if (have_rows('two_column_bullet_list_column_one')) :
                        while (have_rows('two_column_bullet_list_column_one')) : the_row();
                    ?>
                            <li><?= get_sub_field('bullet') ?></li>
                    <?php
                        endwhile;
                    endif;
                    ?>
                </ul>
                <ul>
                    <?php
                    if (have_rows('two_column_bullet_list_column_two')) :
                        while (have_rows('two_column_bullet_list_column_two')) : the_row();
                    ?>
                            <li><?= get_sub_field('bullet') ?></li>
                    <?php
                        endwhile;
                    endif;
                    ?>
                </ul>
            </div>
        </div>
    </div>
</section>
</a>