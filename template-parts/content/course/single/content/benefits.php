<?php
$title = get_sub_field('title');
$text = get_sub_field('text');
$benefits_title = get_sub_field('benefits_title');
$benefits = get_sub_field('benefits');
$benefits_in_one_block = get_sub_field('benefits_in_one_block');
$date = get_sub_field('date');
$link = get_sub_field('link');
?>
<section class="course-benefits">
  <div class="bg"></div>
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
      <?php if ($benefits_title) : ?>
        <div class="item item-1">
          <h5>
            <?php echo $benefits_title; ?>
          </h5>
        </div>
      <?php endif; ?>
      <?php if ($benefits) :
        $counter = 2;
      ?>
        <?php foreach ($benefits as $item) : ?>
          <div class="item item-<?php echo $counter; ?>">
            <?php
            if ($counter === 5) {
              break;
            }
            ?>
            <?php if ($item['image']) : ?>
              <div class="icon-wrap">
                <?php echo wp_get_attachment_image($item['image'], 'full'); ?>
              </div>
            <?php endif; ?>
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

        <?php
          $counter++;
        endforeach; ?>
      <?php endif; ?>
      <?php if ($benefits_in_one_block) :
        $counter = 1;
      ?>
        <div class="item item-5">
          <?php foreach ($benefits_in_one_block as $item) : ?>
            <div class="wrap wrap-<?php echo $counter; ?>">
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
          <?php
            $counter++;
          endforeach; ?>
        </div>
      <?php endif; ?>
      <?php if ($date) : ?>
        <div class="item item-6">
          <h5>
            <?php echo $date; ?>
          </h5>
        </div>
      <?php endif; ?>
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