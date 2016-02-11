/*
Autor: Jose Montenegro(jose.montenegro@imaginamos.com.co)
*/


$(document).ready(function () {


$("a#informacion_schengen, .contenedor_contenido table tbody tr#schengen td:lt(8)").click(function (e) {
e.preventDefault();
$("body").css("overflow",  "hidden")
$('.fondo-emergente').fadeIn(400);
$('#tabla_schengen').fadeIn(400);
var over = false;

});


$("a#informacion_america, .contenedor_contenido table tbody tr#america td:lt(8)").click(function (e) {
e.preventDefault();
$("body").css("overflow",  "hidden")
$('.fondo-emergente').fadeIn(400);
$('#tabla_america').fadeIn(400);
var over = false;

});


$("a#informacion_clasico, .contenedor_contenido table tbody tr#clasico td:lt(8)").click(function (e) {
e.preventDefault();
$("body").css("overflow",  "hidden")
$('.fondo-emergente').fadeIn(400);
$('#tabla_clasico').fadeIn(400);
var over = false;

});

$("a#informacion_europa, .contenedor_contenido table tbody tr#europa td:lt(8)").click(function (e) {
e.preventDefault();
$("body").css("overflow",  "hidden")
$('.fondo-emergente').fadeIn(400);
$('#tabla_europa').fadeIn(400);
var over = false;

});

$("a#informacion_economico, .contenedor_contenido table tbody tr#economico td:lt(8)").click(function (e) {
e.preventDefault();
$("body").css("overflow",  "hidden")
$('.fondo-emergente').fadeIn(400);
$('#tabla_economico').fadeIn(400);
var over = false;

});

$("a#informacion_mundial, .contenedor_contenido table tbody tr#mundial td:lt(8)").click(function (e) {
e.preventDefault();
$("body").css("overflow",  "hidden")
$('.fondo-emergente').fadeIn(400);
$('#tabla_mundial').fadeIn(400);
var over = false;

});

$("a#informacion_multiviajes, .contenedor_contenido table tbody tr#multiviajes td:lt(8)").click(function (e) {
e.preventDefault();
$("body").css("overflow",  "hidden")
$('.fondo-emergente').fadeIn(400);
$('#tabla_multiviajes').fadeIn(400);
var over = false;

});

$("a#informacion_larga, .contenedor_contenido table tbody tr#larga td:lt(8)").click(function (e) {
e.preventDefault();
$("body").css("overflow",  "hidden")
$('.fondo-emergente').fadeIn(400);
$('#tabla_larga').fadeIn(400);
var over = false;

});

$("a#informacion_estudiantil, .contenedor_contenido table tbody tr#estudiantil td:lt(8)").click(function (e) {
e.preventDefault();
$("body").css("overflow",  "hidden")
$('.fondo-emergente').fadeIn(400);
$('#tabla_estudiantil').fadeIn(400);
var over = false;

});

$("a#informacion_golden, .contenedor_contenido table tbody tr#golden td:lt(8)").click(function (e) {
e.preventDefault();
$("body").css("overflow",  "hidden")
$('.fondo-emergente').fadeIn(400);
$('#tabla_golden').fadeIn(400);
var over = false;

});




//cierra


$('#cerrar').click(function(){
$("body").css("overflow",  "auto")
$('.fondo-emergente').fadeOut(400);
$('#tabla_clasico, #tabla_europa, #tabla_economico, #tabla_mundial, #tabla_multiviajes, #tabla_larga, #tabla_estudiantil, #tabla_golden, #tabla_america, #tabla_schengen').fadeOut(400);
}); 





}); 
 