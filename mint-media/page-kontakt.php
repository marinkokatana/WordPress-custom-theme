<?php
    /*
    *Template Name: Kontakt page template
    */

?>
<?php get_header(); ?>
    <!-- header blog -->
    <div class="jumbotron kontakt text-center">
        <h1 class="display-4 text-white animate__animated animate__backInDown">Kontaktirajte nas</h1>
    </div>
    <!-- kontakt -->
    <section class="forma container py-5 text-white">
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; else : ?>
            <p><?php _e('Nema trazene stranice'); ?></p>
        <?php endif;?>
    </section>
<?php get_footer(); ?> 
