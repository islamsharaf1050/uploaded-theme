<?php
get_header();
?>

<main class="single-shell">
    <div class="container">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('noah-entry'); ?>>
                    <header class="entry-header">
                        <h1><?php the_title(); ?></h1>
                    </header>

                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <article class="noah-entry">
                <header class="entry-header">
                    <h1><?php echo esc_html__('Nothing found', 'noah-theme'); ?></h1>
                </header>
                <div class="entry-content">
                    <p><?php echo esc_html__('No content is available yet.', 'noah-theme'); ?></p>
                </div>
            </article>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
