<?php

    /* @var $this \yii\web\View */
    /* @var $content string */

    use app\widgets\Alert;
    use yii\helpers\Html;
    use yii\helpers\Url;
    use yii\bootstrap\Nav;
    use yii\bootstrap\NavBar;
    use yii\widgets\Breadcrumbs;
    use app\assets\VxtbAsset;

    VxtbAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
  <?php $this->beginBody() ?>

    <header class="header">
        <div class="header-top">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-3 header-social">
                <ul>
                  <li>
                    <a href="#">
                      <img src="<?= Yii::getAlias('@web') . '/vxtb/images/soc/facebook.svg' ?>" alt="">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img src="<?= Yii::getAlias('@web') . '/vxtb/images/soc/instagram.svg' ?>" alt="">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img src="<?= Yii::getAlias('@web') . '/vxtb/images/soc/youtube.svg' ?>" alt="">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img src="<?= Yii::getAlias('@web') . '/vxtb/images/soc/telegram.svg' ?>" alt="">
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-5 header-email">
                <span class="email">E-mail: </span><a href="mailto:toshkent_vxtb@xtv.uz">toshkent_vxtb@xtv.uz</a>
                <span class="header-test">Sayt test rejimida ishlamoqda!</span>
              </div>
              <div class="col-lg-3">
                <div class="header-lang">
                  <a href="#">ЎЗБ &nbsp;</a> / &nbsp;
                  <a href="#">O'ZB &nbsp;</a>
                  <!-- <div class="header-oneId">
                    <a href="https://id.gov.uz/cmn/LoginPage.do" target="_blank"> OneID orqali kirish</a>
                  </div> -->
                </div>
              </div>
              <!-- <div class="col-lg-1 header-eye">
                <a href="#">
                </a>
              </div> -->
            </div>
          </div>
        </div>
        <div class="header-middle">
          <div class="container">
            <div class="row align-items-center">
              <div class="header-logo col-6">
                <a  href="<?= Yii::getAlias('@web') ?>">
                  <img src="<?= Yii::getAlias('@web') . '/vxtb/images/logo.png'?>" alt="">
                  <div class="site-name">TOSHKENT VILOYATI </br> XALQ TA'LIMI BOSHQARMASI</div>
                </a>
              </div>
              <div class="header-search col-4">
                <form class="header-form">
                  <input type="text" placeholder="Qidiruv">
                  <button type="submit"></button>
                </form>
              </div>
              <div class="header-phone col-2">
                <div class="text">ISHONCH TELEFONI</div>
                <a href="tel:+998712316571" class="number">(71) 231 65 71</a>
              </div>
            </div>
          </div>
        </div>
        <div class="header-nav">
          <div class="container">
            <div class="row">
              <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link active" href="staff.html">RAHBARIYAT</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="news.html">YANGILIKLAR</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">BIZ BILAN BOG`LANING</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </header>



      <?= $content ?>

    <!--footer start-->
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-12 footer__item">
            <div class="footer__logo">
              <img src="<?= Yii::getAlias('@web') . '/vxtb/images/logo.png'?>" alt="">
              <span>Toshkent viloyati xalq ta`limi boshqarmasi</span>
            </div>
            <div class="footer__address">111503, Toshkent viloyati, O'rta Chirchiq tumani, Parkent trakt ko'chasi, 52-uy</div>
            <div class="footer__contact">
              <div class="phone">
                <a href="tel:712410186">(71) 231-65-71</a>
              </div>
              <div class="email">
                <a href="mailto:toshkent_vxtb@xtv.uz">toshkent_vxtb@xtv.uz</a>
              </div>
            </div>
            <div class="footer__soc">
              <a href="#">
                <img src="<?= Yii::getAlias('@web') . '/vxtb/images/soc/facebook.svg'?>" alt=""></a>
              <a href="#">
                <img src="<?= Yii::getAlias('@web') . '/vxtb/images/soc/instagram.svg'?>" alt=""></a>
              <a href="#">
                <img src="<?= Yii::getAlias('@web') . '/vxtb/images/soc/telegram.svg'?>" alt=""></a>
            </div>
          </div>
          <div class="col-lg-3 col-12 footer__item">
            <div class="footer__title">Havolalar</div>
            <div class="footer__nav row">
              <div class="col-lg-6">
                <a href="#">Ustoz ovozi</a>
              </div>
              <div class="col-lg-6">
                <a href="#">Forum</a>
              </div>
              <div class="col-lg-6">
                <a href="#">Maktablar haqida ma'lumot</a>
              </div>
              <div class="col-lg-6">
                <a href="#">BOʻSh ISH OʻRINLARI</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-12 footer__item">
            <div class="footer__title">Yangiliklar</div>
            <div class="footer__news">
              <div class="news__item">
                <img src="<?= Yii::getAlias('@web') . '/vxtb/images/footer_news.jpg' ?>" alt="">
                <div class="news__info">
                  <div class="news__text">Xalqaro sertifikatga ega Navoiy shahar 4-maktab informatika 
                    oʻqituvchisi “Java dasturlash tili»ni maktab oʻquvchilariga oʻqitmoqda</div>
                  <div class="news__date">January 15, 2021</div>
                </div>
              </div>
              <div class="news__item">
                <img src="<?= Yii::getAlias('@web') . '/vxtb/images/footer_news.jpg' ?>" alt="">
                <div class="news__info">
                  <div class="news__text">Xalqaro sertifikatga ega Navoiy shahar 4-maktab informatika 
                    oʻqituvchisi “Java dasturlash tili»ni maktab oʻquvchilariga oʻqitmoqda</div>
                  <div class="news__date">January 15, 2021</div>
                </div>
              </div>
              <div class="news__item">
                <img src="<?= Yii::getAlias('@web') . '/vxtb/images/footer_news.jpg' ?>" alt="">
                <div class="news__info">
                  <div class="news__text">Xalqaro sertifikatga ega Navoiy shahar 4-maktab informatika 
                    oʻqituvchisi “Java dasturlash tili»ni maktab oʻquvchilariga oʻqitmoqda</div>
                  <div class="news__date">January 15, 2021</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-12 footer__item">
            <div class="footer__title">Ish vaqti</div>
            <div class="footer__work">
              <div class="work-day">Du - Ju:</div>
              <div class="work-time">9.00 - 18:00</div>
            </div>
            <div class="footer__work">
              <div class="work-day">Tushlik :</div>
              <div class="work-time">13:00 - 14:00</div>
            </div>
            <div class="footer__work">
              <div class="work-day">Sh - Ya:</div>
              <div class="work-time not-work">Yopiq</div>
            </div>
          </div>
        </div>
        <div class="row"></div>
      </div>
    </footer>
    <a href="#" class="scrollTop">
      <img src="<?= Yii::getAlias('@web') . '/vxtb/images/scrollTop.svg' ?>" alt="">
    </a>

  <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
