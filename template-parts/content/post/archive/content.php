<?php
$posts_page_id = get_option('page_for_posts');
$post_sorting = get_field('post_sorting', $posts_page_id);
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$posts_args = array(
  'orderby' => $post_sorting['sort_by'],
  'order' => $post_sorting['sorting_direction'],
  'post_status' => 'publish',
  'post_type' => 'post',
  'posts_per_page' => get_option('posts_per_page'),
  'suppress_filters' => false,
  'paged' => $paged,
);
$props = [
  'archive_id' => $posts_page_id,
  'page_id' => get_queried_object_id(),
  'posts_args' => $posts_args,
  'paged' => $paged,
];
get_template_part('template-parts/content/post/archive/content/posts', null, $props);
get_template_part('template-parts/footer/pre-footer', 'none');
