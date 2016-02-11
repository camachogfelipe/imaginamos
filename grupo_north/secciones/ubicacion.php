<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>GRUPO NORTH | Dónde estamos</title>
<meta name="viewport" content="width=1000, maximum-scale=2" />
<link type="image/x-icon" href="../favicon.ico" rel="shortcut icon" />
<meta http-equiv="content-language" content="es" />
<meta http-equiv="pragma" content="No-Cache" />
<meta name="Keywords" lang="es" content="" />
<meta name="Description" lang="es" content="" />
<meta name="copyright" content="imaginamos.com" />
<meta name="date" content="2013" />
<meta name="author" content="diseño web: imaginamos.com" />
<meta name="robots" content="All" />

<link type="text/css" href="<?php echo Link::Build() ?>/css/north.css" rel="stylesheet" />
<link type="text/css" href="<?php echo Link::Build() ?>/css/royalslider.css" rel="stylesheet" />
<link type="text/css" href="<?php echo Link::Build() ?>/css/smoothness/jquery-ui-1.8.22.custom.css" rel="stylesheet" />
<link type="text/css" href="<?php echo Link::Build() ?>/css/inverted/rs-default-inverted.css" rel="stylesheet" />

<style type="text/css">.recetas-info .rsThumb {width:225px;}</style>

