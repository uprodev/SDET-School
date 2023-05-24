<?php
$title = get_sub_field('title');
$items = get_sub_field('reviews');
$link = get_sub_field('link');
if ($items) : ?>
  <section class="reviews">
    <div class="bg"></div>
    <div class="content-width">
      <?php if ($title) : ?>
        <h2>
          <?php echo $title; ?>
        </h2>
      <?php endif; ?>
      <div class="content">
        <div class="swiper reviews-slider">
          <div class="swiper-wrapper">
            <?php foreach ($items as $item) : ?>
              <div class="swiper-slide">
                <?php if ($item['text']) : ?>
                  <div class="text">
                    <?php echo $item['text']; ?>
                  </div>
                <?php endif; ?>
                <div class="name">
                  <?php if ($item['image']) : ?>
                    <figure>
                      <?php echo wp_get_attachment_image($item['image'], 'full'); ?>
                    </figure>
                  <?php endif; ?>
                  <div class="wrap">
                    <?php if ($item['name']) : ?>
                      <h6>
                        <?php echo $item['name']; ?>
                      </h6>
                    <?php endif; ?>
                    <?php if ($item['job_position']) : ?>
                      <p>
                        <?php echo $item['job_position']; ?>
                      </p>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
          <div class="reviews-pagination"></div>
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
<?php endif; ?>