// Nombre del proyecto: Consolcargo
// Nombre del archivo: actions.js
// Descripción: Funciones globales
// Fecha de creación: Agosto del 2013
// Autor: Stive Zambrano

$(document).ready(function() {
    $(window).bind("load", function() {
        $("#preload").fadeOut("slow");
      
	  /* if(TERMINO_CHAT == true){ */
	    var id = setInterval( function(){
            var enlace = '../chatroom/helper.php';
            var win = window.open(enlace, "_blank", "width=820,height=500");
        },TIME_CHAT);
      setTimeout("clearInterval("+id+")",TIME_CHAT);
	 /*  } */

         
      /*  $(win).delay(30000).one('unload', Startload);
          win.close(); */

       /*  setInterval(
          function(){
            var enlace = '../../chatroom/helper.php';
            window.open(enlace, "_blank", "width=820,height=500");
            return false; 
          },3000); */
    });
    $(".over-bw").hover(function() {
        $(this).children(".icon-bw").animate({marginTop: -10}, 400, "easeOutBounce");
    }, function() {
        $(this).children(".icon-bw").animate({marginTop: 0}, 400, "easeOutBounce");
    });
    $(".over-bt-bw").click(function() {
        $(this).parent().parent().parent().fadeOut(200);
    });
    $(".con-sub-nav-b").hover(function() {
        $(this).children("ul").stop().slideDown(100);
    }, function() {
        $(this).children("ul").stop().slideUp(100);
    });
    $(function() {
        $("#dl-menu").dlmenu({animationClasses: {classin: "dl-animate-in-2", classout: "dl-animate-out-2"}});
    });
    if ($(".main-slider").size() > 0) {
        $(".main-slider").bxSlider({auto: true, controls: false, maxSlides: 1, minSlides: 1, /*mode: "fade",*/ moveSlides: 1, pager: true, slideMargin: 0});
    }
    ;
    if ($(".news-slider").size() > 0) {
        $(".news-slider").bxSlider({controls: false, maxSlides: 2, minSlides: 1, moveSlides: 2, slideMargin: 0, slideWidth: 316});
    }
    ;
    $(".bt-valor").on("click", function() {
        if ($(this).parent(".con-info-valor").height() == 125) {
            $(".bt-valor").parent().removeClass("bt-valor-act");
            $(this).parent().addClass("bt-valor-act");
            $(".con-info-valor").stop().animate({height: 125}, 200);
            $(this).parent(".con-info-valor").stop().animate({height: 285}, 200);
        } else {
            $(this).parent().removeClass("bt-valor-act");
            $(this).parent(".con-info-valor").stop().animate({height: 125}, 200);
        }
    });
    $(function() {
        $("a.an-din").bind("click", function(event) {
            var $anchor = $(this);
            $("html, body").stop().animate({scrollTop: $($anchor.attr("href")).offset().top}, 1200, "easeInOutExpo");
            event.preventDefault();
        });
    });
    $(".con-head-des").on("click", function() {
        if ($(this).parent(".info-destacada-col").height() == 50) {
            $(".con-head-des").removeClass("item-info-act");
            $(this).addClass("item-info-act");
            $(".info-destacada-col").animate({height: 50});
            $(this).parent(".info-destacada-col").animate({height: 360});
            $("html, body").animate({scrollTop: 720}, 200);
            return false;
        } else {
            $(this).removeClass("item-info-act");
            $(this).parent(".info-destacada-col").animate({height: 50});
        }
    });
    if ($(".slide-cert").size() == 1) {
        $(".slide-cert").bxSlider({auto: false, controls: false, maxSlides: 1, minSlides: 1, mode: "fade", moveSlides: 1, slideWidth: 200});
    }
    if ($(".slide-cert").size() > 1) {
        $(".slide-cert").bxSlider({auto: true, controls: false, maxSlides: 1, minSlides: 1, mode: "fade", moveSlides: 1, slideWidth: 200});
    }
    ;
    $(".con-info-bc:first").css({display: "block"});
    $(".nav-din-bt-st").click(function() {
        $(".nav-din-bt-st").removeClass("nav-din-act");
        $(this).addClass("nav-din-act");
    });
    $(".nav-din-con-bt").click(function() {
        $(".nav-din-con-bt").removeClass("nav-din-act");
        $(this).addClass("nav-din-act");
        $(".con-info-bc").hide();
        var ver_contenido = $(this).attr("data-id");
        $("." + ver_contenido).show();
    });
		$(".con-tw").first().css({height: 310});
		$(".con-tab-share").click(function(){$(".con-tab-share").removeClass("share-tab-act"); $(this).addClass("share-tab-act"); $(".con-tw").css({height: 0}); var ver_contenido = $(this).attr("data-id"); $('.'+ver_contenido).css({height: 310});});
    /*if($(".enlaces-slider").size()>0){$(".enlaces-slider").bxSlider({controls: true, maxSlides: 3, minSlides: 1, slideMargin: 0, slideWidth: 320});};*/
		
		$(".enlaces-slider").children("li").length; 
    if ($(".enlaces-slider").size() > 0){$(".enlaces-slider").bxSlider({controls: true, maxSlides: 4, minSlides: 1, pager: ($(".enlaces-slider").children("li").length > 1)?true:false, slideMargin: 0, slideWidth: 240});};
		
    /*var navPro = $(".nav-din-bt"); navPro.on("click", function(e){e.preventDefault(); $(".nav-din-bt").removeClass("nav-din-act"); $(this).addClass("nav-din-act"); var theURL = "error"; if($(this).attr("href") != "#"){theURL = $(this).attr("href");}; $.ajax({url: theURL, type: "POST", success: function(data, textStatus, xhr){$(".con-info-b").empty(); $(".con-info-b").append(data); $(".enlaces-slider").bxSlider({controls: false, maxSlides: 3, minSlides: 1, moveSlides: 1, slideMargin: 0, slideWidth: 318});}, error: function(xhr, textStatus, errorThrown){$(".con-info-b").empty(); $(".con-info-b").append("<p class='error-tx'>Oops. Lo sentimos, no hemos encontrado contenido para está sección, por favor intentelo más tarde!</p>");}});});



     $(".con-bt-map").hover(
     function(){$(this).stop().animate({width: 50});},
     function(){$(this).stop().animate({width: 50});}
     );*/


    var infoTabla = 0;
    $(".bt-info-tabla").click(function() {
     /*   if (infoTabla == 0) { */
            var tbody = ''; 
            var thead = '';
            var response
            $.ajax({
                type: "POST",
                url: '../secciones/getItinerario',
                data: {origen: $('#search1').val(), destino: $('#search2').val()},
                error: function(request, status, error) {
                    alert(request.responseText);
                },
                success: function(datos) {
                    response = eval(datos);
                  
                       thead = '<center><div class="tabla-cargo"><table width="840" border="1" id="tabla_itinerario" ><thead><th>Carrier</th><th>Vessel</th><th>Voyage</th><th>Port of loading</th><th>Port of discharge</th><th>Cut off</th><th>Hora</th><th>ETD</th><th>ETA</th><th>TT</th></thead><tbody>'; 
                               for (var i = 0; i < response.length; i++) {
                                        tbody += '<tr><td>' + response[i].carrier + '</td><td>' + response[i].vessel + '</td><td>' + response[i].voyage + '</td><td>' + response[i].port_of_loading + '</td><td>' + response[i].port_of_discharge + '</td><td>' + response[i].cut_off + '</td><td>' + response[i].hora + '</td><td>' + response[i].etd + '</td><td>' + response[i].eta + '</td><td>' + response[i].tt + '</td></tr>';
                               }
                               if(tbody == ''){
                                   $('#tblResultados').html("No hay información disponible para los puertos seleccionados<p>Si desea información sobre esta ruta por favor comuníquese con nosotros a través de nuestro formulario de <a href='../secciones/contacto' >contáctenos<a></p>");
                               }else{
                                   tbody += '</tbody></table></div></center><div style="margin-top:25px; font-size:16px;" >'+response[0].requeriments+'<div>';
                                   tbody = thead+tbody; 
                                   tbody += '<div>'+'<h3>Realice booking aquí.</h3>'+'<p>1. Descargar: '+'<a href="../uploads/front/itinerario/formato_itinerario/FORMATO_RESERVA_MARITIMA_(IMPO-EXPO).xls" >Formato</a></p>'+'<p>2. Gestionar los datos del formato</p>'+'<p>3. Enviar al correo : contactenos@consolcargo.com</p>'+'</div>'; 
                                   $('#tblResultados').html(tbody);
                               }     

                }

            });

            $(this).parent().parent().siblings().children(".con-tabla").children(".tab-content").css({height: "auto"});
            $(this).children("span").css({color: "#00adef"});
            $(this).children("span").removeClass("icon-tb").addClass("icon-quit");
            $(this).attr("href", "#tabla-info");
           /* infoTabla = 1;*/
            $(".tab-pane.active .footable").trigger("footable_resize");
    /*    } else { */
            /*


            $.ajax({
                type: "POST",
                url: '../secciones/getItinerario',
                data: {origen: $('#search1').val(), destino: $('#search2').val()},
                error: function(request, status, error) {
                    alert(request.responseText);
                },
                success: function(datos) {
                    var response = eval(datos);
                    var tbody = '';
                    for (var i = 0; i < response.length; i++) {
                        tbody += '<div class="footable-row-detail-row">\n\
<div class="footable-row-detail-name">Carrier:</div>\n\
<div class="footable-row-detail-value">' + response[i].carrier + '</div></div>\n\
<div class="footable-row-detail-row">\n\
<div class="footable-row-detail-name">Vessel:</div>\n\
<div class="footable-row-detail-value">' + response[i].vessel + '</div></div>\n\
<div class="footable-row-detail-row">\n\
<div class="footable-row-detail-name">Vessel:</div>\n\
<div class="footable-row-detail-value">' + response[i].voyage + '</div></div>\n\
<div class="footable-row-detail-row">\n\
<div class="footable-row-detail-name">Voyage:</div>\n\
<div class="footable-row-detail-value">' + response[i].port_of_loading + '</div></div>\n\
<div class="footable-row-detail-row">\n\
<div class="footable-row-detail-name">Port of loading:</div>\n\
<div class="footable-row-detail-value">' + response[i].port_of_discharge + '</div></div>\n\
<div class="footable-row-detail-row">\n\
<div class="footable-row-detail-name">Port of discharge:</div>\n\
<div class="footable-row-detail-value">' + response[i].cut_off + '</div></div>\n\
<div class="footable-row-detail-row">\n\
<div class="footable-row-detail-name">Cut off:</div>\n\
<div class="footable-row-detail-value">' + response[i].etd + '</div></div>\n\
<div class="footable-row-detail-row">\n\
<div class="footable-row-detail-name">ETD:</div>\n\
<div class="footable-row-detail-value">' + response[i].eta + '</div></div>\n\
<div class="footable-row-detail-row">\n\
<div class="footable-row-detail-name">TT:</div>\n\
<div class="footable-row-detail-value">' + response[i].tt + '</div></div>\n\
<div class="footable-row-detail-row">\n\
<div class="footable-row-detail-name">Requeriments:</div>\n\
<div class="footable-row-detail-value">' + response[i].requeriments + '</div></div>';
                    }
                    $('#tblResultados').html(tbody);
                }
            });

            $(this).parent().parent().siblings().children(".con-tabla").children(".tab-content").css({height: 0});
            $(this).children("span").css({color: "#033566"});
            $(this).children("span").removeClass("icon-quit").addClass("icon-tb");
            $(this).removeAttr("href");
            infoTabla = 0;
            $(".tab-pane.active .footable").trigger("footable_resize");

        }
        */
    });



    $(window).bind("load", function() {


        $(".tool-p1").delay(1000).queue(function(next) {
            $(this).show();
            next();
        });
        $(".tool-p1").delay(3000).queue(function(next) {
            $(this).delay(3000).hide();
            next();
        });

        $(".tool-p2").delay(4000).queue(function(next) {
            $(this).show();
            next();
        });
        $(".tool-p2").delay(3000).queue(function(next) {
            $(this).delay(3000).hide();
            next();
        });

        $(".tool-p3").delay(7000).queue(function(next) {
            $(this).show();
            next();
        });
        $(".tool-p3").delay(3000).queue(function(next) {
            $(this).delay(3000).hide();
            next();
        });

        $(".tool-p4").delay(10000).queue(function(next) {
            $(this).show();
            next();
        });
        $(".tool-p4").delay(3000).queue(function(next) {
            $(this).delay(3000).hide();
            next();
        });
		 		$(".tool-p5").delay(13000).queue(function(next) {
            $(this).show();
            next();
        });
        $(".tool-p5").delay(3000).queue(function(next) {
            $(this).delay(3000).hide();
            next();
        });
		 		$(".tool-p6").delay(16000).queue(function(next) {
            $(this).show();
            next();
        });
        $(".tool-p6").delay(3000).queue(function(next) {
            $(this).delay(3000).hide();
            next();
        });
    });



    var overTool = 0;
    $(".ovt").hover(function() {

        if (overTool == 0) {
            $(this).children(".tool").show();
            $(this).children(".tool").css({"z-index": 100});
            overTool = 1;
        } else {
            $(this).children(".tool").hide();
            overTool = 0;
        }

    });



    $(function() {
        $(".bt-clr").click(function() {
            $(":input", ".form-clr")
                    .not(":button, :submit, :reset, :hidden")
                    .val("")
                    .removeAttr("checked")
                    .removeAttr("selected");
        });
    });





    $(function() {
        $(".nav-tabs a").click(function(e) {
            $(this).tab("show");
        }).on("shown", function(e) {
            $(".tab-pane.active .footable").trigger("footable_resize");
        });
        if (window.location.hash.length > 0) {
            $('.nav-tabs a[href="' + window.location.hash + '"]').tab("show");
        }
    });
    $(function() {
        $("table").footable();
        $(".colour-switch a").click(function(e) {
            e.preventDefault();
            $(".colour-switch a").each(function() {
                $("table").removeClass($(this).data("class"));
            });
            $("table").addClass($(this).data("class"));
        });
    });
    if ($(".grl-form").size() > 0) {
        $(".grl-form").validationEngine({scroll: false});
    }
    ;
    $(function() {
        $(window).scroll(function() {
            if ($(this).scrollTop() != 0) {
                $("#to-top").fadeIn(50);
            } else {
                $("#to-top").fadeOut(50);
            }
        });
        $("#to-top").click(function() {
            $("body,html").animate({scrollTop: 0}, 200, "easeInOutExpo");
        });
    });

    if ($.browser.msie) {
        $("input[placeholder], textarea[placeholder]").each(function() {
            var input = $(this);
            $(input).val(input.attr("placeholder"));
            $(input).focus(function() {
                if (input.val() == input.attr("placeholder")) {
                    input.val("");
                }
            });
            $(input).blur(function() {
                if (input.val() == "" || input.val() == input.attr("placeholder")) {
                    input.val(input.attr("placeholder"));
                }
            });
        });
    }
    ;
		if($.browser.msie&&$.browser.version==10){$("html").addClass("ie10");};
    if ($(".footer-ahorranito").size() > 0) {$(".footer-ahorranito").ahorranito({theme: "claro", width: 210});};
});

