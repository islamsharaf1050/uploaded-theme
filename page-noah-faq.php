<?php
/*
Template Name: Noah FAQ Template
*/
get_header();
?>
<main class="noah-demo-page">
    <section class="section">
        <div class="container">
            <div class="page-header centered-header">
                <span class="eyebrow"><?php echo esc_html__('Support', 'noah-theme'); ?></span>
                <h1><?php echo esc_html__('Frequently asked questions.', 'noah-theme'); ?></h1>
            </div>

            <div class="faq-list">
                <div class="faq-item panel-card">
                    <strong><?php echo esc_html__('How long does shipping take?', 'noah-theme'); ?></strong>
                    <p><?php echo esc_html__('Most orders are dispatched in 48 hours and delivered within 5–7 business days.', 'noah-theme'); ?></p>
                </div>
                <div class="faq-item panel-card">
                    <strong><?php echo esc_html__('Do you offer custom pieces?', 'noah-theme'); ?></strong>
                    <p><?php echo esc_html__('Yes, our design team creates bespoke commissions for rings, bracelets, and signature gifting sets.', 'noah-theme'); ?></p>
                </div>
                <div class="faq-item panel-card">
                    <strong><?php echo esc_html__('Can I reserve a product?', 'noah-theme'); ?></strong>
                    <p><?php echo esc_html__('Absolutely. Select the reserve option on the product page and our team will confirm availability.', 'noah-theme'); ?></p>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
