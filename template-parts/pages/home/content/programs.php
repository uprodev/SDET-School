<?php
$title = get_sub_field('title');
$texts = get_sub_field('text');
$number_list = get_sub_field('number_list');
$number_button = get_sub_field('number_button');

?>
<section class="programs_section">
    <div class="container">
        <div class="programs_title">
            <?php if ($title): ?>
            <h3><?php echo $title; ?></h3>
            <?php endif; ?>
            <?php if ($texts): ?>
            <p><?php echo $texts; ?></p>
            <?php endif; ?>
        </div>
        <?php if ($number_list): ?>
        <div class="programs_item">
            <?php while (have_rows('number_list')): the_row();
                        $number = get_sub_field('number');
                        $number_text = get_sub_field('number_text');
            ?>
            <div class="programs_list">
                <p class="titles"><?php echo $number; ?></p>
                <p class="programs_text"><?php echo $number_text; ?></p>

            </div>
            <?php endwhile;?>
        </div>
        <?php endif; ?>
        <?php 
             if( $number_button ): 
                        $link_url = $number_button['url'];
                        $link_title = $number_button['title'];
                        $link_target = $number_button['target'] ? $number_button['target'] : '_self';
                        ?>
        <div class="programs_button">
            <a class="button" href="<?php echo esc_url( $link_url ); ?>"
                target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            <?php endif; ?>
        </div>
    </div>
</section>