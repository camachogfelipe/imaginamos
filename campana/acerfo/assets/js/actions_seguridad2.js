
$(document).ready(function() {

  /*babrir contacto*/
  
  $(".bt_contactoheader ").click(function(){
/*    console.log("finciona");*/  
    $(".seccion_contacto").animate({top: 0}, 600);
    $(".opacidad_negro").fadeIn(300);
  });
  
  $("#cerrar_contacto, .opacidad_negro").click(function(){
    $(".seccion_contacto").animate({top: -720}, 600);
    $(".opacidad_negro").fadeOut(300);
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

$(".bt_headerdesplegable").click(function(event) {
       event.preventDefault();
  var alto_footer = $(this).parent().height();
    console.log(alto_footer);

  if(alto_footer <= 55 ) {
    $(this).parent().stop(true).animate({'height':'155px'});
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
     $(this).next().children(".buscador_home input.text_buscarhome").stop(true).animate({'width':'172px'});
     console.log($(".buscador_home").width());
  } 
  else {
    if($(".buscador_home").width() > 45  ) {
      $(this).next().children(".buscador_home input.text_buscarhome").stop(true).animate({'width':'0px'});
    } 
  }
});


});

$(window).load(function() {

  /*centrar*/

$(window).resize(function(){


/*$(".bt_principalmueveizq").click(function(event) {
  event.preventDefault();

  $(".nav_principal2").each(function() {

    var ancho_ventanaactual = $(window).width();
    var elemento = $(this);
    var posicion = elemento.offset();

    if(posicion.left >= 0 && ancho_ventanaactual > 1020 ) {
      console.log(posicion.left + "-" + ancho_ventanaactual);

      $(".bt_navizquierda").addClass("bt_principalpeque");
      $(".copy_homenav1").addClass("copy_homenav1peque");
      $(this).css("opacity", "1");
      $(".nav_principal1").css("opacity", "0");
      $(elemento).css({'left':posicion.left,'top':posicion.top, 'position':'fixed', 'z-index':'100'}); 

      $(this).stop(true).animate({ 
        height: "460px",
        width: "80px",
        left: "-25",
        top: "100" ,
        overflow: "visible",
        opacity: "1"
       }, 1000, function(){
        $(this).css("overflow", "visible")
        $('.cont_navprincipal').css("overflow", "hidden")
        $('.cont_navprincipal').stop(true).animate({
          height: "0",
        }, 50);
      });


      $('.bt_principalpeque:eq(0)').css('top','0');
      $('.bt_principalpeque:eq(1)').css('top','-12px');
      $('.bt_principalpeque:eq(2)').css('top','-24px');
      $('.bt_principalpeque:eq(3)').css('top','-36px');
      $('.bt_principalpeque:eq(4)').css('top','-48px');
      $('.bt_principalpeque:eq(5)').css('top','-60px');


    }

    if(posicion.left >= 0 && ancho_ventanaactual < 1020 ) {
      console.log(posicion.left + "-" + ancho_ventanaactual);

      $(".bt_navizquierda").addClass("bt_principalpeque");
      $(".copy_homenav1").addClass("copy_homenav1peque");
      $(this).css("opacity", "0");
      $(".nav_principal1").css("opacity", "0");
      $(elemento).css({'left':posicion.left,'top':posicion.top, 'position':'fixed', 'z-index':'100'}); 

      $(this).stop(true).animate({ 
        height: "460px",
        width: "80px",
        left: "-25",
        top: "100" ,
        overflow: "visible",
        opacity: "1"
       }, 1000, function(){
        $(this).css("overflow", "visible")
        $('.cont_navprincipal').css("overflow", "hidden")
        $('.cont_navprincipal').stop(true).animate({
          height: "0",
        }, 50);
      });


      $('.bt_principalpeque:eq(0)').css('top','0');
      $('.bt_principalpeque:eq(1)').css('top','-12px');
      $('.bt_principalpeque:eq(2)').css('top','-24px');
      $('.bt_principalpeque:eq(3)').css('top','-36px');
      $('.bt_principalpeque:eq(4)').css('top','-48px');
      $('.bt_principalpeque:eq(5)').css('top','-60px');


    }

  });
  return false;

});


$(".logo_prin").click(function(event) {
       event.preventDefault();

  
  $(".bt_navizquierda").removeClass("bt_principalpeque");
  $(".copy_homenav1").removeClass("copy_homenav1peque");
  $('.bt_navizquierda').removeClass("bt_navizquierda_activo");
  $('.conttabs_general').css({'opacity':'0','height':'0','overflow':'hidden','padding':'0'});
  $('.cont_navprincipal').css({'height':'auto','overflow':'visible'});

    $(".nav_principal1").each(function() {

      var elemento = $(this);
      var elemento_width = $(this).outerWidth()
      var elemento_height = $(this).outerHeight()
      var posicion = elemento.offset();
      var posicion2 = $(".nav_principal2").offset();
      console.log(posicion.left);

       if(posicion2.left <= -25 ) {

        $(".nav_principal2").css("z-index", "10");
        $(".nav_principal1").css("opacity", "0");
        $(".cont_logosbuscadorhome").stop(true).animate({opacity: 1}, 50);
        
        $(".nav_principal2").stop(true).animate({height: elemento_height, width: elemento_width, left: posicion.left, top: posicion.top}, 1000, function(){
          console.log("funciona");

          $(".nav_principal2").stop(true).animate({opacity: 0}, 1000, function(){
            $(this).css({'left':0,'top':0, 'position':'absolute'}); 
          });


          $(".nav_principal1").stop(true).animate({opacity: 1}, 500);
        });

        $('.bt_navizquierda:eq(0)').css('top','12px');
        $('.bt_navizquierda:eq(1)').css('top','0');
        $('.bt_navizquierda:eq(2)').css('top','0');
        $('.bt_navizquierda:eq(3)').css('top','0');
        $('.bt_navizquierda:eq(4)').css('top','0');
        $('.bt_navizquierda:eq(5)').css('top','0');

      } 

      });

    return false;

    });*/


//Resoluciones

var ancho_ventana = $(window).width()

if(ancho_ventana < 1020 ) {
  $(".nav_principal2").stop(true).animate({left: -100}, 500);
  $(".menu_responsivo").stop(true).animate({top: 0}, 500);

}
else {
  $(".nav_principal2").stop(true).animate({left: -25}, 500);
  $(".menu_responsivo").stop(true).animate({top: -50}, 500);
}


/*trabaje*/

  $(".cont_abrirsecciones_trabaje").each(function() {

    $(this).children(".abrirsecciones_trabaje").click(function(event) {
       event.preventDefault();
      $(".detalle_trabaje").css("display", "none");
      $(".cont_seccionestrabajep").css("width", "0");
      $(".abrirsecciones_trabaje").removeClass("abrirsecciones_trabajeactivo");
      $(this).addClass("abrirsecciones_trabajeactivo");
      $(this).parent().next(".detalle_trabaje").stop(true).slideDown();
      $(this).children(".cont_seccionestrabajep").stop(true).animate({width: "250px"}, 500);
      $(".abrirsecciones_trabaje").stop(true).animate({width: "32%"}, 500);
      $(this).prevAll(".abrirsecciones_trabaje").stop(true).animate({width: "22%"}, 500);
      $(this).nextAll().stop(true).animate({width: "22%"}, 500);
      $(this).stop(true).animate({width: "50%"}, 500);
     });

     $(".cerrarx_trabajeprin").click(function(event) {
       event.preventDefault();
       $(this).parent(".detalle_trabaje").css("display", "none");
       $(".cont_seccionestrabajep").css("width", "0");
       $(".abrirsecciones_trabaje").removeClass("abrirsecciones_trabajeactivo");
       $(".abrirsecciones_trabaje").stop(true).animate({width: "32%"}, 500);
    });


  });

$(".bt_postularme").click(function(event) {
       event.preventDefault();
       $(this).next(".cont_formpostularse").stop(true).slideDown();  
       $(this).css("display", "none") 
    });

     $(".cerrar_formtrabaje").click(function(event) {
       event.preventDefault();
       $(this).parent(".cont_formpostularse").css("display", "none");
       $(this).parent(".cont_formpostularse").prev(".bt_postularme").css("display", "block");
    });


       
});

// Ejecutamos la función
$(window).resize();


//tabs general

$('.bt_navizquierda').click(function(event) {
  event.preventDefault();
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

 });




