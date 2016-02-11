

/*-- Datepiker --*/
    $(function() {
        $( ".dpYear" ).datepicker();
    });


/*-- ISOTOPO --*/
$(function() {
        var $container = $('.isotope-gallery');

        $container.imagesLoaded(function() {
            $container.isotope({
                itemSelector: '.isotope-item',
            });
        });

        $container.on('click', '.isotope-item', function() {
            $(this).toggleClass('large');

            $(this).siblings().removeClass('large');

            $container.isotope('reLayout');
        });

        var $container = $('.testimonio-isotopo');

            $container.isotope({
                itemSelector: '.isotope-item',
                masonry: {
                  columnWidth: 350
                },
            });
    });

/*scroll chat*/
$(function() {

    // the element we want to apply the jScrollPane
    var $el = $('.jp-container').jScrollPane({
        verticalGutter: -16
    }),
    // the extension functions and options
    extensionPlugin = {
        extPluginOpts: {
            // speed for the fadeOut animation
            mouseLeaveFadeSpeed: 500,
            // scrollbar fades out after hovertimeout_t milliseconds
            hovertimeout_t: 1000,
            // if set to false, the scrollbar will be shown on mouseenter and hidden on mouseleave
            // if set to true, the same will happen, but the scrollbar will be also hidden on mouseenter after "hovertimeout_t" ms
            // also, it will be shown when we start to scroll and hidden when stopping
            useTimeout: true,
            // the extension only applies for devices with width > deviceWidth
            deviceWidth: 980
        },
        hovertimeout: null, // timeout to hide the scrollbar
        isScrollbarHover: false, // true if the mouse is over the scrollbar
        elementtimeout: null, // avoids showing the scrollbar when moving from inside the element to outside, passing over the scrollbar
        isScrolling: false, // true if scrolling
        addHoverFunc: function() {

            // run only if the window has a width bigger than deviceWidth
            if ($(window).width() <= this.extPluginOpts.deviceWidth)
                return false;

            var instance = this;

            // functions to show / hide the scrollbar
            $.fn.jspmouseenter = $.fn.show;
            $.fn.jspmouseleave = $.fn.fadeOut;

            // hide the jScrollPane vertical bar
            var $vBar = this.getContentPane().siblings('.jspVerticalBar').hide();

            /*
             * mouseenter / mouseleave events on the main element
             * also scrollstart / scrollstop - @James Padolsey : http://james.padolsey.com/javascript/special-scroll-events-for-jquery/
             */
            $el.bind('mouseenter.jsp', function() {

                // show the scrollbar
                $vBar.stop(true, true).jspmouseenter();

                if (!instance.extPluginOpts.useTimeout)
                    return false;

                // hide the scrollbar after hovertimeout_t ms
                clearTimeout(instance.hovertimeout);
                instance.hovertimeout = setTimeout(function() {
                    // if scrolling at the moment don't hide it
                    if (!instance.isScrolling)
                        $vBar.stop(true, true).jspmouseleave(instance.extPluginOpts.mouseLeaveFadeSpeed || 0);
                }, instance.extPluginOpts.hovertimeout_t);


            }).bind('mouseleave.jsp', function() {

                // hide the scrollbar
                if (!instance.extPluginOpts.useTimeout)
                    $vBar.stop(true, true).jspmouseleave(instance.extPluginOpts.mouseLeaveFadeSpeed || 0);
                else {
                    clearTimeout(instance.elementtimeout);
                    if (!instance.isScrolling)
                        $vBar.stop(true, true).jspmouseleave(instance.extPluginOpts.mouseLeaveFadeSpeed || 0);
                }

            });

            if (this.extPluginOpts.useTimeout) {

                $el.bind('scrollstart.jsp', function() {

                    // when scrolling show the scrollbar
                    clearTimeout(instance.hovertimeout);
                    instance.isScrolling = true;
                    $vBar.stop(true, true).jspmouseenter();

                }).bind('scrollstop.jsp', function() {

                    // when stop scrolling hide the scrollbar (if not hovering it at the moment)
                    clearTimeout(instance.hovertimeout);
                    instance.isScrolling = false;
                    instance.hovertimeout = setTimeout(function() {
                        if (!instance.isScrollbarHover)
                            $vBar.stop(true, true).jspmouseleave(instance.extPluginOpts.mouseLeaveFadeSpeed || 0);
                    }, instance.extPluginOpts.hovertimeout_t);

                });

                // wrap the scrollbar
                // we need this to be able to add the mouseenter / mouseleave events to the scrollbar
                var $vBarWrapper = $('<div/>').css({
                    position: 'absolute',
                    left: $vBar.css('left'),
                    top: $vBar.css('top'),
                    right: $vBar.css('right'),
                    bottom: $vBar.css('bottom'),
                    width: $vBar.width(),
                    height: $vBar.height()
                }).bind('mouseenter.jsp', function() {

                    clearTimeout(instance.hovertimeout);
                    clearTimeout(instance.elementtimeout);

                    instance.isScrollbarHover = true;

                    // show the scrollbar after 100 ms.
                    // avoids showing the scrollbar when moving from inside the element to outside, passing over the scrollbar
                    instance.elementtimeout = setTimeout(function() {
                        $vBar.stop(true, true).jspmouseenter();
                    }, 100);

                }).bind('mouseleave.jsp', function() {

                    // hide the scrollbar after hovertimeout_t
                    clearTimeout(instance.hovertimeout);
                    instance.isScrollbarHover = false;
                    instance.hovertimeout = setTimeout(function() {
                        // if scrolling at the moment don't hide it
                        if (!instance.isScrolling)
                            $vBar.stop(true, true).jspmouseleave(instance.extPluginOpts.mouseLeaveFadeSpeed || 0);
                    }, instance.extPluginOpts.hovertimeout_t);

                });

                $vBar.wrap($vBarWrapper);

            }

        }

    },
    // the jScrollPane instance
    jspapi = $el.data('jsp');

   if ($('.jp-container').length) {
        // extend the jScollPane by merging
        $.extend(true, jspapi, extensionPlugin);
        jspapi.addHoverFunc();

    }

});