function consultarCiudad(pais) {

    if (pais.value !== '') {
        $.ajax({
            type: "POST",
            url: '../secciones/getCiudad',
            data: {pais: pais.value},
            error: function(request, status, error) {
                alert(request.responseText);
            },
            success: function(datos) {
                var response = eval(datos);
                var htmlCiudad = '<option value="">Ciudad...</option>';
                for (var i = 0; i < response.length; i++) {
                    htmlCiudad += '<option value="' + response[i].id + '">&nbsp; &bull; ' + response[i].nombre + '</option>';
                }
                $('#ciudad').html(htmlCiudad);
            }
        });
    }
}

function consultarCiudad(pais) {

    if (pais.value !== '') {
        $.ajax({
            type: "POST",
            url: '../secciones/getCiudad',
            data: {pais: pais.value},
            error: function(request, status, error) {
                alert(request.responseText);
            },
            success: function(datos) {
                var response = eval(datos);
                var htmlCiudad = '<option value="">Ciudad...</option>';
                for (var i = 0; i < response.length; i++) {
                    htmlCiudad += '<option value="' + response[i].id + '">&nbsp; &bull; ' + response[i].nombre + '</option>';
                }
                $('#ciudad').html(htmlCiudad);
            }
        });
    }
}

var debug = false;
var gmarkers = [];
gmarkers['1'] = [];
gmarkers['2'] = [];
var startMarker = 0;
var endMarker = 0;
var waypointMarkers = [];
var bounds = [];
var map = null;
var startLocation = null;
var endLocation = null;
var mapInitLongitude, mapInitLatitude, mapInitZoom, mapInitType;
var mapPreserveViewport;
var infowindow = new google.maps.InfoWindow({size: new google.maps.Size(50, 50)});
var directionDisplay;
var stepMarkers = [];
var image = "assets/img/map-pick.png";
var styles = [
    {
        featureType: "landscape",
        stylers: [
            {color: "#bec2c6"}
        ]
    }, {
        featureType: "poi",
        stylers: [
            {color: "#bec2c6"}
        ]
    }, {
        featureType: "road",
        stylers: [
            {visibility: "off"}
        ]
    }, {
        featureType: "administrative.land_parcel",
        stylers: [
            {visibility: "off"}
        ]
    }, {
        featureType: "administrative.neighborhood",
        stylers: [
            {visibility: "off"}
        ]
    }, {
        featureType: "water",
        stylers: [
            {color: "#e1e1e1"}
        ]
    }
];
var styledMap = new google.maps.StyledMapType(styles, {name: "Itinerario"});

