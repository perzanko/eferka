<?php
/*
Template Name: Sesje fotograficzne
*/
?>

<?php get_header(); ?>

<section class="bg bg-white">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h2 class="heading">Profesjonalna sesja fotograficzna</h2>
        Sesja wykonana przez specjalistów z możliwością dodania profilu do fotobiblioteki
      </div>
      <div class="col-xs-12">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
				the_content();
				endwhile; else: ?>
				<p></p>
				<?php endif; ?>
      </div>
      <div class="col-xs-4 box-container">
        <div class="icon" style="padding-top:50px;">
          <div class="icon__img">
            <img src="<?php bloginfo('template_directory'); ?>/assets/photo-1.png" alt="<?php bloginfo('description'); ?>" />
          </div>
          <h3 class="icon__title">
            Sesja zdjęciowa w studio
          </h3>
          Zdjęcia wykonywane przez profesjonalnych fotografów.
            <ul class="course__box__description course__box__description--big course__box__description--center clearfix">
              <li class="course__box__description__item">Sesja fotograficzna</li>
              <li class="course__box__description__item">Retusz i obróbka graficzna</li>
              <li class="course__box__description__item">Przygotowanie zdjęć na nośniku cyfrowym</li>
              <li class="course__box__description__item">Opcjonalnie: dodanie profilu do fotobiblioteki modelek</li>
            </ul>
        </div>
          <!-- Idealny pomysł na prezent! <br>
          <strong>do końca marca 70% taniej!</strong> -->
          <div class="course__box__meta course__box__meta--absolute">
            <hr>
            <span class="price">120 zł</span>
            <a href="#contact" class="button button">Kup teraz</a>
          </div>
        </div>
        <div class="col-xs-4 box-container">
          <div class="icon" style="padding-top:50px;">
            <div class="icon__img">
              <img src="<?php bloginfo('template_directory'); ?>/assets/photo-2.png" alt="<?php bloginfo('description'); ?>" />
            </div>
            <h3 class="icon__title">
              Sesja zdjęciowa w plenerze
            </h3>
            Zdjęcia wykonywane przez profesjonalnych fotografów.
              <ul class="course__box__description course__box__description--big course__box__description--center clearfix">
                <li class="course__box__description__item">Propozycja lokalizacji</li>
                <li class="course__box__description__item">Dobór sprzętu</li>
                <li class="course__box__description__item">Możliwość dodania rekwizytów</li>
                <li class="course__box__description__item">Przygotowanie zdjęć na nośniku cyfrowym</li>
                <li class="course__box__description__item">Opcjonalnie: dodanie profilu do fotobiblioteki modelek</li>
              </ul>
          </div>
            <div class="course__box__meta course__box__meta--absolute">
              <hr>
              <span class="price">od 260 zł</span>
              <a href="#contact" class="button button">Kup teraz</a>
            </div>
          </div>
          <div class="col-xs-4 box-container">
            <div class="icon" style="padding-top:50px;">
              <div class="icon__img">
                <img src="<?php bloginfo('template_directory'); ?>/assets/photo-3.png" alt="<?php bloginfo('description'); ?>" />
              </div>
              <h3 class="icon__title">
                Dokumentacja wydarzeń
              </h3>
              Zdjęcia wykonywane przez profesjonalnych fotografów filmowców.
                <ul class="course__box__description course__box__description--big course__box__description--center clearfix">
                  <li class="course__box__description__item">Przygotowanie materiału - możliwość dokumentacji z ziemi i powietrza</li>
                  <li class="course__box__description__item">Selekcja zdjęć do obróbki graficznej</li>
                  <li class="course__box__description__item">Przygotowanie zdjęć na nośniku cyfrowym</li>
                </ul>
            </div>

              <div class="course__box__meta course__box__meta--absolute">
                <hr>
                <span class="price">od 350 zł</span>
                <a href="#contact" class="button button">Kup teraz</a>
              </div>
            </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
