$(document).ready(function () {
  //слайдер отеля
  var hotelSlider = new Swiper(".hotel-slider", {
    // Optional parameters
    loop: true,
    spaceBetween: 10,
    // Navigation arrows
    navigation: {
      nextEl: ".hotel-slider__button--next",
      prevEl: ".hotel-slider__button--prev",
    },
    keyboard: {
      enabled: true,
    },
  });

  //слайдер отзывов
  var reviewSlider = new Swiper(".reviews-slider", {
    // Optional parameters
    loop: true,
    spaceBetween: 10,
    // Navigation arrows
    navigation: {
      nextEl: ".reviews-slider__button--next",
      prevEl: ".reviews-slider__button--prev",
    },
    keyboard: {
      enabled: true,
    },
  });

  //открытие и закрытие меню
  var menuButton = document.querySelector(".menu-button");
  menuButton.addEventListener("click", function () {
    var menu = document.querySelector(".navbar-bottom");
    menu.classList.toggle("navbar-bottom--visible");
  });

  //открытие формы
  var modalButton = $('[data-toggle="modal"]');
  modalButton.each(function clickButton() {
    $(this).on("click", openModal);
  });

  //закрытие по нажатию на крестик
  var closeModalButton = $(".modal__close");
  closeModalButton.on("click", function (event) {
    event.preventDefault();
    closeModal();
  });

  //закрытие по нажатию клавиши
  $(document).keyup(function (e) {
    if (e.key === "Escape" || e.keyCode === 27) {
      closeModal();
    }
  });

  //открытие модального окна
  function openModal() {
    var targetModal = $(this).attr("data-href");
    $(targetModal).find(".modal__overlay").addClass("modal__overlay--visible");
    $(targetModal).find(".modal__dialog").addClass("modal__dialog--visible");
    $("#body").css("overflow", "hidden");
  }
  //закрытие модального окна
  function closeModal() {
    var modalOverlay = $(".modal__overlay");
    var modalDialog = $(".modal__dialog");
    modalOverlay.removeClass("modal__overlay--visible");
    modalDialog.removeClass("modal__dialog--visible");
    $("#body").css("overflow", "");
  }

  //закрытие по клику вне формы
  $(document).mouseup(function (e) {
    // событие клика по веб-документу
    var div = $(".modal__dialog");
    if (
      !div.is(e.target) && // если клик был не по нашему блоку
      div.has(e.target).length === 0 // и не по его дочерним элементам
    ) {
      closeModal();
    }
  });

  //обработка форм 
  $(".modal__form").validate({
    errorClass: "invalid",
    messages: {
      name_modal: {
        required: "Please specify your name",
        minlength: "Name must be at least 2 letters long",
      },
      email_modal: {
        required: "We need your email address to contact you",
        email: "Your email address must be in the format of name@domain.com",
      },
      phone_modal: {
        required: "Phone is required",
        minlength: "The phone number must be 10 digits",
      },
    },
  });

  $(".footer__form").validate({
    errorClass: "invalid",
    messages: {
      name: {
        required: "Please specify your name",
        minlength: "Name must be at least 2 letters long",
      },
      phone: {
        required: "Phone is required",
        minlength: "The phone number must be 10 digits",
      },
    },
  });
  $(".subscribe").validate({
    errorClass: "mistake",
    messages: {
      email: {
        required: "We need your email address to contact you",
        email: "Your email address must be in the format of name@domain.com",
      },
    },
  });

  //маска
  $("#footer__input-phone").mask('+7(999)999-99-99',
  {
    'translation':{9:{pattern:/[0-9]/, optional: false}},
  });
  $("#modal__input-phone").mask("+7(999)999-99-99", {
    translation: { 9: { pattern: /[0-9]/, optional: false } },
  });

//анимация
AOS.init();
});
