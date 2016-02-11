<?php
//session_start();
//ini_set('display_errors','On');

//Evita presentar contenidos sin el login debido
include "../../../security/secure.php";
//include_once("../../../../config/config.php");
include "../../../core/class/db.class.php";
include "../../class/plGeneral.fnc.php";
include "../../class/PhpThumbFactory.class.php";
include "../../class/ClassFile.class.php";


//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

$seccionInclude = "form.php";

if( isset($_GET["seccion"])){
  $seccionInclude = $_GET["seccion"].".php";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

  <head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>CMS imaginamos.com - Todos los derechos reservados</title>
    <!-- Link shortcut icon-->
    <link rel="shortcut icon" type="image/ico" href="../images/favicon2.ico"/>
    <!--External Files-->
    <link href="http://cms.imaginamos.com/css/generalCMS.css" rel="stylesheet" type="text/css" />
    <!--<link href="../css/content.css" rel="stylesheet" type="text/css" />-->
    <link rel="stylesheet" type="text/css" href="../../../noty/css/jquery.noty.css"/>
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="http://cms.imaginamos.com/components/flot/excanvas.min.js"></script><![endif]-->
    <script type="text/javascript" src="http://cms.imaginamos.com/js/generalCMS.js"></script>
    <link rel="stylesheet" href="../../../../css/validationEngine.jquery.css" media="all">
    <script type="text/javascript" src="../../../../js/jquery.validationEngine-es.js"></script>
 <script type="text/javascript" src="../../../../js/jquery.validationEngine.js"></script>
 <script type="text/javascript" src="../../../../js/si.files.js"></script>
 <script src="../../../../js/ckeditor/ckeditor.js"></script>
 <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=AIzaSyCjWA5IMlEwjptb5L3tQoS75QxfP-fvvYE"
      type="text/javascript"></script>
    <script type="text/javascript">
    //<![CDATA[

	// Inicialización de variables.
    var map      = null;
    var geocoder = null;

    function load() {                                      // Abre LLAVE 1.
      if (GBrowserIsCompatible()) {						   // Abre LLAVE 2.
        map = new GMap2(document.getElementById("map"));

        map.setCenter(new GLatLng(37.567236,-1.803499), 15);
        map.addControl(new GSmallMapControl());
	   	map.addControl(new GMapTypeControl());

        geocoder = new GClientGeocoder();

        //---------------------------------//
        //   MARCADOR AL HACER CLICK
		//---------------------------------//
		GEvent.addListener(map, "click",
			function(marker, point) {
 		 		if (marker) {
               		null;
              		} else {
          			map.clearOverlays();
					var marcador = new GMarker(point);
					map.addOverlay(marcador);
					//marcador.openInfoWindowHtml("<b><br>Coordenadas:<br></b>Latitud : "+point.y+"<br>Longitud : "+point.x+"<a href=http://www.mundivideo.com/fotos_pano.htm?lat="+point.y+"&lon="+point.x+"&mapa=3 TARGET=fijo><br><br>Fotografias</a>");
					//marcador.openInfoWindowHtml("<b>Coordenadas:</b> "+point.y+","+point.x);
					document.form_mapa.coordenadas.value = point.y+","+point.x;
					}
  			}
			);
        //---------------------------------//
        //   FIN MARCADOR AL HACER CLICK
		//---------------------------------//

      } // Cierra LLAVE 1.
    }   // Cierra LLAVE 2.

    //---------------------------------//
    //           GEOCODER
	//---------------------------------//
    function showAddress(address, zoom) {
    	if (geocoder) {
        	geocoder.getLatLng(address,
          		function(point) {
            		if (!point) {
            			alert(address + " not found");
            		} else {
            			map.setCenter(point, zoom);
            			var marker = new GMarker(point);
            			map.addOverlay(marker);
            			//marker.openInfoWindowHtml("<b>"+address+"</b><br>Coordenadas:<br>Latitud : "+point.y+"<br>Longitud : "+point.x+"<a href=http://www.mundivideo.com/fotos_pano.htm?lat="+point.y+"&lon="+point.x+"&mapa=3 TARGET=fijo><br><br>Fotografias</a>");
       			     // marker.openInfoWindowHtml("<b>Coordenadas:</b> "+point.y+","+point.x);
       			      document.form_mapa.coordenadas.value = point.y+","+point.x;
               		}
               	}
        	);
      	}}
    //---------------------------------//
    //     FIN DE GEOCODER
	//---------------------------------//

    //]]>
     </script>
  </head>

  <body class="dashborad" onLoad="load();"  onunload="GUnload();">
    <div id="alertMessage" class="error"></div>
    <!-- Header -->
    <div id="header">
      <div id="account_info">
        <?php include("../../../menu/administrator.php"); ?>
      </div>
    </div><!-- End Header -->
    <div id="shadowhead"></div>

    <div id="left_menu">
      <ul id="main_menu" class="main_menu">
        <?php include("../../../menu/index.php"); ?>
      </ul>
    </div>

    <div id="content">
      <div class="inner">
        <div class="topcolumn">
          <div class="logo"></div>
          <ul id="shortcut">
            <?php include("../../../menu/icons.php"); ?>
          </ul>
        </div>
        <div class="clear"></div>

        <!-- full width -->
        <div class="widget">
          <?php include $seccionInclude;?>
        </div><!-- End full width -->
        
        
        <!-- clear fix -->
        <div class="clear"></div>

        <div id="footer"> &copy; Copyright 2012 <span class="tip"><a  href="#" title="Todos los derechos reservados" >imaginamos.com</a> </span> </div>

      </div> <!--// End inner -->
    </div> <!--// End content -->
  </body>
</html>