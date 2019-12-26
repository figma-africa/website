
const $ = require('jquery');

require('bootstrap');

document.addEventListener('scroll', () => {
  if (window.pageYOffset > 20) {
    $('.figma-nav').addClass('shadow-sm');
  } else {
    $('.figma-nav').removeClass('shadow-sm');
  }
});

$("#menu-toggle").click(function(e) {
  e.preventDefault();
  $("#wrapper").toggleClass("toggled");
});

// Wow Js.
