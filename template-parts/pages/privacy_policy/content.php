<?php

// Check value exists.
if (have_rows('content')):
    while (have_rows('content')) : the_row();
        if (get_row_layout() == 'privacy_policy_section'):
            get_template_part('template-parts/pages/privacy_policy/content/privacy_policy_section', 'none');
            endif;
    endwhile;
endif;