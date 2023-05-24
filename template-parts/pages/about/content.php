<?php

if (have_rows('content')) :
  while (have_rows('content')) : the_row();
    if (get_row_layout() == 'first_screen') :
      get_template_part('template-parts/pages/about/content/first_screen', 'none');
    elseif (get_row_layout() == 'mission') :
      get_template_part('template-parts/pages/about/content/mission', 'none');
    elseif (get_row_layout() == 'story') :
      get_template_part('template-parts/pages/about/content/story', 'none');
    elseif (get_row_layout() == 'benefits') :
      get_template_part('template-parts/pages/about/content/benefits', 'none');
    elseif (get_row_layout() == 'video') :
      get_template_part('template-parts/pages/about/content/video', 'none');
    elseif (get_row_layout() == 'contact_form') :
      get_template_part('template-parts/pages/about/content/contact_form', 'none');
    endif;
  endwhile;
endif;
