<?php

// Check value exists.
if (have_rows('content')):
    while (have_rows('content')) : the_row();
        if (get_row_layout() == 'services_page'):
            get_template_part('template-parts/pages/services/content/services_page', 'none');
        elseif (get_row_layout() == 'services_anovamed'):
        get_template_part('template-parts/pages/services/content/services_anovamed', 'none');
        elseif (get_row_layout() == 'services_interims'):
            get_template_part('template-parts/pages/services/content/services_interims', 'none');
        elseif (get_row_layout() == 'services_project'):
                get_template_part('template-parts/pages/services/content/services_project', 'none');
        elseif (get_row_layout() == 'services_coaching'):
                get_template_part('template-parts/pages/services/content/services_coaching', 'none');
            endif;        
    endwhile;
endif;