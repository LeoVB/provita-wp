(function($) {
  $(document).ready(function() {
    initializeCarousels();
    animationHead();
    menuActions();
  });

  function initializeCarousels() {
    $('.owl-carousel.home-category-carrousel').owlCarousel({
      loop: true,
      nav: false,
      margin: 10,
      responsive: {
        0: { items: 2 },
        600: { items: 3 },
        820: { items: 3 },
        1000: { items: 1 }
      }
    });
  }

  function animationHead() {
    var scrollTriggerHeight = 100;
    var masthead = $('#masthead');

    $(window).on('scroll', function() {
      var scrollTop = $(window).scrollTop();

      if (scrollTop > scrollTriggerHeight) {
        masthead.addClass('down animate__fadeInDown');
      } else {
        masthead.removeClass('down animate__fadeInDown');
      }
    });
  }

  function menuActions() {
    $(".menu-btn, .close-popup").click(function() {
      $("#navigation").toggleClass("openPopUp");
    });
  } 
})(jQuery);