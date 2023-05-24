<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package sdet
 */

get_header();
?>

<main class="default-template">
    <section class="block-404">
        <div class="bg">
            <img src="<?php echo get_template_directory_uri() . '/img/bg-100-1.jpg' ?>" alt="Error Page" class="img-desc">
            <img src="<?php echo get_template_directory_uri() . '/img/bg-100-2.jpg' ?>" alt="Error Page" class="img-tab">
            <img src="<?php echo get_template_directory_uri() . '/img/bg-100-3.jpg' ?>" alt="Error Page" class="img-mob">
        </div>
        <div class="content-width">
            <div class="content">
                <div class="text">
                    <h1>404</h1>
                    <p>
                        <?php echo __('Page not found', 'sdet') ?>
                    </p>
                    <div class="btn-wrap">
                        <a href="<?php echo get_home_url() ?>" class="btn-default"><span><?php echo __('Homepage', 'sdet') ?></span></a>
                    </div>
                </div>
                <figure>
                    <img src="<?php echo get_template_directory_uri() . '/img/img-100.png' ?>" alt="404">
                </figure>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
