<?php
/*
Template Name: Noah Shop Template
*/
get_header();
?>
<main class="noah-demo-page noah-shop-page">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php if (trim(get_the_content()) !== '') : ?>
            <div class="noah-demo-content"><?php the_content(); ?></div>
        <?php else : ?>
            <section class="section">
                <div class="container">
                    <div class="section-head">
                        <span class="eyebrow"><?php echo esc_html__('Shop all', 'noah-theme'); ?></span>
                        <h2><?php echo esc_html__('Luxury jewellery for every story.', 'noah-theme'); ?></h2>
                    </div>

                    <div class="noah-filter-row">
                        <span class="noah-chip"><?php echo esc_html__('Rings', 'noah-theme'); ?></span>
                        <span class="noah-chip"><?php echo esc_html__('Necklaces', 'noah-theme'); ?></span>
                        <span class="noah-chip"><?php echo esc_html__('Bracelets', 'noah-theme'); ?></span>
                        <span class="noah-chip"><?php echo esc_html__('Earrings', 'noah-theme'); ?></span>
                    </div>

                    <div class="product-grid">
                        <?php for ($i = 1; $i <= 8; $i++) : ?>
                            <article class="product-card">
                                <img src="https://images.unsplash.com/photo-1601821765780-3bf2d2f962b5?auto=format&fit=crop&w=900&q=80" alt="Product <?php echo esc_attr($i); ?>" />
                                <div class="product-meta">
                                    <span class="tag"><?php echo esc_html__('Signature', 'noah-theme'); ?></span>
                                    <h3><?php echo esc_html__('Product', 'noah-theme'); ?> <?php echo esc_html($i); ?></h3>
                                    <div class="price-row">
                                        <strong>$<?php echo esc_html(1240 + $i * 15); ?></strong>
                                        <span class="rating">★★★★★</span>
                                    </div>
                                </div>
                            </article>
                        <?php endfor; ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>
    <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>
