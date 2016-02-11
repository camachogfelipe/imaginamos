	// Nombre del proyecto: ASSERTO
	// Nombre del archivo: actions.js
	// Descripción: Funciones globales
	// Fecha de creación: Mayo del 2013
	// Autor: Stive Zambrano


  $(document).ready(function(){
    $(window).bind("load", function(){$("#loader").fadeOut("slow");});
		$(".main-nav a").first().addClass("nav-act");
    $('.destacado').hover(function(){$(this).children('.pick-des').fadeIn(250);}, function(){$(this).children('.pick-des').hide();});
    var r = document.getElementById('bgBody');
    bgFormat();
    function bgFormat(){
    var children = document.getElementById('bgBody').getElementsByTagName('li').length;
    $("#bgUl div").html("<h1>style</h1>")
    if (children>0){$("#bgUl a").removeAttr("href")}
    }
    $('.footer-ahorranito').ahorranito({theme:'claro',type:1});
  });