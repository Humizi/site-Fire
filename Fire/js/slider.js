(function($){
  $(document).ready(function () {
    'use strict';

    const swiperElement = document.querySelector('.events .swiper-container');
    const swiperElement2 = document.querySelector('.trust .swiper-container-2');

    if(swiperElement) {
      const swiper = new Swiper('.swiper-container', {
        pagination: {
          el: '.swiper-pagination',
          clickable: true
        },
        autoplay: {
          delay: 4500,
          disableOnInteraction: false,
        }
      });
    };

    if(swiperElement2) {
      const swiper = new Swiper('.swiper-container-2', {
        width: 900,
        slidesPerView: 3,
        autoplay: {
          delay: 4500,
          disableOnInteraction: false,
        }
      });
    };
  });
})(jQuery);