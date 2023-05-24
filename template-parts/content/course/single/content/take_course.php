<?php
$title = get_sub_field('title');
$text = get_sub_field('text');

$info = get_sub_field('info');
$items = get_sub_field('items');
if ($info || $items) :
?>
  <section class="take-course">
    <div class="bg">
      <img src="<?php echo get_template_directory_uri() . '/img/bg-11-1.png' ?>" alt="<?php echo $title; ?>" class="img-desc">
      <img src="<?php echo get_template_directory_uri() . '/img/bg-11-2.png' ?>" alt="<?php echo $title; ?>" class=" img-tab">
      <img src="<?php echo get_template_directory_uri() . '/img/bg-11-3.png' ?>" alt="<?php echo $title; ?>" class="img-mob">
    </div>
    <div class="content-width">
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
      <div class="content">
        <?php if ($info) :
          $counter = 1;
        ?>
          <div class="item item-1">
            <?php foreach ($info as $item) : ?>
              <div class="wrap wrap-<?php echo $counter; ?>">
                <?php if ($item['text']) : ?>
                  <p>
                    <?php echo $item['text']; ?>
                  </p>
                <?php endif; ?>
                <?php if ($item['title']) : ?>
                  <h6>
                    <?php echo $item['title']; ?>
                  </h6>
                <?php endif; ?>
              </div>
            <?php
              $counter++;
            endforeach; ?>
          </div>
        <?php endif; ?>
        <?php if ($items) :
          $counter = 2;
        ?>
          <?php foreach ($items as $item) : ?>
            <div class="item item-<?php echo $counter; ?>">
              <?php if ($item['title']) : ?>
                <h3>
                  <?php echo $item['title']; ?>
                </h3>
              <?php endif; ?>
              <?php if ($item['price']) : ?>
                <p class="cost">
                  <?php echo $item['price']; ?>
                </p>
              <?php endif; ?>
              <?php if ($item['link']) :
                $link_url = $item['link']['url'];
                $link_title = $item['link']['title'];
                $link_target = $item['link']['target'] ? $item['link']['target'] : '_self';
              ?>
                <div class="btn-wrap">
                  <a class="btn-default" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><span><?php echo esc_html($link_title); ?></span></a>
                </div>
              <?php endif; ?>
              <?php if ($item['text'] && $item['seats_text']) : ?>
                <div class="info">
                  <p>
                    <?php echo $item['text']; ?>
                  </p>
                  <h6>
                    <?php echo $item['seats_text']; ?>
                  </h6>
                <?php endif; ?>
                </div>
            </div>
          <?php
            $counter++;
          endforeach; ?>
        <?php endif; ?>
      </div>
    </div>
  </section>
<?php endif; ?>