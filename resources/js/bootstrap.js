require('bootstrap');

const $ = require('jquery');

document.addEventListener('scroll', () => {
  if (window.pageYOffset > 20) {
    $('.figma-nav').addClass('shadow-sm');
  } else {
    $('.figma-nav').removeClass('shadow-sm');
  }
});
