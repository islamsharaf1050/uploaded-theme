<?php
/*
Template Name: Noah Product Template
*/
get_header();
?>
<main class="noah-demo-page noah-product-page">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php if (trim(get_the_content()) !== '') : ?>
            <div class="noah-demo-content"><?php the_content(); ?></div>
        <?php else : ?>
            <section class="section">
                <div class="container">
                    <div class="page-header" style="margin-bottom:30px;">
                        <span class="eyebrow"><?php echo esc_html__('Product detail', 'noah-theme'); ?></span>
                        <h1><?php echo esc_html__('Celeste Halo Ring', 'noah-theme'); ?></h1>
                    </div>

                    <div class="product-detail-layout">
                        <div class="product-gallery-large" style="background-image:url('https://images.unsplash.com/photo-1601821765780-3bf2d2f962b5?auto=format&fit=crop&w=1200&q=80');"></div>
                        <div class="product-summary-panel">
                            <span class="tag"><?php echo esc_html__('Diamond', 'noah-theme'); ?></span>
                            <h2><?php echo esc_html__('A radiant statement crafted for unforgettable moments.', 'noah-theme'); ?></h2>
                            <p><?php echo esc_html__('Crafted in luminous 18K gold with a halo setting designed to enhance brilliance, depth, and elegance for gifting, milestones, and modern heirlooms.', 'noah-theme'); ?></p>

                            <div class="metrics-grid">
                                <div><strong>$1,240</strong><span><?php echo esc_html__('Price', 'noah-theme'); ?></span></div>
                                <div><strong>18K</strong><span><?php echo esc_html__('Gold', 'noah-theme'); ?></span></div>
                                <div><strong>4.9</strong><span><?php echo esc_html__('Rating', 'noah-theme'); ?></span></div>
                            </div>

                            <div class="product-actions">
                                <a href="<?php echo esc_url(home_url('/cart')); ?>" class="primary-button"><?php echo esc_html__('Add to cart', 'noah-theme'); ?></a>
                                <a href="<?php echo esc_url(home_url('/checkout')); ?>" class="secondary-button"><?php echo esc_html__('Reserve now', 'noah-theme'); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
    <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>
