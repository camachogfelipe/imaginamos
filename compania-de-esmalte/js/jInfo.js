	$(document).ready(function(){
		$(window).bind("load", function(){jQuery("#loader").fadeOut("slow");});
		$(function(){$(".nav-bt-1, .nav-bt-2, .nav-bt-3, .nav-bt-4, .nav-bt-5, .nav-bt-6").find("span").hide().end().hover(function(){$(this).find("span").stop(true, true).fadeIn();}, function(){$(this).find("span").stop(true, true).fadeOut();});});
		$('.scroll-sol').jScrollPane();
		$(".footer-red-1, .footer-red-2").hover(function(){$(this).stop().animate({marginTop: "-8px"}, 500,'easeOutBounce');}, function(){$(this).stop().animate({ marginTop: "0px" }, 500,'easeOutBounce');});
		$("ul.footer-map li").hover(function(){$(this).children("span").stop().animate({marginLeft: "-5px"}, 500,'easeOutBounce');}, function(){$(this).children("span").stop().animate({ marginLeft: "0px" }, 500,'easeOutBounce');});
		$("ul.footer-datos li").hover(function(){$(this).children("span").stop().animate({marginTop: "-2px"}, 500,'easeOutBounce');}, function(){$(this).children("span").stop().animate({ marginTop: "0px" }, 500,'easeOutBounce');});
    $('.footer-ahorranito').ahorranito({theme:'claro',type:1});
  });