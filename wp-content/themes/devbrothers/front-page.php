<?php get_header('front'); ?>
<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <div class="header-heading">
        <h1 class="heading-h1 heading-h1--white"><?php the_field('header_title'); ?></h1>
        <p class="header-heading__description"><?php the_field('header_subtitle'); ?></p>
        <a href="<?php echo get_site_URL(); ?>/kursy" class="button button--big button--white">Kursy</a>
        <a href="<?php echo get_site_URL(); ?>/kontakt" class="button button--big">Kontakt</a>
      </div>
    </div>
  </div>

</div>
</header>
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
<section class="bg bg-white">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-4">
        <div class="icon">
          <div class="icon__img">
            <?php
            $image1 = get_field('icon_img1', 4);
            if( !empty($image1) ): ?>
            <img src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>" />
            <?php endif; ?>
          </div>
          <h3 class="icon__title">
            <?php the_field('icon_title1', 4); ?>
          </h3>
          <p class="icon__description">
            <?php the_field('icon_description1', 4); ?>
          </p>
        </div>
        </div>
        <div class="col-xs-12 col-md-4">
        <div class="icon">
          <div class="icon__img">
            <?php
            $image2 = get_field('icon_img2', 4);
            if( !empty($image2) ): ?>
            <img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" />
            <?php endif; ?>
          </div>
          <h3 class="icon__title">
            <?php the_field('icon_title2', 4); ?>
          </h3>
          <p class="icon__description">
            <?php the_field('icon_description2', 4); ?>
          </p>
        </div>
        </div>
        <div class="col-xs-12 col-md-4">
        <div class="icon">
          <div class="icon__img">
            <?php
            $image3 = get_field('icon_img3', 4);
            if( !empty($image3) ): ?>
            <img src="<?php echo $image3['url']; ?>" alt="<?php echo $image3['alt']; ?>" />
            <?php endif; ?>
          </div>
          <h3 class="icon__title">
            <?php the_field('icon_title3', 4); ?>
          </h3>
          <p class="icon__description">
            <?php the_field('icon_description3', 4); ?>
          </p>
        </div>
        </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>
