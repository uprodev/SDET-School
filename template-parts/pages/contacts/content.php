<?php

// Check value exists.
if (have_rows('content')):
    while (have_rows('content')) : the_row();
        if (get_row_layout() == 'contacts_page'):
            get_template_part('template-parts/pages/contacts/content/contacts_page', 'none');
            endif;
    endwhile;
endif;