<?php
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header" role="banner">
    <div class="container">
        <div class="brand">
            <a href="<?php echo esc_url(home_url('/')); ?>" aria-label="<?php bloginfo('name'); ?>">
                <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <span class="brand-mark">N</span>
                    <span><?php echo esc_html(get_theme_mod('noah_brand_name', 'NOAH')); ?></span>
                <?php endif; ?>
            </a>
        </div>

        <nav class="site-nav" aria-label="Primary navigation">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => false,
                'fallback_cb' => false,
            ));
            ?>
        </nav>

        <div class="header-tools" aria-label="Header tools">
            <a href="#" class="icon-button">Wishlist</a>
            <a href="#" class="icon-button">Cart (0)</a>
        </div>
    </div>
</header>
<main id="content" class="site-content">
