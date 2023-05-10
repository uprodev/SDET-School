<?php
$title = get_sub_field('title');
$texts = get_sub_field('text');
$date = get_sub_field('date_text');
$contact_shortcode = get_sub_field('contact_shortcode');
?>
<section class="contact_section">
    <div class="container">
        <div class="contact_section_list">
            <div class="contact_section_item">
                <?php if ($title): ?>
                <h2><?php echo $title; ?></h2>
                <?php endif; ?>
                <?php if ($texts): ?>
                <p class="contact_texts"><?php echo $texts; ?></p>
                <?php endif; ?>
                <div class="date_img">
                    <img src="<?php echo get_template_directory_uri() . '/images/calendar_mont.svg' ?>">
                    <?php if ($date): ?>
                    <p class="contact_date"><?php echo $date; ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="contact_section_items">
                <?php if ($contact_shortcode): ?>
                <p><?php echo do_shortcode($contact_shortcode); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>