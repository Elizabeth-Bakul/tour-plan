const swiper = new Swiper(".swiper-container", {
  // Optional parameters
  loop: true,
  spaceBetween: 10,
  // Navigation arrows
  navigation: {
    nextEl: ".slider-button__next",
    prevEl: ".slider-button__prev",
  },
  keyboard: {
    enabled: true,
  },
});
