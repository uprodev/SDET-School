<?php
$title = get_sub_field('title');
$sub_title = get_sub_field('sub_title');
$phone = get_sub_field('phone');
$email = get_sub_field('email');
$adress = get_sub_field('adress');
?>

<section class="contacts_page">
    <div class="container">
        <div class="contact_content">
            <div class="contact_page">
                <div class="contact_titles">
                    <?php if ($title): ?>
                    <h1 class="title_contact"><?php echo $title; ?></h1>
                    <?php endif; ?>
                </div>
                <div class="contact_phone">
                    <p class="phone_text"><?php echo __("T","anvamed");
                ?></p>
                    <?php if ($phone): ?>
                    <a href="tel:<?php echo $phone ?>" class="phone"><?php echo $phone; ?></a>
                    <?php endif; ?>
                </div>
                <div class="contact_email">
                    <p class="email_text"><?php echo __("E","anvamed");?></p>
                    <?php if ($email): ?>
                    <a href="mailto:<?php echo $email ?>" class="email"><?php echo $email; ?></a>
                    <?php endif; ?>
                </div>
                <div class="contact_adrerss">
                    <p class="adress_text">A</p>
                    <?php if ($adress): ?>
                    <h3 class="email"><?php echo $adress; ?></h3>
                    <?php endif; ?>
                </div>
            </div>
            <div class="contact_forms" id="kontakt">
                <div class="contact-form-wrapper">
                    <div class="contact_titles_form">
                        <?php if ($sub_title): ?>
                        <h1 class="title_contact_form"><?php echo $sub_title; ?></h1>
                        <?php endif; ?>
                        <?php echo do_shortcode('[contact-form-7 id="235" title="Contact_form_submit"]'); ?>
                    </div>
                </div>
                <div class="contact-form-thanks">
                    <p class="modal-title-thanks"><?php echo __('Thank you', 'budddom'); ?></p>
                    <p class="modal-thanks-text">
                        <?php echo __('Your message has been sent successfully. We will get back to you as soon as possible.', 'budddom'); ?>
                    </p>
                    <div class="text-center">
                        <a href="http://anovamed.app.dev.zipl.pro/"
                            class="btn_form_home"><?php echo __('Go to homepage', 'budddom'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>