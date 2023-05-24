<?php
$title = get_sub_field('title');
$text = get_sub_field('text');
$image = get_sub_field('image');
$link = get_sub_field('link');
$button_name = get_sub_field('button_name');
?>
<section class="about-head">
  <div class="bg">
    <img src="<?php echo get_template_directory_uri() . '/img/bg-3-1.png' ?>" alt="<?php echo $title; ?>" class="img-desc" />
    <img src="<?php echo get_template_directory_uri() . '/img/bg-3-2.png' ?>" alt="<?php echo $title; ?>" class="img-tab" />
    <img src="<?php echo get_template_directory_uri() . '/img/bg-3-3.png' ?>" alt="<?php echo $title; ?>" class="img-mob" />
  </div>
  <div class="content-width">
    <div class="content">
      <div class="left">
        <?php if ($title) : ?>
          <h1><?php echo $title; ?></h1>
        <?php endif; ?>
        <?php if ($text) : ?>
          <div class="">
            <?php echo $text; ?>
          </div>
        <?php endif; ?>
        <?php
        if ($link && $button_name) :
        ?>
          <div class="btn-wrap">
            <a href="<?php echo $link; ?>" class="btn-default btn-bg"><?php echo $button_name; ?></a>
          </div>
        <?php endif; ?>
      </div>
      <?php if ($image) : ?>
        <figure>
          <?php echo wp_get_attachment_image($image, 'full') ?>
        </figure>
      <?php endif; ?>
    </div>
  </div>
</section>