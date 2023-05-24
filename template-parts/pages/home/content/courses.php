<?php
$title = get_sub_field('title');
$courses = get_sub_field('courses');
if ($courses) : ?>
  <section class="course-2item course-3item">
    <div class="bg">
      <img src="<?php echo get_template_directory_uri() . '/img/bg-13.png' ?>" alt="<?php echo $title; ?>">
    </div>
    <div class=" content-width">
      <?php if ($title) : ?>
        <h2>
          <?php echo $title; ?>
        </h2>
      <?php endif; ?>
      <div class="content">
        <?php foreach ($courses as $featured_post) :
          $permalink = get_permalink($featured_post->ID);
          $title_item = get_the_title($featured_post->ID);
          $expert = get_the_excerpt($featured_post->ID);
          $thumbail = get_post_thumbnail_id($featured_post->ID);
          $custom_field = get_field('count_hours', $featured_post->ID);
        ?>
          <div class="item">
            <?php if ($custom_field) : ?>
              <div class="info"><img src="<?php echo get_template_directory_uri() . '/img/icon-8.svg' ?>" alt="<?php echo $title_item; ?>"><?php echo $custom_field; ?></div>
            <?php endif; ?>
            <?php if ($thumbail) : ?>
              <figure>
                <?php echo wp_get_attachment_image($thumbail, 'full') ?>
              </figure>
            <?php endif; ?>
            <div class="text">
              <h6><?php echo $title_item; ?></h6>
              <p><?php echo $expert; ?></p>
              <a href="<?php echo $permalink; ?>" class="link"><?php echo __('Learn more ', 'sdet') ?><img src="<?php echo get_template_directory_uri() . '/img/icon-9.svg' ?>" alt="<?php echo $title_item; ?>"></a>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
<?php endif; ?>