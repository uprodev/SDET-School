<?php
$title = get_sub_field('title');
$texts = get_sub_field('texts');
?>
<section class="imprint_section">
    <div class="container">
        <div class="imprint_section_content">
            <?php if ($title): ?>
            <h1 class="imprint_section_title"><?php echo $title; ?></h1>
            <?php endif; ?>
            <div class="imprint_list">
                <?php if ($texts): ?>
                <div class="imprint_item">
                    <?php while (have_rows('texts')): the_row();
                        $sub_title = get_sub_field('sub_title');
                        $sub_text = get_sub_field('sub_text');
            ?>
                    <div class="imprint_list">
                        <h3 class="imprint_sub_title"><?php echo $sub_title; ?></h3>
                        <div class="imprint_sub_text"><?php echo $sub_text; ?></div>
                    </div>
                    <?php endwhile;?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>