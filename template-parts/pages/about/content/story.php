<?php
$title = get_sub_field('title');
$text = get_sub_field('text');
$image = get_sub_field('image');
?>
<section class="story">
  <div class="bg">
    <img src="<?php echo get_template_directory_uri() . '/img/bg-4-1.png' ?>" alt="<?php echo $title; ?>" class="img-desc" />
    <img src="<?php echo get_template_directory_uri() . '/img/bg-4-2.png' ?>" alt="<?php echo $title; ?>" class="img-tab" />
    <img src="<?php echo get_template_directory_uri() . '/img/bg-4-3.png' ?>" alt="<?php echo $title; ?>" class="img-mob" />
  </div>
  <div class="content-width">
    <div class="text">
      <?php if ($title) : ?>
        <h2><?php echo $title; ?></h2>
      <?php endif; ?>
      <?php if ($text) : ?>
        <div class="">
          <?php echo $text; ?>
        </div>
      <?php endif; ?>
    </div>
    <?php if ($image) : ?>
      <figure>
        <?php echo wp_get_attachment_image($image, 'full') ?>
      </figure>
    <?php endif; ?>
  </div>
</section>