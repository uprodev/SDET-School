<?php
$id = $args['id'];
?>
<div class="item">
  <a href="<?php echo get_the_permalink($id); ?>">
    <figure>
      <?php the_post_thumbnail($id); ?>
    </figure>
    <div class="text-wrap">
      <h6><?php echo get_the_title($id); ?></h6>
      <p><?php echo get_the_excerpt($id); ?></p>
    </div>
  </a>
</div>