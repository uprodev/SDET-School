<?php
$title = get_sub_field('title');
$name = get_sub_field('name');

$job_position = get_sub_field('job_position');
$text = get_sub_field('text');

$image = get_sub_field('image');
$link = get_sub_field('link');
?>
<section class="founder">
  <div class="bg">
    <img src="<?php echo get_template_directory_uri() . '/img/bg-10-1.png' ?>" alt="<?php echo $title; ?>" class="img-desc">
    <img src="<?php echo get_template_directory_uri() . '/img/img/bg-10-2.png' ?>" alt="<?php echo $title; ?>" class="img-tab">
    <img src="<?php echo get_template_directory_uri() . '/img/img/bg-10-3.png' ?>" alt="<?php echo $title; ?>" class="img-mob">
  </div>
  <div class="content-width">
    <?php if ($title) : ?>
      <h2>
        <?php echo $title; ?>
      </h2>
    <?php endif; ?>
    <div class="content">
      <div class="text">
        <?php if ($name) : ?>
          <h3>
            <?php echo $name; ?>
          </h3>
        <?php endif; ?>
        <?php if ($job_position) : ?>
          <h6>
            <?php echo $job_position; ?>
          </h6>
        <?php endif; ?>
        <?php if ($text) : ?>
          <p>
            <?php echo $text; ?>
          </p>
        <?php endif; ?>
      </div>
      <?php if ($image) : ?>
        <figure>
          <?php echo wp_get_attachment_image($image, 'full') ?>
        </figure>
      <?php endif; ?>
    </div>
  </div>
  <?php if ($link) :
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
  ?>
    <div class="btn-wrap">
      <a class="btn-default" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><span><?php echo esc_html($link_title); ?></span></a>
    </div>
  <?php endif; ?>
  </div>
</section>