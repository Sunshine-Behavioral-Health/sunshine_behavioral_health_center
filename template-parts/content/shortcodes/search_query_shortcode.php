<section class="search_query_shortcode_section">
    <div class="search_query_shortcode_headline_wrapper">
        <?php if (get_field('search_query_title')) : ?>
            <h5><?php echo get_field('search_query_title') ?></h5>
        <?php else : ?>
            <h5><?php echo get_field('search_value') ?> Related Articles</h5>
        <?php endif; ?>
    </div>
    <div class="search_query_shortcode_container">
        <?php
        $queryString = get_field('search_value');

        $related_args = array(
            'post_type' => 'post',
            'posts_per_page' => 10,
            's' => $queryString
        );
        $related = new WP_Query($related_args);

        if ($related->have_posts()) :
        ?>
            <div class="search_query_shortcode_content_container">

                <ul>
                    <?php while ($related->have_posts()) : $related->the_post(); ?>

                        <li class="search_query_shortcode_element">
                            <a href="<?php the_permalink(); ?>">
                                <h6><?php echo mb_strimwidth(get_the_title(), 0, 75, '...');  ?></h6>
                                <img src='<?php the_post_thumbnail_url(); ?>' alt="">
                            </a>

                        </li>
                        <div class="search_query_shortcode_spacer"></div>
                    <?php endwhile; ?>
                </ul>
                <button class="search_query_shortcode_button">See More</button>
            </div>
        <?php
        endif;
        ?>
    </div>
</section>