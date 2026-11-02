<?php
/*
Template Name: Noah Checkout Template
*/
get_header();
?>
<main class="noah-demo-page">
    <section class="section">
        <div class="container">
            <div class="page-header centered-header">
                <span class="eyebrow"><?php echo esc_html__('Secure checkout', 'noah-theme'); ?></span>
                <h1><?php the_title(); ?></h1>
            </div>

            <div class="noah-checkout-layout">
                <form class="panel-card noah-form-panel">
                    <div class="form-row two-col"><input type="text" placeholder="First name" /><input type="text" placeholder="Last name" /></div>
                    <div class="form-row"><input type="text" placeholder="Address" /></div>
                    <div class="form-row"><input type="text" placeholder="City" /></div>
                    <div class="form-row"><input type="text" placeholder="Card number" /></div>
                    <button type="submit" class="primary-button"><?php echo esc_html__('Pay securely', 'noah-theme'); ?></button>
                </form>

                <aside class="panel-card noah-summary-box">
                    <h3><?php echo esc_html__('Order summary', 'noah-theme'); ?></h3>
                    <div class="summary-row"><span><?php echo esc_html__('Celeste Halo Ring', 'noah-theme'); ?></span><strong>$1,240</strong></div>
                    <div class="summary-row"><span><?php echo esc_html__('Aurora Necklace', 'noah-theme'); ?></span><strong>$980</strong></div>
                    <div class="summary-row total"><span><?php echo esc_html__('Total', 'noah-theme'); ?></span><strong>$2,220</strong></div>
                </aside>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
