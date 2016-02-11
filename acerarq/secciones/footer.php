<?php $cContacto = new Dbcontacto();
$mData = array("where"=>"idcontacto=1");
$contacto = $cContacto->getListOne($mData);
?>
<footer>
			<div class="con-footer">
        <div class="mg-footer">
        	<div class="info-footer">
          	<div class="footer-top">
            	<div class="footer-c1">
              	<h1><strong>INFORMACIÓN</strong> DE CONTACTO</h1>
                <ul class="foo-lis">
                    <div class="foo-m-lis">
                        <li><?php echo utf8_encode($contacto["direccion"]) ?></li>
                        <li><a href="mailto:<?php echo utf8_encode($contacto["email"]) ?>"><?php echo utf8_encode($contacto["email"]) ?></a></li>
                        <li><?php echo utf8_encode($contacto["ciudad"]) ?></li>
                    </div>
                    <div class="foo-m-lis">
                        <li><?php echo utf8_encode($contacto["telefono_uno"]) ?></li>
                        <li><?php echo utf8_encode($contacto["telefono_dos"]) ?></li>
                        <li><?php echo utf8_encode($contacto["telefono_tres"]) ?></li>
                    </div>
                </ul>
              </div>
              <div class="footer-c2"><a href="index.php"><img src="assets/img/footer-logo.png" width="142" height="126" alt=""></a></div>
              <div class="footer-c3">
              	<h1><strong>FORMULARIO</strong> DE CONTACTO</h1>
                <form id="footer-form" action="index.php?seccion=mail" method="post">
                	<fieldset>
                  	<input name="nombre" value="Nombre..." type="text" onBlur="if(this.value == '') { this.value='Nombre...'}" onFocus="if (this.value == 'Nombre...') {this.value=''}">
                  </fieldset>
                  <fieldset>
                  	<input name="email" value="E-mail..." class="validate[required, custom[email]]" type="text" data-validation-placeholder="E-mail..." onBlur="if(this.value == '') { this.value='E-mail...'}" onFocus="if (this.value == 'E-mail...') {this.value=''}">
                  </fieldset>
                  <fieldset class="foo-bt">
                  	<input type="submit" value="Enviar" />
                  </fieldset>
                </form>
              </div>
            </div>
            <div class="footer-nav">
            	<ul class="foo-map">
              	<a href="index.php?seccion=index"><li>Inicio</li></a>
                <a href="index.php?seccion=empresa"><li class="<?php if ($_GET['seccion'] == 'empresa'){echo 'foo-act';}?>">¿Quiénes somos?</li></a>
                <a href="index.php?seccion=sirius"><li class="<?php if ($_GET['seccion'] == 'sirius'){echo 'foo-act';}?>">Sirius</li></a>
                <a href="index.php?seccion=galeria"><li class="<?php if ($_GET['seccion'] == 'galeria'){echo 'foo-act';}?>">Galería</li></a>
                <a href="index.php?seccion=servicios"><li class="<?php if ($_GET['seccion'] == 'servicios'){echo 'foo-act';}?>">Servicios</li></a>
                <a href="index.php?seccion=descargables"><li class="<?php if ($_GET['seccion'] == 'descargables'){echo 'foo-act';}?>">Descargables</li></a>
                <a href="index.php?seccion=contacto"><li class="<?php if ($_GET['seccion'] == 'contacto'){echo 'foo-act';}?>">Contáctenos</li></a>
              </ul>
            </div>
            <div class="footer-copy">
            	<div class="footer-info-copy"><p>&copy; 2013 <strong>ACERARQ</strong> - Todos los derechos reservados - Prohibida su reproducción parcial o total</p></div>
            	<div class="footer-ahorranito"></div>
            </div>
          </div>
        </div>
      </div>
		</footer>
    <div id="toTop"></div>
    
    <script type="text/javascript" src="assets/js/lib/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.bxslider.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.fancybox.js"></script>
		<script type="text/javascript" src="assets/js/jquery.fancybox-thumbs.js"></script>
    <script type="text/javascript" src="assets/js/jquery.pajinate.js"></script>
    <script type="text/javascript" src="assets/js/jquery.valid.js"></script>
    <script type="text/javascript" src="assets/js/jquery.easing.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.mousewheel.min.js"></script>	
    <script type="text/javascript" src="http://www.imaginamos.com/footer_ahorranito/jquery.ahorranito.js"></script>
		<script type="text/javascript" src="assets/js/actions.js"></script>
    
	</body>
</html>