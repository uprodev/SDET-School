<?php
$paged = $args['paged'];
$post_query = $args['query'];
$pagination = paginate_links(array(
  'base' => get_pagenum_link(1) . '%_%',
  'format' => 'page/%#%',
  'prev_text'    => __('<'),
  'next_text'    => __('>'),
  'type' => 'array', //instead of 'list'
  'total' => $post_query->max_num_pages,
  'current' => $paged,
)); ?>
<?php if (!empty($pagination)) : ?>
  <ul class="pagination">
    <?php foreach ($pagination as $key => $page_link) :    ?>
      <li class="paginated_link<?php if (strpos($page_link, 'current') !== false) {
                                  echo ' active';
                                } ?>">
        <?php echo $page_link ?>
      </li>
    <?php endforeach ?>
  </ul>
<?php endif ?>