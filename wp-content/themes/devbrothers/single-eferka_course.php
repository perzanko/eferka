<?php get_header(); ?>
<section class="bg bg-white">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<?php the_title( '<h2 class="heading">', '</h2>' ); ?>
			</div>
      <hr>
			<div class="col-xs-12 bg">
        <ul class="course__box__description course__box__description--big clearfix">
          <li class="course__box__description__item"><?php the_field('wiersz_1'); ?></li>
          <li class="course__box__description__item"><?php the_field('wiersz_2'); ?></li>
          <li class="course__box__description__item"><?php the_field('wiersz_3'); ?></li>
          <li class="course__box__description__item"><?php the_field('wiersz_4'); ?></li>
        </ul>
        <hr>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
				the_content();
				endwhile; else: ?>
				<?php endif; ?>
        <hr>
        <div class="course__box__meta course__box__meta--left">
          <span class="price"><?php the_field('course_cena') ?></span>
          <a href="#contact" class="button button">Zapisz się</a>
        </div>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
