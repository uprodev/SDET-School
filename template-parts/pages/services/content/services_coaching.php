<?php
$title = get_sub_field('title');
$text = get_sub_field('text');
$image = get_sub_field('image_small');
$img = get_sub_field('image');
$images = get_sub_field('images');
$sub_title = get_sub_field('sub_title');
$sub_text = get_sub_field('sub_text');
$id = get_sub_field('id');
?>
<section class="coaching_content" <?php if ($id) echo 'id="'. $id .'"' ; ?>>
    <div class="container">
        <div class="services_coaching">
            <div class="services_img_mob">
                <?php if ($img): ?>
                <div class="first_img_mob">
                    <?php echo wp_get_attachment_image($img, '525x507'); ?>
                </div>
                <?php endif; ?>
            </div>
            <div class="services_coaching_list basis-1/2">
                <div class="services_coaching_item">
                    <?php if ($title): ?>
                    <h1 class="coaching_content_title_interims"><?php echo $title; ?></h1>
                    <?php endif; ?>
                    <?php if ($text): ?>
                    <p class="coaching_content_text_interims"><?php echo $text; ?></p>
                    <?php endif; ?>
                    <div class="services_coach_image">
                        <?php if ($image): ?>
                        <div class="first_screen_coach_img hidden lg:block">
                            <?php echo wp_get_attachment_image($image, '525x507'); ?>
                        </div>
                        <div class="first_screen_coach_img-tablet hidden sm:block lg:hidden">
                            <img src="<?php echo wp_get_attachment_image_url($image, '267x200'); ?>" width="400"
                                height="300" alt="">
                        </div>
                        <div class="first_screen_coach_img-tablet sm:hidden">
                            <img src="<?php echo wp_get_attachment_image_url($image, '267x200'); ?>" width="224"
                                height="200" alt="">
                        </div>
                        <?php endif; ?>
                        <?php if ($images): ?>
                        <div
                            class="first_screen_support_images-mob hidden sm:block lg:hidden text-right relative top-[-34px]">
                            <img src="<?php echo wp_get_attachment_image_url($images, 'full'); ?>" width="400"
                                height="300" alt="">
                            <?php //echo wp_get_attachment_image($images, '267x200'); ?>
                        </div>
                        <div class="first_screen_support_images-mob sm:hidden text-right relative top-[-34px]">
                            <img src="<?php echo wp_get_attachment_image_url($images, '400x200'); ?>" width="200"
                                height="300" alt="">
                            <?php //echo wp_get_attachment_image($images, '267x200'); ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="services_coaching_image basis-1/2 relative">
                    <div class="coaching_text">
                    </div>
                </div>
            </div>
        </div>
        <div class="coaching_support">
            <div class="services_support_image">
                <?php if ($images): ?>
                <div class="first_screen_support_img">
                    <?php echo wp_get_attachment_image($images, '525x507'); ?>
                </div>
                <?php endif; ?>
            </div>
            <div class="services_coaching_item">
                <?php if ($sub_title): ?>
                <h1 class="coaching_content_title_interims"><?php echo $sub_title; ?></h1>
                <?php endif; ?>
                <?php if ($sub_text): ?>
                <p class="coaching_content_text_interims"><?php echo $sub_text; ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>