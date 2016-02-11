<?php include("head.php"); ?>
<?php include("header.php"); ?>
<?php
$textoParrafoItinerario = '';
$textoParrafoItinerario = $parrafo_itinerario[0]->texto;
$archivoItinerario = $parrafo_itinerario[0]->archivo;
$archivoItinerario1 = $parrafo_itinerario[0]->archivo1;

?>
<script type="text/javascript">

    function consultarPaisCiudadItinerario() {

        $.ajax({
            type: "POST",
            /* data: 'sh='+$("#search2").val(), */
            url: '../secciones/getPaisCiudadItinerarioOrigen',
            error: function(request, status, error) {
                alert(request.responseText);
            },
            success: function(datos) {
                var response = eval(datos);
                var registros = new Array();
                for (var i = 0; i < response.length; i++) {
                    registros[i] = response[i].nombre;
                }

                $("#search1").autocomplete({
                    source: registros,
                    select: function( event, ui ) {
                        $('#title_result').html('Resultados Itinerario (desde '+ui.item.label+' hasta '+$("#search2").val()+' )');
                       /* $( "#title_result" ).val( ui.item.label ); */
                   
                    }
                });

            }
        });
    }

    function consultarPaisCiudadItinerario2() {

        $.ajax({
            type: "POST",
            /* data: 'sh='+$("#search2").val(), */
            url: '../secciones/getPaisCiudadItinerarioDestino',
            error: function(request, status, error) {
                alert(request.responseText);
            },
            success: function(datos) {
                var response = eval(datos);
                var registros = new Array();
                for (var i = 0; i < response.length; i++) {
                    registros[i] = response[i].nombre;
                }

                $("#search2").autocomplete({
                    source: registros,
                    select: function( event, ui ) {
                        $('#title_result').html('Resultados Itinerario (desde '+$("#search1").val()+' hasta '+ui.item.label +' )');
                       /* $( "#title_result" ).val( ui.item.label ); */
                     
                    }
                });
            }
        });
    }
    consultarPaisCiudadItinerario();
     consultarPaisCiudadItinerario2();

   $("#search1").change(function() {
     alert( "Handler for .change() called." );
   });
/*
     $('#mostrar').click(function(){
        alert('holamundo'); 
        if($("#search1").val() != '' ){
            $('#title_result').html('Resultados Itinerario (desde '+$("#search1").val()+' )'); 
            if($("#search1").val() != ''){
               $('#title_result').html('Resultados Itinerario (desde '+$("#search1").val()+' hasta '+$("#search2").val()+' )');
            }
        }     
     });*/
    
    function expandIterario() {

            document.getElementById('tblResultados').style.display = '';
            document.getElementById('trIterarioBody').className = 'footable-detail-show';
      /*  if (document.getElementById('trIterarioBody').className === 'footable-detail-show') {
            document.getElementById('tblResultados').style.display = 'none';
            document.getElementById('trIterarioBody').className = '';
        } else {
            document.getElementById('tblResultados').style.display = '';
            document.getElementById('trIterarioBody').className = 'footable-detail-show';
        }*/

    }


</script>

<section class="serv-info cfx">
    <h1 class="main-title">Itinerario</h1>
    <p style="font-size:1em; color:#033566;"><?php echo nl2br($textoParrafoItinerario); ?></p>
