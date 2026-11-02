<?php
/*
Template Name: Noah Custom Design Template
*/
get_header();
?>
<main class="noah-demo-page">
    <section class="section">
        <div class="container">
            <div class="page-header centered-header">
                <span class="eyebrow"><?php echo esc_html__('Custom design', 'noah-theme'); ?></span>
                <h1><?php echo esc_html__('Design your next heirloom.', 'noah-theme'); ?></h1>
            </div>

            <div class="service-layout panel-card">
                <div>
                    <h3><?php echo esc_html__('Tell us the story', 'noah-theme'); ?></h3>
                    <p><?php echo esc_html__('Share the occasion, your inspiration, metal preference, and the mood you want the final piece to carry.', 'noah-theme'); ?></p>
                </div>

                <form class="noah-form-panel">
                    <div class="form-row"><input type="text" placeholder="Design concept" /></div>
                    <div class="form-row"><input type="text" placeholder="Budget range" /></div>
                    <div class="form-row"><textarea rows="5" placeholder="Share details about your custom request"></textarea></div>
                    <button type="submit" class="primary-button"><?php echo esc_html__('Submit concept', 'noah-theme'); ?></button>
                </form>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
