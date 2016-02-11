$(window).load(function() {

  
  /*tienda*/
  
  $(".cargar_tienda").click(function(){
/*    console.log("finciona");*/  
    $(".seccion_tienda").animate({top: 30}, 1000);
    $(".opacidad_negro").fadeIn(300);
  });

  $(".cerrar_tienda, .opacidad_negro").click(function(){
    $(".seccion_tienda").animate({top: -1020}, 1000);
    $(".opacidad_negro").fadeOut(300);
  });

// intro
  setTimeout(function() {
    
    $(".bt_intro").stop(true).animate({left: 270}, 300, function(){
      $(this).stop(true).animate({left: 240}, 150, function(){
          $(this).stop(true).animate({left: 250}, 100, function(){
          });
      });
    });
  
  } , 1000); // delays 1.5 sec

  //Desaparece tooltip

  //setTimeout(function() {$(".tooltip_carrito").delay(4000).stop(true).fadeOut()}, 2500);
	
	function start(){$(".tooltip_carrito").animate({marginTop: 0}, 600); $(".tooltip_carrito").animate({marginTop: 5}, 600);  setTimeout(start, 800);} start();
	setTimeout(function(){$(".tooltip_carrito").stop(true).fadeOut();}, 8000);

});

$(document).ready(function() {


  //menu principal  
	$( ".btproductos_nav" )
  .mouseenter(function() {
    $(this).children(".submenu_navprin").stop().slideDown();
    $(this).children(".submenu_navprin").css("overflow", "visible");
  })
  .mouseleave(function() {
    $(this).children(".submenu_navprin").stop().slideUp();
    $(this).children(".submenu_navprin").css("overflow", "hidden");
  });
    
  $(".submenu_navprin").mouseleave(function(){
    $(this).stop(true).hide();
   });
	 
	 
	 

  $(".li_subnivel2").hover(function(){
      
      margen_submenu = $(this).width();
      console.log(margen_submenu);
      margen_submenu = margen_submenu/2;
      $(this).children("ul").css({
           'margin-left': margen_submenu - ($(this).children("ul").width()/2)
        });
      $(this).children("ul").stop(true).slideDown();

  }, function(){
    $(this).children("ul").css("display", "none")
  });




  /*Colores tablas*/
  $(".cont_prodselececcionados tr:odd").css("background-color", "#eeeeee"); // filas impares

//LOADING
  $(window).bind("load", function(){jQuery("#loader").fadeOut("slow");});
	

$("a.bt_subir").click(function () {
  $('html,body').animate({scrollTop:'0px'}, 600);return false;
});


// Tabs
  $('.bt_tabdestacadoshome').click(function(event) {
    event.preventDefault();
    $(".bt_tabdestacadoshome").removeClass("bt_tabdestacadoshomeactivo");
    $(this).addClass("bt_tabdestacadoshomeactivo");
    $(".tab_destacados").removeClass("tab_destacadosactivo");
    var ver_tab = $(this).attr('id'); 
    $('.'+ver_tab).animate({'opacity':'1'});
    $('.'+ver_tab).addClass("tab_destacadosactivo");
  });

  


// Centrar
$(window).resize(function(){
  
  $('.intro').css({
      position:'absolute',
      left: ($(window).width() - $('.intro').outerWidth())/2,
   });

  $('.intro').css({
      position:'absolute',
      top: ($(".con_intro").height() - $('.intro').outerHeight())/2
  });

  $('.slider_home1400').css({
      position:'absolute',
      left: ($(".contslider_home").width() - $('.slider_home1400').outerWidth())/2,
   });

  $('.seccion_tienda').css({
      position:'absolute',
      left: ($(window).width() - $('.seccion_tienda').outerWidth())/2,
   });

  
});
  
// Ejecutamos la función
$(window).resize(); 

	setInterval(function(){$(".precio-high span").animate({color: "#ed3b42"}, 1000).animate({color: "#ff8200"}, 1000);}, 3000);

	$(window).bind("load", function(){
    var alto_pantalla = $(".con_intro").height();
    $(".con_intro").delay(3000).animate({top: -alto_pantalla}, 1500, function(){$(".con_intro").fadeOut();});
  });


// Subir intro
  /*$(".bt_intro").click(function(){
    var alto_pantalla = $(".con_intro").height();
    //setTimeout(function() {$(".con_intro").delay(1000).stop(true).animate({'top':-alto_pantalla, 'opacity': 0}, 600)}, 1000);
    $(".con_intro").stop(true).animate({top: -alto_pantalla}, 1800, "easeInOutExpo", function(){
        $(".con_intro").stop(true).fadeOut();
    }); 
  });*/



}); // Ready, yes, yes Ready...


