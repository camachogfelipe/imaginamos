// JavaScript Document
jQuery(document).ready(function() {
	jQuery(".video").click(function(event) {
		jQuery("body").css("overflow-y", "hidden");
		var data = jQuery(".video_embed").attr("data-id");
		jQuery(".iframe").attr("src", data);
		jQuery(".video_embed").fadeIn();
		var height = jQuery(".video_embed").height() - jQuery(".video_close").height() - 50;
		jQuery(".iframe").height(height);
	});
	jQuery(".close").click(function(event) {
		jQuery("body").css("overflow-y", "auto");
		jQuery(".iframe").attr("src", "");
		jQuery(".video_embed").fadeOut();
	});
	jQuery(".btn").hover(function (event) {
			jQuery(this).children(".texto").fadeIn();
		},
		function () {
			jQuery(this).children(".texto").fadeOut();
	});
	if(jQuery(".footer-ahorranito").size()>0){jQuery(".footer-ahorranito").ahorranito({theme: "oscuro"});};
	jQuery("footer .left").hover(function (event) {
			var img = jQuery(this).children("img").attr("data-id");
			jQuery(this).children(".texto_footer").show();
			jQuery(this).children("img").attr("src", "assets/img/"+img+"_neg.png");
			jQuery(this).children(".texto2_footer").removeClass("texto2_footer2");
			jQuery(this).children(".texto2_footer").addClass("footer_white");
		},
		function () {
			var img = jQuery(this).children("img").attr("data-id");
			jQuery(this).children(".texto_footer").hide();
			jQuery(this).children("img").attr("src", "assets/img/"+img+".png");
			jQuery(this).children(".texto2_footer").addClass("texto2_footer2");
			jQuery(this).children(".texto2_footer").removeClass("footer_white");
	});
	
	jQuery(".element").hover(function (event) {
			jQuery(this).children(".caja_element_over").fadeIn();
		},
		function () {
			jQuery(this).children(".caja_element_over").fadeOut();
	});
	
	jQuery(".ver_perfil").click(function(event) {
		if(jQuery(this).parent().parent().parent().is(":hidden")) {
			jQuery(this).parent().parent().removeClass("seleccionado");
			jQuery(this).parent().parent().children(".datos_persona, .extracto").fadeOut();
			jQuery("#caja_element_over").addClass("caja_element_over");
			jQuery(this).parent(".caja_element_over").parent().children(".datos_persona, .extracto").hide();
			jQuery("#second").append('<div id="clear" class="clear"></div>');
			jQuery("#clear").append('<hr id="hrquienes">');
		}
		else {
			jQuery(this).parent().parent().addClass("seleccionado");
			jQuery(this).parent().parent().children(".datos_persona, .extracto").fadeIn();
			jQuery(this).parent("#caja_element_over").hide().removeClass("caja_element_over");
			jQuery(this).parent(".caja_element_over").parent().children(".datos_persona, .extracto").show();
			jQuery("#hrquienes").remove();
			jQuery("#clear").remove();
		}
	});
	jQuery(".close").click(function(event) {
			jQuery(this).parent().parent().removeClass("seleccionado");
			jQuery(this).parent().parent().children(".datos_persona, .extracto").fadeOut();
			jQuery("#caja_element_over").addClass("caja_element_over");
			jQuery(this).parent(".caja_element_over").parent().children(".datos_persona, .extracto").hide();
			jQuery("#second").after('<div id="clear" class="clear"></div>');
			jQuery("#clear").after('<hr id="hrquienes">');
	});
	if(jQuery.browser.msie){jQuery('input[placeholder], textarea[placeholder]').each(function(){var input = jQuery(this); jQuery(input).val(input.attr('placeholder')); jQuery(input).focus(function(){if (input.val() == input.attr('placeholder')){input.val('');}}); jQuery(input).blur(function(){if (input.val() == '' || input.val() == input.attr('placeholder')){input.val(input.attr('placeholder'));}});});};
	jQuery("form").validationEngine({prettySelect : true, useSuffix: "_chzn"});
	
	jQuery("#flexi").flexisel({
		visibleItems: 3,
		animationSpeed: 1000,
		autoPlay: true,
		autoPlaySpeed: 3000,    		
		pauseOnHover: true,
		enableResponsiveBreakpoints: true,
    	responsiveBreakpoints: { 
    		portrait: { 
    			changePoint:480,
    			visibleItems: 1
    		}, 
    		landscape: { 
    			changePoint:640,
    			visibleItems: 2
    		},
    		tablet: { 
    			changePoint:768,
    			visibleItems: 2
    		},
				mobile: {
					changePoint:340,
					visibleItems: 1
				}
    	}
    });
		
		jQuery("#flexi2").flexisel({
			visibleItems: 6,
			clone:false,
			animationSpeed: 1000,
			autoPlay: false,
			autoPlaySpeed: 3000,    		
			pauseOnHover: true,
			enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 1
					}, 
					landscape: { 
						changePoint:640,
						visibleItems: 2
					},
					tablet: { 
						changePoint:768,
						visibleItems: 2
					},
					mobile: {
						changePoint:340,
						visibleItems: 1
					}
				}
    });
		
		jQuery(".destacados").hover(function (event) {
			var hover = jQuery(this).children().children("img").attr("data-id");
			jQuery(this).children().children("img").attr("src", "assets/img/destacados/"+hover+"_b.png");
		},
		function () {
			var hover = jQuery(this).children().children("img").attr("data-id");
			jQuery(this).children().children("img").attr("src", "assets/img/destacados/"+hover+".png");
		});
		
		jQuery(".icon").hover(function (event) {
			var hover = jQuery(this).children().children("img").attr("data-id");
			jQuery(this).children().children("img").attr("src", "assets/img/servicios/"+hover+"a.png");
		},
		function () {
			var hover = jQuery(this).children().children("img").attr("data-id");
			jQuery(this).children().children("img").attr("src", "assets/img/servicios/"+hover+".png");
	});
});