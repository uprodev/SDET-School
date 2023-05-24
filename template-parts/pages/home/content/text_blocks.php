<?php
$items = get_sub_field('items');
$counter = 1;
if ($items) : ?>
  <section class="text-block">
    <div class="bg"><span></span></div>
    <div class="content-width">
      <?php foreach ($items as $item) :
        $link = $item['link'];
      ?>
        <div class="item" style="<?php echo $counter % 2 === 0 ? 'flex-direction: row-reverse;' : '' ?>">
          <div class="text">
            <?php if ($item['title']) : ?>
              <h2>
                <?php echo $item['title']; ?>
              </h2>
            <?php endif; ?>
            <?php if ($item['text']) : ?>
              <p>
                <?php echo $item['text']; ?>
              </p>
            <?php endif; ?>
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
          <?php if ($item['image']) : ?>
            <figure>
              <?php echo wp_get_attachment_image($item['image'], 'full') ?>
            </figure>
          <?php endif; ?>
        </div>
      <?php
        $counter++;
      endforeach; ?>
    </div>
  </section>
<?php endif; ?>