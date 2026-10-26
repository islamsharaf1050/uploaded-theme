<footer class="site-footer">
    <div class="container footer-grid">
        <div class="footer-column">
            <div class="footer-brand">
                <span class="brand-mark">N</span>
                <span><?php bloginfo('name'); ?></span>
            </div>
            <p><?php echo esc_html__('Luxury fine jewelry and bespoke timepieces curated for meaningful living.', 'noah-theme'); ?></p>
        </div>

        <div class="footer-column">
            <h4><?php echo esc_html__('Explore', 'noah-theme'); ?></h4>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'footer',
                'container' => false,
                'menu_class' => '',
                'fallback_cb' => false,
            ));
            ?>
        </div>

        <div class="footer-column">
            <h4><?php echo esc_html__('Customer Care', 'noah-theme'); ?></h4>
            <ul>
                <li><a href="<?php echo esc_url(home_url('/contact')); ?>"><?php echo esc_html__('Contact', 'noah-theme'); ?></a></li>
                <li><a href="<?php echo esc_url(home_url('/shipping-returns')); ?>"><?php echo esc_html__('Shipping & Returns', 'noah-theme'); ?></a></li>
                <li><a href="<?php echo esc_url(home_url('/faq')); ?>"><?php echo esc_html__('FAQ', 'noah-theme'); ?></a></li>
            </ul>
        </div>

        <div class="footer-column">
            <h4><?php echo esc_html__('Connect', 'noah-theme'); ?></h4>
            <ul>
                <li><a href="<?php echo esc_url(get_theme_mod('noah_social_instagram', '#')); ?>"><?php echo esc_html__('Instagram', 'noah-theme'); ?></a></li>
                <li><a href="<?php echo esc_url(get_theme_mod('noah_social_pinterest', '#')); ?>"><?php echo esc_html__('Pinterest', 'noah-theme'); ?></a></li>
                <li><a href="mailto:<?php echo esc_attr(get_theme_mod('noah_contact_email', 'hello@noahjewelry.com')); ?>"><?php echo esc_html(get_theme_mod('noah_contact_email', 'hello@noahjewelry.com')); ?></a></li>
            </ul>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <p><?php echo esc_html__('©', 'noah-theme') . ' ' . esc_html(date_i18n('Y')) . ' ' . esc_html(get_bloginfo('name')); ?></p>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
