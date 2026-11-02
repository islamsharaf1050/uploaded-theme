<?php
/*
Template Name: Noah Blog Template
*/
get_header();
?>
<main class="noah-demo-page">
    <section class="section">
        <div class="container">
            <div class="page-header centered-header">
                <span class="eyebrow"><?php echo esc_html__('Journal', 'noah-theme'); ?></span>
                <h1><?php echo esc_html__('Style notes and design stories.', 'noah-theme'); ?></h1>
            </div>

            <div class="news-grid">
                <article class="news-card news-one">
                    <div class="news-copy"><span><?php echo esc_html__('Gifting', 'noah-theme'); ?></span><h3><?php echo esc_html__('How to choose a memorable heirloom gift.', 'noah-theme'); ?></h3></div>
                </article>
                <article class="news-card news-two">
                    <div class="news-copy"><span><?php echo esc_html__('Craft', 'noah-theme'); ?></span><h3><?php echo esc_html__('Inside the finishing workshop.', 'noah-theme'); ?></h3></div>
                </article>
                <article class="news-card news-three">
                    <div class="news-copy"><span><?php echo esc_html__('Style', 'noah-theme'); ?></span><h3><?php echo esc_html__('Three layers of modern luxury styling.', 'noah-theme'); ?></h3></div>
                </article>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
