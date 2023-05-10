<?php
$title = get_sub_field('title');
$text = get_sub_field('text');
?>
<section class="about_us_anovamed_content">
    <div class="container">
        <div class="about_us_anovamed_page  flex">
            <div class="about_us_anovamed_title">
                <?php if ($title): ?>
                <h2 class="about_us_anovamed_page_title"><?php echo $title; ?></h2>
                <?php endif; ?>
            </div>
            <div class="about_us_text lg:pl-80">
                <?php if ($text): ?>
                <p class="about_us_anovamed_page_text max-w-[476px]"><?php echo $text; ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>