<?php
/*
Template Name: Wykładowcy
*/
?>

<?php get_header(); ?>

<section class="bg bg-white">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <?php the_title( '<h2 class="heading">', '</h2>' ); ?>
      </div>
      <div class="col-xs-12">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
				the_content();
				endwhile; else: ?>
				<p></p>
				<?php endif; ?>
      </div>
      <div class="col-xs-12">
        <div class="lecturers">
          <div class="lecturers__item">
            <img class="lecturers__item__img" src="<?php echo get_site_URL(); ?>/wp-content/themes/devbrothers/assets/agnieszka-rogala.jpg" alt="">
            <h4 class="lecturers__item__title">Agnieszka Rogala</h4>
            <p class="lecturers__item__description">Absolwentka Akademii Sztuk Pięknych oraz filmowych kursów w Londynie. Freelancerka w dziedzinie video oraz video art. Od kilku lat zbiera doświadczenie w pracy na planach filmowych na stanowisku Script Supervisor.<br />Posiada bogate doświadczenie w tworzeniu teledysków dla polskich oraz zagranicznych twórców.</p>
          </div>
          <div class="lecturers__item">
            <img class="lecturers__item__img" src="<?php echo get_site_URL(); ?>/wp-content/themes/devbrothers/assets/leszek-wejcman.jpg" alt="">
            <h4 class="lecturers__item__title">Leszek Wejcman</h4>
            <p class="lecturers__item__description">Scenarzysta, producent, reżyser, copywriter,  trener, właściciel studia Leon Film. Twórca programu szkoleń komunikacyjnych Lekcja Pisania.<br>Pracował w telewizji jako kierownik zespołu autopromocji. Zajmuje się produkcją filmów reklamowych i marketingowych.<br>W roku 2017 wyreżyserował film fabularnym pt. „Siostry”.   </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
