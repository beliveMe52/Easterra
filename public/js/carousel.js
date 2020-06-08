$(document).ready(function(){

   $('.owl-carousel').owlCarousel({
      loop:false,
      margin:20,
      merge:true,
      pullDrag:true,
      stagePadding: 1,
      responsive:{
         0: {
            items:2,
         },
         720: {
            items: 4,
         },
         1240: {
            items: 8,
         }
      }
  });
  let swiper = new Swiper('.swiper-container', {
   direction: 'vertical',
   
   pagination: {
     el: '.swiper-pagination',
     clickable: true,
   },
   height: 650,
   autoHeight:true,
   preloadImages: true,
   updateOnImagesReady: true,
   effect: 'fade',
   pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
   breakpoints: {
      0: {
         height: 440,
      },
      575: {
         
      },
      800: {
         height: 550,
      },
      1200: {
         height: 650,
      }

    }
 });

$(".swiper-slide").vegas({
   slides: [
       { src: './../img/slider.png' },
       { src: './../img/slider.png' }
   ],
   animation: 'kenburnsUpLeft'
});

$('a#previous').on('click', function () {
   $('.swiper-pagination-bullet').vegas('options', 'animation', 'kenburnsUpLeft').vegas('previous');
});

//  $('#showInput').on('click', function() {
//    $('.header__search').removeClass('hidden').addClass('active');
//    $('.empty').addClass('hidden');
//    $(this).fadeOut(0);
   
//    $('#header-search').focus()
//  });
 
//  $('#header-search').on('blur', function() {
//    $('.header__search').removeClass('active').addClass('hidden');
//    $('#showInput').fadeIn(500)
//  });
 
});

