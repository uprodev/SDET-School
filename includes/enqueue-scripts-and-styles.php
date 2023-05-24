<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * Enqueue scripts and styles.
 */
function sdet_styles()
{
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css');
    wp_enqueue_style('Montserrat', '//fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap');
    wp_enqueue_style('fancybox', get_template_directory_uri() . '/css/jquery.fancybox.min.css');
    wp_enqueue_style('swiper', get_template_directory_uri() . '/css/swiper.min.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/css/styles.css');
    wp_enqueue_style('responsive', get_template_directory_uri() . '/css/responsive.css');
}

add_action('wp_enqueue_scripts', 'sdet_styles');

function sdet_script()
{
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), null, true);
    wp_enqueue_script('jquery-fancybox', get_template_directory_uri() . '/js/jquery.fancybox.min.js', array(), null, true);
    wp_enqueue_script('jquery-sticky', get_template_directory_uri() . '/js/jquery.sticky.js', array(), null, true);
    wp_enqueue_script('swiper', get_template_directory_uri() . '/js/swiper.js', array(), null, true);
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/script.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'sdet_script');
