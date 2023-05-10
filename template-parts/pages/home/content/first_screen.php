<?php
$image_stars = get_sub_field('image_stars');
$title = get_sub_field('title');
$text = get_sub_field('text');
$button_a = get_sub_field('button_a');
$buttoon_sing = get_sub_field('buttoon_sing');
$first_img = get_sub_field('first_img');
$background_img = get_sub_field('background_img');
$slide_title = get_sub_field('slide_title');
$slider = get_sub_field('slider');
?>
<section class="home_content">
    <?php if ($background_img) : ?>
    <div class="first-screen-img-item relative h-[90vh] flex flex-col justify-center bg-no-repeat bg-cover bg-center h-full w-full swiper-slide z-[-2]"
        style="background-image: url('<?php echo $background_img; ?>');" width="1600" height="750">
        <?php endif; ?>
        <div class="container">
            <div class="first_list">
                <div class="first_item">
                    <?php if ($image_stars) : ?>
                    <img src="<?php echo $image_stars; ?>" alt="">
                    <?php endif; ?>
                    <div class="box_text_list">
                        <?php if ($title) : ?>
                        <h1 class="home_titles">
                            <?php echo $title; ?></h1>
                        <?php endif; ?>
                        <?php if ( $text) : ?>
                        <p class="home_text">
                            <?php echo  $text; ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="buttons">
                        <?php if( $button_a ):
                    $link_url = $button_a['url'];
                    $link_title = $button_a['title'];
                    $link_target = $button_a['target'] ? $button_a['target'] : '_self';
                    ?>
                        <?php endif; ?>
                        <div class="first_button">
                            <a class="button" href="<?php echo esc_url( $link_url ); ?>"
                                target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                        </div>
                        <?php if( $buttoon_sing ):
                    $link_url = $buttoon_sing['url'];
                    $link_title = $buttoon_sing['title'];
                    $link_target = $$buttoon_sing['target'] ? $buttoon_sing['target'] : '_self';
                    ?>
                        <?php endif; ?>
                        <div class="first_button_s">
                            <a class="button_s" href="<?php echo esc_url( $link_url ); ?>"
                                target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                        </div>
                    </div>
                </div>
                <div class="first_item_img">
                    <?php if ($first_img) : ?>
                    <img src="<?php echo $first_img; ?>" style="width: 651px;
height: 486px;" alt="">
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="first_slider">
        <div class="container">
            <div class="first_slide_content">
                <div class="first_slide_title">
                    <?php if ($slide_title) : ?>
                    <p> <?php echo $slide_title; ?></p>
                    <?php endif; ?>
                </div>
                <div class="first_slide_img">

                    <div class="swiper">
                        <?php if ($slider): ?>
                        <div class="swiper-wrapper">
                            <?php while (have_rows('slider')): the_row();
                        $image = get_sub_field('images');
                        ?>
                            <?php if ($image) : ?>
                            <div class="swiper-slide"><img src="<?php echo $image; ?>" style="width: 141px;"></div>
                            <?php endif; ?>
                            <?php endwhile;?>


                        </div>
                        <?php endif; ?>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-pagination fraction"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>