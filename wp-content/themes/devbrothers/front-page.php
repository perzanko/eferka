<?php get_header('front'); ?>
<section class="bg bg-grey">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h2 class="heading">Dostępne kursy</h2>
      </div>
      <div class="col-xs-12">
        <div class="course">
          <?php
          $args = array( 'post_type' => 'eferka_course', 'posts_per_page' => 4 );
          $loop = new WP_Query( $args );
          while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <div class="course__box">
            <img class="course__box__img" src="
            <?php
            if ( has_post_thumbnail() ) {
            	the_post_thumbnail_url();
            }
            ?>
            " alt="<?php bloginfo('description'); ?>">
            <span class="course__box__title"><?php the_title(); ?></span>
            <ul class="course__box__description clearfix">
              <li class="course__box__description__item"><?php the_field('wiersz_1'); ?></li>
              <li class="course__box__description__item"><?php the_field('wiersz_2'); ?></li>
              <li class="course__box__description__item"><?php the_field('wiersz_3'); ?></li>
              <li class="course__box__description__item"><?php the_field('wiersz_4'); ?></li>
            </ul>
            <div class="course__box__meta">
              <a href="<?php echo get_permalink(); ?>" class="button button--small">Zobacz</a>
              <span class="price"><?php the_field('course_cena'); ?> zł</span>
            </div>
          </div>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="bg bg-white">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-4">
        <div class="icon">
          <div class="icon__img">
            <img src="<?php echo get_site_URL(); ?>/wp-content/themes/devbrothers/assets/lokalizacja.png" alt="<?php bloginfo('description'); ?>">
          </div>
          <h3 class="icon__title">Lokalizacja</h3>
          <p class="icon__description">Ucz się w centrum Warszawy.<br>Wszystkie nasze kursy odbywają się w dogodnych lokalizacjach w centrum stolicy</p>
        </div>
      </div>
      <div class="col-xs-12 col-md-4">
        <div class="icon">
          <div class="icon__img">
            <img src="<?php echo get_site_URL(); ?>/wp-content/themes/devbrothers/assets/kadra.png" alt="<?php bloginfo('description'); ?>">
          </div>
          <h3 class="icon__title">Kadra</h3>
          <p class="icon__description">Ucz się z najlepszymi.<br>Nasze kursy prowadzą najlepsi specjaliści w dziedzinie techniki audiowizualnej i marketingu.</p>
        </div>
      </div>
      <div class="col-xs-12 col-md-4">
        <div class="icon">
          <div class="icon__img">
            <img src="<?php echo get_site_URL(); ?>/wp-content/themes/devbrothers/assets/certyfikat.png" alt="<?php bloginfo('description'); ?>">
          </div>
          <h3 class="icon__title">Certyfikat</h3>
          <p class="icon__description">Otrzymaj certyfikat.<br>Po ukończeniu kursu otrzymasz certyfikat potwierdzający nabyte umiejętności</p>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>
