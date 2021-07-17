

<?php
$pageContent = get_field('block_editor');

if (have_rows($pageContent)) :
    while (have_rows($pageContent)) : the_row();

        if (get_row_layout() == 'accordion') :

            get_template_part('template-parts/components/blocks/accordion/accordion');

        elseif (get_row_layout() == 'columns') :

            get_template_part('template-parts/components/blocks/columns/columns');

        elseif (get_row_layout() == 'content') :

            get_template_part('template-parts/components/blocks/content/content');

        elseif (get_row_layout() == 'hero') :

            get_template_part('template-parts/components/blocks/hero/hero');

        elseif (get_row_layout() == 'image') :

            get_template_part('template-parts/components/blocks/image/image');

        endif;
    endwhile;
endif;
