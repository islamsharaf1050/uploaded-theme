<?php
/*
Template Name: Noah Confirmation Template
*/
get_header();
?>
<main class="noah-demo-page">
    <section class="section">
        <div class="container auth-wrap">
            <div class="page-header centered-header narrow-header">
                <span class="eyebrow"><?php echo esc_html__('Order placed', 'noah-theme'); ?></span>
                <h1><?php echo esc_html__('Thank you for your purchase.', 'noah-theme'); ?></h1>
            </div>

            <div class="panel-card confirm-card">
                <p><?php echo esc_html__('Order #NOAH-2408 has been confirmed and a receipt has been sent to your email.', 'noah-theme'); ?></p>
                <div class="metric-card-row compact-row">
                    <div class="metric-card"><strong>2 days</strong><span>Dispatch</span></div>
                    <div class="metric-card"><strong>Free</strong><span>Shipping</span></div>
                    <div class="metric-card"><strong>4.9</strong><span>Care rating</span></div>
                </div>
                <a class="primary-button" href="<?php echo esc_url(home_url('/shop')); ?>"><?php echo esc_html__('Track order', 'noah-theme'); ?></a>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
