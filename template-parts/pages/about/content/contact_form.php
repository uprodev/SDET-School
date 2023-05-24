<?php
$title = get_sub_field('title');
$shortcode = get_sub_field('shortcode');
if ($shortcode) :
?>
  <section class="section-form">
    <div class="content-width">
      <div class="content">
        <div class="bg">
          <img src="<?php echo get_template_directory_uri() . '/img/bg-5-1.png' ?>" alt="<?php echo $title; ?>" class="img-desc" />
          <img src="<?php echo get_template_directory_uri() . '/img/bg-5-2.png' ?>" alt="<?php echo $title; ?>" class="img-tab" />
          <img src="<?php echo get_template_directory_uri() . '/img/bg-5-3.png' ?>" alt="<?php echo $title; ?>" class="img-mob" />
        </div>
        <div class="wrap">
          <?php if ($title) : ?>
            <h3><?php echo $title; ?></h3>
          <?php endif; ?>
          <div class="">
            <?php echo do_shortcode($shortcode); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>