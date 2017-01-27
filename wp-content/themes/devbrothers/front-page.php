<?php get_header('front'); ?>
<section class="bg bg-grey">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h2 class="heading">Dostępne kursy</h2>
      </div>
      <div class="col-xs-12">
        <div class="course">
          <div class="course__box">
            <img class="course__box__img" src="<?php echo get_site_URL(); ?>/wp-content/themes/devbrothers/assets/youtube-course.jpg" alt="<?php bloginfo('description'); ?>">
            <span class="course__box__title">Pierwszy milion na Youtubie</span>
            <ul class="course__box__description clearfix">
              <li class="course__box__description__item">Pomysł - jak zbudować projekt</li>
              <li class="course__box__description__item">Inspiracje - jak się pozycjonować</li>
              <li class="course__box__description__item">Technika - jak zrealizować materiał</li>
              <li class="course__box__description__item">Emisja - jak zwiększyć zasięg odbiorców</li>
            </ul>
            <div class="course__box__meta">
              <a href="#" class="button button--small">Zobacz</a>
              <span class="price">349 zł</span>
            </div>
          </div>

          <div class="course__box">
            <img class="course__box__img" src="<?php echo get_site_URL(); ?>/wp-content/themes/devbrothers/assets/lustrzanka-course.jpg" alt="<?php bloginfo('description'); ?>">
            <span class="course__box__title">Filmowanie lustrzanką dla początkujących</span>
            <ul class="course__box__description clearfix">
              <li class="course__box__description__item">Podstawy techniczne</li>
              <li class="course__box__description__item">Storyboard</li>
              <li class="course__box__description__item">Klip, teledysk, komercyjne formy audiowizualne</li>
              <li class="course__box__description__item">Montaż</li>
            </ul>
            <div class="course__box__meta">
              <a href="#" class="button button--small">Zobacz</a>
              <span class="price">499 zł</span>
            </div>
          </div>

          <div class="course__box">
            <img class="course__box__img" src="<?php echo get_site_URL(); ?>/wp-content/themes/devbrothers/assets/firma-course.jpg" alt="<?php bloginfo('description'); ?>">
            <span class="course__box__title">Promocja firmy w internecie</span>
            <ul class="course__box__description clearfix">
              <li class="course__box__description__item">Najważniejsze technologie i narzędzia</li>
              <li class="course__box__description__item">Sprawdzone praktyki i rozwiązania</li>
              <li class="course__box__description__item">Najpopularniejsze praktyki i serwisy internetowe</li>
              <li class="course__box__description__item">Najlepsze rozwiązania do praktycznego zastosowania</li>
            </ul>
            <div class="course__box__meta">
              <a href="#" class="button button--small">Zobacz</a>
              <span class="price">399 zł</span>
            </div>
          </div>

          <div class="course__box">
            <img class="course__box__img" src="<?php echo get_site_URL(); ?>/wp-content/themes/devbrothers/assets/fotograf-course.jpg" alt="<?php bloginfo('description'); ?>">
            <span class="course__box__title">Profesjonalna sesja fotograficzna</span>
            <ul class="course__box__description clearfix">
              <li class="course__box__description__item">Sesja fotograficzna</li>
              <li class="course__box__description__item">Retusz i obróbka graficzna</li>
              <li class="course__box__description__item">Przygotowanie zdjęć na nośniku cyfrowym</li>
              <li class="course__box__description__item">Opcjonalnie: dodanie profilu do fotobiblioteki modelek</li>
            </ul>
            <div class="course__box__meta">
              <a href="#" class="button button--small">Zobacz</a>
              <span class="price">159 zł</span>
            </div>
          </div>

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
