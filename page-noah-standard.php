<?php
/*
Template Name: Noah Product Template
*/
get_header();
?>
<div class="container entry-content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="page-header">
                <h1><?php the_title(); ?></h1>
            </div>
            <div class="story-block">
                <img src="https://images.unsplash.com/photo-1515562141207-7a88fb7ce338?auto=format&fit=crop&w=1000&q=80" alt="Product preview" />
                <div class="story-copy">
                    <h2>Celeste Halo Ring</h2>
                    <p>Discover a premium jewellery piece crafted with precision, elegance, and luxury detailing perfected for exceptional gifting and statement styling.</p>
                    <div class="metrics">
                        <div><strong>$1,240</strong><span>Price</span></div>
                        <div><strong>18K</strong><span>Gold</span></div>
                        <div><strong>4.9</strong><span>Rating</span></div>
                    </div>
                    <p><a href="#" class="btn btn-primary">Add to cart</a></p>
                </div>
            </div>
            <?php the_content(); ?>
        </article>
    <?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>
