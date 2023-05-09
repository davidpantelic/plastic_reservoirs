// All scripts should be in this file

$(document).ready(function() {
  
  // Navbar scroll class added on scroll
  $(window).on('scroll', function() {
    if ($(window).scrollTop() === 0) {
      $('.navbar').removeClass('navbar-scroll');
    } else {
      $('.navbar').addClass('navbar-scroll');
    }
  });

  // Scroll to main section on homepage
  $('.scroll-indicator span').on('click', function() {
    var nextSection = $('.main');
    var navHeight = $('.navbar').height();
    $('html, body').animate({
      scrollTop: nextSection.offset().top - 84
    }, 100);
  });
  
});