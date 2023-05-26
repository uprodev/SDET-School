<?php
$title = get_sub_field('title');
$benefits = get_sub_field('benefits');

$curriculum = get_sub_field('curriculum');
$link = get_sub_field('link');
$title_curriculum = get_sub_field('title_curriculum');
$text_curriculum = get_sub_field('text_curriculum');
?>
<div class="bg-after">
  <div class="bg"></div>
  <?php if ($benefits) : ?>
    <section class="number-block number-block-4n">
      <div class="content-width">
        <?php foreach ($benefits as $benefit) : ?>
          <div class="item">
            <?php if ($benefit['title']) : ?>
              <h6>
                <?php echo $benefit['title']; ?>
              </h6>
            <?php endif; ?>
            <?php if ($benefit['text']) : ?>
              <p>
                <?php echo $benefit['text']; ?>
              </p>
            <?php endif; ?>
          </div>
        <?php endforeach; ?>
      </div>
    </section>
  <?php endif; ?>
  <?php if ($curriculummm) : ?>
    <section class="faq-ol">
      <div class="content-width">
        <?php if ($title) : ?>
          <h2> <?php echo $title; ?></h2>
        <?php endif; ?>
        <?php if ($curriculum) : ?>
          <ol class="accordion">
            <?php foreach ($curriculum as $item) : ?>
              <li class="accordion-item ">
                <div class="accordion-thumb">
                  <?php if ($item['title']) : ?>
                    <h3>
                      <?php echo $item['title']; ?>
                    </h3>
                  <?php endif; ?>
                </div>
                <div class="accordion-panel">
                  <?php if ($item['title']) : ?>
                    <div class="wrap">
                      <?php echo $item['text']; ?>
                    </div>
                  <?php endif; ?>
                </div>
              </li>
            <?php endforeach; ?>
          </ol>
        <?php endif; ?>
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
  <?php if ($title_curriculum || $text_curriculum) : ?>
    <section class="article article-block">
      <div class="content-width">
        <div class="content">
          <h3><?php echo $title_curriculum; ?></h3>
          <div class="">
            <?php echo $text_curriculum; ?>
          </div>
        </div>
      </div>
    </section>
  <?php endif; ?>
</div>