<?php

if (have_rows('content')) :
  while (have_rows('content')) : the_row();
    if (get_row_layout() == 'first_screen') :
      get_template_part('template-parts/pages/home/content/first_screen', 'none');
    elseif (get_row_layout() == 'student_work') :
      get_template_part('template-parts/pages/home/content/student_work', 'none');
    elseif (get_row_layout() == 'free_vebinar') :
      get_template_part('template-parts/pages/home/content/free_vebinar', 'none');
    elseif (get_row_layout() == 'benefits') :
      get_template_part('template-parts/pages/home/content/benefits', 'none');
    elseif (get_row_layout() == 'faq') :
      get_template_part('template-parts/pages/home/content/faq', 'none');
    elseif (get_row_layout() == 'contact_form') :
      get_template_part('template-parts/pages/home/content/contact_form', 'none');
    elseif (get_row_layout() == 'courses') :
      get_template_part('template-parts/pages/home/content/courses', 'none');
    elseif (get_row_layout() == 'benefits') :
      get_template_part('template-parts/pages/home/content/benefits', 'none');
    elseif (get_row_layout() == 'text_blocks') :
      get_template_part('template-parts/pages/home/content/text_blocks', 'none');
    elseif (get_row_layout() == 'reviews') :
      get_template_part('template-parts/pages/home/content/reviews', 'none');
    endif;
  endwhile;
endif;
