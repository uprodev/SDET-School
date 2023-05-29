<?php
$id = get_the_ID();
$title = get_the_title($id);
$text = get_the_content();
?>
<section class="article">
  <div class="content-width">
    <div class="content">
      <?php if ($title) : ?>
        <h1><?php echo $title; ?></h1>
      <?php endif; ?>
      <figure>
        <?php the_post_thumbnail($id); ?>
      </figure>
      <?php if ($text) : ?>
        <?php the_content(); ?>
      <?php endif; ?>
    </div>
  </div>
</section>