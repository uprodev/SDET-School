<?php
$left_column = get_field('left_column', 'option');
$right_column = get_field('right_column', 'option');
$title_left_column = $left_column['title'];
$text_left_column = $left_column['text'];
$contact_form_shortcode_left_column = $left_column['contact_form_shortcode'];
$title_right_column = $right_column['title'];
$text_right_column = $right_column['text'];
$link_right_column = $right_column['link'];
$image_right_column = $right_column['image'];
?>
<section class="pre-footer">
  <div class="bg">
    <img src="<?php echo get_template_directory_uri() . '/img/bg-2-1.png' ?>" alt="Footer Background" class="img-desc" />
    <img src="<?php echo get_template_directory_uri() . '/img/bg-2-2.png' ?>" alt="Footer Background" class="img-tab" />
    <img src="<?php echo get_template_directory_uri() . '/img/bg-2-3.png' ?>" alt="Footer Background" class="img-mob" />
  </div>
  <div class="content-width">
    <div class="item item-1">
      <?php if ($title_left_column) : ?>
        <h6><?php echo $title_left_column;  ?></h6>
      <?php endif; ?>
      <?php if ($text_left_column) : ?>
        <p><?php echo $text_left_column;  ?></p>
      <?php endif; ?>
      <?php if ($contact_form_shortcode_left_column) : ?>
        <div class="form-submit">
          <?php echo do_shortcode($contact_form_shortcode_left_column) ?>
        </div>
      <?php endif; ?>
    </div>
    <div class="item item-2">
      <?php if ($title_right_column) : ?>
        <h6><?php echo $title_right_column;  ?></h6>
      <?php endif; ?>
      <?php if ($text_right_column) : ?>
        <p><?php echo $text_right_column;  ?></p>
      <?php endif; ?>
      <?php if ($link_right_column) :
        $link_url = $link_right_column['url'];
        $link_title = $link_right_column['title'];
        $link_target = $link_right_column['target'] ? $link_right_column['target'] : '_self';
      ?>
        <div class="btn-wrap">
          <a class="btn-default" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><span><?php echo esc_html($link_title); ?></span></a>
        </div>
      <?php endif; ?>
      <?php if ($image_right_column) : ?>
        <div class="after">
          <?php echo wp_get_attachment_image($image_right_column, 'full'); ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>