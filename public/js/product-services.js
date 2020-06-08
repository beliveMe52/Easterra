$(document).ready(function() {
   $('.ajax').click(function(){
      let data = $(this).attr('href') + (' .drop-down-list-ajax');
      $('.drop-down-list').fadeOut('fast', dataLoad);
      function dataLoad(){
         $('.drop-down-list').load(data,"", function(){  
         $('.drop-down-list').fadeIn('normal');
         // $('.drop-down-list').classList.toggle = "drop-down-list"
         })
         
      };
      return false;
   });
   
});