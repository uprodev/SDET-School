<?php
$sub_title = get_sub_field('sub_title');
$title = get_sub_field('title');
$text = get_sub_field('text');
$image = get_sub_field('image');
?>

<section class="about_director_content">
    <div class="container">
        <div class="about_director">
            <div class="about_director_text">
                <?php if ($sub_title): ?>
                <p class="about_us_director_sub_title"><?php echo $sub_title; ?></p>
                <?php endif; ?>
                <?php if ($title): ?>
                <h2 class="about_us_director_title"><?php echo $title; ?></h2>
                <?php endif; ?>
                <?php if ($text): ?>
                <p class="about_us_director_text"><?php echo $text; ?></p>
                <?php endif; ?>
            </div>
            <div class="about_director_image">
            </div>
        </div>
    </div>
</section>