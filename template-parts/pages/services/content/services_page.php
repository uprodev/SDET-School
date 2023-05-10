<?php
$title = get_sub_field('title');
$text = get_sub_field('text');
$image = get_sub_field('image');  
$id = get_sub_field('id');
?>
<section class="home_content" <?php if ($id) echo 'id="'. $id .'"' ; ?>>
    <div class="container">
        <div class="services_page">
            <div class="services_page_list">
                <div class="services_page_item">
                    <?php if ($title): ?>
                    <h1 class="product_content_title"><?php echo $title; ?></h1>
                    <?php endif; ?>
                    <?php if ($text): ?>
                    <p class="product_content_text"><?php echo $text; ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <?php if ($image): ?>
            <div class="services_page_image" style="background-image: url('<?php echo $image; ?>');">
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>