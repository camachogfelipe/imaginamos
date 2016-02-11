// Nombre del proyecto: Ventrevista
// Nombre del archivo: jSite.js
// Descripción: Funciones globales
// Fecha de creación: Agosto del 2012
// Autor: Stive Zambrano

		$(document).ready(function(){
			$('#clouds').pan({fps: 30, speed: 0.8, dir: 'left', depth: 10});
			$('#clouds-2').pan({fps: 30, speed: 0.8, dir: 'right', depth: 10});
			$(function() {
                $('a').bind('click',function(event){
                    var $anchor = $(this);
                    $('html, body').stop().animate({
                        scrollTop: $($anchor.attr('href')).offset().top
                    }, 2000,'easeInOutExpo');
                    event.preventDefault();
                });
				$().UItoTop({easingType: 'easeInOutExpo'});
      });
			if($("#riva-slider-1").size()>0){$("#riva-slider-1").rivaSlider();};
			if($("#slider").size()>0){$("#slider").nivoSlider();};
			if($(".formLogin").size()>0){$(".formLogin").fancybox({width: 520, height: 360, minWidth: 520, minHeight: 360});};
			if($(".formContacto").size()>0){$(".formContacto").fancybox({width: 520, height: 630, minWidth: 520, minHeight: 630});};
			if($(".formMail").size()>0){$(".formMail").fancybox({width: 520, height: 450, minWidth: 520, minHeight: 450});};
			if($(".terminos").size()>0){$(".terminos").fancybox({width: 800, height: 550, minWidth: 800, minHeight: 550});};
			if($(".impressum").size()>0){$(".impressum").fancybox({width: 800, height: 550, minWidth: 800, minHeight: 550});};
			if($(".checkbox").size()>0){$(".checkbox").dgStyle();};
			$(function() {
				var $container	= $('#ib-container'),
					$articles	= $container.children('article'),
					timeout;
					$articles.on( 'mouseenter', function( event ) {	
				var $article	= $(this);
					clearTimeout( timeout );
					timeout = setTimeout( function() {
					if( $article.hasClass('active') ) return false;
						$articles.not( $article.removeClass('blur').addClass('active') )
						.removeClass('active')
						.addClass('blur');
					}, 65 );
				});
				$container.on( 'mouseleave', function( event ) {
					clearTimeout( timeout );
					$articles.removeClass('blur');//'active blur'
				});
			});
			$(function() {
   				var offset = $("#box").offset();
        		var topPadding = 400;
       			$(window).scroll(function() {
            		if ($(window).scrollTop() > offset.top) {
                		$("#box").stop().animate({
                    	marginTop: $(window).scrollTop() - offset.top + topPadding
                		});
            		} else {
                		$("#box").stop().animate({
                    		marginTop: 0
                		});
            		};
        		});
    		});
		});
		$(window).scroll(function() {
    		if ($(this).scrollTop() > 2250) {
        		$('#toBottom').css({
            		'display': 'none'
        		});
			} else {
  				$('#toBottom').css({
      				'display': 'block'
     			});	
    		}
		});
		function new_window(pagina,w,h){
			var left = (screen.width/2)-(w/2);
			var top = (screen.height/2)-(h/2+50);
			var opciones= ('toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
			window.open(pagina,'',opciones);
		};
		/*function new_window(pagina){
			var opciones="toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=yes, top=0, left=0";
			window.open(pagina,"",opciones);
		}*/