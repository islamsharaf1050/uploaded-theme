<?php
get_header();

$title = get_the_title();
if (in_array($title, noah_theme_screen_page_titles(), true)) {
    echo noah_theme_demo_page_content($title);
} else {
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
    <?php
}

get_footer();
