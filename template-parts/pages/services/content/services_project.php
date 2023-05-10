<?php
$title = get_sub_field('title');
$text = get_sub_field('text');
$sub_titles = get_sub_field('sub_titles');
$sub_text = get_sub_field('sub_text');
$image = get_sub_field('image');
$image_mob = get_sub_field('image_mob');
$id = get_sub_field('id');
?>
<section class="project_content">
    <div class="container">
        <div class="services_project">
            <?php if ($image): ?>
            <div class="first_screen_img">
                <?php echo wp_get_attachment_image($image, '1300x590'); ?>
            </div>
            <?php endif; ?>
            <div class="services_project_list">
                <div class="services_project_item" <?php if ($id) echo 'id="'. $id .'"' ; ?>>
                    <?php if ($title): ?>
                    <h1 class="anovamed_content_title_project"><?php echo $title; ?></h1>
                    <?php endif; ?>
                    <?php if ($text): ?>
                    <p class="anovamed_content_text_project"><?php echo $text; ?></p>
                    <?php endif; ?>
                </div>
                <?php if ($image_mob): ?>
                <div class="first_screen_img_mob">
                    <?php echo wp_get_attachment_image($image_mob, '1300x590'); ?>
                </div>
                <?php endif; ?>
                <div class="services_project_item">
                    <?php if ($sub_titles): ?>
                    <h2 class="anovamed_content_title_project"><?php echo $sub_titles; ?></h2>
                    <?php endif; ?>
                    <?php if ($sub_text): ?>
                    <p class="anovamed_content_text"><?php echo $sub_text; ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>