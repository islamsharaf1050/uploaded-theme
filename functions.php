<?php
function noah_theme_setup() {
    load_theme_textdomain('noah-theme', get_template_directory() . '/languages');

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('custom-background');
    add_theme_support('menus');
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
    add_theme_support('responsive-embeds');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'));
    add_theme_support('wp-block-styles');
    add_theme_support('align-wide');
    add_theme_support('editor-styles');
    add_theme_support('elementor');
    add_theme_support('automatic-feed-links');

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'noah-theme'),
        'footer' => __('Footer Menu', 'noah-theme'),
    ));
}
add_action('after_setup_theme', 'noah_theme_setup');

function noah_theme_enqueue_assets() {
    wp_enqueue_style('noah-theme-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
    wp_enqueue_style('noah-theme-main', get_template_directory_uri() . '/assets/css/theme.css', array(), '3.0.0');
    wp_enqueue_script('noah-theme-script', get_template_directory_uri() . '/assets/js/theme.js', array(), '3.0.0', true);
}
add_action('wp_enqueue_scripts', 'noah_theme_enqueue_assets');

function noah_theme_get_setting($key, $default = '') {
    $value = get_theme_mod($key, $default);
    return $value !== '' ? $value : $default;
}

function noah_theme_demo_page_map() {
    return array(
        'Home' => 'page-noah-home.php',
        'About' => 'page-noah-standard.php',
        'Contact' => 'page-noah-standard.php',
        'Shop' => 'page-noah-shop.php',
        'Product Details' => 'page-noah-product.php',
        'Cart' => 'page-noah-standard.php',
        'Checkout' => 'page-noah-standard.php',
        'Account' => 'page-noah-standard.php',
        'Wishlist' => 'page-noah-standard.php',
        'Login' => 'page-noah-standard.php',
        'Sign Up' => 'page-noah-standard.php',
        'Forgot Password' => 'page-noah-standard.php',
        'Order Confirmation' => 'page-noah-standard.php',
        'Sell' => 'page-noah-standard.php',
        'Buy' => 'page-noah-standard.php',
        'Precious Metals' => 'page-noah-shop.php',
        'Diamond Store' => 'page-noah-shop.php',
        'Jewellery Store' => 'page-noah-shop.php',
        'Price on Request' => 'page-noah-standard.php',
        'Reserve Product' => 'page-noah-product.php',
        'Make Offer' => 'page-noah-standard.php',
        'Collection' => 'page-noah-shop.php',
        'Gift Guide' => 'page-noah-standard.php',
        'Blog' => 'page-noah-standard.php',
        'FAQ' => 'page-noah-standard.php',
        'Shipping & Returns' => 'page-noah-standard.php',
        'Terms & Conditions' => 'page-noah-standard.php',
        'Privacy Policy' => 'page-noah-standard.php',
        'Search Results' => 'page-noah-shop.php',
        'Custom Design' => 'page-noah-standard.php',
    );
}

function noah_theme_screen_page_titles() {
    return array_keys(noah_theme_demo_page_map());
}

function noah_theme_get_template_for_page_title($title) {
    $map = noah_theme_demo_page_map();
    $template = isset($map[$title]) ? $map[$title] : 'page-noah-standard.php';
    return file_exists(get_template_directory() . '/' . $template) ? $template : 'page.php';
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

    $color_fields = array(
        'noah_primary_color' => array('label' => __('Accent Color', 'noah-theme'), 'default' => '#caa16d'),
        'noah_bg_color' => array('label' => __('Background Color', 'noah-theme'), 'default' => '#f6f0ea'),
        'noah_text_color' => array('label' => __('Text Color', 'noah-theme'), 'default' => '#171717'),
        'noah_card_color' => array('label' => __('Card Color', 'noah-theme'), 'default' => '#ffffff'),
    );

    foreach ($color_fields as $setting_key => $config) {
        $wp_customize->add_setting($setting_key, array(
            'default' => $config['default'],
            'sanitize_callback' => 'sanitize_hex_color',
        ));

        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, $setting_key, array(
            'label' => $config['label'],
            'section' => 'noah_theme_branding',
            'settings' => $setting_key,
        )));
    }

    $text_fields = array(
        'noah_contact_phone' => array('label' => __('Phone Number', 'noah-theme'), 'default' => '+966 55 000 0000', 'type' => 'text'),
        'noah_contact_email' => array('label' => __('Contact Email', 'noah-theme'), 'default' => 'hello@noahjewelry.com', 'type' => 'email'),
        'noah_brand_name' => array('label' => __('Brand Name', 'noah-theme'), 'default' => 'NOAH', 'type' => 'text'),
        'noah_announcement_text' => array('label' => __('Announcement Bar Text', 'noah-theme'), 'default' => 'Free shipping over $500', 'type' => 'text'),
        'noah_social_instagram' => array('label' => __('Instagram Link', 'noah-theme'), 'default' => '#', 'type' => 'url'),
        'noah_social_pinterest' => array('label' => __('Pinterest Link', 'noah-theme'), 'default' => '#', 'type' => 'url'),
    );

    foreach ($text_fields as $setting_key => $config) {
        $wp_customize->add_setting($setting_key, array(
            'default' => $config['default'],
            'sanitize_callback' => $config['type'] === 'email' ? 'sanitize_email' : ($config['type'] === 'url' ? 'esc_url_raw' : 'sanitize_text_field'),
        ));

        $wp_customize->add_control($setting_key, array(
            'label' => $config['label'],
            'section' => 'noah_theme_branding',
            'type' => $config['type'],
        ));
    }
}
add_action('customize_register', 'noah_theme_register_customizer');

