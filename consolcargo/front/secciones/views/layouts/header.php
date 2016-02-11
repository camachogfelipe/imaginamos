<?php 
$facebook = '';
$twitter = '';
$youtube = '';
$chat = '';
if ($redes != false){ ?>
<?php
foreach ($redes as $dato):
$facebook = $dato->facebook;
$twitter = $dato->twitter;
$youtube = $dato->youtube;
$chat = $dato->google;
endforeach;
}
?>    

<?php if ($destacado != false): ?>
    <?php
    foreach ($destacado as $dato):
        $textoDestacado = $dato->texto;
        $webTracking = $dato->web_tracking;
        $pagoFactura = $dato->pago_factura;
        $itinerarios = $dato->itinerarios;
        $imagenDestacado = $dato->imagen;
        $pagoFacturaInterno = $dato->pago_factura_interno == 'SI' ? '' : 'target="_blank"';
        $itinerariosInterno = $dato->itinerarios_interno == 'SI' ? '' : 'target="_blank"';
        $webTrackingInterno = $dato->web_tracking_interno == 'SI' ? '' : 'target="_blank"';
    endforeach;
    ?>
<?php endif; ?>

<header>
      <div class="con-header cfx">
    		<div class="header-logo">
      		<a href="../index.php"><img src="assets/img/header-logo.png" alt=""></a>
      	</div>
      	<div class="con-header-redes">

      	  <div class="header-red header-chat"><a id="chat" href="<?php echo site_url(); ?>chatroom"  ><span class="icon-chat"></span></a></div>
      	  <div class="header-red"><a href="<?php echo $youtube;?>" target="_blank"><span class="icon-yt"></span></a></div>
      	  <div class="header-red"><a href="<?php echo $twitter;?>" target="_blank"><span class="icon-tw"></span></a></div>
      	  <div class="header-red"><a href="<?php echo $facebook;?>" target="_blank"><span class="icon-fb"></span></a></div>
          <div class="header-red"><a href="<?php echo site_url(); ?>"><span class="icon-home"></span></a></div>
      	</div>
      </div>


      <div class="prueba" style="display:none;">test</div>


		</header>
		<nav>
      <!--Navegación 1-->
      <div class="nav-main-b">
      	<ul class="nav-main">
        	<li><a href="../secciones/empresa">Nuestra empresa</a></li>
          <li class="nav-sep"></li>
          <!--Pendiente-->
          <!--<li><a href="#">Nuestros procesos</a></li>-->
          <li class="nav-sep"></li>
          <li><a href="../secciones/servicios">Nuestros servicios</a></li>
          <li class="nav-sep"></li>
          <!--Pendiente-->
          <!--<li><a href="#" class="nav-main-s">Construcción</a></li>-->
          <li class="nav-sep"></li>
          <li><a href="../secciones/enlaces">Enlaces importantes</a></li>
          <li class="nav-sep"></li>
          <li class="con-sub-nav-b">
            <a href="../secciones/serviciosLinea">Servicios en línea<span class="icon-arrow-dw"></span></a>
            <ul>
              <li><a href="<?php echo $webTracking; ?>" target="_blank">Web tracking</a></li>
              <li><a href="../secciones/itinerario">Nuestro itinerario</a></li>
              <li><a href="<?php echo $pagoFactura ?>" target="_blank">Pago de facturas online</a></li>
            </ul>
          </li>
          <li class="nav-sep"></li>
          <li><a href="../secciones/contacto" class="nav-main-s">Contáctenos</a></li>
        </ul>
      </div>	
      <!--Navegación 2-->
      <div class="nav-res">
        <div id="dl-menu" class="dl-menuwrapper">
          <button class="dl-trigger"></button>
          <h1>Menu</h1>
          <ul class="dl-menu">
            <li><a href="../secciones/empresa">Nuestra empresa</a></li>
            <!--Pendiente-->
         <!--   <li><a href="#">Nuestros procesos</a></li>-->
            <li><a href="../secciones/servicios">Nuestros servicios</a></li>
            <!--Pendiente-->
           <!-- <li><a href="#">Construcción</a></li> -->
            <li><a href="../secciones/enlaces">Enlaces importantes</a></li>
            <li>
              <a href="../secciones/serviciosLinea">Servicios en línea</a>
              <ul class="dl-submenu">
                <li><a href="<?php echo $webTracking; ?>" target="_blank">Web tracking</a></li>
                <li><a href="../secciones/itinerario">Nuestro itinerario</a></li>
                <li><a href="<?php echo $pagoFactura; ?>" target="_blank">Pago de facturas online</a></li>
              </ul>
            </li>
            <li><a href="../secciones/contacto">Contáctenos</a></li>
          </ul>
        </div>
			</div>
		</nav>
<script type="text/javascript">
$('#chat').click(function(){
    var enlace = $(this).data('link'); 
    window.open(enlace, "_blank", "width=820,height=500");
    return false; 
}); 

 

/*
$(window).bind("load", function(){$(".prueba").delay(3000).fadeIn(400); });*/

/*
var time_out = 0;
if(time_out == 0){
 setInterval(
  function(){
    var enlace = '<?php echo site_url(); ?>chatroom/helper.php';
    window.open(enlace, "_blank", "width=820,height=500");
    return false; 
 },30000);
 time_out = 1;*/

}




</script>