var latLng = new google.maps.LatLng(20, -80);
var myOptions = {scrollwheel: false, zoom: 2, center: latLng, mapTypeControl: false, mapTypeControlOptions: {mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']}, panControl: true, panControlOptions: {position: google.maps.ControlPosition.LEFT_CENTER}, zoomControl: false, zoomControlOptions: {style: google.maps.ZoomControlStyle.SMALL, position: google.maps.ControlPosition.LEFT_CENTER}, streetViewControl: false, maxZoom: 2, minZoom: 2};
map = new google.maps.Map(document.getElementById('map'), myOptions);
google.maps.event.addListener(map, 'click', function() {
    lastmarker = null;
    infowindow.close();
});
var geo = new google.maps.Geocoder();
directionsDisplay = new google.maps.DirectionsRenderer();
map.mapTypes.set('map_style', styledMap);
map.setMapTypeId('map_style');


function showAddress(whichOne) {
    var search = document.getElementById("search" + whichOne).value;
    bounds[whichOne] = new google.maps.LatLngBounds();
    if (gmarkers[whichOne]) {
        for (var i = 0; i < gmarkers[whichOne].length; i++) {
            gmarkers[whichOne][i].setMap(null);
        }
        gmarkers[whichOne] = [];
    }
    var start = search.indexOf("");
    var end = search.indexOf("");
    var comma = search.indexOf("");
    var point = false;
    if (debug)
        GLog.write("start=" + start + ", end=" + end + ", comma=" + comma);
    if ((start == 0) && (end > 1) && (comma > start) && (comma < end)) {
        var coords = search.substring(start + 1, end).split(",");
        var lat = parseFloat(coords[0]);
        var lng = parseFloat(coords[1]);
        if (debug)
            GLog.write("lat[" + coords[0] + "]=" + lat + ", lng[" + coords[1] + "]=" + lng);
        if (!isNaN(lat) && !isNaN(lng)) {
            point = new google.maps.LatLng(lat, lng);
            if (debug)
                GLog.write("point=" + point);
        }
    }
    if (point) {
        bounds[whichOne].extend(point);
        html = "";
        var marker = createMarker(point, whichOne, 0, html, null);
        if (!gmarkers[whichOne]) {
            gmarkers[whichOne] = [];
        }
        gmarkers[whichOne].push(marker);
        marker.setMap(map);
        map.setCenter(point);
        var i = 0;
        for (i = 1; i < gmarkers.length; i++) {
            if (!gmarkers["" + i] || !gmarkers["" + i][0])
                break;
        }
        if (debug)
            GLog.write("gmarkers.length=" + gmarkers.length + ", i=" + i);
    } else {
        if (debug)
            GLog.write("calling geocoder(" + search + ")");
        geo.geocode({address: search}, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                var resultsDiv;
                if (!(resultsDiv = document.getElementById("results" + whichOne))) {
                    resultsDiv = document.createElement("div");
                    resultsDiv.setAttribute('id', 'results' + whichOne);
                    var waypointRow = document.createElement("tr");
                    waypointRow.setAttribute('id', 'waypt' + whichOne);
                    var tablecell1 = document.createElement("td");
                    var boldEl = document.createElement("b");
                    boldEl.appendChild(document.createTextNode("waypoint " + whichOne + ":"));
                    tablecell1.appendChild(boldEl);
                    waypointRow.appendChild(tablecell1);
                    tablecell1.appendChild(resultsDiv);
                    var childOf = document.getElementById("resultsTable").getElementsByTagName("tbody")[0];
                    childOf.appendChild(waypointRow);
                }
                for (var i = 0; i < results.length; i++) {
                    var pt = results[i].geometry.location;
                    bounds[whichOne].extend(pt);
                    html = "";
                    var marker = createMarker(pt, whichOne, i, html, results[i]);
                    if (!gmarkers[whichOne]) {
                        gmarkers[whichOne] = [];
                    }
                    gmarkers[whichOne].push(marker);
                    if (!document.getElementById("results" + whichOne)) {
                        var resultsDiv = document.createElement("div");
                        resultsDiv.setAttribute('id', 'results' + whichOne);
                        document.getElementById("results" + (whichOne)).appendChild(resultsDiv);
                    }
                    marker.setMap(map);
                }
                if (results.length < 2) {
                    var p = results[0].geometry.location;
                    if (results[0].geometry.bounds)
                        map.fitBounds(results[0].geometry.bounds);
                    else if (results[0].geometry.viewport)
                        map.fitBounds(results[0].geometry.viewport);
                    else {
                        map.setCenter(p);
                        map.setZoom(2);
                    }
                } else {
                    map.fitBounds(bounds[whichOne]);
                }

                var i = 0;
                for (i = 1; i < gmarkers.length; i++) {
                    if (!gmarkers["" + i] || !gmarkers["" + i][0])
                        break;
                }
                if (debug)
                    GLog.write("gmarkers.length=" + gmarkers.length + ", i=" + i);
            } else {
            }
        });
    }
}
function createMarker(latlng, whichOne, marker_num, html, placemark) {
    var marker = new google.maps.Marker({position: latlng, draggable: false, animation: google.maps.Animation.DROP, map: map, icon: image});
    marker.marker_num = marker_num;
    if (placemark) {
        var placeHtml = "Info: " + placemark.formatted_address;
    } else {
    }
    google.maps.event.addListener(marker, "click", function() {
        if (whichOne == '1') {
            startMarker = marker.marker_num;
        } else if (whichOne == '2') {
            endMarker = marker.marker_num;
        } else if (!waypointMarkers[whichOne]) {
            waypointMarkers[whichOne] = marker_num;
        } else {
            waypointMarkers[whichOne] = marker_num;
        }
        var markerCoords = "<br>(" + marker.getPosition().toUrlValue(0) + ")";
        var inputAddress = document.getElementById("search" + whichOne).value;
        infowindow.setContent("<b>" + inputAddress + "</b><hr width='200'>" + html + "<br>" + placeHtml);
        infowindow.open(map, marker);
    });
    return marker;
}

function clearMarkers() {
    directionsDisplay.setMap(null);
    for (var i = 0; i < stepMarkers.length; i++) {
        stepMarkers[i].setMap(null);
    }
    stepMarkers = [];
    if (gmarkers['1']) {
        for (var i = 0; i < gmarkers['1'].length; i++) {
            gmarkers['1'][i].setMap(null);
        }
        ;
        gmarkers['1'] = [];
    }
    if (gmarkers['2']) {
        for (var i = 0; i < gmarkers['2'].length; i++) {
            gmarkers['2'][i].setMap(null);
        }
        ;
        gmarkers['2'] = [];
    }
    for (var i = 3; i < gmarkers.length; i++) {
        if (gmarkers["" + i]) {
            for (var j = 0; j < gmarkers["" + i].length; j++) {
                gmarkers["" + i][j].setMap(null);
            }
            ;
            gmarkers["" + i] = null;
        }
    }
    gmarkers = gmarkers.slice(0, 0);
    if (debug)
        GLog.write("gmarkers.length=" + gmarkers.length);
    return false;
}