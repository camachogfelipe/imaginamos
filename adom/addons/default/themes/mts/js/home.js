// JavaScript Document
jQuery.fn.reset = function () {
    $(this).each (function() {
        this.reset();
    });
}
//jQuery(document).ready(function () {
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
        /*  SLIDER */
        $(".flexslider").flexslider({
            animation: "fade",
            slideshow: true
        });
            
    }
});
    
    
// Get home description
$.ajax({
    url : SITE_URL + 'homeajax/getHome',
    type: 'post',
    dataType : 'json',
    data: {
          
    },
    success: function (data) {
        $('#desHome').append('<p>'+data.description+'</p>'); 
    }
});
   
// Get services
var services_source   = $("#services-template").html();
var services_template = Handlebars.compile(services_source);
$.ajax({
    url : SITE_URL + 'services/getContent',
    type: 'post',
    dataType : 'json',
    data: {
          
    },
    success: function (data) {
        var html    = services_template({
            services : data
        });
        $('#services').html(html).bjqs({
            'animation' : 'fade',
            'height' : 310
        });
            
    }
});
$.ajax({
    url : SITE_URL + 'services/getPage',
    type: 'post',
    dataType : 'json',
    data: {   
    },
    success: function (data) {
        $('#title_services').append('<p>'+data.description+'</p>');
    }
});
    
// Get testimonies
var testimonies_source   = $("#testimonies-template").html();
var testimonies_template = Handlebars.compile(testimonies_source);
$.ajax({
    url : SITE_URL + 'testimonies/getContent',
    type: 'post',
    dataType : 'json',
    data: {
          
    },
    success: function (data) {
        var html    = testimonies_template({
            testimonies : data
        });
            
        $('#testimonies').html(html).bjqs({
            'animation' : 'fade',
            'height' : 310
        });
            
    }
});
$.ajax({
    url : SITE_URL + 'testimonies/getPage',
    type: 'post',
    dataType : 'json',
    data: {   
    },
    success: function (data) {
        $('#title_testimonies').append('<p>'+data.description+'</p>');
    }
});
    
// Get Noticias
var notices_source   = $("#notices-template").html();
var notices_template = Handlebars.compile(notices_source);
$.ajax({
    url : SITE_URL + 'homeajax/getNotices',
    type: 'post',
    dataType : 'json',
    data: {
          
    },
    success: function (data) {
        console.log(data);
        
        var html    = notices_template({
            notices : data
        });
        $('#notices').html(html);
        /*  SLIDER */
        /*slider noticias*/
        $(function() {

            $('.noticias').carouFredSel({
                width: '100%',
                items: 3,
                auto: {
                    duration: 1250,
                    timeoutDuration: 2500,
                    items: 1,
                },
                pagination: {
                    container: '.pager_n',
                    duration: 1250,
                    timeoutDuration: 2500,
                    scroll: 3,
                }
            });
        });
        var popup = $('.pager_n');
        popup.css({
                'left': ($('.newslider').width() / 2 - $(popup).width() / 2) + 'px'
        });
      
    }
});

    
// Send form contact
$('#formContact').click(function(){
    console.log($('#id_form').serialize());
    $.ajax({
        url : SITE_URL + 'homeajax/sendEmail',
        type: 'post',          
        data: $('#id_form').serialize(),
        beforeSend : function(){
            $('.message').html('enviando...');
        },
        success: function (data) {
            $('.message').html(data);
            if (data=='exito'){
                $('.message').html('Se ha enviado un correo al administrador.');
                $('#id_form').reset();
            }
        },
        complete : function(){
               
        }
    });
});
//})
