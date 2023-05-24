<?php
$title = get_sub_field('title');
$text = get_sub_field('text');
$date = get_sub_field('date');
$contact_form_shortcode = get_sub_field('contact_form_shortcode');
?>
<section class="register">
  <div class="content-width">
    <div class="content">
      <div class="text">
        <div class="bg">
          <img src="<?php echo get_template_directory_uri() . '/img/bg-12-1.png' ?>" alt="<?php echo $title; ?>" class="img-desc">
          <img src="<?php echo get_template_directory_uri() . '/img/bg-12-2.png' ?>" alt="<?php echo $title; ?>" class="img-tab">
          <img src="<?php echo get_template_directory_uri() . '/img/bg-12-3.png' ?>" alt="<?php echo $title; ?>" class="img-mob">
        </div>
        <div class="wrap">
          <?php if ($title) : ?>
            <h3>
              <?php echo $title; ?>
            </h3>
          <?php endif; ?>
          <?php if ($text) : ?>
            <p>
              <?php echo $text; ?>
            </p>
          <?php endif; ?>
          <?php if ($date) : ?>
            <p><img src="<?php echo get_template_directory_uri() . '/img/icon-12.svg' ?>" alt="<?php echo $title; ?>"> <?php echo $date; ?></p>
          <?php endif; ?>
        </div>
      </div>
      <?php if ($contact_form_shortcode) : ?>
        <div class="form-wrap">
          <?php echo do_shortcode($contact_form_shortcode); ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>