</head>
<body>

  <div id="loader"><div id="progress"></div></div>

  <?php include("header.php");
  //Prog: Héctor Fernández
  // Ubicacion. Tablas Relacionadas de Base de datos "ubicacion", "Items_de_ubicación".
  // Obtenemos los datos en variables que relacionaremos con el nombre de la tabla. Utilizando el DbHanddler de Rucowfony.
  // se hace un str_replace para llamar la imagen redimensiondad. y no la referenciada en base de datos que es la original.
  // Nos aseguramos que no ocurran problemas de cotejamiento utilizando utf8_encode para traer los textos.
  // Datos de Ubicación:
  $ubicacion = DbHandler::GetAll("SELECT * FROM ubicacion ORDER BY id ASC");
  $contadorUbi = count($ubicacion); 
  ?>
  
  <div class="info-general">
    <div class="con-info-general">
      <div class="con-sedes">
        <a id="sede-big"></a>
        <img src="<?php echo Link::Build() ?>/imagenes/titulos/ubicacion-1.png" width="500" height="100" alt="">
        <!--<h2>¿Donde</h2>
        <h1>Estamos?</h1>-->
        <div id="page-map">
          <div id="map_canvas"></div>
          <div id="more-info"><div>
            <div class="scroll-map"><h2></h2>
              <div class="info-sede"></div></div></div></div>
          <div class="paging_act">
            <ul id="locations">
                <?php for($i=0; $i<$contadorUbi; $i++):
                    // Separamos las coordenadas  Latitus y Logitud.
                    $coordenadas = explode(',', $ubicacion[$i]['coordenadas']);
                    ?>
              <li data-geo-lat="<?php  echo $coordenadas[0]; ?>" data-geo-long="<?php  echo $coordenadas[1]; ?>">
                <a href="#sede-big">
                  <h3><?php echo utf8_encode($ubicacion[$i]['titulo']); ?></h3>
                  <p>Ver en el mapa</p>
                </a>
                <div class="info-sede longdesc">
                  <h4><?php echo $ubicacion[$i]['direccion']; ?></h4>
                  <p><?php echo nl2br($ubicacion[$i]['texto']); ?></p>
                  <ul>
                      <?php 
                      //obtenemos los datos de los items internos de las sedes.
                      $ubi_items = DbHandler::GetAll("SELECT * FROM items_ubicacion WHERE ubicacion_id = ".$ubicacion[$i]['id']);
                      $contadorUbi_Items = count($ubi_items);
                      if($contadorUbi_Items>0){
                          for($j=0; $j<$contadorUbi_Items; $j++):
                          ?> <li><?php echo utf8_decode($ubi_items[$j]['item']); ?></li><?php
                          endfor;
                      }else{
                        ?><li>En éstos momentos no poseemos información de la sede</li><?php  
                      }
                      ?>
                  </ul>
                </div>
              </li>
                 <?php  endfor; ?>
           </ul>
           <div class="page_navigation"></div>
          </div>
        </div>
        

        <div class="sedes-alm">
          <!--<div class="sep-sombra"></div>-->
          <div style="height:60px; border-bottom: 1px solid #8c8c8c;">
          <img src="<?php echo Link::Build() ?>/imagenes/titulos/ubicacion-2.png" width="700" height="50" alt="">
        </div>
          <!--<h2>Almacenes de cadena</h2>-->
            <div class="rsContent">
              <br>
          <div class="royalSlider rsDefaultInv recetas-info logo">
            <!--Cont. receta-->

                <?php $sedes = DbHandler::GetAll("SELECT * FROM sedes ORDER BY id ASC"); 
                $contadorsedes = count($sedes);
                for($i=0; $i<$contadorsedes; $i++):
                    ?>
              <div data-rsDelay="2500">
                <i class="rsTmb">
                  

                  <a id="logo_content" href="<?php if(!empty($sedes[$i]['link'])) echo $sedes[$i]['link']; else echo '#'; ?>" class="anchor-cus" <?php if(!empty($sedes[$i]['link'])) : ?>target="_blank"<?php endif; ?>>
                    <div style="width:220px;height:208px">
                  <img src="<?php echo Link::Build() ?>/img/logos_sedes/<?php echo $sedes[$i]['logo'] ?>"  alt="" width="210" height="198">
                  </div>
                  </a>
                
                </i>
              </div>

              <?php
                endfor;
              ?>

      <div class="sep-sombra sep-internas"></div>
    </div>
  </div>
    </div>
  </div>
    </div>
  <?php include("footer.php"); ?>

  <script type="text/javascript" src="<?php echo Link::Build() ?>/js/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo Link::Build() ?>/js/jquery.easing.js"></script>
  <script type="text/javascript" src="<?php echo Link::Build() ?>/js/jquery.mousewheel.min.js"></script>
  <script type="text/javascript" src="<?php echo Link::Build() ?>/js/jquery.pajinate.js"></script>
  <script type="text/javascript" src="<?php echo Link::Build() ?>/js/jquery.jscrollpane.min.js"></script>
  <script type="text/javascript" src='http://maps.google.com/maps/api/js?sensor=true'></script>
  <script type="text/javascript" src="<?php echo Link::Build() ?>/js/jquery.bxSlider.min.js"></script>
  <script type='text/javascript'>
    $(function(){
      var bogota = new google.maps.LatLng(4.598557,-74.075844),
        pointToMoveTo, 
        first = true,
        curMarker = new google.maps.Marker({}),
        $el;
      var myOptions = {
        zoom: 6,
        center: bogota,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      };
      var map = new google.maps.Map($("#map_canvas")[0], myOptions);
      $("#locations li").click(function() {
        $el = $(this);  
        if (!$el.hasClass("hover")){
          $("#locations li").removeClass("hover");
          $el.addClass("hover");
          if (!first) {curMarker.setMap();}
          pointToMoveTo = new google.maps.LatLng($el.attr("data-geo-lat"), $el.attr("data-geo-long"));
          map.panTo(pointToMoveTo);
          curMarker = new google.maps.Marker({position: pointToMoveTo, map: map, icon: "../imagenes/marker.png"});
          google.maps.event.addListener(curMarker, 'click', function(){map.setZoom(10);});
          $("#more-info").find("h2").html($el.find("h3").html()).end().find(".info-sede").html($el.find(".longdesc").html());
          first = false; 
        }
      });
      $("#locations li:first").trigger("click");
    });
  </script> 
  <script type="text/javascript" src="<?php echo Link::Build() ?>/js/jquery.royalslider.min.js"></script>
  <script type="text/javascript" src="<?php echo Link::Build() ?>/js/jSedes.js"></script>
  <script type="text/javascript" src="http://www.imaginamos.com/footer_ahorranito/jquery.ahorranito.js"></script>
  <script type="text/javascript">
    /*$('#logo_content img').each(function() {
    var maxWidth = 150;
    var maxHeight = 100;
    var ratio = 0;
    var width = $(this).width();
    var height = $(this).height();
        
    if(width > maxWidth){
      ratio = maxWidth / width;
      $(this).css("width", maxWidth);
      $(this).css("height", height * ratio);
        height = height * ratio;
      }
      var width = $(this).width();
      var height = $(this).height();
      if(height > maxHeight){
        ratio = maxHeight / height;
        $(this).css("height", maxHeight);
        $(this).css("width", width * ratio);
        width = width * ratio;
      }
    });*/
    </script>

</body>
</html>