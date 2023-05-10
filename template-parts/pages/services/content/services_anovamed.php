<?php
$title = get_sub_field('title');
$text = get_sub_field('text');
$image = get_sub_field('image');
$id = get_sub_field('id');
?>
<section class="anovamed_content" <?php if ($id) echo 'id="'. $id .'"' ; ?>>
    <div class="container">
        <div class="services_anovamed">
            <div class="services_anovamed_image">
                <?php if ($image): ?>
                <div class="first_screen_img">
                    <?php echo wp_get_attachment_image($image, '638x597'); ?>
                </div>
                <?php endif; ?>
            </div>
            <div class="services_anovamed_list">
                <div class="services_anovamed_item">
                    <?php if ($title): ?>
                    <h1 class="anovamed_content_title"><?php echo $title; ?></h1>
                    <?php endif; ?>
                    <?php if ($text): ?>
                    <p class="anovamed_content_text"><?php echo $text; ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>