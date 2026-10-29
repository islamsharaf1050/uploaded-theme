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

function noah_theme_screen_page_titles() {
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
        'Custom Design',
    );
}

function noah_theme_demo_page_content($page_title = 'Home') {
    $slug = sanitize_title($page_title);
    $title = trim($page_title) !== '' ? $page_title : 'Home';

    $cards = array(
        array('label' => 'Client rating', 'value' => '4.9/5'),
        array('label' => 'Jewels sold', 'value' => '12k+'),
        array('label' => 'Fast dispatch', 'value' => '48h'),
        array('label' => 'Certified', 'value' => '100%'),
    );

    $card_markup = '';
    foreach ($cards as $card) {
        $card_markup .= '<div class="noah-stat"><strong>' . esc_html($card['value']) . '</strong><span>' . esc_html($card['label']) . '</span></div>';
    }

    $common_top = '
    <section class="noah-screen">
        <div class="container noah-screen-wrap">
            <div class="screen-top">
                <span class="eyebrow">Luxury design</span>
                <h1>' . esc_html($title) . '</h1>
            </div>
            <div class="noah-stats">' . $card_markup . '</div>
        </div>
    </section>';

    switch ($slug) {
        case 'about':
            return '
            <section class="noah-screen">
                <div class="container noah-screen-wrap">
                    <div class="screen-top">
                        <span class="eyebrow">Our story</span>
                        <h1>Crafted with quiet confidence.</h1>
                    </div>
                    <div class="noah-story-grid">
                        <div class="noah-story-copy">
                            <p>Noah was created to bring together heirloom-worthy craftsmanship, editorial styling, and modern luxury for life’s most meaningful milestones.</p>
                            <p>Each piece is designed with responsible sourcing, sculpted silhouettes, and meticulous finishing so it feels personal from the first glance to the final unboxing.</p>
                            <ul class="noah-list">
                                <li>Ethically sourced stones and premium metals.</li>
                                <li>Made-to-order consultation and custom design support.</li>
                                <li>Concierge service built around gifting and special occasions.</li>
                            </ul>
                        </div>
                        <div class="noah-media-card noah-media-one"></div>
                    </div>
                    <div class="noah-feature-grid">
                        <article class="noah-feature-card"><strong>20+</strong><span>Years of craftsmanship</span></article>
                        <article class="noah-feature-card"><strong>35K</strong><span>Clients served</span></article>
                        <article class="noah-feature-card"><strong>4.9/5</strong><span>Average review rating</span></article>
                    </div>
                </div>
            </section>';

        case 'contact':
            return '
            <section class="noah-screen">
                <div class="container noah-screen-wrap">
                    <div class="screen-top narrow">
                        <span class="eyebrow">Visit us</span>
                        <h1>Speak with a jewelry concierge.</h1>
                    </div>
                    <div class="noah-contact-grid">
                        <div class="noah-contact-panel">
                            <h3>Contact details</h3>
                            <ul class="noah-list noah-list-compact">
                                <li>hello@noahjewelry.com</li>
                                <li>+966 55 000 0000</li>
                                <li>Al Khobar, Saudi Arabia</li>
                            </ul>
                            <div class="noah-mini-cta">
                                <a href="#" class="primary-button">Book a consultation</a>
                            </div>
                        </div>
                        <form class="noah-form">
                            <div class="field-row"><input type="text" placeholder="Full name" /></div>
                            <div class="field-row"><input type="email" placeholder="Email address" /></div>
                            <div class="field-row"><input type="text" placeholder="Phone number" /></div>
                            <div class="field-row"><textarea rows="5" placeholder="Tell us about your enquiry"></textarea></div>
                            <button type="submit" class="primary-button">Send inquiry</button>
                        </form>
                    </div>
                </div>
            </section>';

        case 'shop':
        case 'diamond-store':
        case 'jewellery-store':
        case 'collection':
        case 'precious-metals':
        case 'gift-guide':
            return '
            <section class="noah-screen">
                <div class="container noah-screen-wrap">
                    <div class="screen-top" style="display:flex; justify-content:space-between; align-items:end; gap:24px; flex-wrap:wrap;">
                        <div>
                            <span class="eyebrow">Collections</span>
                            <h1>' . esc_html($title) . '</h1>
                        </div>
                        <div class="noah-chip-row">
                            <span class="noah-chip">Rings</span>
                            <span class="noah-chip">Necklaces</span>
                            <span class="noah-chip">Bracelets</span>
                        </div>
                    </div>
                    <div class="noah-shop-grid">
                        <article class="noah-product-card">
                            <div class="product-visual product-1"></div>
                            <div class="product-copy">
                                <span class="tag">Diamond</span>
                                <h3>Celeste Halo Ring</h3>
                                <div class="price-row"><strong>$1,240</strong><span>★★★★★</span></div>
                            </div>
                        </article>
                        <article class="noah-product-card">
                            <div class="product-visual product-2"></div>
                            <div class="product-copy">
                                <span class="tag">Gold</span>
                                <h3>Aurora Necklace</h3>
                                <div class="price-row"><strong>$980</strong><span>★★★★★</span></div>
                            </div>
                        </article>
                        <article class="noah-product-card">
                            <div class="product-visual product-3"></div>
                            <div class="product-copy">
                                <span class="tag">Pearl</span>
                                <h3>Luna Bracelet</h3>
                                <div class="price-row"><strong>$860</strong><span>★★★★★</span></div>
                            </div>
                        </article>
                    </div>
                </div>
            </section>';

        case 'product-details':
        case 'reserve-product':
            return '
            <section class="noah-screen">
                <div class="container noah-screen-wrap">
                    <div class="screen-top narrow">
                        <span class="eyebrow">Product detail</span>
                        <h1>Celeste Halo Ring</h1>
                    </div>
                    <div class="noah-product-detail">
                        <div class="noah-gallery-panel"></div>
                        <div class="noah-product-summary">
                            <span class="tag">Signature</span>
                            <h2>Luxury diamond ring for everyday brilliance.</h2>
                            <p>Crafted in 18K gold with a halo setting designed to frame the central stone with exceptional light and depth.</p>
                            <div class="noah-metrics">
                                <div><strong>$1,240</strong><span>Price</span></div>
                                <div><strong>18K</strong><span>Metal</span></div>
                                <div><strong>4.9</strong><span>Rating</span></div>
                            </div>
                            <div class="noah-cta-row">
                                <a class="primary-button" href="#">Add to cart</a>
                                <a class="secondary-button" href="#">Reserve now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>';

        case 'cart':
            return '
            <section class="noah-screen">
                <div class="container noah-screen-wrap">
                    <div class="screen-top narrow">
                        <span class="eyebrow">Shopping bag</span>
                        <h1>Your cart</h1>
                    </div>
                    <div class="noah-cart-layout">
                        <div class="noah-cart-items">
                            <div class="noah-cart-item">
                                <div class="mini-thumb thumb-one"></div>
                                <div>
                                    <h3>Celeste Halo Ring</h3>
                                    <p>18K gold • 1.2 carat</p>
                                </div>
                                <strong>$1,240</strong>
                            </div>
                            <div class="noah-cart-item">
                                <div class="mini-thumb thumb-two"></div>
                                <div>
                                    <h3>Aurora Necklace</h3>
                                    <p>Gold vermeil • 14mm</p>
                                </div>
                                <strong>$980</strong>
                            </div>
                        </div>
                        <aside class="noah-summary-box">
                            <h3>Order summary</h3>
                            <div class="summary-row"><span>Subtotal</span><strong>$2,220</strong></div>
                            <div class="summary-row"><span>Shipping</span><strong>Free</strong></div>
                            <div class="summary-row total"><span>Total</span><strong>$2,220</strong></div>
                            <a href="#" class="primary-button full">Proceed to checkout</a>
                        </aside>
                    </div>
                </div>
            </section>';

        case 'checkout':
            return '
            <section class="noah-screen">
                <div class="container noah-screen-wrap">
                    <div class="screen-top narrow">
                        <span class="eyebrow">Secure checkout</span>
                        <h1>Complete your order</h1>
                    </div>
                    <div class="noah-checkout-layout">
                        <form class="noah-form checkout-form">
                            <div class="field-row"><input type="text" placeholder="First name" /></div>
                            <div class="field-row"><input type="text" placeholder="Last name" /></div>
                            <div class="field-row"><input type="text" placeholder="Address" /></div>
                            <div class="field-row"><input type="text" placeholder="City" /></div>
                            <div class="field-row"><input type="text" placeholder="Card number" /></div>
                            <button type="submit" class="primary-button">Pay securely</button>
                        </form>
                        <aside class="noah-summary-box">
                            <h3>Order summary</h3>
                            <div class="summary-row"><span>Celeste Halo Ring</span><strong>$1,240</strong></div>
                            <div class="summary-row"><span>Aurora Necklace</span><strong>$980</strong></div>
                            <div class="summary-row total"><span>Total</span><strong>$2,220</strong></div>
                        </aside>
                    </div>
                </div>
            </section>';

        case 'account':
        case 'wishlist':
            return '
            <section class="noah-screen">
                <div class="container noah-screen-wrap">
                    <div class="screen-top narrow">
                        <span class="eyebrow">My account</span>
                        <h1>Welcome back, Amina.</h1>
                    </div>
                    <div class="noah-account-grid">
                        <div class="noah-profile-panel">
                            <h3>Profile overview</h3>
                            <ul class="noah-list noah-list-compact">
                                <li>Orders placed: 6</li>
                                <li>Wishlist items: 4</li>
                                <li>Member since 2023</li>
                            </ul>
                        </div>
                        <div class="noah-account-panel">
                            <h3>Recent orders</h3>
                            <div class="order-row"><span>#N-2408</span><strong>Delivered</strong></div>
                            <div class="order-row"><span>#N-2382</span><strong>Processing</strong></div>
                            <div class="order-row"><span>#N-2364</span><strong>Shipped</strong></div>
                        </div>
                    </div>
                </div>
            </section>';

        case 'login':
        case 'sign-up':
        case 'forgot-password':
            return '
            <section class="noah-screen">
                <div class="container noah-screen-wrap narrow-form-wrap">
                    <div class="screen-top narrow center">
                        <span class="eyebrow">Member access</span>
                        <h1>' . esc_html($title) . '</h1>
                    </div>
                    <form class="noah-form auth-form">
                        <div class="field-row"><input type="email" placeholder="Email address" /></div>
                        <div class="field-row"><input type="password" placeholder="Password" /></div>
                        <button type="submit" class="primary-button full">Continue</button>
                    </form>
                </div>
            </section>';

        case 'order-confirmation':
            return '
            <section class="noah-screen">
                <div class="container noah-screen-wrap narrow-form-wrap">
                    <div class="screen-top narrow center">
                        <span class="eyebrow">Order placed</span>
                        <h1>Thank you for your purchase.</h1>
                    </div>
                    <div class="noah-confirm-box">
                        <p>Order #NOAH-2408 has been confirmed and a receipt has been sent to your email.</p>
                        <div class="noah-metrics compact-metrics">
                            <div><strong>2 days</strong><span>Dispatch</span></div>
                            <div><strong>Free</strong><span>Shipping</span></div>
                            <div><strong>4.9</strong><span>Care rating</span></div>
                        </div>
                        <a class="primary-button" href="#">Track order</a>
                    </div>
                </div>
            </section>';

        case 'sell':
        case 'buy':
        case 'price-on-request':
        case 'make-offer':
            return '
            <section class="noah-screen">
                <div class="container noah-screen-wrap">
                    <div class="screen-top narrow">
                        <span class="eyebrow">Bespoke service</span>
                        <h1>' . esc_html($title) . '</h1>
                    </div>
                    <div class="noah-two-col-card">
                        <div>
                            <h3>Request a quote</h3>
                            <p>Tell us about your piece, your desired timeline, and the level of support you’re looking for from the Noah concierge team.</p>
                        </div>
                        <form class="noah-form">
                            <div class="field-row"><input type="text" placeholder="Item type" /></div>
                            <div class="field-row"><input type="text" placeholder="Budget or target price" /></div>
                            <div class="field-row"><textarea rows="5" placeholder="Additional details"></textarea></div>
                            <button type="submit" class="primary-button">Submit request</button>
                        </form>
                    </div>
                </div>
            </section>';

        case 'blog':
            return '
            <section class="noah-screen">
                <div class="container noah-screen-wrap">
                    <div class="screen-top narrow">
                        <span class="eyebrow">Journal</span>
                        <h1>Style notes and design stories.</h1>
                    </div>
                    <div class="noah-news-grid">
                        <article class="noah-news-card news-one"><div class="news-copy"><span>Gifting</span><h3>How to choose a memorable heirloom gift.</h3></div></article>
                        <article class="noah-news-card news-two"><div class="news-copy"><span>Craft</span><h3>Inside the finishing workshop.</h3></div></article>
                        <article class="noah-news-card news-three"><div class="news-copy"><span>Style</span><h3>Three layers of modern luxury styling.</h3></div></article>
                    </div>
                </div>
            </section>';

        case 'faq':
            return '
            <section class="noah-screen">
                <div class="container noah-screen-wrap">
                    <div class="screen-top narrow">
                        <span class="eyebrow">Support</span>
                        <h1>Frequently asked questions.</h1>
                    </div>
                    <div class="noah-faq-list">
                        <div class="noah-faq-item"><strong>How long does shipping take?</strong><p>Most orders are dispatched in 48 hours and delivered within 5–7 business days.</p></div>
                        <div class="noah-faq-item"><strong>Do you offer custom pieces?</strong><p>Yes, our design team creates bespoke commissions for rings, bracelets, and signature gifting sets.</p></div>
                        <div class="noah-faq-item"><strong>Can I reserve a product?</strong><p>Absolutely. Select the reserve option on the product page and our team will confirm availability.</p></div>
                    </div>
                </div>
            </section>';

        case 'shipping-returns':
        case 'terms-conditions':
        case 'privacy-policy':
            return '
            <section class="noah-screen">
                <div class="container noah-screen-wrap">
                    <div class="screen-top narrow">
                        <span class="eyebrow">Policy</span>
                        <h1>' . esc_html($title) . '</h1>
                    </div>
                    <div class="noah-policy-box">
                        <p>We protect your purchase experience with transparent communication, secure fulfillment, and customer-first support.</p>
                        <p>Orders are handled with care, insured packaging, and clear return guidance for peace of mind.</p>
                        <p>For full terms, contact support and our team will walk you through any policy questions in detail.</p>
                    </div>
                </div>
            </section>';

        case 'search-results':
            return '
            <section class="noah-screen">
                <div class="container noah-screen-wrap">
                    <div class="screen-top narrow">
                        <span class="eyebrow">Search</span>
                        <h1>Search results for “engagement rings”</h1>
                    </div>
                    <div class="noah-shop-grid compact-search-grid">
                        <article class="noah-product-card">
                            <div class="product-visual product-1"></div>
                            <div class="product-copy"><span class="tag">Rings</span><h3>Solstice Ring</h3><div class="price-row"><strong>$1,320</strong><span>★★★★★</span></div></div>
                        </article>
                        <article class="noah-product-card">
                            <div class="product-visual product-2"></div>
                            <div class="product-copy"><span class="tag">Rings</span><h3>Marina Halo</h3><div class="price-row"><strong>$1,160</strong><span>★★★★★</span></div></div>
                        </article>
                        <article class="noah-product-card">
                            <div class="product-visual product-3"></div>
                            <div class="product-copy"><span class="tag">Rings</span><h3>Velvet Band</h3><div class="price-row"><strong>$940</strong><span>★★★★★</span></div></div>
                        </article>
                    </div>
                </div>
            </section>';

        case 'custom-design':
            return '
            <section class="noah-screen">
                <div class="container noah-screen-wrap">
                    <div class="screen-top narrow">
                        <span class="eyebrow">Custom design</span>
                        <h1>Design your next heirloom.</h1>
                    </div>
                    <div class="noah-two-col-card">
                        <div>
                            <h3>Tell us the story</h3>
                            <p>Share the occasion, your inspiration, metal preference, and the mood you want the final piece to carry.</p>
                        </div>
                        <form class="noah-form">
                            <div class="field-row"><input type="text" placeholder="Design concept" /></div>
                            <div class="field-row"><input type="text" placeholder="Budget range" /></div>
                            <div class="field-row"><textarea rows="5" placeholder="Share details about your custom request"></textarea></div>
                            <button type="submit" class="primary-button">Submit concept</button>
                        </form>
                    </div>
                </div>
            </section>';

        default:
            return $common_top . '
            <section class="noah-screen">
                <div class="container noah-screen-wrap">
                    <div class="noah-simple-panel">
                        <p>This storefront section is ready to be expanded with custom content for the ' . esc_html($title) . ' screen.</p>
                    </div>
                </div>
            </section>';
    }
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
    $pages = array(
        'Home' => 'Luxury jewelry home page with hero, collection categories, best sellers and brand story.',
        'About' => 'Brand story and craftsmanship overview for the Noah identity.',
        'Contact' => 'Contact and inquiry information for customer support.',
        'Shop' => 'Luxury shopping and filtering layout for fine jewelry collections.',
        'Product Details' => 'Detailed product layout with images, pricing and purchase actions.',
        'Cart' => 'Cart overview and order summary for premium purchases.',
        'Checkout' => 'Secure checkout and shipping form layout.',
        'Account' => 'Customer account overview page for profile and order management.',
        'Wishlist' => 'Saved favorites and personal wish list layout.',
        'Login' => 'Custom login view for customer access.',
        'Sign Up' => 'Register new customer accounts.',
        'Forgot Password' => 'Password recovery page for returning customers.',
        'Order Confirmation' => 'Success page shown after a purchase is completed.',
        'Sell' => 'Sell precious metals and valuables page.',
        'Buy' => 'Buy jewelry and precious metals from Noah.',
        'Precious Metals' => 'Curated metals and investment-ready products.',
        'Diamond Store' => 'Diamond collection and filtered landing page.',
        'Jewellery Store' => 'Jewellery category browsing layout.',
        'Price on Request' => 'Quote and inquiry flow for premium product requests.',
        'Reserve Product' => 'Reserve premium product page.',
        'Make Offer' => 'Offer form for negotiation-based product inquiries.',
        'Collection' => 'Featured luxury collection landing page.',
        'Gift Guide' => 'Seasonal gift ideas and curated occasions.',
        'Blog' => 'Journal and editorial storytelling page.',
        'FAQ' => 'Frequently asked questions and support guidance.',
        'Shipping & Returns' => 'Shipping and return policy details.',
        'Terms & Conditions' => 'Legal and service policies.',
        'Privacy Policy' => 'Privacy information and data usage.',
        'Search Results' => 'Search results landing page for storefront discovery.',
        'Custom Design' => 'Bespoke design request and consultation page.',
    );

    $menu_name = 'Primary Menu';
    $menu = wp_get_nav_menu_object($menu_name);
    if (!$menu) {
        $menu_id = wp_create_nav_menu($menu_name);
    } else {
        $menu_id = $menu->term_id;
    }

    $home_page_id = 0;

    foreach ($pages as $title => $content) {
        $page = get_page_by_title($title);
        if (!$page) {
            $page_id = wp_insert_post(array(
                'post_title' => $title,
                'post_content' => noah_theme_demo_page_content($title),
                'post_status' => 'publish',
                'post_type' => 'page',
            ));

            if (!is_wp_error($page_id) && $title === 'Home') {
                $home_page_id = $page_id;
            }

            if (!is_wp_error($page_id)) {
                wp_update_nav_menu_item($menu_id, 0, array(
                    'menu-item-title' => $title,
                    'menu-item-object-id' => $page_id,
                    'menu-item-object' => 'page',
                    'menu-item-type' => 'post_type',
                    'menu-item-status' => 'publish',
                ));
            }
        } else {
            wp_update_post(array(
                'ID' => $page->ID,
                'post_content' => noah_theme_demo_page_content($title),
            ));

            if ($title === 'Home') {
                $home_page_id = $page->ID;
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
        echo '<div class="notice notice-info"><p>' . esc_html__('This theme includes a one-click demo import for a luxury storefront setup compatible with Elementor.', 'noah-theme') . '</p></div>';
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
        'Custom Design',
    );
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

