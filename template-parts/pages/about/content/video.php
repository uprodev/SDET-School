<?php
$video_link = get_sub_field('video_link');
$video_image = get_sub_field('video_image');
if ($video_image && $video_link) :
?>
  <section class="video-section">
    <div class="content-width">
      <div class="video-wrap">
        <a data-fancybox href="<?php echo $video_link; ?>">
          <?php echo wp_get_attachment_image($video_image, 'full') ?>
          <div class="icon-wrap">
            <img src="<?php echo get_template_directory_uri() . '/img/icon-3.svg' ?>" alt="<?php the_title(); ?>" />
          </div>
        </a>
      </div>
    </div>
  </section>
<?php endif; ?>