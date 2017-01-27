// *************************
// Customowy javascript
// *************************

$(document).ready(function (){
  $('.hamburger').click(function () {
    if ($(this).hasClass('hamburger--is-active')) {
      $(this).removeClass('hamburger--is-active');
      $('nav').removeClass('nav--active');
    } else {
      $(this).addClass('hamburger--is-active');
      $('nav').addClass('nav--active');
    }
  });
});
