<?php
$title = get_sub_field('title');
$items = get_sub_field('items');
$link = get_sub_field('link');
if ($items) : ?>
  <section class="faq-ul">
    <div class="bg"></div>
    <div class="content-width">
      <?php if ($title) : ?>
        <h2>
          <?php echo $title; ?>
        </h2>
      <?php endif; ?>
      <div class="content">
        <ul class="accordion">
          <?php foreach ($items as $item) : ?>
            <li class="accordion-item">
              <?php if ($item['title']) : ?>
                <div class="accordion-thumb">
                  <h6>
                    <?php echo $item['title']; ?>
                  </h6>
                </div>
              <?php endif; ?>
              <?php if ($item['text']) : ?>
                <div class="accordion-panel">
                  <div class="wrap">
                    <?php echo $item['text']; ?>
                  </div>
                </div>
              <?php endif; ?>
            </li>
          <?php endforeach; ?>
        </ul>
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
<?php endif; ?>