// JavaScript Document
$(window).resize(function() {

})

/*slider lateral*/

$(function() {
    $('.carousel').carouFredSel({
        width: '100%',
        items: {
            visible: 1,
            start: 0
        },
        scroll: {
            items: 1,
            duration: 1000,
            timeoutDuration: 3000
        },
        pagination: {
            container: '.pager',
            deviation: 1
        }
    });
});



/*slider alquiler*/
$(function() {
    $('.sliderAlquiler').carouFredSel({
        width: '100%',
        items: {
            visible: 1,
            start: 1
        },
        scroll: {
            items: 1,
            duration: 2000,
            timeoutDuration: 3500
        },
        prev: '#prev',
        next: '#next',
        pagination: {
            container: '#pager',
            deviation: 1
        }
    });
});

$(document).ready(function() {

    $(window).resize(function() {

        // aquí le pasamos la clase o id de nuestro div a centrar (en este caso "caja")
        $('.pager_n').css({
            position: 'absolute',
            left: ($('.newslider').width() - $('.pager_n').outerWidth()) / 2
        });

    });


// Ejecutamos la función
    $(window).resize();

});



$(document).ready(function() {

    /* accordion */
    $('.acordion').accordion({
        active: false,
        header: '.head',
        autoheight: false,
        animated: 'easeslide'
    });

    /*  PLACEHOLDER */
    $(function() {
        $('input, textarea').placeholder();
    });

//    /*  SLIDER */
//    $(".flexslider").flexslider({
//        animation: "fade",
//        slideshow: true
//    });

    /*  SELECTS  */
    if ($('select').length) {
        $("select").chosen();
    }

    /*  SLIDER */
    $('#banner1').bjqs({
        'animation': 'fade',
        'height': 310
    });

    $('#banner2').bjqs({
        'animation': 'fade',
        'height': 310
    });

    $('.main-slide-cont').css({
        'height': $('.main-slide-cont').height() - 114
    });

    /*mensaje chat*/


    $('.mensajecerrar').css({'right': -$('.mensajecerrar').width() - 100}, 500);


    $('.btnclose').click(function() {
        $('.mensajecerrar').stop().animate({'right': -$('.mensajecerrar').width() - 50}, 500);

        $('.collapchat').stop().animate({'height': '0px'}, 500);

        if ($('.icon-browser').css('display', 'none')) {
            $('.icon-browser').css({'display': 'block'});
            $('.icon-minus').css({'display': 'none'});
        } else {

        }
        ;
    });

    $('.acepto').click(function() {
        $('.mensajecerrar').stop().animate({'right': -$('.mensajecerrar').width() - 50}, 500);


    });


    /*  ocultarchat */
    $('.icon-browser').click(function() {
        $('.collapchat').animate({height: $('.tamanochat').height()}, 500);
    });
    $('.nombredeusuario').click(function() {
        $('.collapchat').animate({height: $('.tamanochat').height()}, 500);

        if ($('.icon-browser').css('display', 'none')) {
            $('.icon-browser').css({'display': 'none'});
            $('.icon-minus').css({'display': 'block'});
        } else {
            $('.icon-browser').css({'display': 'block'});
            $('.icon-minus').css({'display': 'none'});
        }
        ;
    });

    $('.icon-minus').click(function() {
        $('.collapchat').stop().animate({'height': '0px'}, 500);
    });

    $('.icon-cross-3').click(function() {
        $('.mensajecerrar').css({'bottom': $('.chat').height() + 20});

        $('.mensajecerrar').stop().animate({'right': '0px'}, 500);

        /*$('.collapchat').stop().animate({'height':'0px'},500);

         if ($('.icon-browser').css('display','none')) {
         $('.icon-browser').css({'display':'block'});
         $('.icon-minus').css({'display':'none'});
         } else{

         };*/
    });

    $('.toggle a').click(function() {
        $('.toggle a').toggle();

    });

    /*--llamar detalle pqr--*/

    $('.verdeta, enlacemas').click(function(evento) {
        $('.pagiado').stop().animate({
            'margin-left':'-100%'
        },1000);
        $('.itemDetalle').stop().animate({
            'margin-left':'0%'
        },1000);
        $('.paginador').css({
            'display':'none'
        });
        $('.atrasDetalle').css({
            'display':'block'
        });
    });
    $('.atrasDetalle').click(function(evento) {
        $('.pagiado').stop().animate({
            'margin-left':'0%'
        },1000);
        $('.itemDetalle').stop().animate({
            'margin-left':'20px'
        },1000);
        $('.paginador').css({
            'display':'block'
        });
        $('.atrasDetalle').css({
            'display':'none'
        });
    });

    /*collapsible formularios*/

    $('.activoheader').parent('.collapsible').css({'height': $('.contienecollapsible').parent().children('.contienecollapsible').height() + 40}, 500);
    $('.headerdetalle').css({'max-height': $('.titulodetalle').height()}, 500);


    /*mostrar loguin*/
    $('.log').click(function() {
        $('.plegable').stop().animate({height: $('.contieneplegable').height() + 20}, 500);
    });

    /*Evento seleccionar*/

    $("li.off").click(function(event) {
        event.preventDefault();
        $(".on").removeClass("on");
        $(this).addClass("on");
    });
    $("li.inactivo").click(function(event) {
        event.preventDefault();
        $(".activo").removeClass("activo");
        $(this).addClass("activo");
    });

//
//    /*  SLIDER */
//    $(".newslider").flexslider({
//        animation: "slider",
//        slideshow: true
//    });


    /*  autosize */
    $(function() {
        $('.animated').autosize({append: "\n"});
    });



    /*  SCROLLORAMA */
    if ($('.first').length) {
        $('.first').parallax("center", -0.4);
    }

    if ($('.second').length) {
        $('.second').parallax("center", -1.2);
    }
    if ($('.third').length) {
        $('.third').parallax("center", -1.2);
    }
    if ($('.fourth').length) {
        $('.fourth').parallax("center", -0.5);
    }
    if ($('#contenedor').length) {

        var scrollorama = $.scrollorama({blocks: '#contenedor'});

        scrollorama.animate('.header-block', {delay: $('.main-slide-cont').height(), duration: 0, property: 'position', start: 'static', end: 'fixed'});

        /*scrollorama.animate('.chat', {property: 'position', start: 'fixed', end: 'fixed'});*/

        scrollorama.animate('.header-block', {delay: $('.main-slide-cont').height(), duration: 0, property: 'margin-top', start: $('.main-slide-cont').height(), end: 0});

        scrollorama.animate('.main-content', {delay: $('.main-slide-cont').height(), duration: 0, property: 'margin-top', start: 0, end: $('.main-slide-cont').height() + 114});

        scrollorama.animate('.main-slide-cont', {delay: $('.main-slide-cont').height(), duration: 0, property: 'display', start: 'block', end: 'none'});

    }

})

