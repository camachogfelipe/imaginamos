// JavaScript Document
jQuery.fn.reset = function () {
    $(this).each (function() {
        this.reset();
    });
}

jQuery(document).ready(function () {
    // Get banner
	 var banner_source   = $("#banner-template").html();
    var banner_template = Handlebars.compile(banner_source);
    $.ajax({
        url : SITE_URL + 'banner/getBanner',
        type: 'post',
        dataType : 'json',
        data: {
          
        },
        success: function (data) {
            var html    = banner_template({
                banner : data
            });
            
            $('#banner').html(html);
            var sudoSlider = $(".slider").sudoSlider({
                prevNext: true,
                numeric:true,
                continuous:true,
                auto:true,
                pause:4500
            });
                
      
            
        }
    });
	//etiqueta
    var etiqueta_source   = $("#etiqueta-template").html();
    var etiqueta_template = Handlebars.compile(etiqueta_source);
    $.ajax({
        url : SITE_URL + 'aislados/getAislados',
        type: 'post',
        dataType : 'json',
        data: {
          
        },
        success: function (data) {
            var html    = etiqueta_template({
                etiqueta : data
            });
            $('#etiqueta').html(html);
        }
    });
	
		
    var chat_source   = $("#chat-template").html();
    var chat_template = Handlebars.compile(chat_source);
    $.ajax({
        url : SITE_URL + 'aislados/getAislados',
        type: 'post',
        dataType : 'json',
        data: {
          
        },
        success: function (data) {
            var html    = chat_template({
                chat : data
            });
            $('#chat').html(html);
        }
    });
	
    
    // Get highlights
    var highlights_source   = $("#highlights-template").html();
    var highlights_template = Handlebars.compile(highlights_source);
    $.ajax({
        url : SITE_URL + 'highlights/getContent',
        type: 'post',
        dataType : 'json',
        data: {
          
        },
        success: function (data) {
            var html    = highlights_template({
                highlights : data
            });
            $('#highlights').html(html);          
            $('.item_dest1').hover(function(e) {
                if(over==0){
                    $(this).children().children().children('.texto_dest').stop().animate({
                        width:220
                    });
                    $('.item_dest1 h3').stop().animate({
                        width:215
                    });
                    $('.img_dest').stop().animate({
                        marginLeft:10
                    });
                    $('.contenido_dest').stop().animate({
                        width:235
                    });
                    $(this).children('.contenido_dest').stop().animate({
                        width:465
                    });
                    $(this).children().children().children().children('.over_dest').stop().fadeIn(250);
                    over=1
                }else{
                    $('.item_dest1 h3').stop().animate({
                        width:285
                    });
                    $('.img_dest').stop().animate({
                        marginLeft:45
                    });
                    $('.contenido_dest').stop().animate({
                        width:305
                    });
                    $(this).children().children().children('.texto_dest').stop().animate({
                        width:130
                    });
                    $(this).children().children().children().children('.over_dest').stop().fadeOut(250);
                    over=0
                }
            });
        }
    });
        
});
