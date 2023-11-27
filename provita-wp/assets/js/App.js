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

})(jQuery);


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
				items: 1
			},
			1000: {
				items: 1
			}
		}
	})
}
