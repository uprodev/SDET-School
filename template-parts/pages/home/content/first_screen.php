<?php
$title = get_sub_field('title');
$text = get_sub_field('text');
$image = get_sub_field('image');
$stars_image = get_sub_field('stars_image');
$link_first = get_sub_field('button_first');
$link_second = get_sub_field('button_second');
?>
<section class="course-head home-head">
  <div class="bg">
    <img src="<?php echo get_template_directory_uri() . '/img/bg-6-1.png' ?>" alt="<?php echo $title; ?>" class="img-desc">
    <img src="<?php echo get_template_directory_uri() . '/img/bg-6-2.png' ?>" alt="<?php echo $title; ?>" class="img-tab">
    <img src="<?php echo get_template_directory_uri() . '/img/bg-6-3.png' ?>" alt="<?php echo $title; ?>" class="img-mob">
  </div>
  <div class="content-width">
    <div class="left">
      <?php if ($stars_image) : ?>
        <div class="stars-wrap">
          <?php echo wp_get_attachment_image($stars_image, 'full') ?>
        </div>
      <?php endif; ?>
      <?php if ($title) : ?>
        <h1>
          <?php echo $title; ?>
        </h1>
      <?php endif; ?>
      <?php if ($text) : ?>
        <p>
          <?php echo $text; ?>
        </p>
      <?php endif; ?>
      <?php if ($link_first || $link_second) : ?>
        <div class="btn-wrap">
          <?php if ($link_first) :
            $link_url = $link_first['url'];
            $link_title = $link_first['title'];
            $link_target = $link_first['target'] ? $link_first['target'] : '_self';
          ?>
            <a class="btn-default" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><span><?php echo esc_html($link_title); ?></span></a>
          <?php endif; ?>
          <?php if ($link_second) :
            $link_url = $link_second['url'];
            $link_title = $link_second['title'];
            $link_target = $link_second['target'] ? $link_second['target'] : '_self';
          ?>
            <a class="btn-border" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
          <?php endif; ?>
        </div>
      <?php endif; ?>
    </div>
    <?php if ($image) : ?>
      <figure>
        <?php echo wp_get_attachment_image($image, 'full'); ?>
      </figure>
    <?php endif; ?>
  </div>
</section>