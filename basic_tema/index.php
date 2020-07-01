<?php get_header(); ?>
    <main>
        <section class="main-content">
           <?php if(have_posts()): ?>
           <?php  while(have_posts()) : the_post();?>
            <div class="blog-post">
                <h2>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h2>
                <div class="meta">
                    Za vas pise <?php the_author(); ?> - <?php the_date(); ?>
                </div>
                <?php if(has_post_thumbnail()) : ?>
                    <div class="featured-image">
                        <?php the_post_thumbnail(); ?>
                    </div>
                <?php endif; ?>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>" class="btn">Read More</a>
            </div>
            <?php endwhile?>
            <?php endif; ?>
        </section>
        
        <aside class="sidebar">
            <?php if(is_active_sidebar('sidebar')) : ?>
                <?php dynamic_sidebar('sidebar'); ?>
            <?php endif; ?>
        </aside>

    </main>
    
<?php get_footer(); ?>