</section>
<section class="section-map cfx">
    <div class="con-map">
        <div class="map-form cfx">
            <div class="map-form-col ovt">
                <div class="tool-p1 tool" >
                    <strong>1.</strong> Seleccionar Puerto de <strong>ORIGEN</strong>.
                    <div class="tool-arrow"></div>
                </div>
                <form onsubmit="return false" class="form-clr">
                    <div class="con-ing-form">
                        <input class="validate[required]" id="search1" type="text" placeholder="Punto de origen..." value="">
                    </div>
                    <input class="bt-form" onclick="showAddress('1');" type="submit" value="Seleccionar">
                </form>
            </div>
            <div class="map-form-col ovt">
                <div class="tool-p2 tool">
                    <strong>2.</strong> Seleccionar Puerto de <strong>DESTINO</strong>.
                    <div class="tool-arrow"></div>
                </div>
                <form onsubmit="return false" class="form-clr">
                    <div class="con-ing-form">
                        <input class="validate[required]" id="search2" type="text" placeholder="Punto de destino..." value="">
                    </div>
                    <input class="bt-form bt-form-c2" onclick="showAddress('2');" type="submit" value="Seleccionar">
                </form>
            </div>
            <div class="con-bt-map">
                <a class="bt-form-2 ovt" onclick="showAddress('2');
        showAddress('1');">
                    <div class="map-bt map-bt-sel"><p>Seleccionar</p></div>
                    <div class="tool-p3 tool">
                        <strong>3.</strong> Ubique puertos de <strong>ORIGEN</strong> Y <strong>DESTINO</strong> en el mapa.
                        <div class="tool-arrow"></div>
                    </div>
                </a>
                <a id="mostrar" class="an-din bt-form-2 bt-info-tabla ovt" href="#tabla-info">
                  <div class="map-bt"><!--<span class="icon-tb"></span>--><p>Itinerario</p></div>
                    <div class="tool-p4 tool">
                        <strong>4.</strong> Ver <strong>NUESTROS ITINERARIOS</strong> según origen y destino.
                        <div class="tool-arrow"></div>
                    </div>
                </a>
                <a id="descargas" class="bt-form-2 ovt" href="<?php echo !empty($archivoItinerario)?base_url().$archivoItinerario:"#";?>">
                  <div class="map-bt"><!--<span class="icon-tb"></span>--><p>Descargar Itinerarios Impo</p></div>
                    <div class="tool-p5 tool">
                        <strong>5.</strong> Descarga <strong>COMPLETA DE ITINERARIOS</strong> tipo <strong>IMPORTACIÓN</strong>.
                        <div class="tool-arrow"></div>
                    </div>
                </a>
                <a id="descargas" class="bt-form-2 ovt" href="<?php echo !empty($archivoItinerario1)?base_url().$archivoItinerario1:"#";?>">
                  <div class="map-bt"><!--<span class="icon-tb"></span>--><p>Descargar Itinerarios Expo</p></div>
                    <div class="tool-p6 tool">
                        <strong>6.</strong>  Descarga <strong>COMPLETA DE ITINERARIOS</strong> tipo <strong>EXPORTACIÓN</strong>.
                        <div class="tool-arrow"></div>
                    </div>
                </a>
                
            </div>
        </div>
        <div id="map"></div>
        <div id="results1"></div>
        <div id="results2"></div>
        <div class="map-form-col-con-bts" id="tabla-info">
            <div class="map-form-col-bts">
                <!--<a class="an-din bt-form-2 bt-info-tabla" href="#tabla-info" id="tabla-info">Ver información</a>-->
                <input class="bt-form-2 bt-clr" id="clearMarkersBtn" onclick="javascript:clearMarkers();
        return false;" style="margin-right:77.5px;" type="reset" value="Nueva búsqueda">
            </div>
        </div>
        <div id="infoTablaIterario" class="info-tabla">
            <div class="con-tabla">
                <div class="tab-content">
                    <div class="tab-pane active">

                    	<div class="con-tabla-cargo" id="tblResultados"></div>
                    
                        <!--table data-page-size="1" class="footable metro-blue footable-loaded tablet breakpoint">
                            <thead id="itinerarioHead">
                                <tr>
                                    <th class="footable-last-column footable-first-column">Env&iacute;o seleccionado</th>
                                    <th data-hide="phone,tablet" style="display: none;">Carrier</th>
                                    <th data-hide="phone,tablet" style="display: none;">Vessel</th>
                                    <th data-hide="phone,tablet" style="display: none;">Voyage</th>
                                    <th data-hide="phone,tablet" style="display: none;">Port of loading</th>
                                    <th data-hide="phone,tablet" style="display: none;">Port of discharge</th>
                                    <th data-hide="phone,tablet" style="display: none;">Cut off</th>
                                    <th data-hide="phone,tablet" style="display: none;">ETD</th>
                                    <th data-hide="phone,tablet" style="display: none;">ETA</th>
                                    <th data-hide="phone,tablet" style="display: none;">TT</th>
                                    <th data-hide="phone,tablet" style="display: none;">Requeriments</th>
                                </tr>
                            </thead>
                            <tbody id="itinerarioBody">
                                <tr id="trIterarioBody">
                                    <td id="title_result" class="footable-last-column footable-first-column">
                                       Resultados
                                    </td>
                                </tr>
                                <tr class="footable-row-detail">
                                    <td class="footable-row-detail-cell" colspan="1">
                                        <div class="footable-row-detail-inner" id="tblResultados" >
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include("footer.php"); ?>