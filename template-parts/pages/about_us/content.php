<?php

// Check value exists.
if (have_rows('content')):
    while (have_rows('content')) : the_row();
        if (get_row_layout() == 'about_us_page'):
            get_template_part('template-parts/pages/about_us/content/about_us_page', 'none');
            elseif (get_row_layout() == 'about_us_anovamed'):
                get_template_part('template-parts/pages/about_us/content/about_us_anovamed', 'none');
            elseif (get_row_layout() == 'about_us_director'):
                    get_template_part('template-parts/pages/about_us/content/about_us_director', 'none');
            endif;
    endwhile;
endif;