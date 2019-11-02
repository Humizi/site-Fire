(function($){
  $(document).ready(function () {
    
    'use strict';

    const phone = document.getElementById('edit-phone');

    if(phone){
      const im = new Inputmask("+9 999 999-99-99");
      im.mask(phone);
    };
  });
})(jQuery);