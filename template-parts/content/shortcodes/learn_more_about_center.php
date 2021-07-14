<section class="learn_more_about_center_section">
    <div class="learn_more_about_center_container">
        <h4>Learn More About Our Center</h4>
        <div class="learn_more_about_center_links">
            <?php
            if (have_rows('learn_about')) :
                while (have_rows('learn_about')) : the_row();
            ?>
                    <a href="<?php echo get_sub_field('link')['url']; ?>"><?php echo get_sub_field('text'); ?></a>
                    <span> | </span>
            <?php
                endwhile;
            else : 
            ?>
                <a href="/about-us/">About Us</a>
                <span> | </span>
                <a href="/staff/">Our Staff</a>
                <span> | </span>
                <a href="/schedule/">Program Schedule</a>
            <?php endif; ?>
        </div>
    </div>
</section>