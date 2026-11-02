<?php
/*
Template Name: Noah Cart Template
*/
get_header();
?>
<main class="noah-demo-page">
    <section class="section">
        <div class="container">
            <div class="page-header centered-header">
                <span class="eyebrow"><?php echo esc_html__('Shopping bag', 'noah-theme'); ?></span>
                <h1><?php the_title(); ?></h1>
            </div>

            <div class="noah-cart-layout">
                <div class="panel-card cart-list">
                    <div class="cart-item-row">
                        <div class="cart-thumb thumb-one"></div>
                        <div class="cart-item-copy">
                            <h3><?php echo esc_html__('Celeste Halo Ring', 'noah-theme'); ?></h3>
                            <p><?php echo esc_html__('18K gold • 1.2 carat', 'noah-theme'); ?></p>
                        </div>
                        <strong>$1,240</strong>
                    </div>
                    <div class="cart-item-row">
                        <div class="cart-thumb thumb-two"></div>
                        <div class="cart-item-copy">
                            <h3><?php echo esc_html__('Aurora Necklace', 'noah-theme'); ?></h3>
                            <p><?php echo esc_html__('Gold vermeil • 14mm', 'noah-theme'); ?></p>
                        </div>
                        <strong>$980</strong>
                    </div>
                </div>

                <aside class="panel-card noah-summary-box">
                    <h3><?php echo esc_html__('Order summary', 'noah-theme'); ?></h3>
                    <div class="summary-row"><span><?php echo esc_html__('Subtotal', 'noah-theme'); ?></span><strong>$2,220</strong></div>
                    <div class="summary-row"><span><?php echo esc_html__('Shipping', 'noah-theme'); ?></span><strong><?php echo esc_html__('Free', 'noah-theme'); ?></strong></div>
                    <div class="summary-row total"><span><?php echo esc_html__('Total', 'noah-theme'); ?></span><strong>$2,220</strong></div>
                    <a class="primary-button full-width" href="<?php echo esc_url(home_url('/checkout')); ?>"><?php echo esc_html__('Proceed to checkout', 'noah-theme'); ?></a>
                </aside>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
