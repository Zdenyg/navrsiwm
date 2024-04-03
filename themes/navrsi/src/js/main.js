//SHRINK LOGO

jQuery("document").ready(function($){
  var logo = jQuery('.navbar .navbar-brand img'),
  w = logo.width();
  jQuery(window).scroll(function () {
      if (jQuery(this).scrollTop() > 20) {
          logo.css({
            "width": w/1.5,
                 });
      } else{
          logo.css({
            "width": w
                   });
      }
  });
});


// Smooth scrolling NAV

(function($) {
    "use strict"; // Start of use strict
  
    // Smooth scrolling using jQuery easing
    $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
      if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: (target.offset().top - 56)
          }, 1000, "easeInOutExpo");
          return false;
        }
      }
    });
  
    // Closes responsive menu when a scroll trigger link is clicked
    $('.js-scroll-trigger').click(function() {
      $('.navbar-collapse').collapse('hide');
    });
  
    // Activate scrollspy to add active class to navbar items on scroll
    $('body').scrollspy({
      target: '#mainNav',
      offset: 56
    });


    // Modal

    

  
  })(jQuery); // End of use strict
  
  // Smooth scrolling NAV END