function noah_theme_customizer_css() {
    $primary = noah_theme_get_setting('noah_primary_color', '#caa16d');
    $bg = noah_theme_get_setting('noah_bg_color', '#f6f0ea');
    $text = noah_theme_get_setting('noah_text_color', '#171717');
    $card = noah_theme_get_setting('noah_card_color', '#ffffff');

    echo '<style type="text/css">';
    echo ':root {';
    echo '--noah-primary:' . esc_attr($primary) . ';';
    echo '--noah-bg:' . esc_attr($bg) . ';';
    echo '--noah-ink:' . esc_attr($text) . ';';
    echo '--noah-panel:' . esc_attr($card) . ';';
    echo '}';
    echo '</style>';
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
        <p><?php echo esc_html__('Import demo storefront pages, brand layout, and homepage structure for the Noah brand.', 'noah-theme'); ?></p>

        <form method="post">
            <?php wp_nonce_field('noah_theme_demo_import_nonce', 'noah_theme_demo_import_nonce'); ?>
            <p>
                <button type="submit" name="noah_demo_import" class="button button-primary">
                    <?php echo esc_html__('Run Demo Import', 'noah-theme'); ?>
                </button>
            </p>
        </form>

        <h2><?php echo esc_html__('Theme Controls', 'noah-theme'); ?></h2>
        <p><?php echo esc_html__('Use Appearance > Customize to update colors, contact details, and storefront identity.', 'noah-theme'); ?></p>
    </div>
    <?php
}

function noah_theme_run_demo_import() {
    $pages = noah_theme_demo_page_map();
    $menu_name = 'Primary Menu';
    $menu = wp_get_nav_menu_object($menu_name);
    if (!$menu) {
        $menu_id = wp_create_nav_menu($menu_name);
    } else {
        $menu_id = $menu->term_id;
    }

    $home_page_id = 0;

    foreach ($pages as $title => $template) {
        $page = get_page_by_title($title);
        $page_payload = array(
            'post_title' => $title,
            'post_status' => 'publish',
            'post_type' => 'page',
            'post_content' => '<p>' . esc_html__('Luxury Noah storefront section.', 'noah-theme') . '</p>',
        );

        if ($page) {
            $page_id = $page->ID;
            $page_payload['ID'] = $page_id;
            wp_update_post($page_payload);
        } else {
            $page_id = wp_insert_post($page_payload);
        }

        if (!is_wp_error($page_id)) {
            update_post_meta($page_id, '_wp_page_template', $template);
            wp_update_nav_menu_item($menu_id, 0, array(
                'menu-item-title' => $title,
                'menu-item-object-id' => $page_id,
                'menu-item-object' => 'page',
                'menu-item-type' => 'post_type',
                'menu-item-status' => 'publish',
            ));
        }

        if ($title === 'Home' && !is_wp_error($page_id)) {
            $home_page_id = $page_id;
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
        echo '<div class="notice notice-info"><p>' . esc_html__('This theme includes a one-click demo import for a luxury storefront setup compatible with Elementor.', 'noah-theme') . '</p></div>';
    }
}
add_action('admin_notices', 'noah_theme_demo_import_notice');

function noah_theme_get_demo_pages() {
    return array_keys(noah_theme_demo_page_map());
}

function noah_theme_get_menu_link($path = '/') {
    return esc_url(home_url($path));
}

function noah_theme_get_contact_phone() {
    return esc_html(noah_theme_get_setting('noah_contact_phone', '+966 55 000 0000'));
}

function noah_theme_get_contact_email() {
    return esc_html(noah_theme_get_setting('noah_contact_email', 'hello@noahjewelry.com'));
}

add_filter('wp_nav_menu_args', function ($args) {
    if (isset($args['theme_location']) && $args['theme_location'] === 'primary') {
        $args['menu_class'] = 'primary-menu';
        $args['container'] = 'nav';
        $args['container_class'] = 'main-nav';
        $args['fallback_cb'] = 'wp_page_menu';
    }
    return $args;
});
