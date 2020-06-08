$(document).ready(function () {
    let swiper = new Swiper('.swiper-container', {
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        autoHeight:true,
        preloadImages: true,
        updateOnImagesReady: true,
      });
});
