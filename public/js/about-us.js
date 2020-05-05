$(document).ready(function () {
   $('.ajax').click(function () {
      let data = $(this).attr('href') + (' .ajax-replace');
      $('.ajax-replace').fadeOut('fast', dataLoad);
      function dataLoad() {
            $('.ajax-replace').load(data, "", function () {
            $('.ajax-replace').fadeIn('normal');
          })
        };
        return false;
    });
   });
