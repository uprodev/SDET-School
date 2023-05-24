<?php

if (have_rows('content')) :
  while (have_rows('content')) : the_row();
    if (get_row_layout() == 'first_screen') :
      get_template_part('template-parts/content/course/single/content/first_screen', 'none');
    elseif (get_row_layout() == 'benefits') :
      get_template_part('template-parts/content/course/single/content/benefits', 'none');
    elseif (get_row_layout() == 'work_students') :
      get_template_part('template-parts/content/course/single/content/work_students', 'none');
    elseif (get_row_layout() == 'time_line') :
      get_template_part('template-parts/content/course/single/content/time_line', 'none');
    elseif (get_row_layout() == 'founder') :
      get_template_part('template-parts/content/course/single/content/founder', 'none');
    elseif (get_row_layout() == 'curriculum') :
      get_template_part('template-parts/content/course/single/content/curriculum', 'none');
    elseif (get_row_layout() == 'take_course') :
      get_template_part('template-parts/content/course/single/content/take_course', 'none');
    elseif (get_row_layout() == 'additional_courses') :
      get_template_part('template-parts/content/course/single/content/additional_courses', 'none');
    elseif (get_row_layout() == 'faq') :
      get_template_part('template-parts/content/course/single/content/faq', 'none');
    elseif (get_row_layout() == 'reviews') :
      get_template_part('template-parts/content/course/single/content/reviews', 'none');
    elseif (get_row_layout() == 'student_stories') :
      get_template_part('template-parts/content/course/single/content/student_stories', 'none');
    endif;
  endwhile;
  get_template_part('template-parts/footer/pre-footer', 'none');
endif;
