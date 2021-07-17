<?php
if (have_rows('page_content')) :
    while (have_rows('page_content')) : the_row();
        // Content
        if (get_row_layout() == 'content--image') :

            get_template_part('template-parts/components/blocks/content/content--image');

        elseif (get_row_layout() == 'content--spacer') :

            get_template_part('template-parts/components/blocks/content/content--spacer');

        elseif (get_row_layout() == 'content--text') :

            get_template_part('template-parts/components/blocks/content/content--text');

        elseif (get_row_layout() == 'content--wysiwyg') :

            get_template_part('template-parts/components/blocks/content/content--wysiwyg');

        elseif (get_row_layout() == 'hero') :

        // Sections
        elseif (get_row_layout() == 'columns-content') :

            get_template_part('template-parts/components/blocks/sections/columns-content');

        endif;
    endwhile;
endif;
