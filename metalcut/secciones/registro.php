<!DOCTYPE html>
<html>
	<head>
  	<title>- METALCUT -</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="assets/css/metalcut.css" />
  </head>
	<body class="body-reg">
  
  	<div style="width:450px; height:450px; background:url(assets/img/registro-mark.png); position:absolute; right:0; top:0; z-index:-1;"></div>
    
		<div id="modal-registro">
			<div class="con-logo-form">      	
				<div class="form-logo">
					<img src="assets/img/header-logo.jpg" width="100" height="120" alt="">
				</div>
				<h1>Registrarme</h1>
			</div>
			<form class="fm-int" action="index.php?base&seccion=mail2&estado=1" method="post">
				<fieldset>
					<label><strong>Nombre de la empresa:</strong></label>
					<input type="text" class="validate[required]" id="empresa" name="empresa">
				</fieldset>
				<fieldset>
					<label><strong>Correo electr&#243;nico:</strong></label>
					<input type="text" id="correo" name="correo" class="validate[required, custom[email]]">
				</fieldset>
				<fieldset>
					<label><strong>Nombre de contacto:</strong></label>
					<input type="text" id="nombre" name="nombre" class="validate[required]">
				</fieldset>
				<fieldset>
					<label><strong>Contrase&#241;a:</strong></label>
					<input type="password" id="contrasena" name="contrasena" class="validate[required]" id="password">
				</fieldset>
				<fieldset>
					<label><strong>Fecha de nacimiento:</strong></label>
					<input type="text" id="fecha_nacimiento" name="fecha_nacimiento" class="date-born" style="position:relative;">
				</fieldset>
				<fieldset>
					<label><strong>Verificar contrase&#241;a:</strong></label>
					<input type="password"  id="password2" class="validate[required,equals[contrasena]]">
                                        <!--  -->
				</fieldset>
				<fieldset>
					<label><strong>Genero:</strong></label>
					<select id="genero" name="genero">
						<option value="0">-</option>
						<option value="1">&nbsp; &bull; Masculino</option>
						<option value="2">&nbsp; &bull; Femenino</option>
					</select>
				</fieldset>
				<fieldset>
					<label><strong>NIT de la empresa:</strong></label>
					<input type="text" id="nit_empresa" name="nit_empresa" class="validate[required]">
				</fieldset>
				<fieldset>
					<label><strong>Ciudad:</strong></label>
					<input type="text" id="ciudad" name="ciudad" class="validate[required]">
				</fieldset>
				<div class="bt-ingreso">
					<input type="submit" class="bt-envio" value="">
				</div>
			</form>
		</div>
	<!--	<div class="con-modals">
                <div id="modal-rec-ok">
                  <h1>Informaci&#211;n enviada correctamente.</h1>
                  <p>Ya puede ingresar a nuestro sistema.</p>
                </div>
              </div>	-->	
		<script type="text/javascript" src="assets/js/lib/jquery.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery.plugs.min.js"></script>
    <script type="text/javascript" src="http://www.imaginamos.com/footer_ahorranito/jquery.ahorranito.js"></script>
		<script type="text/javascript" src="assets/js/actions.js"></script>
      
	</body>
</html>
<?php 
 if (!empty($_GET['Erno'])) {
        $valor = $_GET['Erno'];
        if ($valor == 1) {
            ?>
              <div class="section-sep"></div>
                <div class="con-modals">
                  <div id="modal-rec-ok">
                    <h1>Informacion enviada correctamente.</h1>
                    <p>En las pr&#243;ximas 24 horas uno de nuestros asesores se pondr&#225; en contacto.</p>
                  </div>
                </div>
            <?php
        }
        if ($valor == 2) {
            ?>
              <div class="section-sep"></div>
                <div class="con-modals">
                  <div id="modal-rec-ok">
                    <h1>Ya existe este usuario.</h1>
                  </div>
                </div>
            <?php
        }
}
?>