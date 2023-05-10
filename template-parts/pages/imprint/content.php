<?php

// Check value exists.
if (have_rows('content')):
    while (have_rows('content')) : the_row();
        if (get_row_layout() == 'imprint_section'):
            get_template_part('template-parts/pages/imprint/content/imprint_section', 'none');
            endif;
    endwhile;
endif;