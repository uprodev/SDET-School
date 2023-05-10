<?php
$title = get_sub_field('title');
$course_list = get_sub_field('course_list');
?>
<section class="course_section">
    <div class="container">
        <?php if ($title): ?>
        <h3 class="course_title"><?php echo $title; ?></h3>
        <?php endif; ?>

        <?php if ($course_list): ?>
        <div class="courses_item">
            <?php while (have_rows('course_list')): the_row();
                        $time = get_sub_field('time');
                        $image = get_sub_field('image');
                        $titles = get_sub_field('titles');
                        $text = get_sub_field('text');
                        $button = get_sub_field('button');
            ?>
            <div class="courses_list">
                <p class="courses_time"><img
                        src="http://localhost:8888/sdet/wp-content/uploads/2023/05/data.svg"><?php echo $time; ?>
                </p>
                <img src="<?php echo $image; ?>" style="width: 100%; height: 193px;">
                <p class="titles"><?php echo $titles; ?></p>
                <p class="course_text"><?php echo $text; ?></p>
                <?php 
                    if( $button ): 
                        $link_url = $button['url'];
                        $link_title = $button['title'];
                        $link_target = $button['target'] ? $button['target'] : '_self';
                        ?>
                <a class="button" href="<?php echo esc_url( $link_url ); ?>"
                    target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                <?php endif; ?>
            </div>
            <?php endwhile;?>
        </div>
        <?php endif; ?>

</section>