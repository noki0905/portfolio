jQuery(document).ready(function () {
  //initialize swiper when document ready
  var mySwiper = new Swiper ('.tp-work__slider', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 2,
    spaceBetween: 20,
    speed: 800,
    centeredSlides : true,
    pagination: {
      el: '.c-pagination',
      type: 'bullets',
      clickable: true,
    },

    breakpoints: {
      768: {
        slidesPerView: 3,
        spaceBetween: 50,
      },
    }
  })
});