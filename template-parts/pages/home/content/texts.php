<?php
$text_item = get_sub_field('text_item');
?>
<section class="texts_section">
    <div class="container">
        <?php if ($text_item): ?>
        <div class="texts_item">
            <?php while (have_rows('text_item')): the_row();
                        $title = get_sub_field('title');
                        $text = get_sub_field('text');
                        $image = get_sub_field('image');
                        $button = get_sub_field('button');
            ?>
            <div class="texts_list">
                <div class="text_box">
                    <p class="texts_time"><?php echo $title; ?></p>
                    <div class="texts_text"><?php echo $text; ?></div>
                    <?php 
                    if( $button ): 
                        $link_url = $button['url'];
                        $link_title = $button['title'];
                        $link_target = $button['target'] ? $button['target'] : '_self';
                        ?>
                    <div class="button_items">
                        <a class="button" href="<?php echo esc_url( $link_url ); ?>"
                            target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="text_image">
                    <img src="<?php echo $image; ?>">
                </div>
            </div>
            <?php endwhile;?>
        </div>
        <?php endif; ?>
    </div>
</section>