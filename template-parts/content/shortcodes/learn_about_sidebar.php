<section class="learnAbout_sidebar_section">
    <div class="learnAbout_sidebar_container">
        <h4>Learn About Our Center</h4>
        <div class="learnAbout_sidebar_links">
            <?php
            if (have_rows('learn_about_sidebar_links', 'option')) :
                while (have_rows('learn_about_sidebar_links', 'option')) : the_row();
            ?>
                    <a href="<?php echo get_sub_field('link', 'option'); ?>"><?php echo get_sub_field('text', 'option'); ?></a>
                <?php
                endwhile;
            else :
                ?>
                <a href="/about-us/">About Us</a>
                <a href="/staff/">Our Staff</a>
                <a href="/schedule/">Program Schedule</a>
            <?php endif; ?>
        </div>
    </div>
</section>