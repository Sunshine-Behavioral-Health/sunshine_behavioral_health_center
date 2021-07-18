<?php
if (have_rows('block_editor')) :

    while (have_rows('block_editor')) : the_row();

        if (get_row_layout() == 'accordion') :

            get_template_part('template-parts/blocks/accordion/accordion');

        elseif (get_row_layout() == 'columns') :

            get_template_part('template-parts/blocks/columns/columns');

        elseif (get_row_layout() == 'content') :

            get_template_part('template-parts/blocks/content/content');

        elseif (get_row_layout() == 'hero') :

            get_template_part('template-parts/blocks/hero/hero');

        elseif (get_row_layout() == 'image') :

            get_template_part('template-parts/blocks/image/image');

        elseif (get_row_layout() == 'location_and_accordion') :

            get_template_part('template-parts/blocks/location-and-accordion/location-and-accordion');

        endif;

    endwhile;

endif;
