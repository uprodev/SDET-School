<?php
if (!defined('ABSPATH')) {
  exit;
}

add_action('init', 'my_custom_posts_taxonomies');
function my_custom_posts_taxonomies()
{
  register_post_type('course', array(
    'labels' => array(
      'name' => __('Courses', 'sdet'),
      'singular_name' => __('Courses', 'sdet'),
      'add_new' => __('Add Course', 'sdet'),
      'add_new_item' => __('Add Course', 'sdet'),
      'edit_item' => __('Edit Course', 'sdet'),
      'new_item' => __('New Course', 'sdet'),
      'view_item' => __('View Course', 'sdet'),
      'search_items' => __('Find Course', 'sdet'),
      'not_found' => __('Courses not found', 'sdet'),
      'not_found_in_trash' => __('No Courses in trash', 'sdet'),
      'parent_item' => __('Parent Course', 'sdet'),
      'parent_item_colon' => __('Parent Course:', 'sdet'),
      'menu_name' => __('Courses', 'sdet'),
      'back_to_items' => __('Go to Courses', 'sdet'),
    ),
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_rest' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'course', 'with_front' => false, 'pages' => true, 'feeds' => false, 'feed' => false),
    'capability_type' => 'post',
    'has_archive' => false,
    'hierarchical' => true,
    'menu_position' => null,
    'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'page-attributes', 'revisions')
  ));
}
