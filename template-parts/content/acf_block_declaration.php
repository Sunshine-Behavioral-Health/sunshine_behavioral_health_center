<?php
if (have_rows('block_editor')) :
    while (have_rows('block_editor')) : the_row();
        // Content
        if (get_row_layout() == 'content--image') :

            get_template_part('template-parts/blocks/content/content--image');

        elseif (get_row_layout() == 'content--spacer') :

            get_template_part('template-parts/blocks/content/content--spacer');

        elseif (get_row_layout() == 'content--text') :

            get_template_part('template-parts/blocks/content/content--text');

        elseif (get_row_layout() == 'content--wysiwyg') :

            get_template_part('template-parts/blocks/content/content--wysiwyg');

        // Heros
        elseif (get_row_layout() == 'hero-fifty_fifty') :

            get_template_part('template-parts/blocks/heros/hero-fifty_fifty');

        elseif (get_row_layout() == 'hero-parallax') :

            get_template_part('template-parts/blocks/heros/hero-parallax');

        elseif (get_row_layout() == 'hero-static') :

            get_template_part('template-parts/blocks/heros/hero-static');

        // Sections
        elseif (get_row_layout() == 'accordion') :

            get_template_part('template-parts/blocks/sections/accordion');

        elseif (get_row_layout() == 'cards') :

            get_template_part('template-parts/blocks/sections/cards');

        elseif (get_row_layout() == 'content_with_image') :

            get_template_part('template-parts/blocks/sections/content_with_image');

        elseif (get_row_layout() == 'contact_form') :

            get_template_part('template-parts/blocks/sections/contact_form');

        elseif (get_row_layout() == 'data_cards') :

            get_template_part('template-parts/blocks/sections/data_cards');

        elseif (get_row_layout() == 'columns') :

            get_template_part('template-parts/blocks/sections/columns');

        elseif (get_row_layout() == 'gallery_carousel') :

            get_template_part('template-parts/blocks/sections/gallery_carousel');

        elseif (get_row_layout() == 'testimonial_carousel') :

            get_template_part('template-parts/blocks/sections/testimonial_carousel');

        endif;
    endwhile;
endif;
