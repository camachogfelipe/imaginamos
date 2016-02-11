




<div class="bgEncabezado">
  <div class="conEncabezado">
    <div id="txSeccion">
      <div class="encabezado-tit">Directorio</div>
      <div class="encabezado-subtit">&nbsp;</div>
    </div>
  </div>
</div>

<div class="contenido">


  <div class="clear"></div>
  <div class="tab_container">

    <div id="tab6" class="tab_content">
      <div class="categoria-tit"><?php echo $datos->directorio_categoria->name ?></div>
      <div id="contenu3">
        <div class="directorio-detalle">

          <?php if (!empty($datos->logo)) : ?>
            <div style="float:left;"><img src="<?php echo uploads_url($datos->logo) ?>" alt="" /></div>
          <?php endif; ?>

          <div class="resultado-nom2">
            <div class="resultado-empresa2"><?php echo $datos->empresa ?></div>
            <div class="resultado-calle"><?php echo $datos->direccion ?></div>
            <div class="resultado-tel">Tel. <?php echo $datos->telefono ?></div><br><br>
             <div class="resultado-tel">Sitio Web. <?php echo $datos->sitio_web ?></div>
             <div class="resultado-tel">Email. <?php echo $datos->email ?></div>
             

          </div>
          <div class="mapa"><div id="map_canvas" style="width:485px; height:220px;"></div></div>
          <div class="clr"></div>
          <div class="resultado-redes2">
            <div style="float:left;margin-right: 30px;margin-top: 4px;"><div class="" data-send="false" data-layout="button_count" data-width="100" data-show-faces="false"></div></div>

            <div class="resultado-red">
              <?php if (!empty($datos->facebook)) : ?>
                <a href="<?php echo $datos->facebook ?>"> <img src="images/logo-face.png" /></a>
              <?php endif; ?>
              <?php if (!empty($datos->twitter)) : ?>
                <a href="<?php echo $datos->twitter ?>"> <img src="images/logo-twit.png" /></a>
              <?php endif; ?>
              <?php if (!empty($datos->youtube)) : ?>
                <a href="<?php echo $datos->youtube ?>"> <img src="images/logo-you.png" /></a>
              <?php endif; ?>
            </div>

          </div>
          <div class="clr"></div>
          <div class="imagenes" style="width:440px;float:left;padding-right: 40px;">
            <div class="imagenes-tit">Descripción</div>
            <div class="servicios-txt"><?php echo $datos->descripcion ?></div>
          </div>

          <?php if ($datos->directorio_adicional->exists()) : ?>
            <div class="imagenes" style="width:480px;float:left;">
              <div class="imagenes-tit"  >Servicios</div>
              <div class="servicios-txt">
                <ul>
                  <?php foreach ($datos->directorio_adicional as $adicional) : ?>
                    <li><?php echo $adicional->name ?></li>
                  <?php endforeach; ?>
                </ul>
              </div>
            </div>
          <?php endif; ?>

          <div class="clear"></div>

          <?php if ($datos->directorio_image->exists()) : ?>
            <div class="imagenes">
              <div class="imagenes-tit">Imágenes</div>
              <?php foreach ($datos->directorio_image as $image) : ?>
                <div class="img-band" style="height: 150px; width:310px; overflow: hidden;">
                  <a href="<?php echo uploads_url($image->image) ?>" rel=fancy-gallery><img src="<?php echo uploads_url($image->thumb) ?>" /></a>
                </div>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>

        </div>

      </div>

      <div class="clr"></div>
    </div>
    <div class="clr"></div>
  </div>
</div>


<script src="https://maps.google.com/maps/api/js?sensor=true"></script>



<script type="text/javascript">
  function initialize(Ya, Za) {
    var latlng = new google.maps.LatLng(Ya, Za);
    var myOptions = {
      zoom: 8,
      center: latlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById("map_canvas"),
    myOptions);
  }
    
  
  
  function findAddressViaGoogle() {
    var address = <?= json_encode($datos->direccion) ?>;
    var geocoder = new google.maps.Geocoder();
    geocoder.geocode( { 'address': address, 'region': 'uk' }, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
        var result = results[0].geometry.location;
        initialize(result.Ya, result.Za);
      } else {
        alert("Unable to find address: " + status);
      }
    });
  }
    
  findAddressViaGoogle();
</script>