<?php
/*
Template Name: 404
*/
$my_current_lang = apply_filters( 'wpml_current_language', NULL ); 
?>
<?php get_header(); ?>
<main>
    <section class="page_error">
        <div class="page_error_container">
            <h1 class="error-title">404</h1>
            <?php if($my_current_lang==='en'):?>
            <p class="error_text">This isn’t the page you’re looking for.</p>
            <?php else:?>
            <p class="error_text">123</p>
            <?php endif; ?>

            <a href="/" class="error_button"><?php echo __('Back to home','anovamed') ?></a>
        </div>
    </section>
</main>
<?php get_template_part('template-parts/footer/footer', 'none'); ?>
<?php get_footer(); ?>