<?php
$general = get_field('general', 'option');
$logo = $general['logo'];
$button = $general['button'];
?>
<header id="header" class="header absolute top-0 left-0 right-0 z-100">
    <div class="container">
        <div class="header_content">
            <div class="header_wrapper h-[94px]">
                <div class="header_logo_list">
                    <div class="header_logo_item">
                        <figure>
                            <?php
                            if (is_front_page()):
                                echo '<a href="#page"><img width="239" height="15" src="' . wp_get_attachment_image_url($logo) . '" alt="Logo"></a>';
                            else:
                                echo '<a href="' . get_home_url() . '"><img width="239" height="15" src="' . wp_get_attachment_image_url($logo_black) . '" alt="Logo"></a>';
                            endif;
                            ?>
                        </figure>
                    </div>
                </div>

                <div class="header_menu">
                    <div class="header_menu_items ">
                        <div class="menu">
                            <?php 
                            wp_nav_menu([
                                'theme_location' => 'menu',
                                'menu' => 'menu',
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
                </div>
                <?php if( $button ):
                    $link_url = $button['url'];
                    $link_title = $button['title'];
                    $link_target = $button['target'] ? $button['target'] : '_self';
                    ?>
                <?php endif; ?>
                <a class="button" href="<?php echo esc_url( $link_url ); ?>"
                    target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                <div
                    class="header_menu_mob h-screen lg:hidden absolute top-0 right-0 left-0 bg-yellow overflow-y-auto overflow-x-hidden pt-9.5 pb-60 transition origin-top scale-y-0 z-20">
                    <div class="container">
                        <div class="mob_header_content">
                            <div class="header_logo_item">
                                <figure>
                                    <?php
                            if (is_front_page()):
                                echo '<a href="#page"><img width="215.25" height="15" src="' . wp_get_attachment_image_url($logo_black) . '" alt="Logo"></a>';
                            else:
                                echo '<a href="' . get_home_url() . '"><img width="215.25" height="15" src="' . wp_get_attachment_image_url($logo_black) . '" alt="Logo"></a>';
                            endif;
                            ?>
                                </figure>
                            </div>
                            <div class="landuage_mob">
                                <p>EN</p>
                            </div>
                        </div>
                        <div class="menu_mob">
                            <div class="header_menu_items ">
                                <div class="menu">
                                    <?php 
                            wp_nav_menu([
                                'theme_location' => 'menu',
                                'menu' => 'menu',
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
                        </div>
                        <div class="header_btn_mob">
                            <a href="<?php echo get_home_url(); ?>/#popmake-156"
                                class="inline-block"><?php echo ($text_of_the_contact_button) ? $text_of_the_contact_button : __('Kontakt', 'bzal'); ?></a>
                        </div>
                    </div>
                </div>
                <div class="header_burger lg:hidden relative z-20">
                    <div class="header_burger_wrapper relative">
                        <span></span><span></span><span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>