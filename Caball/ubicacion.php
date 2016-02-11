<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6 no-js" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="ie ie7 no-js" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9 ]><html class="ie ie9 no-js" lang="en"><![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="es"><!--<![endif]-->
       <!-- html5.js for IE less than 9 -->
        <!--[if lt IE 9]>
                <script src="assets/js/lib/html5.js"></script>
        <![endif]-->
    

<head>
  <meta charset="UTF-8"/>
  <meta name="description" content=""/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
  <meta name="google-site-verification" content=""/>
  <meta name="robots" content="All" />
  <meta name="keywords" content="Humans txt" />

  <title>Ubicación</title>
   
  <link type="text/plain" rel="author" href="humans.txt" />
  <link rel="shortcut icon" href="favicon.ico" >
  <link rel="stylesheet" href="assets/css/ferreteria.css"/>

  <script src="assets/js/lib/modernizr.min.js"></script>  
   <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=true"></script>
     <script type="text/javascript" src="assets/js/lib/tooltip.js"></script>
    <script type="text/javascript" src="assets/js/lib/places.js"></script>



<script>


 function createInfoWindow(marker, key) {
              //create an infowindow for this marker
              var infowindow = new google.maps.InfoWindow({
                  content: places[key].infowin_html,
                  maxWidth: 250
              });
              //open infowindo on click event on marker.
              google.maps.event.addListener(marker, 'click', function () {
                  if (lastOpenInfoWin) lastOpenInfoWin.close();
                  lastOpenInfoWin = infowindow;
                  infowindow.open(marker.get('map'), marker);
              });

          }
          // Here is where we create a tooltip for each marker,
          // with content set to plcaes[placeindex].tooltip_html
         /* function createTooltip(marker, key) {
              //create a tooltip
              var tooltipOptions = {
                  marker: marker,
                  content: places[key].tooltip_html,
                  cssClass: 'tooltip' // name of a css class to apply to tooltip
              };
              var tooltip = new Tooltip(tooltipOptions);

          }*/
          // Used to keep track of the open InfoWindow, so when
          // a new one is about to be open, we close the old one.
          var lastOpenInfoWin = null;
          // Create map on DOM load
          // I'm using an array of places(places.js) to populate the markers
          function createMap() {
		  
  
	var image = {
    url: 'assets/imgs/ico.png',
    size: new google.maps.Size(56, 80),
    origin: new google.maps.Point(0,0),
    anchor: new google.maps.Point(0, 32)
  };
  
              var mapDiv = document.getElementById("mapa");
              if (places.length) {
                  var map;
                  // Set center to point to chicago
                  var latlng = new google.maps.LatLng(4.599712, -74.081218);
                  var myOptions = {
                      zoom: 10,
					  
                      center: latlng,
                      mapTypeId: google.maps.MapTypeId.ROADMAP
                  }
                  map = new google.maps.Map(mapDiv, myOptions);
                  for (var key in places) {
                      var myPlace = places[key];
                      if (myPlace.position) {
                          var marker = new google.maps.Marker({
                              map: map,
							  icon: image,
                              position: new google.maps.LatLng(myPlace.position.lat, myPlace.position.lng)
                          });
                          createInfoWindow(marker, key);
                          createTooltip(marker, key);

                      }
                  }


              }
          }
</script>


</head>
<body onLoad="createMap();">

<?php include('header.php'); ?>	



<!--=======================Inicio Contenido=============================-->
<section class="wrapper clearfix">
	<div id="mapa"/></div>
  <div class="clear"></div>
  <div class="clearfix sedes">
    <div class="slidercarrusel">
      <ul>
        <li>
          <div class="sede">
            <h2 class="titulo">sede <span>1</span></h2>
            <p>Kra 123 No. 34 -54</p>
            <p>Telefono: 3456789</p>
          </div>
        </li>
        <li>
          <div class="sede">
            <h2 class="titulo">sede <span>2</span></h2>
            <p>Kra 123 No. 34 -54</p>
            <p>Telefono: 3456789</p>
          </div>
        </li>
        <li>
          <div class="sede">
            <h2 class="titulo">sede <span>3</span></h2>
            <p>Kra 123 No. 34 -54</p>
            <p>Telefono: 3456789</p>
          </div>
        </li>
        <li>
          <div class="sede">
            <h2 class="titulo">sede <span>1</span></h2>
            <p>Kra 123 No. 34 -54</p>
            <p>Telefono: 3456789</p>
          </div>
        </li>
        <li>
          <div class="sede">
            <h2 class="titulo">sede <span>2</span></h2>
            <p>Kra 123 No. 34 -54</p>
            <p>Telefono: 3456789</p>
          </div>
        </li>
        <li>
          <div class="sede">
            <h2 class="titulo">sede <span>3</span></h2>
            <p>Kra 123 No. 34 -54</p>
            <p>Telefono: 3456789</p>
          </div>
        </li>
      </ul>
    </div>
</section>

		<style>
		.tooltip{
	/*border:thin 1px #eee;*/
	boerder solid;
	background-color:#FFFBF0;
	padding:5px;
	width:200px;
	height:auto;
	
		}
		.gm-style .gm-style-iw div {
		overflow: hidden !important;
              
}
            .gm-style .gm-style-iw {
height: auto !important;

}
	</style>
<!--===Fin Contenido===-->




<!--=======================Inicio Footer================================-->
<?php include('footer.php'); ?>

<!--===Fin Footer===-->


</body>
</html>