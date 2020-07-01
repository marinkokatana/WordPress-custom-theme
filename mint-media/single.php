<?php get_header()?>
    
    <!-- header blog -->
    <div class="jumbotron blog text-center">
        <h1 class="display-4 text-white animate__animated animate__backInDown">Blog</h1>
    </div>
    
<!-- main -->
    <section class="main container py-5">
        <div class="row">
            <div class="col-md-8">
                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                <article class="blog-post pb-5">
                    <div class="featured-image">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="text">
                        <h3><?php the_title(); ?></h3>
                        <p class="meta">
                            <?php echo get_the_date('F j, Y'); ?> od <a href=""><?php the_author(); ?></a>
                        </p>
                        <?php the_content(); ?>
                    </div>
                </article>
                <?php endwhile; else : ?>
                    <p><?php _e('Nema napisanih blog postova'); ?></p>
                <?php endif; ?>
            </div>
            <div class="col-md-4 sidebar">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </section>
   <?php get_footer()?> 
    
