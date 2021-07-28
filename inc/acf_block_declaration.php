<?php
if (have_rows('block_editor')) :

    while (have_rows('block_editor')) : the_row();

        if (get_row_layout() == 'accordion') :

            get_template_part('../blocks/blocks/accordion/accordion');

        elseif (get_row_layout() == 'accreditation_and_testimonial') :

            get_template_part('../blocks/blocks/accreditation_and_testimonial/accreditation_and_testimonial');

        elseif (get_row_layout() == 'columns') :

            get_template_part('../blocks/blocks/columns/columns');

        elseif (get_row_layout() == 'content') :

            get_template_part('../blocks/blocks/content/content');

        elseif (get_row_layout() == 'hero') :

            get_template_part('../blocks/blocks/hero/hero');

        elseif (get_row_layout() == 'image') :

            get_template_part('../blocks/blocks/image/image');

        elseif (get_row_layout() == 'list_items') :

            get_template_part('../blocks/blocks/list-items/list-items');

        elseif (get_row_layout() == 'location_and_accordion') :

            get_template_part('../blocks/blocks/location-and-accordion/location-and-accordion');

        elseif (get_row_layout() == 'testimonials') :

            get_template_part('../blocks/blocks/testimonials/testimonials');

        elseif (get_row_layout() == 'treatment_steps') :

            get_template_part('../blocks/blocks/treatment-steps/treatment-steps');

        endif;

    endwhile;

endif;
