<div class="footer">
    <div class="con-footer">
      <div class="footer-col-1">
        <a href="index.php"><img src="assets/imagenes/logo-footer.png" height="88" width="222"></a>
      </div>
        <?php $contacto = DbHandler::GetAll("SELECT * FROM datos_contacto")?>
      <div class="footer-col-2">
        <h2>Encuéntranos</h2>
        <ul class="lis-footer">
            <li><p><?php echo utf8_encode($contacto[0]["direccion"]);?><p></li>
            <li><p><?php echo utf8_encode($contacto[0]["ciudad"]);?><p></li>
        </ul>
      </div>
      <div class="footer-col-2">
        <h2>Contáctanos</h2>
        <ul class="lis-footer">
            <li><p><strong>57(1)</strong><?php echo utf8_encode($contacto[0]["telefono"]);?><p></li>
          <li><p><a href="mailto:contacto@asserto.net"><?php echo utf8_encode($contacto[0]["correo"]);?></a><p></li>
        </ul>
      </div>
      <div class="footer-col-3">
        <h2>Síguenos</h2>
        <a href="https://twitter.com/" target="_blank"><div class="footer-red red-tw"></div></a>
        <a href="https://es-la.facebook.com/" target="_blank"><div class="footer-red red-fb"></div></a>
      </div>
      <div class="con-login">
      	<div class="login-bt"></div>
        <form action="index.php?seccion=validar" class="login-form" method="post">
        	<label class="campo">
          	<input name="user" class="validate[required, custom[email]]" placeholder="Usuario..." type="text" value="">
          </label>
          <label class="campo">
          	<input name="pass" class="validate[required]" placeholder="Contraseña..." type="password" value="">
            <p><a class="modals-act" href="#modal-rec">¿Olvido su contraseña?</a></p>
          </label>
          <label class="campo-bt">
          	<input class="submit-log" type="submit" value="">
          </label>
        </form>
      </div>
      <div class="footer-copy">
        <div class="tx-derechos">
          &copy 2013. <strong>ASSERTO</strong>Todos los Derechos Reservados. Prohibida la reproducción total o parcial.
          <div class="footer-ahorranito"></div>
        </div>
      </div>
    </div>		
	</div>
  <div class="con-modals">
  	<div class="modal-info" id="modal-rec">
    	<h1 class="blue sw-tx">Recuperar contraseña.</h1>
      <form action="index.php?seccion=recovery" class="grl-form" method="post">
        <label class="campo">
          <input name="email" class="validate[required, custom[email]]" type="text" placeholder="Correo electrónico..." value="">
        </label>
        <label class="campo-bt">
          <input class="submit" type="submit" value="Enviar">
        </label>
      </form>
    </div>
    <div class="modal-info" id="modal-cam">
      <h1 class="blue sw-tx">Cambio de contraseña.</h1>
      <form action="index.php?seccion=cambio" class="grl-form" method="post">
        <label class="campo">
          <input class="" id="password" name="password" type="password" placeholder="Contraseña nueva..." value="">
        </label>
        <label class="campo">
          <input class="validate[required, equals[password]]" id="password2" name="password2" type="password" placeholder="Verifique su contraseña..." value="">
        </label>
        <label class="campo-bt">
          <input class="submit" type="submit" value="Cambiar">
        </label>
      </form>
    </div>
    <!--<div class="modal-info" id="modal-rec-ok">
      <h1 class="blue sw-tx">Enviado.</h1>
      <p>Los datos para reestablecer su contraseña se han enviado al correo suministrado.</p>
    </div>-->
  </div>
  
  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.plugs.min.js"></script>
	<script type="text/javascript" src="assets/js/actions.js"></script>
	<script type="text/javascript" src="http://www.imaginamos.com/footer_ahorranito/jquery.ahorranito.js"></script>
  
  <?php	
	if (isset($_GET["con"])) {
		echo '<script>setTimeout(\'alert("Confirmación de contraseña realizada correctamente, favor revisar su correo electrónico");\',400);</script>';
	}
	if (isset($_GET["conno"])) {
		echo '<script>setTimeout(\'alert("El correo que ingreso no se encuentra en la lista de usuarios");\',400);</script>';
	}
	if (isset($_GET["er"])) {
		echo '<script>setTimeout(\'alert("El usuario o la contraseña no son correctos");\',400);</script>';
	}
	if (isset($_GET["camok"])) {
		echo '<script>setTimeout(\'alert("Su clave fue cambiada con éxito");\',400);</script>';
	}	
	if (isset($_GET["okcom"])) {
		echo '<script>setTimeout(\'alert("Su comentario y/o archivo quedo registrado.");\',400);</script>';
	}
	?>