$(document).ready(function () {

	// Cuando se hace clic en un botón con la clase "mi-boton"
	$(".popup-btn").click(function () {
		// Agrega la clase "transform" al div con el ID "mi-div"
		$("#navigation").addClass("openPopUp");
	});

	$(".close-popup").click(function () {
		// Agrega la clase "transform" al div con el ID "mi-div"
		$("#navigation").removeClass("openPopUp");
	});

});