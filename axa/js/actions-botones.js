/* Jose Montenegro */

$(document).ready(function () {
	


/* ------------- Plan 1 -------------------------*/

$(".plan1, .plan2").hover(function () {

	$(this).animate({marginTop: '12', marginLeft: '-12'}, 200);

});

$(".plan1, .plan2").mouseleave(function () {

	$(this).animate({marginTop: '0', marginLeft: '0'}, 200);

});

/* ------------- Banderas y Numeros -------------------------*/

$(".bandera").click(function () {
	$(".bandera").animate({marginTop: '0', marginLeft: '0'}, 200);
	$(this).animate({marginTop: '10', marginLeft: '-10'}, 200);
});

$(".numero").click(function () {
	$(".numero").animate({marginTop: '0', marginLeft: '0'}, 200);
	$(this).animate({marginTop: '10', marginLeft: '-10'}, 200);
});



/* ------------- Siguiente -------------------------*/

$(".boton_siguiente1, .boton_siguiente2").hover(function () {
	$(this).animate({marginTop: '7', marginLeft: '-11'}, 200);
});

$(".boton_siguiente1, .boton_siguiente2").mouseleave(function () {

	$(this).animate({marginTop: '0', marginLeft: '0'}, 200);

});




/* ------------- Botones Opciones -------------------------*/

$(".botones_opciones_dentro").hover(function () {

	$(this).animate({marginTop: '12', marginLeft: '-12'}, 200);

});

$(".botones_opciones_dentro").mouseleave(function () {

	$(this).animate({marginTop: '0', marginLeft: '0'}, 200);

});



});

/* Jose Montenegro */