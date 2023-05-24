<?php
$title = get_sub_field('title');
$text = get_sub_field('text');
$link = get_sub_field('link');
$benefits = get_sub_field('benefits');
if ($benefits) : ?>
  <section class="number-block number-block-top">
    <div class="bg">
      <img src="<?php echo get_template_directory_uri() . '/img/bg-14-1.png' ?>" alt="" class="img-desc">
      <img src="<?php echo get_template_directory_uri() . '/img/bg-14-2.png' ?>" alt="" class="img-tab">
      <img src="<?php echo get_template_directory_uri() . '/img/bg-14-3.png' ?>" alt="" class="img-mob">
    </div>
    <div class="top">
      <?php if ($title) : ?>
        <h2>
          <?php echo $title; ?>
        </h2>
      <?php endif; ?>
      <?php if ($text) : ?>
        <p>
          <?php echo $text; ?>
        </p>
      <?php endif; ?>
    </div>
    <div class="content-width">
      <?php foreach ($benefits as $item) : ?>
        <div class="item">
          <?php if ($item['title']) : ?>
            <h6>
              <?php echo $item['title']; ?>
            </h6>
          <?php endif; ?>
          <?php if ($item['text']) : ?>
            <p>
              <?php echo $item['text']; ?>
            </p>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>
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
  </section>
<?php endif; ?>