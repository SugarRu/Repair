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
              Спасибо за заявку
            </h1>
            <!-- /.hero-text__title -->
            <span class="hero-text__subtitle">
              Мы перезвоним через 15 минут
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