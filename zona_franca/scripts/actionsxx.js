$(document).ready(function() {

//menu principal
$("ul.menu li").hover(function(){
  margen_submenu = $(this).width();
    margen_submenu = margen_submenu/2;
    $(this).children("ul").css({
       'margin-left': margen_submenu - ($(this).children("ul").width()/2)

     });
  $(this).children("ul").stop(true).slideDown();
});

$("ul.menu li").mouseleave(function(){
  $(this).children("ul").css("display", "none")
 });



//MENU OFERTAS EMPLEO

$(".campo_ofertaempleo").hover(function(){
  $(this).children().children("ul").stop(true).slideDown();
});

$(".campo_ofertaempleo").mouseleave(function(){
  $(this).children().children("ul").css("display", "none")
 });

$(".campo_areasempleo").hover(function(){
  $(this).children().children("ul").stop(true).slideDown();
});

$(".campo_areasempleo").mouseleave(function(){
  $(this).children().children("ul").css("display", "none")
 });

/******** Formulario registro usuario **************/

  		$("[class=datepicker]").datepicker({
    changeMonth: true,
    changeYear: true,
    yearRange: "-90:+0",
				dateFormat: 'yy-mm-dd'
});

$(".cont_formfluid").children("fieldset").eq(0).css("display", "block");

$("a.siguiente_btn").click(function () {

  $(".pasos_formularios").children("li").removeClass("activo_btformulario");
  var ver_tab = $(this).parent().next("fieldset").attr('id');
  $(".pasos_formularios").children('.'+ver_tab).addClass("activo_btformulario");

  $(this).parent().parent(".cont_formfluid").children("fieldset").css("display", "none");
  $(this).parent().next("fieldset").fadeIn(200);
});

$("a.atras_btn").click(function () {

  $(".pasos_formularios").children("li").removeClass("activo_btformulario");
  var ver_tab = $(this).parent().prev("fieldset").attr('id');
  $(".pasos_formularios").children('.'+ver_tab).addClass("activo_btformulario");

  $(this).parent().parent(".cont_formfluid").children("fieldset").css("display", "none");
  $(this).parent().prev("fieldset").fadeIn(200);
});




/********

  var numend;
  var numfield=0;
  var currfield;
  var nextfield;
  var newDiv;

  $("#next_btn").click(function(){
    numfield ++;
    numend = $("fieldset").length;
    newDiv = numend-1;
   //alert(numfield +"asdsd"+ newDiv);
    if (numfield < numend) {
      currfield=$("#info"+numfield);
      nextfield=$("#info"+(numfield+1));
      currfield.hide();
      nextfield.show();
    }
   if(numfield == newDiv){
      $(this).text("Registrarse");
    }
    else if(numfield >= numend){

      alert("Registro exitoso");
    }
  });

  **************/



/******** END Formulario registro usuario **************/


 });