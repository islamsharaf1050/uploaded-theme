<?php
/*
Template Name: Noah Shop Template
*/
get_header();
?>
<div class="container entry-content">
    <div class="page-header">
        <h1><?php the_title(); ?></h1>
    </div>

    <div class="product-grid">
        <?php for ($i = 1; $i <= 8; $i++) : ?>
            <article class="product-card">
                <img src="https://images.unsplash.com/photo-1601821765780-3bf2d2f962b5?auto=format&fit=crop&w=900&q=80" alt="Product <?php echo esc_attr($i); ?>" />
                <div class="product-meta">
                    <span class="tag">Signature</span>
                    <h3>Product <?php echo esc_html($i); ?></h3>
                    <div class="price-row">
                        <strong>$1,250</strong>
                        <span class="rating">★★★★★</span>
                    </div>
                </div>
            </article>
        <?php endfor; ?>
    </div>
</div>
<?php get_footer(); ?>
