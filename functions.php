<?php
function noah_theme_setup() {
    load_theme_textdomain('noah-theme', get_template_directory() . '/languages');

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('custom-background');
    add_theme_support('menus');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'));
    add_theme_support('responsive-embeds');
    add_theme_support('wp-block-styles');
    add_theme_support('editor-styles');
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'noah-theme'),
        'footer' => __('Footer Menu', 'noah-theme'),
    ));
}
add_action('after_setup_theme', 'noah_theme_setup');

function noah_theme_enqueue_assets() {
    wp_enqueue_style('noah-theme-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
    wp_enqueue_style('noah-theme-main', get_template_directory_uri() . '/assets/css/theme.css', array(), '2.0.0');
    wp_enqueue_script('noah-theme-script', get_template_directory_uri() . '/assets/js/theme.js', array(), '2.0.0', true);
}
add_action('wp_enqueue_scripts', 'noah_theme_enqueue_assets');

function noah_theme_get_setting($key, $default = '') {
    $value = get_theme_mod($key, $default);
    return $value !== '' ? $value : $default;
}

function noah_theme_body_classes($classes) {
    $classes[] = 'noah-theme';
    if (function_exists('elementor_theme_do_location')) {
        $classes[] = 'elementor-enabled';
    }
    return $classes;
}
add_filter('body_class', 'noah_theme_body_classes');

function noah_theme_menu_classes($classes, $item, $args) {
    if (isset($args->theme_location) && $args->theme_location === 'primary') {
        $classes[] = 'menu-item';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'noah_theme_menu_classes', 10, 3);

function noah_theme_register_customizer($wp_customize) {
    $wp_customize->add_section('noah_theme_branding', array(
        'title' => __('Noah Theme Settings', 'noah-theme'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('noah_primary_color', array(
        'default' => '#caa16d',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'noah_primary_color', array(
        'label' => __('Accent Color', 'noah-theme'),
        'section' => 'noah_theme_branding',
        'settings' => 'noah_primary_color',
    )));

    $wp_customize->add_setting('noah_bg_color', array(
        'default' => '#f6f1ea',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'noah_bg_color', array(
        'label' => __('Background Color', 'noah-theme'),
        'section' => 'noah_theme_branding',
        'settings' => 'noah_bg_color',
    )));

    $wp_customize->add_setting('noah_text_color', array(
        'default' => '#1b1b1b',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'noah_text_color', array(
        'label' => __('Text Color', 'noah-theme'),
        'section' => 'noah_theme_branding',
        'settings' => 'noah_text_color',
    )));

    $wp_customize->add_setting('noah_contact_phone', array(
        'default' => '+966 55 000 0000',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('noah_contact_phone', array(
        'label' => __('Phone Number', 'noah-theme'),
        'section' => 'noah_theme_branding',
        'type' => 'text',
    ));

    $wp_customize->add_setting('noah_contact_email', array(
        'default' => 'hello@noahjewelry.com',
        'sanitize_callback' => 'sanitize_email',
    ));
    $wp_customize->add_control('noah_contact_email', array(
        'label' => __('Contact Email', 'noah-theme'),
        'section' => 'noah_theme_branding',
        'type' => 'email',
    ));
}
add_action('customize_register', 'noah_theme_register_customizer');

function noah_theme_customizer_css() {
    $primary = noah_theme_get_setting('noah_primary_color', '#caa16d');
    $bg = noah_theme_get_setting('noah_bg_color', '#f6f1ea');
    $text = noah_theme_get_setting('noah_text_color', '#1b1b1b');
    echo '<style type="text/css">
        :root {
            --noah-primary: ' . esc_attr($primary) . ';
            --noah-bg: ' . esc_attr($bg) . ';
            --noah-ink: ' . esc_attr($text) . ';
        }
    </style>';
}
add_action('wp_head', 'noah_theme_customizer_css', 100);

function noah_theme_admin_menu() {
    add_theme_page(
        __('Noah Theme Settings', 'noah-theme'),
        __('Noah Theme Settings', 'noah-theme'),
        'manage_options',
        'noah-theme-settings',
        'noah_theme_settings_page'
    );
}
add_action('admin_menu', 'noah_theme_admin_menu');

function noah_theme_settings_page() {
    if (!current_user_can('manage_options')) {
        return;
    }

    if (isset($_POST['noah_demo_import']) && check_admin_referer('noah_theme_demo_import_nonce', 'noah_theme_demo_import_nonce')) {
        noah_theme_run_demo_import();
    }
    ?>
    <div class="wrap">
        <h1><?php echo esc_html__('Noah Theme Settings', 'noah-theme'); ?></h1>
        <p><?php echo esc_html__('Use the controls below to import the full Noah demo content and design structure for all main storefront pages.', 'noah-theme'); ?></p>

        <form method="post">
            <?php wp_nonce_field('noah_theme_demo_import_nonce', 'noah_theme_demo_import_nonce'); ?>
            <p><button type="submit" name="noah_demo_import" class="button button-primary"><?php echo esc_html__('Run Demo Import', 'noah-theme'); ?></button></p>
        </form>

        <h2><?php echo esc_html__('Theme Controls', 'noah-theme'); ?></h2>
        <p><?php echo esc_html__('Customize the brand colors, contact details, and storefront identity from Appearance > Customize.', 'noah-theme'); ?></p>
    </div>
    <?php
}

function noah_theme_run_demo_import() {
    $pages = array(
        'Home' => 'Home page content matching the Noah luxury storefront aesthetic.',
        'About' => 'Brand story and craftsmanship overview for the Noah identity.',
        'Contact' => 'Contact details and inquiry form for customer support.',
        'Shop' => 'Luxury collections and product discovery layout.',
        'Product Details' => 'Detailed product layout with photos, specs, and call to action.',
        'Cart' => 'Cart overview and final purchase summary.',
        'Checkout' => 'Secure order and shipping form layout.',
        'Account' => 'Customer account dashboard overview.',
        'Wishlist' => 'Saved items and favorites panel.',
        'Login' => 'Member login page styled for the brand.',
        'Sign Up' => 'Create account page for new customers.',
        'Forgot Password' => 'Password recovery page.',
        'Order Confirmation' => 'Post-order confirmation page.',
        'Sell' => 'Sell your valuables and precious items page.',
        'Buy' => 'Buy precious metals and fine jewelry page.',
        'Precious Metals' => 'Curated metals and investment-ready products.',
        'Diamond Store' => 'Diamond product category with refined filters.',
        'Jewellery Store' => 'Jewellery collection and category browsing layout.',
        'Price on Request' => 'Quote-based product inquiry flow.',
        'Reserve Product' => 'Reserve product page for premium items.',
        'Make Offer' => 'Negotiation and offer form page.',
        'Collection' => 'Featured luxury collection landing page.',
        'Gift Guide' => 'Seasonal gifting and occasion recommendations.',
        'Blog' => 'Editorial content and brand stories.',
        'FAQ' => 'Frequently asked questions and guidance.',
        'Shipping & Returns' => 'Customer shipping policy and return information.',
        'Terms & Conditions' => 'Policy and agreement details.',
        'Privacy Policy' => 'Privacy information and data usage.',
        'Search Results' => 'Search landing page for products and content.',
        'Custom Design' => 'Bespoke custom jewelry design inquiry page.',
    );

    $menu_name = 'Primary Menu';
    $menu_exists = wp_get_nav_menu_object($menu_name);
    if (!$menu_exists) {
        $menu_id = wp_create_nav_menu($menu_name);
    } else {
        $menu_id = $menu_exists->term_id;
    }

    $home_page_id = 0;
    foreach ($pages as $page_title => $page_content) {
        $page = get_page_by_title($page_title);
        if (!$page) {
            $page_id = wp_insert_post(array(
                'post_title' => $page_title,
                'post_content' => '<p>' . esc_html($page_content) . '</p>',
                'post_status' => 'publish',
                'post_type' => 'page',
            ));
            if ($page_title === 'Home') {
                $home_page_id = $page_id;
            }

            if (!is_wp_error($page_id)) {
                $menu_item_data = array(
                    'menu-item-title' => $page_title,
                    'menu-item-object-id' => $page_id,
                    'menu-item-object' => 'page',
                    'menu-item-type' => 'post_type',
                    'menu-item-status' => 'publish',
                );
                wp_update_nav_menu_item($menu_id, 0, $menu_item_data);
            }
        }
    }

    if ($home_page_id) {
        update_option('show_on_front', 'page');
        update_option('page_on_front', $home_page_id);
    }

    add_action('admin_notices', function() {
        echo '<div class="notice notice-success is-dismissible"><p>' . esc_html__('Noah demo content import complete.', 'noah-theme') . '</p></div>';
    });
}

function noah_theme_demo_import_notice() {
    if (isset($_GET['page']) && $_GET['page'] === 'noah-theme-settings') {
        echo '<div class="notice notice-info"><p>' . esc_html__('This theme includes a demo import button for one-click page creation and navigation setup.', 'noah-theme') . '</p></div>';
    }
}
add_action('admin_notices', 'noah_theme_demo_import_notice');

function noah_theme_get_demo_pages() {
    return array(
        'Home',
        'About',
        'Contact',
        'Shop',
        'Product Details',
        'Cart',
        'Checkout',
        'Account',
        'Wishlist',
        'Login',
        'Sign Up',
        'Forgot Password',
        'Order Confirmation',
        'Sell',
        'Buy',
        'Precious Metals',
        'Diamond Store',
        'Jewellery Store',
        'Price on Request',
        'Reserve Product',
        'Make Offer',
        'Collection',
        'Gift Guide',
        'Blog',
        'FAQ',
        'Shipping & Returns',
        'Terms & Conditions',
        'Privacy Policy',
        'Search Results',
        'Custom Design'
    );
}
