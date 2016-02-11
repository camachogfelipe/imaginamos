
$(window).load(function() {


  /*abrir contacto*/
  
  $(".bt_contactoheader ").click(function(){
/*    console.log("finciona");*/  
    $(".seccion_contacto").animate({top: 0}, 600);
    $(".opacidad_negro").fadeIn(300);
  });

  $(".bt_video").click(function(){
/*    console.log("finciona");*/  
    $(".seccion_video").animate({top: 0}, 600);
    $(".opacidad_negro").fadeIn(300);
  });

  $(".bt_imagenenterate").click(function(){
/*    console.log("finciona");*/  
    $(".seccion_imagen").animate({top: 0}, 600);
    $(".opacidad_negro").fadeIn(300);
  });

    $(".bt_fotoequipo").click(function(){
/*    console.log("finciona");*/  
    $(".seccion_imagenequipo").animate({top: 0}, 600);
    $(".opacidad_negro").fadeIn(300);
  });
  
  $("#cerrar_contacto, #cerrar_video, #cerrar_imagen, #cerrar_seccion_imagenequipo, #cerrar_seccion_imagenequipo, #cerrar_seccion_emerlineas, .opacidad_negro").click(function(){
    $(".seccion_contacto, .seccion_video, .seccion_imagen, .seccion_imagenequipo, .seccion_imagenequipo, .seccion_emerlineas").animate({top: -1500}, 1500);
    $(".opacidad_negro").fadeOut(300);
  });

  $(".botoneslineas").click(function(){
/*    console.log("finciona");*/  
    $(".seccion_emerlineas").animate({top: 0}, 600);
    $(".opacidad_negro").fadeIn(300);
  });


//menu principal  
$(".bt_principal").hover(function(){
  $(this).children(".info_btgeneral").stop(true).slideDown();
});
  
$(".bt_principal").mouseleave(function(){
  $(this).children(".info_btgeneral").stop(true).slideUp();
 });

$(".bt_principalpeque").hover(function(){
  $(this).children(".info_btgeneral").css("display", "none")
});

//FOOTER

//Desplegar footer

setTimeout(function() {$(".footer_desplegable").delay(4000).stop(true).animate({'height':'55px'})} , 1500);



$(".bt_headerdesplegable").click(function(event) {
  event.preventDefault();
  var alto_footer = $(this).parent().height();

  if(alto_footer <= 55 ) {
    $(this).parent().stop(true).animate({'height':'155px'});
		setTimeout(function() {$(".footer_desplegable").delay(4000).stop(true).animate({'height':'55px'})} , 5000);
  } 
  else {
    if(alto_footer == 155 ) {
      $(this).parent().stop(true).animate({'height':'55px'});
    } 
  }
});

//Desplegar buscador

$(".buscador_home a").click(function(event) {
       event.preventDefault();
  var ancho_buscar = $(this).next().children(".buscador_home input.text_buscarhome").width();

  console.log(ancho_buscar);

  if($(".buscador_home").width() <= 45 ) {
     $(this).next().children(".buscador_home input.text_buscarhome").stop(true).animate({'width':'172px'},200);
     console.log($(".buscador_home").width());
  } 
  else {
    if($(".buscador_home").width() > 45  ) {
      $(this).next().children(".buscador_home input.text_buscarhome").stop(true).animate({'width':'0px'},200);
    } 
  }
});

//tabs general

$('.lista_menuresponsivo li').click(function(event) {
  event.preventDefault();
  $(".lista_menuresponsivo").children("li").removeClass("active");
  $(this).addClass("active");
  $('.conttabs_general').css({'opacity':'0','height':'0','overflow':'hidden','padding':'0'});
  var ver_tab = $(this).attr('id'); 
  $('.'+ver_tab).animate({'opacity':'1'});
  $('.'+ver_tab).css({'height':'auto','overflow':'visible'});
});

$('.nav_principal1 li').click(function(event) {
  event.preventDefault();
  console.log("hola");
  posicion_li = $(this).parent("ul").children("li").index(this);
  activar_bt = parseInt(posicion_li);
  $(".lista_menuresponsivo").children("li").removeClass("active");
  $(".lista_menuresponsivo").children("li").eq(activar_bt - 1).addClass("active");
  $('.cont_navprincipal').css("overflow", "hidden")
  $('.cont_navprincipal').stop(true).animate({height: "0"}, 50);
  $('.conttabs_general').css({'opacity':'0','height':'0','overflow':'hidden','padding':'0'});
  var ver_tab = $(this).attr('id'); 
  $('.'+ver_tab).animate({'opacity':'1'});
  $('.'+ver_tab).css({'height':'auto','overflow':'visible'});
});


$('.bt_navizquierda').click(function(event) {
  event.preventDefault();

  posicion_li = $(this).parent("ul").children("li").index(this);
  activar_bt = parseInt(posicion_li);
  $(".lista_menuresponsivo").children("li").removeClass("active");
  $(".lista_menuresponsivo").children("li").eq(activar_bt - 1).addClass("active");
  $('.bt_navizquierda').removeClass("bt_navizquierda_activo");
  $(this).addClass("bt_navizquierda_activo");
  return false;
  });

$('.bt_principal').click(function(event) {
event.preventDefault();
  $('.conttabs_general').css({'opacity':'0','height':'0','overflow':'hidden','padding':'0'});
  var ver_tab = $(this).attr('id'); 
  $('.'+ver_tab).animate({'opacity':'1'});
  $('.'+ver_tab).css({'height':'auto','overflow':'visible'});
  return false;
 });

//enterate

$(".cont_pequenterate").hover(function() { // Mouse over
       $(this).children(".hover_botones_enterate")
          .stop()
          .animate({
             opacity: 1
          }, 300);
         
    }, function() { // Mouse out
       $(this).children(".hover_botones_enterate")
          .stop()
          .animate({
             opacity: 0
          }, 300);
    });

//tabs lineas

$('.subcategorias_lineas a').click(function(event) {
  event.preventDefault();
  $(this).parent().children('.subcategorias_lineas a').removeClass("activosubcategorias_lineas");
  $(this).addClass("activosubcategorias_lineas");
  $(".subcategoria_lineas").css("display", "none");
  var ver_tab = $(this).attr('id'); 
  console.log('.'+ver_tab);
  $(this).parent().parent().children('.'+ver_tab).fadeIn(800); 
  return false;
  });

$('.slidermenulineas li').click(function(event) {
  event.preventDefault();
  $(this).parent().children('li').removeClass("activo_sliderlineas");
  $(this).addClass("activo_sliderlineas");
  $(".tab_generallineas").css("display", "none");
  var ver_tab = $(this).attr('id'); 
  console.log('.'+ver_tab);
  $(this).parent().parent().parent().parent().next().next().children('.'+ver_tab).fadeIn(800); 
  return false;
  });


});
