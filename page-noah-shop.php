<?php
/*
Template Name: Noah Home Template
*/
get_header();
?>
<section class="hero">
    <div class="container">
        <div class="hero-copy">
            <span class="eyebrow">Luxury fine jewelry</span>
            <h1>Timeless pieces for modern heirlooms.</h1>
            <p>Crafted with quiet confidence and elevated detail, Noah brings together bespoke luxury, ethically sourced gemstones, and heirloom-inspired design for life’s most meaningful moments.</p>
            <div class="hero-actions">
                <a href="#shop" class="btn btn-primary">Shop collection</a>
                <a href="#story" class="btn btn-secondary">Our story</a>
            </div>
        </div>

        <div class="hero-card">
            <img src="https://images.unsplash.com/photo-1617038220319-276d3cfab638?auto=format&fit=crop&w=900&q=80" alt="Noah luxury jewelry collection" />
        </div>
    </div>
</section>

<div class="container entry-content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>