function addClass(id) {
    $('#' + id).parent().stop().animate({'height': $('#' + id).parent().children('.contienecollapsible').height() + 40}, 500);
    $('#' + id).removeClass("headercollap");
    $('#' + id).addClass("activoheader");
    $('#' + id).removeAttr("onclick");
    $('#' + id).attr("onclick", "removeClass(this.id)");

    if ($('#' + id).children().children('.open').css('display', 'none')) {
        $('#' + id).children().children('.open').css({'display': 'none'});
        $('#' + id).children().children('.close').css({'display': 'block'});
    } else {
        $('#' + id).children().children('.open').css({'display': 'block'});
        $('#' + id).children().children('.close').css({'display': 'none'});
    }
    ;
}

function removeClass(id) {
    $('#' + id).removeClass("activoheader");
    $('#' + id).addClass("headercollap");
    $('#' + id).removeAttr("onclick");
    $('#' + id).attr("onclick", "addClass(this.id)");

    $('#' + id).parent().stop().animate({'height': '40'}, 500);

    if ($('#' + id).children().children('.open').css('display', 'block')) {
        $('#' + id).children().children('.open').css({'display': 'block'});
        $('#' + id).children().children('.close').css({'display': 'none'});
    } else {
        $('#' + id).children().children('.open').css({'display': 'none'});
        $('#' + id).children().children('.close').css({'display': 'block'});
    }
    ;
}


