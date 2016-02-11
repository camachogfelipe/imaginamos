
$(document).ready(function() {

//LOADING
$(window).bind("load", function(){jQuery("#loader").fadeOut("slow");});


//menus

$(".li_subnivel").hover(function(){
  margen_submenu = $(this).width();
  console.log(margen_submenu);
  margen_submenu = margen_submenu/2;
  $(this).children("ul").css({
    'margin-left': margen_submenu - ($(this).children("ul").width()/2)
  });
  $(this).children("ul").stop(true).slideDown();
  }, function(){
    $(this).children("ul").stop(true).slideUp(500);
});


$(".sidr ul li").hover(function(){
  $(this).children("ul").stop(true).slideDown(500);
});
  
$(".sidr ul li").mouseleave(function(){
  $(this).children("ul").stop(true).slideUp(500);
 });


$(".row-fluid .mod_buscamos:even").css("marginLeft", "0");

$(".mod_equipo").each(function() {
      
    var multiplo = $(".mod_equipo").index(this);
    var multiplo4 = multiplo + 1;

    //console.log(multiplo4);

    if ( multiplo4 % 4 == 0) {
    //console.log("Es el numero" + multiplo);
    $(this).css("margin-left", "0")
  }

});

var rotation = 0;

jQuery.fn.rotate = function(degrees) {
    $(".imagen_rota img").css({'-webkit-transform' : 'rotate('+ degrees +'deg)',
                 '-moz-transform' : 'rotate('+ degrees +'deg)',
                 '-ms-transform' : 'rotate('+ degrees +'deg)',
                 'transform' : 'rotate('+ degrees +'deg)'});
};

 $('.bx-next').click(function(event) {
    event.preventDefault();

    if($(".imagen_rota").length){
        rotation += -72;
        $(this).rotate(rotation);
      }

    
});

 $('.bx-prev').click(function(event) {
    event.preventDefault();
    if($(".imagen_rota").length){
        rotation += 72;
        $(this).rotate(rotation);
      }
});


});


