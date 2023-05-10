<?php
$general = get_field('general', 'option');
$logo_black = $general['logo_black'];
$copyright = $general['copyright'];
$footer_text = $general['footer_text'];
$phone = $general['phone'];
$email = $general['email'];
$footer_button = $general['footer_button'];
$socia = $general['socia'];
$pre_footer = get_field('pre_footer', 'option');
$title_left = $pre_footer['title_left'];
$text_left = $pre_footer['text_left'];
$contact_form_shortcode = $pre_footer['contact_form_shortcode'];
$title_right = $pre_footer['title_right'];
$text_right = $pre_footer['text_right'];
$pre_footer_button = $pre_footer['pre_footer_button'];
$image = $pre_footer['image'];

?>
<div class="pre_footer">
    <div class="container">
        <div class="pre_footer_list">
            <div class="pre_footer_item">
                <?php if ($title_left): ?>
                <p class="pre_footer_item_title"><?php echo $title_left; ?></p>
                <?php endif; ?>
                <?php if ($text_left): ?>
                <p class="pre_footer_item_text"><?php echo $text_left; ?></p>
                <?php endif; ?>
                <?php if ($contact_form_shortcode): ?>
                <p><?php echo do_shortcode($contact_form_shortcode); ?></p>
                <?php endif; ?>
            </div>
            <div class="pre_footer_item img">
                <div class="pre_footer_box">
                    <div class="pre_footer_item_content">
                        <?php if ($title_right): ?>
                        <p class="pre_footer_item_title"><?php echo $title_right; ?></p>
                        <?php endif; ?>
                        <?php if ($text_right): ?>
                        <p class="pre_footer_item_text"><?php echo $text_right; ?></p>
                        <?php endif; ?>
                        <?php if($pre_footer_button):
                    $link_url = $pre_footer_button['url'];
                    $link_title = $pre_footer_button['title'];
                    $link_target = $pre_footer_button['target'] ? $pre_footer_button['target'] : '_self';
                    ?>
                        <?php endif; ?>
                        <a class="button" href="<?php echo esc_url( $link_url ); ?>"
                            target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    </div>
                    <div class="pre_footer_item_img">
                        <?php if ($image): ?>
                        <img src="<?php echo $image; ?>">
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<footer class="footer">
    <div class="container">
        <div class="footer_content">
            <div class="footer_logo_text">
                <div class="footer_logo">
                    <figure>
                        <?php
                            if (is_front_page()):
                                echo '<a href="#page"><img width="300" height="55" src="' . wp_get_attachment_image_url($logo_black) . '" alt="Logo"></a>';
                            else:
                                echo '<a href="' . get_home_url() . '"><img width="216" height="15" src="' . wp_get_attachment_image_url($logo_black) . '" alt="Logo"></a>';
                            endif;
                            ?>
                    </figure>
                </div>
                <div class="footer_text">
                    <?php if ($footer_text): ?>
                    <p><?php echo $footer_text; ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="footer_item">
                <p class="footer_meenu_title">Resourses</p>
                <div class="menu_footer">
                    <?php 
                            wp_nav_menu([
                                'theme_location' => 'Footer-menu-1',
                                'menu' => 'Footer-menu-1',
                                'container' => 'div',
                                'container_class' => 'menu_nav',
                                'menu_class' => 'menu_nav_items',
                                'echo' => true,
                                'fallback_cb' => 'menu',
                                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            ]);
                        
                        ?>
                </div>
            </div>
            <div class="footer_item">
                <p class="footer_meenu_title">Courses</p>
                <div class="menu_footer">
                    <?php 
                            wp_nav_menu([
                                'theme_location' => 'Footer-menu-2',
                                'menu' => 'Footer-menu-2',
                                'container' => 'div',
                                'container_class' => 'menu_nav',
                                'menu_class' => 'menu_nav_items',
                                'echo' => true,
                                'fallback_cb' => 'menu',
                                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            ]);
                        
                        ?>
                </div>
            </div>

            <div class="footer_contacts">
                <p class="footer_meenu_title">Resourses</p>
                <?php if ($phone): ?>
                <a href="tel:<?php echo $phone ?>" class="phone"><?php echo $phone; ?></a>
                <?php endif; ?>
                <?php if ($email): ?>
                <a href="mailto:<?php echo $email ?>" class="email"><?php echo $email; ?></a>
                <?php endif; ?>
                <?php if( $footer_button):
                    $link_url = $footer_button['url'];
                    $link_title = $footer_button['title'];
                    $link_target = $footer_button['target'] ? $footer_button['target'] : '_self';
                    ?>
                <?php endif; ?>
                <a class="button" href="<?php echo esc_url( $link_url ); ?>"
                    target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            </div>
        </div>
        <div class="footer_copyright">
            <div class="footer_copyright_text">
                <?php if ($copyright): ?>
                <p><?php echo $copyright; ?></p>
                <?php endif; ?>
            </div>
            <div class="footer_socia">
                <?php if ($socia ): ?>
                <div class="footer_socia_item">
                    <?php while (have_rows('socia')): the_row();
                        $icon = get_sub_field('icon');
                        $link = get_sub_field('link');

            ?>
                    <div class="footer_socia_list">
                        <a href="<?php echo $link; ?>"><img src="<?php echo $icon; ?>"></a>

                    </div>
                    <?php endwhile;?>
                </div>
                <?php endif; ?>
            </div>
        </div>

    </div>
</footer>