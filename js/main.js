var button = document.querySelector('#button');
var modal = document.querySelector('#modal');
var close = document.querySelector('#close');

button.addEventListener('click', function() {
  modal.classList.add('modal_active');
});

close.addEventListener('click', function() { 
  modal.classList.remove('modal_active');
});


/* Slick слайдер */
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
        },
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
          email: "Укажите верный email "
        },
      },

    });

    /*Валидация маски*/
    $('.phone').mask('+7 (999) 999-99-99');
    $('#offer-form').on('submit', function name(event){
      event.preventDefault();
      $.ajax({
        type: "POST",
        url: "mail.php",
        data: $(this).serialize(), //автоматическая склейка данных формы (имя, пароль, емайл и т.д.)
        success: function (response) {
          console.log('Прибыли данные: ' + response);
          $('#offer-form')[0].reset();
          modal.classList.add('modal_active');
          $(".modal-dialog__title").text(response);
        },
        error: function (jqXHR, textStatus, errorThrown) {
          console.error(jqXHR + " " + textStatus);

        }
      });
    });


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
