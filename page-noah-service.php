<?php
/*
Template Name: Noah Service Template
*/
get_header();
?>
<main class="noah-demo-page">
    <section class="section">
        <div class="container">
            <div class="page-header centered-header">
                <span class="eyebrow"><?php echo esc_html__('Bespoke service', 'noah-theme'); ?></span>
                <h1><?php the_title(); ?></h1>
            </div>

            <div class="service-layout panel-card">
                <div>
                    <h3><?php echo esc_html__('Request a quote', 'noah-theme'); ?></h3>
                    <p><?php echo esc_html__('Tell us about your piece, your ideal timeline, and the level of support you’re looking for from the Noah concierge team.', 'noah-theme'); ?></p>
                </div>

                <form class="noah-form-panel">
                    <div class="form-row"><input type="text" placeholder="Item type" /></div>
                    <div class="form-row"><input type="text" placeholder="Budget or target price" /></div>
                    <div class="form-row"><textarea rows="5" placeholder="Additional details"></textarea></div>
                    <button type="submit" class="primary-button"><?php echo esc_html__('Submit request', 'noah-theme'); ?></button>
                </form>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
