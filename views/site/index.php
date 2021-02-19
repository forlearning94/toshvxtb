<?php
    use yii\helpers\Url;
    use yii\widgets\LinkPager;
?>

<div class="main-content">
    <div class="container">
      <section class="main-top">
        <div class="main-top__banner">
          <div class="row">
            <div class="banner-left col-lg-6">
              <img src="<?= Yii::getAlias('@web') . '/vxtb/images/1.jpg'?>" alt="">
            </div>
            <div class="banner-right col-lg-6">
              <!-- <img src="" alt=""> -->
              <div class="banner__title">“Prezident archasi” bayram tadbiri tasvirga olindi</div>
              <div class="banner__text">
                29-dekabr kuni “Tomosha” bolalar teatr-studiyasi tomonidan tayyorlangan “Ertaklar karnavali”
                 bayram dasturi Oʻzbekiston milliy teleradiokompaniyasi tomonidan “Tomosha” bolalar
              </div>
              <div class="banner__link">
                <a href="#">Davomini o`qish</a>
              </div>
            </div>
          </div>
        </div>
        <div class="main-top__slider">
          <div class="slider-list owl-carousel owl-theme">
            <div class="slider-item">
              <a href="#">
                <img src="<?= Yii::getAlias('@web') . '/vxtb/images/2.jpg'?>" alt="">
                <div class="slider-info">
                  <div class="slider-text">Pedagog-xodimlarni Direktor jamgʻarmasi orqali moddiy ...</div>
                  <div class="slider-date">11 31 December 2021</div>
                </div>
              </a>
            </div>
            <div class="slider-item">
              <a href="#">
                <img src="<?= Yii::getAlias('@web') . '/vxtb/images/2.jpg'?>" alt="">
                <div class="slider-info">
                  <div class="slider-text">Pedagog-xodimlarni Direktor jamgʻarmasi orqali moddiy ...</div>
                  <div class="slider-date">22 31 December 2021</div>
                </div>
              </a>
            </div>
            <div class="slider-item">
              <a href="#">
                <img src="<?= Yii::getAlias('@web') . '/vxtb/images/2.jpg'?>" alt="">
                <div class="slider-info">
                  <div class="slider-text">Pedagog-xodimlarni Direktor jamgʻarmasi orqali moddiy ...</div>
                  <div class="slider-date">33 31 December 2021</div>
                </div>
              </a>
            </div>
            <div class="slider-item">
              <a href="#">
                <img src="<?= Yii::getAlias('@web') . '/vxtb/images/2.jpg'?>" alt="">
                <div class="slider-info">
                  <div class="slider-text">Pedagog-xodimlarni Direktor jamgʻarmasi orqali moddiy ...</div>
                  <div class="slider-date">44 31 December 2021</div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="features">
        <div class="features-box row">
          <div class="features__item col-lg-4 col-md-6">
            <div class="features__img">
              <img src="<?= Yii::getAlias('@web') . '/vxtb/images/features1.png'?>" alt="">
            </div>
            <div class="features__info">
              <div class="features__title"></div>
              <div class="features__text">Beshta sanoatni rivojlantirish tashabbusi</div>
            </div>
          </div>
          <div class="features__item col-lg-4 col-md-6">
            <div class="features__img">
              <img src="<?= Yii::getAlias('@web') . '/vxtb/images/features2.jpg'?>" alt="">
            </div>
            <div class="features__info">
              <div class="features__title">SAN'AT</div>
              <div class="features__text">Yoshlarga musiqa, san'at, adabiyot, teatr va boshqa san'at turlariga qiziqish ortib bormoqda</div>
            </div>
          </div>
          <div class="features__item col-lg-4 col-md-6">
            <div class="features__img">
              <img src="<?= Yii::getAlias('@web') . '/vxtb/images/features3.jpg'?>" alt="">
            </div>
            <div class="features__info">
              <div class="features__title">SPORT</div>
              <div class="features__text">Yoshlarni sportga jalb qilish, buning uchun zarur sharoitlarni yaratish</div>
            </div>
          </div>
          <div class="features__item col-lg-4 col-md-6">
            <div class="features__img">
              <img src="<?= Yii::getAlias('@web') . '/vxtb/images/features4.jpg'?>" alt="">
            </div>
            <div class="features__info">
              <div class="features__title">TEXNOLOGIYA</div>
              <div class="features__text">Aholi va yoshlar tomonidan kompyuter texnologiyalari va Internetdan samarali foydalanishni tashkil etish</div>
            </div>
          </div>
          <div class="features__item col-lg-4 col-md-6">
            <div class="features__img">
              <img src="<?= Yii::getAlias('@web') . '/vxtb/images/features5.jpg'?>" alt="">
            </div>
            <div class="features__info">
              <div class="features__title">O'QISH</div>
              <div class="features__text">Yoshlarning ma'naviyatini yuksaltirish, o'qishning keng tarqalishi</div>
            </div>
          </div>
          <div class="features__item col-lg-4 col-md-6">
            <div class="features__img">
              <img src="<?= Yii::getAlias('@web') . '/vxtb/images/features6.png'?>" alt="">
            </div>
            <div class="features__info">
              <div class="features__title">AYOLLAR BANDLIGI</div>
              <div class="features__text">Ayollar uchun ishga joylashish</div>
            </div>
          </div>
        </div>
      </section>
      <section class="overlay">
        <div class="row">
          <div class="overlay__title col-12">
            ASOSIY KO'RSATKICHLAR
          </div>
        </div>
        <div class="row overlay__blocks">
          <div class="overlay__item col-lg-3 col-md-6 col-12">
            <div class="overlay__img">
              <img src="<?= Yii::getAlias('@web') . '/vxtb/images/users.svg'?>" alt="">
            </div>
            <div class="overlay__number odometr">9,942</div>
            <div class="overlay__subtitle">MAKTAB</div>
          </div>
          <div class="overlay__item col-lg-3 col-md-6 col-12">
            <div class="overlay__img">
              <img src="<?= Yii::getAlias('@web') . '/vxtb/images/smile.svg'?>" alt="">
            </div>
            <div class="overlay__number">6,119,440</div>
            <div class="overlay__subtitle">O`QUVCHI</div>
          </div>
          <div class="overlay__item col-lg-3 col-md-6 col-12">
            <div class="overlay__img">
              <img src="<?= Yii::getAlias('@web') . '/vxtb/images/study.svg' ?>" alt="">
            </div>
            <div class="overlay__number">481,604</div>
            <div class="overlay__subtitle">O`QITUVCHI</div>
          </div>
          <div class="overlay__item col-lg-3 col-md-6 col-12">
            <div class="overlay__img">
              <img src="<?= Yii::getAlias('@web') . '/vxtb/images/notebook.svg'?>" alt="">
            </div>
            <div class="overlay__number">7</div>
            <div class="overlay__subtitle">TILDA TA'LIM OLIB BORILADI</div>
          </div>
        </div>
      </section>
      <section class="projects">
        <div class="row">
          <div class="col-12 projects__title">LOYIHALARIMIZ</div>
        </div>
        <div class="row projects__blocks">
          <div class="col-lg-3 col-md-4 col-12">
            <div class="projects__item">
              <a href="" class="projects__icon">
                <img src="<?= Yii::getAlias('@web') . '/vxtb/images/project/female.svg'?>" alt="">
              </a>
              <div class="projects__subtitle">OTA-ONALARGA</div>
              <div class="projects__link">
                <a href="#">Davomini o`qish</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-12">
            <div class="projects__item">
              <a href="" class="projects__icon">
                <img src="<?= Yii::getAlias('@web') . '/vxtb/images/project/search.svg'?>" alt="">
              </a>
              <div class="projects__subtitle">BO'SH ISH O'RINLAR</div>
              <div class="projects__link">
                <a href="#">Davomini o`qish</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-12">
            <div class="projects__item">
              <a href="" class="projects__icon">
                <img src="<?= Yii::getAlias('@web') . '/vxtb/images/project/monitor.svg'?>" alt="">
              </a>
              <div class="projects__subtitle">BIR MILLION O'ZBEK DASTURCHILARI</div>
              <div class="projects__link">
                <a href="#">Davomini o`qish</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-12">
            <div class="projects__item">
              <a href="" class="projects__icon">
                <img src="<?= Yii::getAlias('@web') . '/vxtb/images/project/notebook.svg'?>" alt="">
              </a>
              <div class="projects__subtitle">ELEKTRON KUTUBXONA</div>
              <div class="projects__link">
                <a href="#">Davomini o`qish</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-12">
            <div class="projects__item">
              <a href="" class="projects__icon">
                <img src="<?= Yii::getAlias('@web') . '/vxtb/images/project/glasses.svg'?>" alt="">
              </a>
              <div class="projects__subtitle">PEDAGOGLAR</div>
              <div class="projects__link">
                <a href="#">Davomini o`qish</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-12">
            <div class="projects__item">
              <a href="" class="projects__icon">
                <img src="<?= Yii::getAlias('@web') . '/vxtb/images/project/users.svg'?>" alt="">
              </a>
              <div class="projects__subtitle">O`QUVCHI</div>
              <div class="projects__link">
                <a href="#">Davomini o`qish</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-12">
            <div class="projects__item">
              <a href="" class="projects__icon">
                <img src="<?= Yii::getAlias('@web') . '/vxtb/images/project/speaker.svg'?>" alt="">
              </a>
              <div class="projects__subtitle">USTOZ OVOZI</div>
              <div class="projects__link">
                <a href="#">Davomini o`qish</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-12">
            <div class="projects__item">
              <a href="" class="projects__icon">
                <img src="<?= Yii::getAlias('@web') . '/vxtb/images/project/monitor1.svg'?>" alt="">
              </a>
              <div class="projects__subtitle">YAGONA DARCHA</div>
              <div class="projects__link">
                <a href="#">Davomini o`qish</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="news">
        <div class="row">
          <div class="col-12 news__title">
            Yangiliklar
          </div>
        </div>
        <div class="row news__blocks">
          <div class="news__slider owl-carousel owl-theme">
            <div class="slider-item">
              <div class="news__img">
                <img src="<?= Yii::getAlias('@web') . '/vxtb/images/news.jpg'?>" alt="">
              </div>
              <div class="news__subtitle">Prezident maktabi</div>
              <div class="news__link">
                <a href="#">
                  Davomini o`qish
                </a>
              </div>
            </div>
            <div class="slider-item">
              <div class="news__img">
                <img src="<?= Yii::getAlias('@web') . '/vxtb/images/news.jpg'?>" alt="">
              </div>
              <div class="news__subtitle">Prezident maktabi</div>
              <div class="news__link">
                <a href="#">
                  Davomini o`qish
                </a>
              </div>
            </div>
            <div class="slider-item">
              <div class="news__img">
                <img src="<?= Yii::getAlias('@web') . '/vxtb/images/news.jpg'?>" alt="">
              </div>
              <div class="news__subtitle">Prezident maktabi</div>
              <div class="news__link">
                <a href="#">
                  Davomini o`qish
                </a>
              </div>
            </div>
            <div class="slider-item">
              <div class="news__img">
                <img src="<?= Yii::getAlias('@web') . '/vxtb/images/news.jpg'?>" alt="">
              </div>
              <div class="news__subtitle">Prezident maktabi</div>
              <div class="news__link">
                <a href="#">
                  Davomini o`qish
                </a>
              </div>
            </div>
            <div class="slider-item">
              <div class="news__img">
                <img src="<?= Yii::getAlias('@web') . '/vxtb/images/news.jpg'?>" alt="">
              </div>
              <div class="news__subtitle">Prezident maktabi</div>
              <div class="news__link">
                <a href="#">
                  Davomini o`qish
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="statistic">
        <div class="row">
          <div class="col-12 statistic__title">MUROJAATLAR STATISTIKASI</div>
        </div>
        <div class="row statistic__blocks">
          <div class="col-lg-3 col-md-6 col-12 statistic__item">
            <div class="statistic__num">2284</div>
            <div class="statistic__text">XTV da fuqarolarning umumiy murojaatlari</div>
          </div>
          <div class="col-lg-3 col-md-6 col-12 statistic__item">
            <div class="statistic__num">2284</div>
            <div class="statistic__text">XTV da fuqarolarning umumiy murojaatlari</div>
          </div>
          <div class="col-lg-3 col-md-6 col-12 statistic__item">
            <div class="statistic__num">2284</div>
            <div class="statistic__text">XTV da fuqarolarning umumiy murojaatlari</div>
          </div>
          <div class="col-lg-3 col-md-6 col-12 statistic__item">
            <div class="statistic__num">2284</div>
            <div class="statistic__text">XTV da fuqarolarning umumiy murojaatlari</div>
          </div>
        </div>
      </section> 
      <section class="country-sites">
        <div class="row">
          <div class="col-12 country-sites__title">HUKUMAT SAYTLARI</div>
        </div>
        <div class="row country-sites__block">
          <div class="country-sites__item col-lg-4 col-12">
            <a href="#" class="item__blocks">
              <div class="item__img">
                <img src="<?= Yii::getAlias('@web') . '/vxtb/images/counrty.png'?>" alt="" class="img-thumbnail img-circle pull-left">
              </div>
              <div class="item__text">O'zbekiston Respublikasi Prezidentining rasmiy veb-sayti</div>
            </a>
            <a href="#" class="item__blocks">
              <div class="item__img">
                <img src="<?= Yii::getAlias('@web') . '/vxtb/images/counrty.png'?>" alt="" class="img-thumbnail img-circle pull-left">
              </div>
              <div class="item__text">O'zbekiston Respublikasi Prezidentining rasmiy veb-sayti</div>
            </a>
            <a href="#" class="item__blocks">
              <div class="item__img">
                <img src="<?= Yii::getAlias('@web') . '/vxtb/images/counrty.png'?>" alt="" class="img-thumbnail img-circle pull-left">
              </div>
              <div class="item__text">O'zbekiston Respublikasi Prezidentining rasmiy veb-sayti</div>
            </a>
          </div>
          <div class="country-sites__item col-lg-4 col-12">
            <a href="#" class="item__blocks">
              <div class="item__img">
                <img src="<?= Yii::getAlias('@web') . '/vxtb/images/counrty.png'?>" alt="" class="img-thumbnail img-circle pull-left">
              </div>
              <div class="item__text">O'zbekiston Respublikasi Prezidentining rasmiy veb-sayti</div>
            </a>
            <a href="#" class="item__blocks">
              <div class="item__img">
                <img src="<?= Yii::getAlias('@web') . '/vxtb/images/counrty.png'?>" alt="" class="img-thumbnail img-circle pull-left">
              </div>
              <div class="item__text">O'zbekiston Respublikasi Prezidentining rasmiy veb-sayti</div>
            </a>
            <a href="#" class="item__blocks">
              <div class="item__img">
                <img src="<?= Yii::getAlias('@web') . '/vxtb/images/counrty.png'?>" alt="" class="img-thumbnail img-circle pull-left">
              </div>
              <div class="item__text">O'zbekiston Respublikasi Prezidentining rasmiy veb-sayti</div>
            </a>
          </div>
          <div class="country-sites__item col-lg-4 col-12">
            <a href="#" class="item__blocks">
              <div class="item__img">
                <img src="<?= Yii::getAlias('@web') . '/vxtb/images/counrty.png'?>" alt="" class="img-thumbnail img-circle pull-left">
              </div>
              <div class="item__text">O'zbekiston Respublikasi Prezidentining rasmiy veb-sayti</div>
            </a>
            <a href="#" class="item__blocks">
              <div class="item__img">
                <img src="<?= Yii::getAlias('@web') . '/vxtb/images/counrty.png'?>" alt="" class="img-thumbnail img-circle pull-left">
              </div>
              <div class="item__text">O'zbekiston Respublikasi Prezidentining rasmiy veb-sayti</div>
            </a>
            <a href="#" class="item__blocks">
              <div class="item__img">
                <img src="<?= Yii::getAlias('@web') . '/vxtb/images/counrty.png'?>" alt="" class="img-thumbnail img-circle pull-left">
              </div>
              <div class="item__text">O'zbekiston Respublikasi Prezidentining rasmiy veb-sayti</div>
            </a>
          </div>
        </div>
      </section>
    </div>
    <!-- <section class="newsletter">
      <div class="container">
        <div class="row">
          <div class="col-12 newsletter__title">AXBOROT BYULLETENIGA OBUNA BO'LING</div>
        </div>
        <div class="row">
          <div class="col-12">
            <form class="newsletter__form">
              <div class="form-group">
                <input type="email" class="form-control" placeholder="email" required>
              </div>
              <button type="submit" class="btn newsletter__btn">Obuna bo'lish</button>
            </form>
          </div>
        </div>
        <div class="row">
          <div class="col-12 newsletter__text">Faqat so'nggi yangiliklar</div>
        </div>
      </div>
    </section>  -->
  </div>


<!--main content start   test-->
