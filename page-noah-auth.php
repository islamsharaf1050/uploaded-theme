<?php
/*
Template Name: Noah Auth Template
*/
get_header();
$title = get_the_title();
?>
<main class="noah-demo-page">
    <section class="section">
        <div class="container auth-wrap">
            <div class="page-header centered-header narrow-header">
                <span class="eyebrow"><?php echo esc_html__('Member access', 'noah-theme'); ?></span>
                <h1><?php echo esc_html($title); ?></h1>
            </div>

            <form class="panel-card noah-form-panel auth-form">
                <div class="form-row"><input type="email" placeholder="Email address" /></div>
                <div class="form-row"><input type="password" placeholder="Password" /></div>
                <button type="submit" class="primary-button full-width"><?php echo esc_html__('Continue', 'noah-theme'); ?></button>
            </form>
        </div>
    </section>
</main>
<?php get_footer(); ?>
