<?php
$title = get_sub_field('title');
$items = get_sub_field('items');
if ($items) : ?>
  <section class="video-section video-section-slider">
    <div class="content-width">
      <?php if ($title) : ?>
        <h2>
          <?php echo $title; ?>
        </h2>
      <?php endif; ?>
      <div class="swiper video-slider">
        <div class="swiper-wrapper">
          <?php foreach ($items as $item) : ?>
            <div class="swiper-slide">
              <div class="video-wrap">
                <?php if ($item['video_link'] && $item['image']) : ?>
                  <a data-fancybox href="<?php echo $item['video_link']; ?>">
                    <figure>
                      <?php echo wp_get_attachment_image($item['image'], 'full') ?>
                    </figure>
                    <div class="icon-wrap">
                      <img src="<?php echo get_template_directory_uri() . '/img/icon-3.svg' ?>" alt="<?php echo $title; ?>">
                    </div>
                  </a>
                <?php endif; ?>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
        <div class="video-pagination"></div>
      </div>
    </div>
  </section>
<?php endif; ?>