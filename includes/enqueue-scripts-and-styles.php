<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * Enqueue scripts and styles.
 */
function bzal_styles()
{
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.min.css');
    wp_enqueue_style('stylesheet', '//cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css');
}

add_action('wp_enqueue_scripts', 'bzal_styles');

function bzal_script()
{
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', '//cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), null, true);
    wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/scripts.min.js', array(), null, true);
    wp_enqueue_script('swiper', '//cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js', array(), null, true);

}

add_action('wp_enqueue_scripts', 'bzal_script');