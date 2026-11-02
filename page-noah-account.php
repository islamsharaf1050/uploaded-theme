<?php
/*
Template Name: Noah Account Template
*/
get_header();
?>
<main class="noah-demo-page">
    <section class="section">
        <div class="container">
            <div class="page-header centered-header">
                <span class="eyebrow"><?php echo esc_html__('My account', 'noah-theme'); ?></span>
                <h1><?php echo esc_html__('Welcome back, Amina.', 'noah-theme'); ?></h1>
            </div>

            <div class="noah-account-grid">
                <div class="panel-card info-box">
                    <h3><?php echo esc_html__('Profile overview', 'noah-theme'); ?></h3>
                    <ul class="noah-list noah-list-plain">
                        <li><?php echo esc_html__('Orders placed: 6', 'noah-theme'); ?></li>
                        <li><?php echo esc_html__('Wishlist items: 4', 'noah-theme'); ?></li>
                        <li><?php echo esc_html__('Member since 2023', 'noah-theme'); ?></li>
                    </ul>
                </div>

                <div class="panel-card order-list-box">
                    <h3><?php echo esc_html__('Recent orders', 'noah-theme'); ?></h3>
                    <div class="order-row"><span>#N-2408</span><strong><?php echo esc_html__('Delivered', 'noah-theme'); ?></strong></div>
                    <div class="order-row"><span>#N-2382</span><strong><?php echo esc_html__('Processing', 'noah-theme'); ?></strong></div>
                    <div class="order-row"><span>#N-2364</span><strong><?php echo esc_html__('Shipped', 'noah-theme'); ?></strong></div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
