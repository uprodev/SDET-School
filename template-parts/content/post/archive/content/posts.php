<?php
$archive_id = $args['archive_id'];
$title = get_field('title', $archive_id);
$paged = $args['paged'];
$post_query = new WP_Query($args['posts_args']);
$pag_props = [
  'query' => $post_query,
  'paged' => $paged,
];
?>
<section class="blog">
  <div class="content-width">
    <?php if ($title) : ?>
      <h1><?php echo $title; ?></h1>
    <?php endif; ?>
    <?php if ($post_query->have_posts()) : ?>
      <div class="content">
        <?php while ($post_query->have_posts()) : $post_query->the_post();
          $post_props = [
            'id' => get_the_ID(),
          ];
          get_template_part('template-parts/modules/posts/post', null, $post_props);
        endwhile; ?>
      </div>
      <div class="pagination-wrap">
        <?php get_template_part('template-parts/modules/posts/pagination', null, $pag_props); ?>
      </div>
    <?php wp_reset_postdata();
    endif; ?>
  </div>
</section>