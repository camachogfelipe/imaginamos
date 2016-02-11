<?php include("head.php"); ?>
	<?php include("header.php"); ?>
  
  <section class="serv-info cfx">
    <h1>Itinerario</h1>
    <p>Buqueda por ciudad, municipio o país.</p>
    <p>Por favor lo más especifico posible ya que pueden existir varios resultados con el mismo nombre.</p>
  </section>
  <section class="section-map cfx">
  	<div class="con-map">
      <form class="map-form cfx" onsubmit="return false">
        <div class="map-form-col">
          <div class="con-ing-form">
            <input class="validate[required]" id="search1" type="text" placeholder="Ciudad y/o País..." value="">
          </div>
          <input class="bt-form" onclick="showAddress('1');" type="submit" value="Origen">
        </div>
        <div class="map-form-col">
          <div class="con-ing-form">
            <input class="validate[required]" id="search2" type="text" placeholder="Ciudad y/o País..." value="">
          </div>
          <input class="bt-form" onclick="showAddress('2');" type="submit" value="Destino">
        </div>
      </form>
    	<div id="map"></div>
      <div id="results1"></div>
    	<div id="results2"></div>
    	<div class="map-form-col-con-bts">
      	<div class="map-form-col-bts">
        	<a class="bt-form-2 bt-info-tabla">Ver información</a>
        	<input class="bt-form-2" id="clearMarkersBtn" onclick="javascript:clearMarkers();return false;" type="button" value="Borrar selección">
        </div>
      </div>
      <div class="info-tabla">
        <div class="con-tabla">
          <div class="tab-content">
            <div class="tab-pane active">
                <table class="footable metro-blue" data-page-size="1">
                    <thead>
                      <tr>
                          <th>Carrier</th>
                          <th>Vessel</th>
                          <th data-hide="phone,tablet">Voyage</th>
                          <th data-hide="phone,tablet">Port of loading</th>
                          <th data-hide="phone,tablet">Port of discharge</th>
                          <th data-hide="phone,tablet">Cut off</th>
                          <th data-hide="phone,tablet">ETD</th>
                          <th data-hide="phone,tablet">ETA</th>
                          <th data-hide="phone,tablet">TT</th>
                          <th data-hide="phone,tablet">Requeriments</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                          <td>Lorem ipsum</td>
                          <td>Lorem ipsum</td>
                          <td>Lorem ipsum</td>
                          <td>Lorem ipsum</td>
                          <td>Lorem ipsum</td>
                          <td>Lorem ipsum</td>
                          <td>Lorem ipsum</td>
                          <td>Lorem ipsum</td>
                          <td>Lorem ipsum</td>
                          <td>Lorem ipsum</td>
                      </tr>
                      <tr>
                          <td>1 Lorem ipsum</td>
                          <td>1 Lorem ipsum</td>
                          <td>1 Lorem ipsum</td>
                          <td>1 Lorem ipsum</td>
                          <td>1 Lorem ipsum</td>
                          <td>1 Lorem ipsum</td>
                          <td>1 Lorem ipsum</td>
                          <td>1 Lorem ipsum</td>
                          <td>1 Lorem ipsum</td>
                          <td>1 Lorem ipsum</td>
                      </tr>
                    </tbody>
                </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <script type="text/javascript">
		//<![CDATA[
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
						{ color: "#bec2c6" }
					]
				},{
					featureType: "poi",
					stylers: [
						{ color: "#bec2c6" }
					]
				},{
					featureType: "road",
					stylers: [
						{ visibility: "off" }
					]
				},{
					featureType: "administrative.land_parcel",
					stylers: [
						{ visibility: "off" }
					]
				},{
					featureType: "administrative.neighborhood",
					stylers: [
						{ visibility: "off" }
					]
				},{
					featureType: "water",
					stylers: [
						{ color: "#e1e1e1" }
					]
				}
			];
			var styledMap = new google.maps.StyledMapType(styles, {name: "Itinerario"});
			function showAddress(whichOne) {
				var search = document.getElementById("search"+whichOne).value;
				bounds[whichOne] = new google.maps.LatLngBounds();
				if (gmarkers[whichOne]){for (var i=0;i<gmarkers[whichOne].length;i++){gmarkers[whichOne][i].setMap(null);} gmarkers[whichOne] = [];}
				var start = search.indexOf("");
				var end = search.indexOf("");
				var comma = search.indexOf("");
				var point = false;
				if (debug) GLog.write("start="+start+", end="+end+", comma="+comma);
				if ((start == 0) && (end > 1) && (comma > start) && (comma < end)){
					var coords = search.substring(start+1, end).split(",");
					var lat = parseFloat(coords[0]);
					var lng = parseFloat(coords[1]);
					if (debug) GLog.write("lat["+coords[0]+"]="+lat+", lng["+coords[1]+"]="+lng);
					if (!isNaN(lat) && !isNaN(lng)){point = new google.maps.LatLng(lat,lng); if (debug) GLog.write("point="+point);}
				}
				if (point){
					bounds[whichOne].extend(point);
					html = "";
					var marker = createMarker(point, whichOne, 0, html, null);
					if (!gmarkers[whichOne]) {gmarkers[whichOne]= [];}
					gmarkers[whichOne].push(marker);
					marker.setMap(map);
					map.setCenter(point);
					var i=0;
					for (i=1;i<gmarkers.length;i++){if (!gmarkers[""+i] || !gmarkers[""+i][0]) break;}
					 if (debug) GLog.write("gmarkers.length="+gmarkers.length+", i="+i);
				} else {
					if (debug) GLog.write("calling geocoder("+search+")");      
					geo.geocode({address: search}, function (results, status){ 
						if (status == google.maps.GeocoderStatus.OK){
							var resultsDiv;
							if (!(resultsDiv = document.getElementById("results"+whichOne))){
								resultsDiv = document.createElement("div");
								resultsDiv.setAttribute('id','results'+whichOne);
								var waypointRow = document.createElement("tr");
								waypointRow.setAttribute('id','waypt'+whichOne);
								var tablecell1 = document.createElement("td");
								var boldEl = document.createElement("b");
								boldEl.appendChild(document.createTextNode("waypoint "+whichOne+":"));
								tablecell1.appendChild(boldEl);
								waypointRow.appendChild(tablecell1);
								tablecell1.appendChild(resultsDiv);
								var childOf = document.getElementById("resultsTable").getElementsByTagName("tbody")[0];
								childOf.appendChild(waypointRow);
							}
							for (var i=0; i<results.length; i++){
								var pt = results[i].geometry.location;
								bounds[whichOne].extend(pt);
								html = "";
								var marker = createMarker(pt, whichOne, i, html, results[i]);
								if (!gmarkers[whichOne]) {gmarkers[whichOne]= [];}
								gmarkers[whichOne].push(marker);
								if (!document.getElementById("results"+whichOne)){var resultsDiv = document.createElement("div"); resultsDiv.setAttribute('id','results'+whichOne); document.getElementById("results"+(whichOne)).appendChild(resultsDiv);}
								marker.setMap(map);
							}
							if (results.length < 2){
								var p = results[0].geometry.location;
								if (results[0].geometry.bounds) map.fitBounds(results[0].geometry.bounds);
								else if (results[0].geometry.viewport) map.fitBounds(results[0].geometry.viewport);
								else {map.setCenter(p); map.setZoom(2);}
							} else {map.fitBounds(bounds[whichOne]);}
							
							var i=0;
							for (i=1;i<gmarkers.length;i++){
								if (!gmarkers[""+i] || !gmarkers[""+i][0]) break;
							}
							if (debug) GLog.write("gmarkers.length="+gmarkers.length+", i="+i);
						} else {}
					});
				}
			}
			function createMarker(latlng, whichOne, marker_num, html, placemark){
				 var marker = new google.maps.Marker({position: latlng, draggable: false, animation: google.maps.Animation.DROP, map: map, icon: image});
				 marker.marker_num = marker_num;
				 if (placemark){
					var placeHtml = "Info: "+placemark.formatted_address;} else {}
					google.maps.event.addListener(marker, "click", function(){
					if (whichOne == '1'){startMarker = marker.marker_num;} else if (whichOne == '2') {endMarker = marker.marker_num;} else if (!waypointMarkers[whichOne]){waypointMarkers[whichOne] = marker_num;} else {waypointMarkers[whichOne] = marker_num;}
					 var markerCoords = "<br>("+marker.getPosition().toUrlValue(0)+")";
					 var inputAddress = document.getElementById("search"+whichOne).value;
					 infowindow.setContent("<b>"+inputAddress+"</b><hr width='200'>"+html+"<br>"+placeHtml); 
					 infowindow.open(map,marker);
				 });
			return marker;
			}
			var latLng = new google.maps.LatLng(20, -80);
			var myOptions = {scrollwheel: false, zoom: 2, center: latLng, mapTypeControl: false, mapTypeControlOptions: {mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']}, panControl: true, panControlOptions: {position: google.maps.ControlPosition.LEFT_CENTER}, zoomControl: false, zoomControlOptions: {style: google.maps.ZoomControlStyle.SMALL, position: google.maps.ControlPosition.LEFT_CENTER}, streetViewControl: false, maxZoom: 2, minZoom: 2};
			map = new google.maps.Map(document.getElementById('map'), myOptions);
			google.maps.event.addListener(map, 'click', function(){lastmarker = null; infowindow.close();});
			var geo = new google.maps.Geocoder(); 
			directionsDisplay = new google.maps.DirectionsRenderer();
			map.mapTypes.set('map_style', styledMap);
			map.setMapTypeId('map_style');
			function clearMarkers(){
				directionsDisplay.setMap(null);
				for (var i=0;i<stepMarkers.length;i++){stepMarkers[i].setMap(null);}
				stepMarkers = [];
				if (gmarkers['1']){for (var i=0; i<gmarkers['1'].length;i++) {gmarkers['1'][i].setMap(null);}; gmarkers['1']=[];}
				if (gmarkers['2']){for (var i=0; i<gmarkers['2'].length;i++) {gmarkers['2'][i].setMap(null);}; gmarkers['2']=[];}
				for (var i=3;i<gmarkers.length; i++){if (gmarkers[""+i]){for (var j=0; j<gmarkers[""+i].length;j++) {gmarkers[""+i][j].setMap(null);}; gmarkers[""+i] = null;}}
				gmarkers = gmarkers.slice(0, 0);
				if (debug) GLog.write("gmarkers.length="+gmarkers.length);
				return false;
			}
		//]]>
	</script>
  
<?php include("footer.php"); ?>