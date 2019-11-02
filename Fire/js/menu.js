(function($){
  $(document).ready(function () {
    'use strict';

    const menu = document.querySelector('.page-header .menu-bottom .menu');
    const btnBurger = document.querySelector('.mb__btn-burger');

    btnBurger.addEventListener('click', (evt) => {
      evt.preventDefault();

      btnBurger.classList.toggle('mb__btn-burger--close');
      menu.classList.toggle('menu--visible');
    });
  });
})(jQuery);