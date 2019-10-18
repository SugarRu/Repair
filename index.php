<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ремонт квартир</title>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/slick.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/style.css">

</head>

<body>
  <nav class="navbar">
    <div class="container">
      <div class="navbar-block">
        <div class="navbar__logo wow fadeIn">
          <img src="img/logo.png" alt="логотип">
        </div>
        <!-- /.navbar__logo -->
        <div class="navbar__info wow fadeIn">
          <div class="navbar__contacts">
            <span class="navbar__address">Калуга, Москва, МО
            </span> <!-- /.navbar__address -->
            <a href="tel:+7(495)42-251-31" class="navbar__phone">
              +7 (495) 42-251-31
            </a>
          </div>
          <button class="button navbar__button" id="button">
            Перезвоните мне
          </button> <!-- /.button navbar_button -->
          <!-- /.navbar__contacts -->
        </div>
        <!-- /.navbar__info -->
      </div>
      <!-- /.navbar-block -->
    </div>
    <!-- /.container -->
  </nav>
  <!-- /.navbar -->

  <main>
    <section class="hero">
      <div class="container">
        <div class="hero-block">
          <div class="hero-text wow fadeInLeft">
            <h1 class="hero-text__title">
              Внутренняя отделка помещений "под ключ"
            </h1>
            <!-- /.hero-text__title -->
            <span class="hero-text__subtitle">
              с гарантией качества, прописанной в договоре
            </span> <!-- /.hero-text__subtitle -->
            <ul class="hero-list">
              <li class="hero-list__item">
                <div class="hero-list__image">
                  <img src="img/hero/clock.png" alt="часы">
                </div>
                <span class="hero-list__text">Точно соблюдаем сроки</span>
              </li>
              <li class="hero-list__item">
                <div class="hero-list__image">
                  <img src="img/hero/calculator.png" alt="калькулятор">
                </div>
                <span class="hero-list__text">Рассчитаем смету на работы <br> и материалы в день обращения
                </span>
              </li>
              <li class="hero-list__item">
                <div class="hero-list__image">
                  <img src="img/hero/paint-board.png" alt="палитра">
                </div>
                <span class="hero-list__text">Предложим более 100 вариантов исполнения дизайна Вашего жилья
                </span>
              </li>
            </ul>
            <!-- /.hero-text -->
          </div>
          <!-- /.hero-text -->
          <div class="hero-image wow fadeInRight">
            <img src="img/hero/hero-img.png" alt="план квартиры">
          </div>
          <!-- /.hero-image -->
        </div>
        <!-- /.hero-block -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.hero -->
    <section class="offer section wow fadeInLeft">
      <div class="container">
        <div class="offer-block">
          <h2 class="section-title offer__title">
            Мы бесплатно разработаем дизайн-проект Вашего жилья и реализуем его!
          </h2>
          <!-- /.section-title -->
          <span class="section-subtitle offer__subtitle">Оставьте заявку на разработку бесплатного
            дизайн-проекта!</span>
          <!-- /.section-subtitle -->
          <form action="mail.php" method="POST" class="form offer__form">
            <input type="text" name="username" class="input offer__input" placeholder="Ваше имя">
            <input type="tell" name="userphone" class="input offer__input" placeholder="Ваш телефон">
            <button class="button offer__button">Получить бесплатный дизайн-проект
            </button> <!-- /.button offer__button -->
            <div class="offer-callback">
              <span class="offer-callback__us">
                Наш менеджер перезвонит Вам в течение 60 секунд
              </span>
              <div class="offer-callback__client">
                <span class="offer-callback__info">
                  или перезвоните нам сами
                </span>
                <span class="offer-callback__number">
                  +7 (495) 42-251-31
                </span>
              </div>
              <!-- /.offer-callback__client -->
            </div>
            <!-- /.offer__callback -->
          </form>
          <!-- /.form offer__form -->
        </div>
        <!-- /.offer-block -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.offer -->


    <section class="section portfolio">
      <div class="container">
        <h2 class="section-title portfolio__title">Работая с 2007 года, <br> мы сделали более 500 ремонтов в квартирах и
          домах
        </h2>
        <div class="slider">
          <div class="slider__item"><img class="slider__image" src="img/portfolio/slider-1.png" alt=""></div>
          <div class="slider__item"><img class="slider__image" src="img/portfolio/slider-2.png" alt=""></div>
          <div class="slider__item"><img class="slider__image" src="img/portfolio/slider-3.png" alt=""></div>
          <div class="slider__item"><img class="slider__image" src="img/portfolio/slider-1.png" alt=""></div>
          <div class="slider__item"><img class="slider__image" src="img/portfolio/slider-2.png" alt=""></div>
          <div class="slider__item"><img class="slider__image" src="img/portfolio/slider-3.png" alt=""></div>
        </div>
        <!-- /.slider-->
        <div class="arrows portfolio__arrows">
          <div class="arrows__left">
            <img src="img/portfolio/left-arrow.png" alt="">
          </div>
          <div class="arrows__right">
            <img src="img/portfolio/right-arrow.png" alt="">
          </div>
        </div>
        <!-- /.arrows -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.section portfolio -->

    <section class="section price">
      <div class="container">
        <h2 class="section-title price__title">У нас очень гибкая система скидок <br> на комплексные работы!
        </h2>
        <!-- /.section-title price__title -->
        <span class="section-subtitle price__subtitle">Прайс на наши услуги
        </span>
        <!-- /.section-subtitle price__subtitle -->
        <div class="cards">
          <div class="card price__card wow fadeInUp" data-wow-delay="0.1s">
            <div class="card__image"><img class="card__img" src="img/price/bathroom.png" alt=""></div>
            <!-- /.card__image -->
            <div class="card__text">
              <h4 class="card__title">Ремонт ванных комнат и с/у</h4>
              <!-- /.card__title -->
              <a href="#" class="card__link">Узнать цены</a>
              <!-- /.card__link -->
            </div>
            <!-- /.card__text -->
          </div>
          <!-- /.card -->
          <div class="card price__card wow fadeInUp" data-wow-delay="0.2s">
            <div class="card__image"><img class="card__img" src="img/price/living.png" alt=""></div>
            <!-- /.card__image -->
            <div class="card__text">
              <h4 class="card__title">Ремонт комнат и квартир</h4>
              <!-- /.card__title -->
              <a href="#" class="card__link">Узнать цены</a>
              <!-- /.card__link -->
            </div>
            <!-- /.card__text -->
          </div>
          <!-- /.card -->
          <div class="card price__card wow fadeInUp" data-wow-delay="0.3s">
            <div class="card__image"><img class="card__img" src="img/price/office.png" alt=""></div>
            <!-- /.card__image -->
            <div class="card__text">
              <h4 class="card__title">Отделка офисных помещений</h4>
              <!-- /.card__title -->
              <a href="#" class="card__link">Узнать цены</a>
              <!-- /.card__link -->
            </div>
            <!-- /.card__text -->
          </div>
          <!-- /.card -->
          <div class="card price__card wow fadeInUp" data-wow-delay="0.4s">
            <div class="card__image"><img class="card__img" src="img/price/buildings.png" alt=""></div>
            <!-- /.card__image -->
            <div class="card__text">
              <h4 class="card__title">Ремонт в новостройках

              </h4>
              <!-- /.card__title -->
              <a href="#" class="card__link">Узнать цены</a>
              <!-- /.card__link -->
            </div>
            <!-- /.card__text -->
          </div>
          <!-- /.card -->
          <div class="card price__card wow fadeInUp" data-wow-delay="0.5s">
            <div class="card__image"><img class="card__img" src="img/price/kitchen.png" alt=""></div>
            <!-- /.card__image -->
            <div class="card__text">
              <h4 class="card__title">Ремонт кухонь</h4>
              <!-- /.card__title -->
              <a href="#" class="card__link">Узнать цены</a>
              <!-- /.card__link -->
            </div>
            <!-- /.card__text -->
          </div>
          <!-- /.card -->
          <div class="card price__card wow fadeInUp" data-wow-delay="0.6s">
            <div class="card__image"><img class="card__img" src="img/price/roof.png" alt=""></div>
            <!-- /.card__image -->
            <div class="card__text">
              <h4 class="card__title">Ремонт дач и коттеджей</h4>
              <!-- /.card__title -->
              <a href="#" class="card__link">Узнать цены</a>
              <!-- /.card__link -->
            </div>
            <!-- /.card__text -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.cards -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.section price -->

    <section class="setion steps">
      <div class="container">
        <h2 class="section-title steps__title">Наши специалисты готовы выехать на замер <br> в любое удобное для Вас
          время</h2>
        <!-- /.section-title steps__title -->
        <span class="section-subtitle steps__subtitle">5 шагов до ремонта
        </span>
        <!-- /.section-subtitle steps__subtitle -->
        <div class="steps-block">
          <div class="step">
            <div class="step__image">
              <img src="img/steps/woman.png" alt="">
            </div>
            <!-- /.step__image -->
            <p class="step__text">Вы звоните нам или оставляете заявку
            </p>
            <!-- /.step__text -->
          </div>
          <!-- /.step -->
          <div class="step">
            <div class="step__image">
              <img src="img/steps/clock.png" alt="">
            </div>
            <!-- /.step__image -->
            <p class="step__text">Согласуем удобное для Вас время выезда специалиста на замер</p>
            <!-- /.step__text -->
          </div>
          <!-- /.step -->
          <div class="step">
            <div class="step__image">
              <img src="img/steps/money.png" alt="">
            </div>
            <!-- /.step__image -->
            <p class="step__text">Рассчитываем смету согласовываем с Вами</p>
            <!-- /.step__text -->
          </div>
          <!-- /.step -->
          <div class="step">
            <div class="step__image">
              <img src="img/steps/doc.png" alt="">
            </div>
            <!-- /.step__image -->
            <p class="step__text">Подписываем договор закупаем материал по оптовым ценам</p>
            <!-- /.step__text -->
          </div>
          <!-- /.step -->
          <div class="step">
            <div class="step__image">
              <img src="img/steps/calendar.png" alt="">
            </div>
            <!-- /.step__image -->
            <p class="step__text">Выполняем ремонт в указанные сроки</p>
            <!-- /.step__text -->
          </div>
          <!-- /.step -->
        </div>
        <!-- /.steps-block -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.setion steps -->

    <section class="section brif">
      <div class="container">
        <div class="brif-block">
          <div class="interview brif__interview">
            <h3 class="interview__title">
              Мы можем озвучить Вам примерную стоимость работы и материалов по телефону
            </h3>
            <span class="interview__subtitle">Для этого нужно ответить на 4 вопроса:</span>
            <ul class="interview-list">
              <li class="interview-list__item">
                <span class="interview-list__counter">1</span>
                <span class="interview-list__text">Какова площадь помещения?</span>
              </li>
              <li class="interview-list__item">
                <span class="interview-list__counter">2</span>
                <span class="interview-list__text">У Вас новостройка или вторичное жилье?</span>
              </li>
              <li class="interview-list__item">
                <span class="interview-list__counter">3</span>
                <span class="interview-list__text">Где находится помещение, в котором будет производиться ремонт?</span>
              </li>
              <li class="interview-list__item">
                <span class="interview-list__counter">4</span>
                <span class="interview-list__text">Назначение помещения?</span>
              </li>
            </ul>
          </div>
          <!-- /.interview brif__interview -->
          <div class="form brif__form">
            <h3 class="form__title">Оставьте заявку на бесплатный расчет ремонта по телефону</h3>
            <span class="form__subtitle">Для этого заполните форму ниже</span>
            <form action="#" id="brif-form">
              <input type="text" autocomplete="off" name="username" class="input brif__input text"
                placeholder="Ваше имя">
              <input type="tel" autocomplete="off" name="phone" class="input brif__input phone"
                placeholder="Ваш телефон">
              <input type="email" autocomplete="off" name="email" class="input brif__input email"
                placeholder="Ваш email">
              <button class="button brif__button">Узнать стоимость</button>
              <span class="form__description">Мы перезвоним в течении 60 секунд</span>
            </form>
          </div>
          <!-- /.form brif__form-->
        </div>
        <!-- /.brif-block -->
      </div>
      
      <!-- /.container -->
    </section>
    <!-- /.section brif -->
  </main>

  <footer class="footer">
    <div class="map" id="map">
      <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aacf33c93ed3c0e22068182c29a03b03ecb7fe91a059064a25ed5c872d6a863a8&amp;width=100%25&amp;height=640&amp;lang=ru_RU&amp;scroll=false">
      </script>
    </div>
    <div class="container">
      <div class="contacts-block">
        <div class="contacts">
          <h3 class="contacts__title">Приезжай к нам в гости! Проконсультируем Вас по всем вопросам ремонта</h3>
          <ul class="contacts-list">
            <li class="contacts-list__item">
              <span class="contacts-list__icon">
                <img src="img/footer/map-placeholder.png" alt="">
              </span> 
              <span class="contacts-list__text">г. Москва<br>
                  ул. Ленинга, д. 10,
                  корпус 2, оф. 308</span> 
            </li>
            <!-- /.contacts__item -->
            <li class="contacts-list__item">
              <span class="contacts-list__icon">
                <img src="img/footer/clock-with-white-face.png" alt="">
              </span> 
              <span class="contacts-list__text">Режим работы: <br>
                  с 9:00 до 18:00
                  
                  </span> 
            </li>
            <!-- /.contacts__item -->
            <li class="contacts-list__item">
              <span class="contacts-list__icon">
                <img src="img/footer/phone-call-button.png" alt="">
              </span> 
              <span class="contacts-list__text">Телефон:    <br>
                  <a href="tel: + 7 (495) 42-251-31">+ 7 (495) 42-251-31</a></span> 
            </li>
            <!-- /.contacts__item -->
          </ul>
          <!-- /.contacts-list -->
        </div>
        <!-- /.contacts -->
      </div>
      <!-- /.contacts-block -->
    </div>
  </footer>
  <!-- /.footer setion -->


  <div class="modal" id='modal'>
    <div class="modal-dialog">
      <button class="modal-dialog__close" id='close'>&times;</button>
      <h4 class="modal-dialog__title">Узнайте точную стоимость
        ремонта по телефону!</h4>
      <span class="modal-dialog__subtitle">
        Заполните поля ниже - мы свяжемся с Вами

      </span> <!-- /.modal-dialog_subtitle -->

      <form action="#" id="brif-form" class="modal-dialog__form">
        <input type="text" class="input modal-dialog__input" placeholder="Ваше имя">
        <input type="tell" class="input modal-dialog__input" placeholder="Ваш телефон">
        <button class="button modal-dialog__button">Узнать стоимость
        </button> <!-- /.button offer__button -->

        <div class="modal-dialog__callback">
          <span class="modal-dialog__us">
            Или Вы можете перезвонить нам сами
            по телефону:
          </span>
          <span class="modal-dialog__number">
            +7 (8182) 42-51-31
          </span>
        </div>
        <!-- /.modal-dialog__callback -->
      </form>
      <!-- /.modal-dialog__form -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->



  <!-- <script src="js/main.js"></script> -->


  <!-- Подключение jQuery -->

  <script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">
  </script>
  <script src="js/modal.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/jquery.maskedinput.min.js"></script>


  <!--Slick слайдер-->
  <script src="js/slick.min.js"></script>
  <script>
    new WOW().init();
    $(document).ready(function () {

      /*Валидация формы*/
      $('#brif-form').validate({
        rules: {
          username: {
            required: true,
            minlength: 2,
            maxlength: 15
          },
          phone: {
            required: true
          },
          email: {
            required: true,
            email: true
          }
        },

        messages: {
          username: {
            required: "Имя обязательно",
            minlength: "Имя не короче 2 букв",
            maxlength: "Имя слишком длинное"
          },
          phone: {
            required: "Укажите телефон"
          },
          email: {
            required: "Укажите email",
            email: "Укажите верный eail "
          }
        },

      });

      /*Валидация маски*/
      $('.phone').mask('+7 (999) 999-99-99');


      /*Скрипт слайдера*/
      $('.slider').slick({
        slidesToShow: 3,
        slideToScroll: 1,
        prevArrow: $('.arrows__left'),
        nextArrow: $('.arrows__right'),
        responsive: [{
            breakpoint: 1200,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 567,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
      });
    });
  </script>
  <!--/.Slick слайдер-->


  <!--Меню прокрутки  -->
  <div ID="toTop" class="toTop button">В начало</div>
  <!--/. Меню прокрутки-->

</body>

</html>