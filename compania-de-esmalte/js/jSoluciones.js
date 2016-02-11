  $(document).ready(function(){
		$(window).bind("load", function(){jQuery("#loader").fadeOut("slow");});
		$(function(){$(".nav-bt-1, .nav-bt-2, .nav-bt-3, .nav-bt-4, .nav-bt-5, .nav-bt-6").find("span").hide().end().hover(function(){$(this).find("span").stop(true, true).fadeIn();}, function(){$(this).find("span").stop(true, true).fadeOut();});});
		$('.bt-nav-sol-1').delay(400).queue(function(next){$(this).css('background','#d9012d'); next();}); $('.bt-nav-sol-1').delay(400).queue(function(next){$(this).css('background','#666966'); next();});
		$('.bt-nav-sol-2').delay(800).queue(function(next){$(this).css('background','#d9012d'); next();}); $('.bt-nav-sol-2').delay(400).queue(function(next){$(this).css('background','#666966'); next();});
		$('.bt-nav-sol-3').delay(1200).queue(function(next){$(this).css('background','#d9012d'); next();}); $('.bt-nav-sol-3').delay(400).queue(function(next){$(this).css('background','#666966'); next();});
		//$('.submenu-sol').hide();
		//$('.submenu-sol-1, .submenu-sol-2, .submenu-sol-3').show();
 		$('.menu-sol').click(function(){
   		if($(this).parent().children('.submenu-sol').is(":hidden")){
    		$('.submenu-sol').fadeOut(-500);
    		$(this).parent().children('.submenu-sol').fadeIn(500);
  		}else{
   			$(this).parent().children('.submenu-sol').fadeOut(-500);
  		}
    });
     
    for(var i =0; i<100; i++){
        for(var j=0; j<100; j++){
						var spag = $(".paging_site-"+i+'_'+j).attr("data-id") - 1;
            $('.paging_site-'+i+'_'+j).pajinate({
							items_per_page : 12,
							start_page : spag
						});
        } 
    }
    
		//Paginadores solucion 1
//		$('.paging_site-1_1').pajinate();
//		$('.paging_site-1_2').pajinate();
//		$('.paging_site-1_3').pajinate();
//		$('.paging_site-1_4').pajinate();
//		$('.paging_site-1_5').pajinate();
//		$('.paging_site-1_6').pajinate();
//		$('.paging_site-1_7').pajinate();
//		$('.paging_site-1_8').pajinate();
//		$('.paging_site-1_9').pajinate();
//		$('.paging_site-1_10').pajinate();
//		$('.paging_site-1_11').pajinate();
//		//Paginadores solucion 2
//		$('.paging_site-2_1').pajinate();
//		$('.paging_site-2_2').pajinate();
//		$('.paging_site-2_3').pajinate();
//		//Paginadores solucion 3
//		$('.paging_site-3_1').pajinate();
//		$('.paging_site-3_2').pajinate();
//		$('.paging_site-3_3').pajinate();
		//Cargar solucion
		$('.item-solucion').click(function(){
			$('.submenu-sol-1, .submenu-sol-2, .submenu-sol-3').show();
			$(".sub-actual").removeClass("sub-actual");
			$(this).addClass("sub-actual");
			$('.con-solucion').hide();
			var ver_contenido = $(this).attr('data-id'); 
			$('#'+ver_contenido).slideDown(750); 
		});
		//Llamado solucion 1
		$('.item-gal-1').click(function(){
			$(".sub-nav-1").removeClass("sub-nav-1"); 
			$(this).addClass("sub-nav-1"); 
			$('.con-item-soluciones-1').hide(); 
			var ver_contenido = $(this).attr('data-id'); 
			$('#'+ver_contenido).fadeIn(1500);
		});
		//Llamado solucion 2
		$('.item-gal-2').click(function(){
			$(".sub-nav-2").removeClass("sub-nav-2"); 
			$(this).addClass("sub-nav-2"); 
			$('.con-item-soluciones-2').hide();
			var ver_contenido = $(this).attr('data-id'); 
			$('#'+ver_contenido).fadeIn(1500); 
		});
		//Llamado solucion 3
		$('.item-gal-3').click(function(){
			$(".sub-nav-3").removeClass("sub-nav-3"); 
			$(this).addClass("sub-nav-3"); 
			$('.con-item-soluciones-3').hide();
			var ver_contenido = $(this).attr('data-id'); 
			$('#'+ver_contenido).fadeIn(1500); 
		});
		$('.over-item-sol').css({opacity: 0}).hover(function(){$(this).stop().animate({opacity: 1},250);}, function(){$(this).stop().animate({opacity: 0},250);});
		$(".footer-red-1, .footer-red-2").hover(function(){$(this).stop().animate({marginTop: "-8px"}, 500,'easeOutBounce');}, function(){$(this).stop().animate({ marginTop: "0px" }, 500,'easeOutBounce');});
		$("ul.footer-map li").hover(function(){$(this).children("span").stop().animate({marginLeft: "-5px"}, 500,'easeOutBounce');}, function(){$(this).children("span").stop().animate({ marginLeft: "0px" }, 500,'easeOutBounce');});
		$("ul.footer-datos li").hover(function(){$(this).children("span").stop().animate({marginTop: "-2px"}, 500,'easeOutBounce');}, function(){$(this).children("span").stop().animate({ marginTop: "0px" }, 500,'easeOutBounce');});
    $('.footer-ahorranito').ahorranito({theme:'claro',type:1});
  });