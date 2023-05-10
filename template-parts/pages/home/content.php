<?php

// Check value exists.
if (have_rows('content')):
    while (have_rows('content')) : the_row();
        if (get_row_layout() == 'first_screen'):
            get_template_part('template-parts/pages/home/content/first_screen', 'none');
        endif;
        if (get_row_layout() == 'contact_section'):
            get_template_part('template-parts/pages/home/content/contact_section', 'none');
        endif;
        if (get_row_layout() == 'course'):
           get_template_part('template-parts/pages/home/content/course', 'none');
        endif;
         if (get_row_layout() == 'programs'):
            get_template_part('template-parts/pages/home/content/programs', 'none');
         endif;
        if (get_row_layout() == 'texts'):
            get_template_part('template-parts/pages/home/content/texts', 'none');
        endif;
    endwhile;
endif;