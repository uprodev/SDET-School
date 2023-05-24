<?php
$title = get_sub_field('title');
$text = get_sub_field('text');
$image = get_sub_field('image');
?>
<section class="mission">
  <div class="bg"></div>
  <div class="content-width">
    <?php if ($image) : ?>
      <figure>
        <?php echo wp_get_attachment_image($image, 'full') ?>
      </figure>
    <?php endif; ?>
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
  </div>
</section>