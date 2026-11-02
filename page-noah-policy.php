<?php
/*
Template Name: Noah Policy Template
*/
get_header();
?>
<main class="noah-demo-page">
    <section class="section">
        <div class="container">
            <div class="page-header centered-header">
                <span class="eyebrow"><?php echo esc_html__('Policy', 'noah-theme'); ?></span>
                <h1><?php the_title(); ?></h1>
            </div>

            <div class="panel-card policy-card">
                <p><?php echo esc_html__('We protect your purchase experience with transparent communication, secure fulfillment, and customer-first support.', 'noah-theme'); ?></p>
                <p><?php echo esc_html__('Orders are handled with care, insured packaging, and clear return guidance for peace of mind.', 'noah-theme'); ?></p>
                <p><?php echo esc_html__('For full terms, contact support and our team will walk you through any policy questions in detail.', 'noah-theme'); ?></p>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
