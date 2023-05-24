<?php
$benefits = get_sub_field('benefits');
if ($benefits) :
?>
  <section class="number-block">
    <div class="content-width">
      <?php foreach ($benefits as $item) : ?>
        <div class="item">
          <h6><?php echo $item['title']; ?></h6>
          <p><?php echo $item['text']; ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </section>
<?php endif; ?>