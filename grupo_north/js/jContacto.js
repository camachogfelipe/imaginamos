	$(document).ready(function(){
		$(window).bind("load", function(){jQuery("#loader").fadeOut("slow");});
		$(function(){$(".nav-bt-1, .nav-bt-2, .nav-bt-3, .nav-bt-4, .nav-bt-5, .nav-bt-6").find("span").hide().end().hover(function(){$(this).find("span").stop(true, true).fadeIn();}, function(){$(this).find("span").stop(true, true).fadeOut();});});
		$('.modal-form').colorbox({inline:true, width:"600px"});
		/*$('.contacto-info').royalSlider({
			autoHeight: true,
			arrowsNav: true,
			arrowsNavAutoHide: false,
			fadeinLoadedSlide: false,
			controlNavigationSpacing: 0,
			slidesSpacing: 0,
			navigateByClick: false,
			controlNavigation: 'none',
			imageScaleMode: 'none',
			controlsInside: false,
			imageAlignCenter:false,
			blockLoop: false,
			loop: false,
			loopRewind: false,
			numImagesToPreload: 6,
			transitionType: 'move',
			keyboardNavEnabled: true,
			autoPlay: {enabled: true, pauseOnHover: false}
		});*/
		if($.browser.msie){$('input[placeholder], textarea[placeholder]').each(function(){var input = $(this); $(input).val(input.attr('placeholder')); $(input).focus(function(){if (input.val() == input.attr('placeholder')){input.val('');}}); $(input).blur(function(){if (input.val() == '' || input.val() == input.attr('placeholder')){input.val(input.attr('placeholder'));}});});};
		$("#formulario").validationEngine({prettySelect : true, useSuffix: "_chzn"});
		$(".sel-item").chosen({allow_single_deselect : true});
		$(".footer-red-1, .footer-red-2").hover(function(){$(this).stop().animate({marginTop: "-8px"}, 500,'easeOutBounce');}, function(){$(this).stop().animate({ marginTop: "0px" }, 500,'easeOutBounce');});
		$("ul.footer-map li").hover(function(){$(this).children("span").stop().animate({marginLeft: "-5px"}, 500,'easeOutBounce');}, function(){$(this).children("span").stop().animate({ marginLeft: "0px" }, 500,'easeOutBounce');});
		$("ul.footer-datos li").hover(function(){$(this).children("span").stop().animate({marginTop: "-2px"}, 500,'easeOutBounce');}, function(){$(this).children("span").stop().animate({ marginTop: "0px" }, 500,'easeOutBounce');});
    $('.footer-ahorranito').ahorranito({theme:'claro',type:1});
		$('.modal-terminos').colorbox({inline:true, width:"600px"});
  });
  
function getcities(value) {
	if(value != "") {
		jQuery.support.cors = true;
		jQuery.ajax({
			url: "http://www.gruponorth.com/site/contacto",
			type: "POST",
			data: {
				ciudades: true,
				code: value
			},
			dataType : (jQuery.browser.msie) ? 'text' : 'json',
			cache : 'false',
			jsonp : 'jsoncallback',
			crossDomain: true,
			contentType: "application/json; charset=utf-8",
			success: function(data) {
				var salida1 = '<select name="ciudad" class="sel-item validate[required]" id="citiesselect" tabindex="9">\n<option value="">Ciudad</option>\n';
				var salida2 = '<li style="" class="active-result" id="citiesselect_chzn_o_0">Ciudad</li>';
				var x = 1;
				for (var p in data) {
					salida1 += '<option value="' + data[p].Id + '">' + ' &bull; &nbsp; ' + data[p].Name + '</option>\n';
					salida2 += '<li style="" class="active-result" id="citiesselect_chzn_o_'+x+'"> &bull; &nbsp; '+data[p].Name+'</li>';
					++x;
				}
				salida1 += '</select>';
				alert("Se va a escribir ciudades");
				jQuery("#cities").html(salida1);
				jQuery("#citiesselect_chzn div ul").html(salida2);
				jQuery("#citiesselect").chosen({allow_single_deselect : true});
			},
			error: function(jqXHR, textStatus, errorThrown) {
				alert(errorThrown);
				// Si se presento algun error, mostramos la descripcion
				// alert( "Error\nAlgo ha salido mal. Por favor int�ntalo de nuevo en unos minutos -> "+textStatus);
			}
		});
	}
}