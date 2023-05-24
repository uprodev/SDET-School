<?php
$title = get_sub_field('title');
$items = get_sub_field('items');
$counter = 1;
if ($items) : ?>
  <section class="time-line">
    <div class="bg">
      <img src="<?php echo get_template_directory_uri() . '/img/bg-9.png' ?>" alt="<?php echo $title; ?>">
    </div>
    <div class="content-width">
      <?php if ($title) : ?>
        <h2>
          <?php echo $title; ?>
        </h2>
      <?php endif; ?>
      <div class="line">
        <img src="<?php echo get_template_directory_uri() . '/img/line.svg' ?>" alt="<?php echo $title; ?>">
      </div>
      <div class="content">
        <?php foreach ($items as $item) : ?>
          <div class="item item-<?php echo $counter; ?>">
            <?php if ($item['text']) : ?>
              <p>
                <?php echo $item['text']; ?>
              </p>
            <?php endif; ?>
            <?php if ($item['title']) : ?>
              <h6>
                <?php echo $item['title']; ?>
              </h6>
            <?php endif; ?>
          </div>
        <?php
          $counter++;
        endforeach; ?>
      </div>
    </div>
  </section>
<?php endif; ?>