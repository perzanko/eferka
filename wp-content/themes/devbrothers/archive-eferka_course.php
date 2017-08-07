<?php get_header('archive'); ?>
<section class="bg bg-grey">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h2 class="heading">Wszystkie kursy</h2>
      </div>
      <div class="col-xs-12">
        <div class="course">
          <?php
          $args = array( 'post_type' => 'eferka_course', 'posts_per_page' => 100 );
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
            <div class="course__box__meta course__box__meta--absolute">
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
<div class="gradient"></div>
<?php get_footer(); ?>
