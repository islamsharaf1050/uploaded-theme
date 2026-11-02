<?php
/*
Template Name: Noah About Template
*/
get_header();
?>
<main class="noah-demo-page">
    <section class="section">
        <div class="container">
            <div class="page-header centered-header">
                <span class="eyebrow"><?php echo esc_html__('Our story', 'noah-theme'); ?></span>
                <h1><?php the_title(); ?></h1>
            </div>

            <div class="noah-story-split">
                <div class="noah-story-copy panel-card">
                    <p><?php echo esc_html__('Noah was created to bring together heirloom-worthy craftsmanship, editorial styling, and modern luxury for life’s most meaningful milestones.', 'noah-theme'); ?></p>
                    <p><?php echo esc_html__('From the first sketch to the final polish, each piece is designed to be intimate, personal, and enduring — created for those who prefer meaning over noise, and elegance over excess.', 'noah-theme'); ?></p>
                    <ul class="noah-list">
                        <li><?php echo esc_html__('Ethically sourced stones and premium metals.', 'noah-theme'); ?></li>
                        <li><?php echo esc_html__('Private consultations for gifting and custom design.', 'noah-theme'); ?></li>
                        <li><?php echo esc_html__('Luxury service from concept to aftercare.', 'noah-theme'); ?></li>
                    </ul>
                </div>
                <div class="noah-story-visual large-photo"></div>
            </div>

            <div class="metric-card-row">
                <div class="metric-card"><strong>20+</strong><span>Years of craft</span></div>
                <div class="metric-card"><strong>35K</strong><span>Happy clients</span></div>
                <div class="metric-card"><strong>99.2%</strong><span>Repeat buyers</span></div>
                <div class="metric-card"><strong>4.9/5</strong><span>Client rating</span></div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
