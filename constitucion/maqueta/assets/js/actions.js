
$(document).ready(function() {


//Header

$('.menu_principal li:first').css("border-left", "none");
$('.menu_principal li:last').css("border-right", "none");

//Acciones scroll
  window.onscroll = scroll; 
  function scroll(){

    var sc = window.pageYOffset;
    console.log('window.pageYOffset = '+sc);

    var seccion_home1 = $("#sec_home1").height();
    var seccion_home2 = $("#sec_home2").height();
    var seccion_home3 = $("#sec_home3").height();
    var seccion_home4 = $("#sec_home4").height();
    var seccion_home5 = $("#sec_home5").height();
    console.log(seccion_home1);

    if ($('#sec_home1').length){

      if(sc > 50){ //si racemes scroll más de 100 pixeles0

        $(".header_abajo").stop(true).animate({top:'-110px'}, 500)
        $(".header").hover(function() { // Mouse over

           $(".header_abajo")
                  .stop()
                  .animate({
                     top: 0
                  }, 500);
                 
            }, function() { // Mouse out

              $(".header_abajo")
                  .stop()
                  .animate({
                     top: -110
                  }, 500);
                  
            });
      }else {
        $(".header_abajo").stop(true).animate({top:'0'}, 500)
      }

      if(sc <= seccion_home1 + 150){ //si racemes scroll más de 100 pixeles
        $(".menu_principal li").removeClass("activo_prin");  
        $("#bt_sechome1").addClass("activo_prin");    
      }

      if(sc >= seccion_home1  && sc <= seccion_home1 + seccion_home2 + 150){ //si racemes scroll más de 100 pixeles
        $(".menu_principal li").removeClass("activo_prin");  
        $("#bt_sechome2").addClass("activo_prin");    
      }

      if(sc >= seccion_home1 + seccion_home2 && sc <= seccion_home1 + seccion_home2 + seccion_home3 + 150){ //si racemes scroll más de 100 pixeles
        $(".menu_principal li").removeClass("activo_prin");  
        $("#bt_sechome3").addClass("activo_prin");    
      }

      if(sc >= seccion_home1 + seccion_home2 + seccion_home3 && sc <= seccion_home1 + seccion_home2 + seccion_home3 + seccion_home4 + 150){ //si racemes scroll más de 100 pixeles
        $(".menu_principal li").removeClass("activo_prin");  
        $("#bt_sechome4").addClass("activo_prin");    
      }

      if(sc >= seccion_home1 + seccion_home2 + seccion_home3 + seccion_home4 - 150){ //si racemes scroll más de 100 pixeles
        $(".menu_principal li").removeClass("activo_prin");  
        $("#bt_sechome5").addClass("activo_prin");    
      }

    }




  }

//Destacados seccion1

$(".destacados220").each(function() {
   $(".hover220").css("opacity", "0");
});
   
     
$(".destacados220").hover(function() { // Mouse over

   $(this).children(".hover220")
          .stop()
          .animate({
             opacity: 1
          }, 300);

       $(this).children().children(".iconos_hover220")
          .stop()
          .animate({
             opacity: 1,
             marginTop: "20px"
          }, 500);
         
    }, function() { // Mouse out

      $(this).children(".hover220")
          .stop()
          .animate({
             opacity: 0
          }, 300);

       $(this).children().children(".iconos_hover220")
          .stop()
          .animate({
             opacity: 0,
             marginTop: "200px"
          }, 500);

          
    });

 
 //Botones tabs seccion3

 $('.bt_tabsgeneral').click(function(event) {
event.preventDefault();
$(".bt_tabsgeneral").stop().animate({top: 10}, 300);
$(this).stop().animate({top: 0}, 300);
$('.conttabs_general').css({'opacity':'0','height':'0','overflow':'hidden','padding':'0 20px'});
    var ver_tab = $(this).attr('id'); 
    $('.'+ver_tab).animate({'opacity':'1'});
    $('.'+ver_tab).css({'height':'auto','overflow':'visible'});
  return false;
   });

$(".bt_tabmision").hover(function() { // Mouse over

   $(this)
          .stop()
          .animate({
             left: 20
          }, 300);

    }, function() { // Mouse out

      $(this)
          .stop()
          .animate({
             left: 0
          }, 300);
    });


$('.bt_tabmision').click(function(event) {
event.preventDefault();
  $('.bt_tabmision').removeClass("bt_tabmisionactivo");
  $(this).addClass("bt_tabmisionactivo");
    $('.cont_tabmision').hide();
    var ver_tab = $(this).attr('id'); 
    $('.'+ver_tab).fadeIn(500); 
    
   });

$('.cont_sliderperfiles ul li').click(function(event) {
event.preventDefault();
$('.cont_sliderperfiles ul li').removeClass("sliderperfiles_activo");
$(this).addClass("sliderperfiles_activo");
    
   });

 //Indice

$("#abrir_indice").hover(function(){
  $(".globo_indice").stop(true).slideDown();
});
  
$("#abrir_indice").mouseleave(function(){
  $(".globo_indice").css("display", "none")
 });


 //Perfil

 $("#tab_perfil1").css("display", "block")

$('.conbt_tabsperfil a').click(function(event) {
event.preventDefault();
  $('.conbt_tabsperfil a').removeClass("activo_botonperfil");
  $(this).addClass("activo_botonperfil");
    $('.tabs_perfil').hide();
    var ver_tab = $(this).attr('id'); 
    $('.'+ver_tab).fadeIn(500); 
    
   });


//Constitucion

$('#caja_comentariosopciones a').click(function(event) {
event.preventDefault();
  $('#caja_comentariosopciones').css("display", "none");
  $('#caja_comentarioscontenido').fadeIn(500); 
    
   });

$('.bt_regresarcomentario').click(function(event) {
event.preventDefault();
  $('#caja_comentariosopciones').fadeIn(500); 
  $('#caja_comentarioscontenido').css("display", "none");
    
   });



$(".btarticulo").hover(function() { // Mouse over

  var id_articulo = $(this).attr("id")
  var str=id_articulo;
  var n=str.split("btarticulo_");
  var new_name = "#articulo_" + n;
  var patron=",";
  new_name=new_name.replace(patron,'')
  
  console.log(new_name);
  
  $(new_name).css({'color':'#fff','backgroundColor':'#999999'});

  });


$(".btparrafo").hover(function() { // Mouse over

  var id_parrafo = $(this).attr("id")
  var str=id_parrafo;
  var n=str.split("btparrafo_");
  var new_name = "#parrafo_" + n;
  var patron=",";
  new_name=new_name.replace(patron,'')
  
  console.log(new_name);
  
  $(new_name).css({'color':'#fff','backgroundColor':'#999999'});
  $(new_name).children("span").css('color', '#fff');

  });

$(".btexpresiones").hover(function() { // Mouse over

  var id_expresiones = $(this).attr("id")
  var str=id_expresiones;
  var n=str.split("btexpresiones_");
  var new_name = "#parrafo_" + n;
  var patron=",";
  new_name=new_name.replace(patron,'')
  
  console.log(new_name);
  
  $(new_name).children("span").css({'color':'#fff','backgroundColor':'#999999'});

  });

$(".caja_comentarios a").mouseleave(function() {
    $(".cont_articuloscons h2, .cont_articuloscons p, .cont_articuloscons p span").css({'color':'#333333','backgroundColor':'transparent'});
  });


});


