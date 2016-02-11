	<div class="footer">
  	<div class="mg-footer clearfix">
    	<div class="footer-col-1">
      	<h3>DIRECCIÓN</h3>
        <p><?php echo $contacto->direccion;  ?></p>
        <p><?php echo $contacto->edificio;  ?></p>
        <p><?php echo $contacto->ciudad;  ?></p>
      </div>
      <div class="footer-col-2">
      	<a href="home"><img src="img/footer-logo.png" width="302" height="90" alt=""></a>
        <ul class="footer-map1">
        	<?php /*?><li><a href="empresa.php?seccion=1" class="<?php if ($_GET['seccion'] == '1'){echo 'map-act';}?>">Nosotros</a></li><?php */?>
          <li><a href="doctora" class="<?php echo ($this->session->userdata('page_act') == 'DRA. ROSALINDA')?"map-act":""; ?>">Nosotros</a></li>
          <li class="map-last"><a href="faq" class="<?php echo  ($this->session->userdata('page_act') == 'FAQ')?"map-act":""; ?>">Preguntas frecuentes</a></li>
        </ul>
        <ul class="footer-map2">
          <li><a href="home" id="f-act-home">Inicio</a></li>
          <li><a href="tratamiento" class="<?php echo  ($this->session->userdata('page_act') == 'ADELGAZAR')?"map-act":""; ?>">Adelgazar</a></li>
          <li><a href="corporal" class="<?php echo  ($this->session->userdata('page_act') == 'ESTÉTICA')?"map-act":""; ?>">Estética</a></li>
          <li><a href="lugar" class="<?php echo  ($this->session->userdata('page_act') == 'SEDE CAMPESTRE')?"map-act":""; ?>">Sede campestre</a></li>
          <li class="map-last"><a href="contactos" class="<?php echo ($this->session->userdata('page_act') == 'CONTACTOS')?"map-act":""; ?>">Contacto</a></li>
        </ul>
        <div class="con-footer-redes">
          <a href="<?php echo $youtube->link_red;  ?>" target="_blank"><div class="footer-red red-yt"></div></a>
          <a href="<?php echo $facebook->link_red;  ?>" target="_blank"><div class="footer-red red-fb"></div></a>
          <a href="<?php echo $twitter->link_red;  ?>" target="_blank"><div class="footer-red red-tw"></div></a>
        </div>
      </div>
            
      <div class="footer-col-3">
      	<h3>CONTÁCTENOS</h3>
        <p>Teléfono: <?php echo $contacto->telefono;  ?> Bogotá</p>
        <p>Todo Colombia <?php echo $contacto->movil;  ?></p>
        <p><a href="mailto:<?php echo $contacto->email;  ?>"><?php echo $contacto->email;  ?></a></p>
      </div>
      <div class="footer-sep"></div>
      <div class="con-footer-derechos">
      	<p>&copy; 2014 - Todos los derechos reservados - Prohibida su reproducción parcial o total.</p>
    		<div class="footer-ahorranito"></div>
      </div>
    </div>
	</div><div id="toTop"></div>
  <div class="nav-fx">
		<a href="contactos"><div class="fx-pick"><div class="fx-con"></div></div></a>
    <a href="mailto:<?php echo $contacto->email;  ?>"><div class="fx-pick"><div class="fx-mail"></div></div></a>
    <a href="<?php echo $twitter->link_red;  ?>" target="_blank"><div class="fx-pick"><div class="fx-tw"></div></div></a>
    <a href="<?php echo $facebook->link_red;  ?>" target="_blank"><div class="fx-pick"><div class="fx-fb"></div></div></a>
  </div>
  

  
  <!--script type="text/javascript" src="assets/js/lib/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.plugs.min.js"></script>
  <script type="text/javascript" src="assets/js/actions.js"></script-->
  
  </body>
</html>