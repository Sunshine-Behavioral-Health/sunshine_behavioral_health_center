

<?php
$pageContent = get_field('page_content');

if (have_rows($pageContent)) :
    while (have_rows($pageContent) : the_row();

        if (get_row_layout() == 'content--image') :

            get_template_part('template-parts/components/blocks/content/content--image');

        elseif (get_row_layout() == 'content--spacer') :

            get_template_part('template-parts/components/blocks/content/content--spacer');

        elseif (get_row_layout() == 'content--text') :

            get_template_part('template-parts/components/blocks/content/content--text');

        elseif (get_row_layout() == 'content--wysiwyg') :

            get_template_part('template-parts/components/blocks/content/content--wysiwyg');

        elseif (get_row_layout() == 'hero') :
            get_template_part('template-parts/components/blocks/content/content--wysiwyg');

        elseif (get_row_layout() == 'columns-content') :

            get_template_part('template-parts/components/blocks/heros/hero');
            
        endif;
    endwhile;
endif;
