<?php include("head.php"); ?>
	<?php include("header.php"); ?>
<?php
$textoServiciosLinea = '';
$textoServiciosLinea = $servicios_linea[0]->texto;
?>
  
  <section class="cfx">
  	<h1 class="main-title">Servicios en línea</h1>
    <p  style="font-size:1em; color:#033566;"><?php echo nl2br($textoServiciosLinea); ?></p>
    <ul class="nav-din cfx">
      <li><a href="http://190.26.81.138/tracking" class="nav-din-con-bt" style="padding:1em 15%; width:70%;" target="_blank">Web tracking</a></li>
      <li><a href="../secciones/itinerario" class="nav-din-con-bt">Nuestro itinerario</a></li>
      <li><a href="https://www.zonapagos.com/t_portalhelmbank/" class="nav-din-con-bt" target="_blank">Pago de facturas online</a></li>
    </ul>
    <div class="con-linea-serv"></div>
  </section>
  
<?php include("footer.php"); ?>
