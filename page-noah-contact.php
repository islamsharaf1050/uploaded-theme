<?php
/*
Template Name: Noah Contact Template
*/
get_header();
?>
<main class="noah-demo-page">
    <section class="section">
        <div class="container">
            <div class="page-header centered-header">
                <span class="eyebrow"><?php echo esc_html__('Visit us', 'noah-theme'); ?></span>
                <h1><?php the_title(); ?></h1>
            </div>

            <div class="noah-contact-layout">
                <div class="panel-card info-box">
                    <h3><?php echo esc_html__('Contact details', 'noah-theme'); ?></h3>
                    <ul class="noah-list noah-list-plain">
                        <li><?php echo esc_html__('hello@noahjewelry.com', 'noah-theme'); ?></li>
                        <li><?php echo esc_html__('+966 55 000 0000', 'noah-theme'); ?></li>
                        <li><?php echo esc_html__('Al Khobar, Saudi Arabia', 'noah-theme'); ?></li>
                    </ul>
                    <a class="primary-button" href="<?php echo esc_url(home_url('/contact')); ?>"><?php echo esc_html__('Book a consultation', 'noah-theme'); ?></a>
                </div>

                <form class="panel-card noah-form-panel">
                    <div class="form-row"><input type="text" placeholder="Full name" /></div>
                    <div class="form-row"><input type="email" placeholder="Email address" /></div>
                    <div class="form-row"><input type="text" placeholder="Phone number" /></div>
                    <div class="form-row"><textarea rows="5" placeholder="Tell us about your enquiry"></textarea></div>
                    <button type="submit" class="primary-button"><?php echo esc_html__('Send inquiry', 'noah-theme'); ?></button>
                </form>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
