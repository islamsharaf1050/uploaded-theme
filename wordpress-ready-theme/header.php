<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php if (get_theme_mod('noah_announcement_text', 'Free shipping over $500')) : ?>
    <div class="announcement-bar">
        <?php echo esc_html(get_theme_mod('noah_announcement_text', 'Free shipping over $500')); ?>
    </div>
<?php endif; ?>

<header class="site-header">
    <div class="container">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="brand" aria-label="<?php echo esc_attr(get_bloginfo('name')); ?>">
            <?php if (has_custom_logo()) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <span class="brand-mark">N</span>
                <span class="brand-name"><?php bloginfo('name'); ?></span>
            <?php endif; ?>
        </a>

        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'container' => 'nav',
            'container_class' => 'main-nav',
            'menu_class' => 'menu',
            'fallback_cb' => false,
        ));
        ?>

        <div class="header-actions">
            <a class="link-button secondary-button" href="<?php echo esc_url(home_url('/shop')); ?>"><?php esc_html_e('Shop', 'noah-theme'); ?></a>
            <a class="link-button primary-button" href="<?php echo esc_url(home_url('/contact')); ?>"><?php esc_html_e('Contact', 'noah-theme'); ?></a>
        </div>
    </div>
</header>
