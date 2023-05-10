<?php
$title = get_sub_field('title');
$image = get_sub_field('image');
?>
<section class="about_us_content">
    <div class="container">
        <div class="about_us_page">
            <?php if ($title): ?>
            <h1 class="about_us_page_title"><?php echo $title; ?></h1>
            <?php endif; ?>
        </div>
    </div>
    <div class="about_us_page_image">
        <?php if ($image): ?>
        <div class="about_us_first_screen_img">
            <?php echo wp_get_attachment_image($image, '1440x722'); ?>
        </div>
        <?php endif; ?>
    </div>
</section>