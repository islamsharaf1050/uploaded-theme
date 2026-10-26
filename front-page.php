<?php get_header(); ?>

<main class="hero">
    <div class="container hero-grid">
        <div class="hero-copy">
            <span class="eyebrow"><?php echo esc_html__('Luxury fine jewelry', 'noah-theme'); ?></span>
            <h1><?php echo esc_html__('Timeless pieces for modern heirlooms.', 'noah-theme'); ?></h1>
            <p><?php echo esc_html__('Crafted with quiet confidence and elevated detail, Noah brings together bespoke luxury, ethically sourced gemstones, and heirloom-inspired design for life’s most meaningful moments.', 'noah-theme'); ?></p>
            <div class="hero-actions">
                <a href="#shop" class="primary-button"><?php echo esc_html__('Shop collection', 'noah-theme'); ?></a>
                <a href="#story" class="secondary-button"><?php echo esc_html__('Our story', 'noah-theme'); ?></a>
            </div>
        </div>

        <div class="hero-visual">
            <div class="hero-card">
                <img src="https://images.unsplash.com/photo-1617038220319-276d3cfab638?auto=format&fit=crop&w=900&q=80" alt="Noah jewelry collection" />
            </div>
        </div>
    </div>
</main>

<section class="section">
    <div class="container">
        <div class="trust-bar">
            <div class="trust-item"><strong>4.9/5</strong><span><?php echo esc_html__('Client rating', 'noah-theme'); ?></span></div>
            <div class="trust-item"><strong>12k+</strong><span><?php echo esc_html__('Jewels sold', 'noah-theme'); ?></span></div>
            <div class="trust-item"><strong>48h</strong><span><?php echo esc_html__('Fast dispatch', 'noah-theme'); ?></span></div>
            <div class="trust-item"><strong>100%</strong><span><?php echo esc_html__('Certified', 'noah-theme'); ?></span></div>
        </div>
    </div>
</section>

<section class="section" id="shop">
    <div class="container">
        <div class="section-head">
            <span class="eyebrow"><?php echo esc_html__('Shop by category', 'noah-theme'); ?></span>
            <h2><?php echo esc_html__('Crafted for every moment.', 'noah-theme'); ?></h2>
            <p><?php echo esc_html__('Explore refined categories shaped by rare stones, sculptural silhouettes, and the warm luxury aesthetic of the Noah brand.', 'noah-theme'); ?></p>
        </div>

        <div class="category-grid">
            <article class="category-card" style="background-image:url('https://images.unsplash.com/photo-1535632787350-4e68ef0ac584?auto=format&fit=crop&w=900&q=80');">
                <div class="content">
                    <h3><?php echo esc_html__('Rings', 'noah-theme'); ?></h3>
                    <span><?php echo esc_html__('Discover', 'noah-theme'); ?></span>
                </div>
            </article>

            <article class="category-card" style="background-image:url('https://images.unsplash.com/photo-1602173574767-37ac01994b2a?auto=format&fit=crop&w=900&q=80');">
                <div class="content">
                    <h3><?php echo esc_html__('Necklaces', 'noah-theme'); ?></h3>
                    <span><?php echo esc_html__('Discover', 'noah-theme'); ?></span>
                </div>
            </article>

            <article class="category-card" style="background-image:url('https://images.unsplash.com/photo-1611652022419-a9419f74343d?auto=format&fit=crop&w=900&q=80');">
                <div class="content">
                    <h3><?php echo esc_html__('Bracelets', 'noah-theme'); ?></h3>
                    <span><?php echo esc_html__('Discover', 'noah-theme'); ?></span>
                </div>
            </article>
        </div>
    </div>
</section>

<section class="section" id="story">
    <div class="container featured-layout">
        <div class="featured-copy">
            <span class="eyebrow"><?php echo esc_html__('Why Noah', 'noah-theme'); ?></span>
            <h2><?php echo esc_html__('Luxury, precision, and a story worth keeping.', 'noah-theme'); ?></h2>
            <ul>
                <li><?php echo esc_html__('Ethically sourced stones and masterfully finished metalwork.', 'noah-theme'); ?></li>
                <li><?php echo esc_html__('Made-to-order options designed for gifting, milestones, and custom visions.', 'noah-theme'); ?></li>
                <li><?php echo esc_html__('Luxury packaging and concierge support tailored for every purchase.', 'noah-theme'); ?></li>
            </ul>
        </div>

        <div class="featured-visual">
            <div class="featured-badge">
                <strong><?php echo esc_html__('Custom Design Studio', 'noah-theme'); ?></strong><br>
                <span><?php echo esc_html__('From concept to final piece', 'noah-theme'); ?></span>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-head">
            <span class="eyebrow"><?php echo esc_html__('Best sellers', 'noah-theme'); ?></span>
            <h2><?php echo esc_html__('Signature pieces loved by collectors.', 'noah-theme'); ?></h2>
        </div>

        <div class="product-grid">
            <article class="product-card">
                <img src="https://images.unsplash.com/photo-1601821765780-3bf2d2f962b5?auto=format&fit=crop&w=900&q=80" alt="Celeste Halo Ring" />
                <div class="product-meta">
                    <span class="tag"><?php echo esc_html__('Diamond', 'noah-theme'); ?></span>
                    <h3><?php echo esc_html__('Celeste Halo Ring', 'noah-theme'); ?></h3>
                    <div class="price-row">
                        <strong>$1,240</strong>
                        <span class="rating">★★★★★</span>
                    </div>
                </div>
            </article>

            <article class="product-card">
                <img src="https://images.unsplash.com/photo-1599643478518-a784e5dc4c8f?auto=format&fit=crop&w=900&q=80" alt="Aurora Necklace" />
                <div class="product-meta">
                    <span class="tag"><?php echo esc_html__('Gold', 'noah-theme'); ?></span>
                    <h3><?php echo esc_html__('Aurora Necklace', 'noah-theme'); ?></h3>
                    <div class="price-row">
                        <strong>$980</strong>
                        <span class="rating">★★★★★</span>
                    </div>
                </div>
            </article>

            <article class="product-card">
                <img src="https://images.unsplash.com/photo-1617038220319-276d3cfab638?auto=format&fit=crop&w=900&q=80" alt="Luna Bracelet" />
                <div class="product-meta">
                    <span class="tag"><?php echo esc_html__('Pearl', 'noah-theme'); ?></span>
                    <h3><?php echo esc_html__('Luna Bracelet', 'noah-theme'); ?></h3>
                    <div class="price-row">
                        <strong>$860</strong>
                        <span class="rating">★★★★★</span>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>

<?php get_footer(); ?>
