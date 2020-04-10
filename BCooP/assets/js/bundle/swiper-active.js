jQuery(document).ready(function () {
  //initialize swiper when document ready
  var mySwiper = new Swiper ('.tp-example__slider', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 2,
    spaceBetween: 24,
    centeredSlides : true,

    breakpoints: {
      768: {
        slidesPerView: 4,
        spaceBetween: 32,
      },
      1400: {
        slidesPerView: 5,
        spaceBetween: 40,
      }
    }
  })
});

jQuery(document).ready(function () {
  //initialize swiper when document ready
  var mySwiper = new Swiper ('.tp-voices__slider', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 1,
    pagination: {
      el: '.tp-voices__pagination',
      type: 'bullets',
      clickable: true,
    },

    breakpoints: {
      768: {
        slidesPerView: 2,
        spaceBetween: 40
      }
    }
  })
});