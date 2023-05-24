<?php
$title = get_sub_field('title');
$logos = get_sub_field('logos');
if ($logos) : ?>
  <section class="work">
    <div class="content-width">
      <?php if ($title) : ?>
        <h6>Our student work at</h6>
      <?php endif; ?>
      <div class="slider-wrap">
        <div class="swiper work-slider">
          <div class="swiper-wrapper">
            <?php foreach ($logos as $logo) : ?>
              <div class="swiper-slide">
                <?php echo wp_get_attachment_image($logo, 'full'); ?>
              </div>
            <?php endforeach; ?>
          </div>
          <div class="swiper-pagination work-pagination"></div>
        </div>
      </div>

    </div>
  </section>
<?php endif; ?>