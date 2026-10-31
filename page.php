<?php
get_header();

global $post;
if (is_page() && $post && in_array($post->post_title, noah_theme_screen_page_titles(), true)) {
    $template = noah_theme_get_template_for_page_title($post->post_title);
    $template_path = get_template_directory() . '/' . $template;

    if (file_exists($template_path)) {
        include $template_path;
        get_footer();
        return;
    }
}
?>
<main class="page-shell">
    <div class="container">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('noah-entry'); ?>>
                    <header class="entry-header">
                        <h1 class="page-title"><?php the_title(); ?></h1>
                    </header>
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <article class="noah-entry">
                <header class="entry-header">
                    <h1 class="page-title"><?php echo esc_html__('Nothing found', 'noah-theme'); ?></h1>
                </header>
                <div class="entry-content">
                    <p><?php echo esc_html__('It looks like nothing was found here. Please use the site navigation to continue exploring the Noah storefront.', 'noah-theme'); ?></p>
                </div>
            </article>
        <?php endif; ?>
    </div>
</main>
<?php get_footer(); ?>
