		<footer>
      <div class="con-footer">
        <div class="foo-label">
        	<h1>
            <span>
            	<div class="icon-foo-label"></div>
              INFORMACIÓN DE CONTACTO
              <div class="icon-label icon-label-1"></div>
            	<div class="icon-label icon-label-2"></div>
            </span>
          </h1>
        </div>
        <div class="mg-footer cfx">
          <div class="con-foo-cols cfx">
          	<div class="foo-col foo-col-1 fl">
            	<h1><span>Mapa de</span> Navegación</h1>
              <ul class="foo-map">
              	<a href="<?php echo base_url(); ?>empresa"><li><span></span>Acerca de Dajer</li></a>
                <a href="<?php echo base_url(); ?>productos"><li><span></span>Productos</li></a>
                <a href="<?php echo base_url(); ?>catalogos"><li><span></span>Catálogos</li></a>
                <a href="<?php echo base_url(); ?>videos"><li><span></span>Videos</li></a>
                <a href="<?php echo base_url(); ?>servicios"><li><span></span>Servicios</li></a>
                <a href="<?php echo base_url(); ?>contacto"><li><span></span>Contacto</li></a>
              </ul>
            </div>
            <div class="foo-col foo-col-2 fl">
            	<h1><span>Ubicación</span> Geográfica</h1>
              <div class="con-map">
                <div class="map-pick"></div>
              	<div class="map" style="background:url(http://maps.google.com/maps/api/staticmap?center=<?php echo $contacto->cordenada_x ?>,<?php echo $contacto->cordenada_y ?>&zoom=14&size=600x300&sensor=false);">
                	<!--iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps?f=q&amp;source=s_q&amp;hl=es-419&amp;geocode=&amp;q=&amp;aq=&amp;sll=4.38749,-74.130249&amp;sspn=1.552698,2.705383&amp;ie=UTF8&amp;t=m&amp;ll=4.625704,-74.031372&amp;spn=1.226438,2.69165&amp;z=8&amp;output=embed"></iframe-->
                </div><div class="map-bor-1"></div><div class="map-bor-2"></div><div class="map-bor-3"></div><div class="map-bor-4"></div>
              </div>
            </div>
            <div class="foo-col foo-col-3 fr">
            	<h1><span>Información de</span> Contacto</h1>
              <ul class="foo-info">
              	<li class="fl">
                	<div class="foo-info-c1 fl"><span class="foo-info-icon-1"></span>Telefóno:</div>
                  <div class="foo-info-c2 fr"><?php echo $contacto->telefono1; ?><br><?php echo $contacto->telefono2; ?></div>
                </li>
                <li class="fl">
                	<div class="foo-info-c1 fl"><span class="foo-info-icon-2"></span>E-mail:</div>
                  <div class="foo-info-c2 fr"><a href="mailto:<?php echo $contacto->email; ?>"><strong><?php echo $contacto->email; ?></strong></a></div>
                </li>
                <li class="fl">
                	<div class="foo-info-c1 fl"><span class="foo-info-icon-3"></span>Dirección:</div>
                        <div class="foo-info-c2 fr"><?php echo $contacto->direccion; ?><br><?php echo $contacto->edificio; ?><br><?php echo $contacto->ciudad; ?></div>
                </li>
              </ul>
            </div>
          </div>
          <div class="con-copy-footer">
          	<div class="foo-copy fl"><p>&copy; 2014 <strong>DAJER EQUIPOS</strong> - Todos los derechos reservados - Prohibida su reproducción parcial o total</p></div>
          	<div class="footer-ahorranito fr"></div>
          </div>
        </div>
      </div>
    </footer>
    
    <script type="text/javascript" src="<?php echo front_asset("js/jquery.min.js") ?>"></script>
    <script type="text/javascript" src="<?php echo front_asset("js/jquery.plugs.min.js") ?>"></script>
    <script type="text/javascript" src="<?php echo front_asset("js/actions.js") ?>"></script>
    <script type="text/javascript" src="<?php echo front_asset("js/jquery.ahorranito.js") ?>"></script>

	</body>
</html>