<?php
$title = get_sub_field('title');
$text = get_sub_field('text');
$sub_titles = get_sub_field('sub_titles');
$sub_text = get_sub_field('sub_text');
$image = get_sub_field('image');
$id = get_sub_field('id');
?>
<section class="interims_content" <?php if ($id) echo 'id="'. $id .'"' ; ?>>
    <div class="container">
        <div class="services_interims">
            <div class="services_interims_list basis-1/2">
                <div class="services_anovamed_item">
                    <?php if ($title): ?>
                    <h1 class="anovamed_content_title_interims"><?php echo $title; ?></h1>
                    <?php endif; ?>
                    <?php if ($text): ?>
                    <p class="anovamed_content_text_interims"><?php echo $text; ?></p>
                    <?php endif; ?>
                    <?php if ($image): ?>
                    <div class="anovamed_content_mob_images_interims">
                        <?php echo wp_get_attachment_image($image, '345x304'); ?>
                    </div>
                    <?php endif; ?>
                    <?php if ($sub_titles): ?>
                    <h2 class="anovamed_content_title_interims"><?php echo $sub_titles; ?></h2>
                    <?php endif; ?>

                </div>
            </div>
            <div class="services_interims_image basis-1/2 relative">
                <div class="interims_text">
                    <?php if ($sub_text): ?>
                    <p class="anovamed_content_text interims"><?php echo $sub_text; ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>