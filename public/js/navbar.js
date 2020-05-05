$(document).ready(function () {
   let nav_bar = $('.media-nav');
   let openbutton = $('.nav-button');
   let closebutton = $('.close-menu-btn');
   openbutton.on('click', function(event) {
      event.preventDefault();
      nav_bar.toggleClass('menu-active');
      openbutton.toggleClass('menu-remove-btn');
      closebutton.toggleClass('menu-active');
   })
   closebutton.on('click', function(event) {
      event.preventDefault();
      nav_bar.toggleClass('menu-active');
      openbutton.toggleClass('menu-remove-btn');
      closebutton.toggleClass('menu-active');
   })
})
