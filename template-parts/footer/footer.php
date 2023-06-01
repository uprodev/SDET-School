<?php
$logo = get_field('footer_logo', 'option');
$text = get_field('text', 'option');
$phone = get_field('phone', 'option');
$mail = get_field('mail', 'option');
$button = get_field('button', 'option');
$copyright = get_field('copyright', 'option');
$socials = get_field('socials', 'option');
?>
<footer class="footer">
  <div class="content-width">
    <div class="content">
      <div class="left">
        <?php if ($logo) : ?>
          <div class="logo-wrap">
            <?php
            if (is_front_page()) :
              echo '<a href="#page">' . wp_get_attachment_image($logo, 'full') . '</a>';
            else :
              echo '<a href="' . get_home_url() . '">' . wp_get_attachment_image($logo, 'full') . '</a>';
            endif;
            ?>
          </div>
        <?php endif; ?>
        <?php if ($text) : ?>
          <p>
            <?php echo $text; ?>
          </p>
        <?php endif; ?>
      </div>
      <nav class="footer-menu">
        <?php
        wp_nav_menu([
          'theme_location' => 'menu-2',
          'menu' => 'menu-2',
          'container' => 'div',
          'container_class' => 'menu-nav',
          'menu_class' => 'menu-nav-items',
          'echo' => true,
          'fallback_cb' => 'menu-2',
          'items_wrap' => '<ul class="%2$s"><li><h6><a>Resourses</a></h6></li>%3$s</ul>'
        ]);
        ?>
        <?php
        wp_nav_menu([
          'theme_location' => 'menu-3',
          'menu' => 'menu-3',
          'container' => 'div',
          'container_class' => 'menu-nav',
          'menu_class' => 'menu-nav-items',
          'echo' => true,
          'fallback_cb' => 'menu-3',
          'items_wrap' => '<ul class="%2$s"><li><h6><a>Courses</a></h6></li>%3$s</ul>'
        ]);
        ?>
        <?php if ($phone || $mail || $button) : ?>
          <ul>
            <li>
              <h6><a><?php echo __('Contact', 'sdet') ?></a></h6>
            </li>
            <?php if ($phone) : ?>
              <li>
                <a class="" href="tel:<?php echo preg_replace('/[^0-9]/', '', $phone); ?>"><?php echo $phone; ?></a>
              </li>
            <?php endif; ?>
            <?php if ($mail) : ?>
              <li>
                <a class="" href="mailto:<?php echo $mail; ?>"><?php echo $mail; ?></a>
              </li>
            <?php endif; ?>
            <?php if ($button) :
              $link_url = $button['url'];
              $link_title = $button['title'];
              $link_target = $button['target'] ? $button['target'] : '_self';
            ?>
              <li>
                <a class="btn-default fancybox" href="#book" target="<?php echo esc_attr($link_target); ?>"><span><?php echo esc_html($link_title); ?></span></a>
              </li>
            <?php endif; ?>
          </ul>
        <?php endif; ?>
      </nav>
    </div>
    <div class="bottom">
      <?php if ($copyright) : ?>
        <div class="wrap">
          <p><?php echo $copyright; ?></p>
        </div>
      <?php endif; ?>
      <?php if ($socials) : ?>
        <ul>
          <?php foreach ($socials as $social) : ?>
            <li>
              <a href="<?php echo $social['link']; ?>">
                <?php echo wp_get_attachment_image($social['image'], 'full') ?>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>
    </div>
  </div>
  <div style="display: none;" class="book-popup" id="book">
    <div class="content-wrap">
      <section class="register">
        <div class="content">

          <div class="form-wrap">
            <h3><?php echo __('Book a call', 'sdet') ?></h3>
            <?php echo do_shortcode('[contact-form-7 id="349" title="Contact Form PopUp"]'); ?>
          </div>
        </div>
      </section>
    </div>
  </div>
</footer>