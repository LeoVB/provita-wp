(function($) {
    $(document).ready(function() {
      // Cuando se hace clic en un botón con la clase "mi-boton"
	$(".menu-btn").click(function () {
		// Agrega la clase "transform" al div con el ID "mi-div"
		$("#navigation").addClass("openPopUp");
	});

	$(".close-popup").click(function () {
		// Agrega la clase "transform" al div con el ID "mi-div"
		$("#navigation").removeClass("openPopUp");
	});


	initializeCarrouseles();
    });

	animationHead();

})(jQuery);



function animationHead(){
	var scrollTriggerHeight = 100; // Ajusta esta altura según tus necesidades

        $(window).on('scroll', function() {
          var scrollTop = $(window).scrollTop();
  
          if (scrollTop > scrollTriggerHeight) {
            $('#masthead').addClass('down');
            $('#masthead').addClass('animate__fadeInDown');
          } else {
            $('#masthead').removeClass('down');
            $('#masthead').addClass('animate__fadeInDown');
            $('#masthead').removeClass('animate__fadeInDown');
          }
        });
}

function initializeCarrouseles(){
	$('.owl-carousel').owlCarousel({
		loop: true,
		nav: false,
		margin:10,
		responsive: {
			0: {
				items: 2,

			},
			600: {
				items: 3
			},
			820: {
				items: 3
			},
			1000: {
				items: 1
			}
		}
	})
}
