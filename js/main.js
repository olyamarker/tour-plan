const swiper = new Swiper('.swiper-container', {
  // Optional parameters
  loop: true,

  // Navigation arrows
  navigation: {
    nextEl: '.slider-button--next',
    prevEl: '.slider-button--prev',
  },
  // Переключение слайдов с помощью клавиатуры
  keyboard: {
    enabled: true,
    onlyInViewport: false,
  },
});