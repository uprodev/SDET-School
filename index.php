<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package anovamed
 */

 get_header();

 $title = get_the_title();
 $title_length = iconv_strlen($title);
 $the_content = apply_filters('the_content', get_the_content());
 $font_size = ($title_length > 9) ? 'sm:text-base text-xs' : 'text-lg';
 ?>

<main class="section-full-height md:py-60 pt-40 pb-100 default-template">

</main>

<?php
 get_footer();
 