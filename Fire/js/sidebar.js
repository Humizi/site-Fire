(function($){
  $(document).ready(function () {
    'use strict';

    const sidebar = document.querySelector('.assortment--sidebar .menu');
    const deepMenu = sidebar.querySelector('.expanded');
    const deepMenuLink = deepMenu.querySelector('a');

    if ( deepMenu.classList.contains('active-trail') ) {
      deepMenu.classList.add('expanded--visible');
    };

    deepMenuLink.addEventListener('click', (evt) => {
      evt.preventDefault();

      deepMenu.classList.toggle('expanded--visible');
    });
  });
})(jQuery);