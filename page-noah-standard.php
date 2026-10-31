<?php
/*
Template Name: Noah Standard Template
*/
get_header();
?>
<main class="noah-demo-page noah-standard-page">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php if (trim(get_the_content()) !== '') : ?>
            <div class="noah-demo-content"><?php the_content(); ?></div>
        <?php else : ?>
            <section class="section">
                <div class="container">
                    <div class="page-header centered-header">
                        <span class="eyebrow"><?php echo esc_html__('Noah Studio', 'noah-theme'); ?></span>
                        <h1><?php the_title(); ?></h1>
                    </div>

                    <div class="standard-layout">
                        <div class="standard-image" style="background-image:url('https://images.unsplash.com/photo-1515562141207-7a88fb7ce338?auto=format&fit=crop&w=1200&q=80');"></div>
                        <div class="standard-copy">
                            <h2><?php echo esc_html__('Woven with intention, crafted for meaningful moments.', 'noah-theme'); ?></h2>
                            <p><?php echo esc_html__('Every Noah piece is created to feel personal from the first glimpse to the final unboxing — with refined artistry, premium materials, and a luxury experience designed around the story you want to carry forward.', 'noah-theme'); ?></p>
                            <ul class="noah-list">
                                <li><?php echo esc_html__('Bespoke consultations and private design support.', 'noah-theme'); ?></li>
                                <li><?php echo esc_html__('Premium craftsmanship with responsible sourcing.', 'noah-theme'); ?></li>
                                <li><?php echo esc_html__('Luxury packaging and concierge guidance for gifting.', 'noah-theme'); ?></li>
                            </ul>
                            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="primary-button"><?php echo esc_html__('Book a consultation', 'noah-theme'); ?></a>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
    <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>
