<?php get_header(); ?>
  <header></header>
   <!-- uvod -->
    <section class="container uvod text-center text-white animate__animated animate__backInUp">
        <h2 class="display-4"><?php the_field('uvod'); ?></h2>
        <p class="lead"><?php the_field('opis'); ?></p>
    </section>
    
    <!-- usluge -->
    <section class="usluge container py-5">
        <h2 class="display-4 text-center headings"><?php the_field('usluge_naslov'); ?></h2>
        <div class="row">
            <div class="col-md-4 animate__animated animate__pulse animate__delay-2s">
                <div class="card">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/mint-socijalne-mreze.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><?php the_field('usluge1'); ?></h5>
                    <p class="card-text"><?php the_field('usluge1_opis'); ?></p>
                    <a href="<?php the_field('usluge1_link'); ?>" class="btn">Pročitaj više</a>
                  </div>
                </div>
            </div>
            <div class="col-md-4 animate__animated animate__pulse animate__delay-3s">
                <div class="card">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/mint_seo.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><?php the_field('usluge2'); ?></h5>
                    <p class="card-text"><?php the_field('usluge2_opis'); ?></p>
                    <a href="<?php the_field('usluge2_link'); ?>" class="btn">Pročitaj više</a>
                  </div>
                </div>
            </div>
            <div class="col-md-4 animate__animated animate__pulse animate__delay-4s">
                <div class="card">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/mint-google-oglasi.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><?php the_field('usluge3'); ?></h5>
                    <p class="card-text"><?php the_field('usluge3_opis'); ?></p>
                    <a href="<?php the_field('usluge3_link'); ?>" class="btn">Pročitaj više</a>
                  </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?> 
