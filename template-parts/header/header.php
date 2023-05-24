<?php
$logo = get_field('logo', 'option');
$button = get_field('button-header', 'option');
?>
<header id="header" class="header absolute top-0 left-0 right-0 z-100">
  <div class="top-line">
    <div class="content-width">
      <?php
      if ($logo) :
        $logo_size = 'logo_size';
        $logo_url = wp_get_attachment_image_url($logo, $logo_size);
        $logo_alt = get_post_meta($logo, '_wp_attachment_image_alt', true);
        $home_url = (is_front_page()) ? '#page' : get_home_url();
      ?>
        <div class="logo-wrap">
          <a href="<?php echo $home_url; ?>">
            <?php if (strripos($logo_url, '.svg')) : ?>
              <img src="<?php echo $logo_url; ?>" alt="<?php echo $logo_alt ?>" width="239" height="40">
            <?php else : ?>
              <?php echo wp_get_attachment_image($logo, $logo_size); ?>
            <?php endif; ?>
          </a>
        </div>
      <?php endif; ?>
      <nav class="top-menu">
        <?php
        wp_nav_menu([
          'theme_location' => 'menu-1',
          'menu' => 'menu-1',
          'container' => 'div',
          'container_class' => 'menu-nav',
          'menu_class' => 'menu-nav-items',
          'echo' => true,
          'fallback_cb' => 'menu-1',
          'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        ]);
        ?>
        <?php if ($button) :
          $link_url = $button['url'];
          $link_title = $button['title'];
          $link_target = $button['target'] ? $button['target'] : '_self';
        ?>
          <div class="btn-wrap">
            <a class="btn-default" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><span><?php echo esc_html($link_title); ?></span></a>
          </div>
        <?php endif; ?>
        <div class="open-menu">
          <a href="#">
            <?php
            for ($i = 1; $i <= 3; $i++) {
              echo '<span></span>';
            }
            ?>
          </a>
        </div>
      </nav>
    </div>
  </div>
</header>
<div class="menu-responsive" id="menu-responsive" style="display: none">
  <div class="wrap">
    <nav class="mob-menu">
      <?php
      wp_nav_menu([
        'theme_location' => 'menu-1',
        'menu' => 'menu-1',
        'container' => 'div',
        'container_class' => 'menu-nav',
        'menu_class' => 'menu-nav-items',
        'echo' => true,
        'fallback_cb' => 'menu-1',
        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
      ]);
      ?>
    </nav>
  </div>
</div>