/*desplegable menu*/
$(document).ready(function() {
    $('.subm').mouseenter(function() {
        $('.desplegable', this).animate({height: $('.collap').height()}, 300);
    });

    $('.subm').mouseleave(function() {
        $('.desplegable', this).stop().animate({'height': '0px'}, 300);
    });

});


/*PREVIW BUSCADOR*/
    $('.contenidosNoticia .detale').on('click touchend', function(){
        $(this).siblings('.detale').animate({'opacity':0.3},200).removeClass('seleted');
        $('.selected').removeClass('selected');
        $(this).css({'opacity':1}).addClass('selected');

        var index = $(this).parent().find('.detale').index(this)+1;/*finding index siblings*/
        var appendIndex = (Math.ceil(index/2)*2)-1;


        if($('.contenidosNoticia .detale').eq(appendIndex).size()===0){
            appendIndex--;
            if($('.contenidosNoticia .detale').eq(appendIndex).size()===0){
                appendIndex--;
            }
        }
        var theURL = $(this).attr('data-link');
        $.ajax({
            url: theURL,
            type: 'post',
            data: {},
            success: function(data) {
                $('.contenidosNoticia .preview').stop().animate({'height':0,'padding':0},200);
                setTimeout(function(){
                    $('.contenidosNoticia .preview').remove();
                },250);
                setTimeout(function(){
                    $('.contenidosNoticia .detale').eq(appendIndex).after(data);
                    /*setupDetails();*/
                    $('.contenidosNoticia .preview').stop().animate({height: $('.contenedorPreview').height()+20},500);

                            /*slider detalle*/
                            $('.sliderAlquiler').carouFredSel({
                                width: '100%',
                                items: {
                                    visible: 1,
                                    start: 1
                                },
                                scroll: {
                                    items: 1,
                                    duration: 2000,
                                    timeoutDuration: 3500
                                },
                                prev: '#prev',
                                next: '#next',
                                pagination: {
                                    container: '#pager',
                                    deviation: 1
                                }
                            });

                            /*animacion form*/
                            $('.btnsli').click(function(evento) {
                                $('.form').stop().animate({
                                        'margin-left':'0%'
                                    },1000);

                                $('.sli').stop().animate({
                                        'margin-left':'-100%'
                                    },1000);
                            });



                            /*  SELECTS  */
                            if ($('select').length) {
                                $("select").chosen();
                            }

                            /*  Eliminar div con animacion  */
                            $('.closeBtn').click(function (evento) {

                                $('.contenidosNoticia .preview').animate({'height':0 },500, function () {
                                  $('.contenidosNoticia .preview').remove();
                                });
                                $('.detale').animate({'opacity':1},200).removeClass('seleted');
                                $('.selected').removeClass('selected');
                            });


                },400);
            }
        });
    });

