$(document).ready(function() {


    $('.perfil-cont-iz').hover(
        function() {
            $(".lapiz2", this).css({
                "display": 'block'
            })
            $(".lapiz3", this).css({
                "display": 'block'
            })
            $(".lapiz4", this).css({
                "display": 'block'
            })
        },
        function() {
            $(".lapiz2", this).css({
                "display": 'none'
            })
            $(".lapiz3", this).css({
                "display": 'none'
            })
            $(".lapiz4", this).css({
                "display": 'none'
            })
        }
        );

    $('.perfil-cont-de').hover(
        function() {
            $(".lapiz1", this).css({
                "display": 'block'
            })
        },
        function() {
            $(".lapiz1", this).css({
                "display": 'none'
            })
        }
        );

    /*Agregar cancion en perfil*/
    var agrCancionIsOpen = false
    $('.agrCancion').click(function() {
        if (agrCancionIsOpen == false) {
            $('#agrCancion').css('display', 'block');
            agrCancionIsOpen = true
        } else {
            $('#agrCancion').css('display', 'none');
            agrCancionIsOpen = false
        }
    })



    var carousel = $("#carousel").featureCarousel({

        smallFeatureWidth: 150,
        smallFeatureHeight: 150,
        smallFeatureOffset: 20,
        autoPlay: 0,
        leftButtonTag: '#carousel-left',
        rightButtonTag: '#carousel-right'
    });



    $("#but_prev").click(function() {
        carousel.prev();
    });
    $("#but_pause").click(function() {
        carousel.pause();
    });
    $("#but_start").click(function() {
        carousel.start();
    });
    $("#but_next").click(function() {
        carousel.next();
    });
    
    $(function() {
        function log(message) {
            $("<div>").text(message).prependTo("#log");
            $("#log").scrollTop(0);
        }

        $('[data-autocomplete="cities"]').autocomplete({
            source: function(request, response) {
                $.ajax({
                    url: "http://ws.geonames.org/searchJSON",
                    dataType: "jsonp",
                    data: {
                        featureClass: "P",
                        style: "full",
                        maxRows: 12,
                        name_startsWith: request.term
                    },
                    success: function(data) {
                        response($.map(data.geonames, function(item) {
                            return {
                                label: item.name + (item.adminName1 ? ", " + item.adminName1 : "") + ", " + item.countryName,
                                value: item.name
                            }
                        }));
                    }
                });
            },
            minLength: 2,
            select: function(event, ui) {
                log(ui.item ?
                    "Selected: " + ui.item.label :
                    "Nothing selected, input was " + this.value);
            },
            open: function() {
                $(this).removeClass("ui-corner-all").addClass("ui-corner-top");
            },
            close: function() {
                $(this).removeClass("ui-corner-top").addClass("ui-corner-all");
            }
        });
    });


});