// JavaScript Document
$(document).ready(function()
    {
		$("#b1").hover(
		
			function(){
				$("#b1-act",this).animate({
				'opacity': "1"
				});
			},
			function(){
				$("#b1-act",this).animate({
				'opacity': "0"

			  	});
			}
		);
		
		$("#b2").hover(
		
			function(){
				$("#b2-act",this).animate({
				'opacity': "1"
				});
			},
			function(){
				$("#b2-act",this).animate({
				'opacity': "0"

			  	});
			}
		);
		
		$("#b3").hover(
		
			function(){
				$("#b3-act",this).animate({
				'opacity': "1"
				});
			},
			function(){
				$("#b3-act",this).animate({
				'opacity': "0"

			  	});
			}
		);
		
		$("#bot-volver").hover(
		
			function(){
				$("#bot-volver-act",this).animate({
				'opacity': "1"
				});
			},
			function(){
				$("#bot-volver-act",this).animate({
				'opacity': "0"

			  	});
			}
		);
		var winWidth = $(window).width();
		$('#menu-cover').height(winWidth);
		$('#menu-cover').css('display', 'none');
		$('#menu-popup-box').css('display', 'none');
		
		$('#globo').click(function() {
			$("#menu-cover").fadeIn("fast");
			$("#menu-popup-box").fadeIn("fast");
		});
		$('#close, #menu-cover').click(function() {
			$("#menu-cover").fadeOut("fast");
			$("#menu-popup-box").fadeOut("fast");
		});
 		
 		
	});