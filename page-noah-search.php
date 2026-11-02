<?php
/*
Template Name: Noah Search Template
*/
get_header();
?>
<main class="noah-demo-page">
    <section class="section">
        <div class="container">
            <div class="page-header centered-header">
                <span class="eyebrow"><?php echo esc_html__('Search', 'noah-theme'); ?></span>
                <h1><?php echo esc_html__('Search results for “engagement rings”', 'noah-theme'); ?></h1>
            </div>

            <div class="product-grid">
                <article class="product-card">
                    <img src="https://images.unsplash.com/photo-1601821765780-3bf2d2f962b5?auto=format&fit=crop&w=900&q=80" alt="Solstice Ring" />
                    <div class="product-meta"><span class="tag"><?php echo esc_html__('Rings', 'noah-theme'); ?></span><h3><?php echo esc_html__('Solstice Ring', 'noah-theme'); ?></h3><div class="price-row"><strong>$1,320</strong><span class="rating">★★★★★</span></div></div>
                </article>
                <article class="product-card">
                    <img src="https://images.unsplash.com/photo-1599643478518-a784e5dc4c8f?auto=format&fit=crop&w=900&q=80" alt="Marina Halo" />
                    <div class="product-meta"><span class="tag"><?php echo esc_html__('Rings', 'noah-theme'); ?></span><h3><?php echo esc_html__('Marina Halo', 'noah-theme'); ?></h3><div class="price-row"><strong>$1,160</strong><span class="rating">★★★★★</span></div></div>
                </article>
                <article class="product-card">
                    <img src="https://images.unsplash.com/photo-1617038220319-276d3cfab638?auto=format&fit=crop&w=900&q=80" alt="Velvet Band" />
                    <div class="product-meta"><span class="tag"><?php echo esc_html__('Rings', 'noah-theme'); ?></span><h3><?php echo esc_html__('Velvet Band', 'noah-theme'); ?></h3><div class="price-row"><strong>$940</strong><span class="rating">★★★★★</span></div></div>
                </article>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
