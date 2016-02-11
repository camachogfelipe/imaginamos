<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="robots" content="noindex, nofollow">
		<title>Administrador de contenidos</title>
		<link rel="shortcut icon" href="../front/favicon.ico" />
		<link type="text/css" rel="stylesheet" href="../shared/css/admin/root.css" />
		<script type="text/javascript" src="../shared/js/jquery.js"></script>
	</head>
	<body>

		<div class="wrapper"><div>
				<div class="loginform">
					<div class="title">
						<img src="../shared/img/admin/logo.png"  /></div>
					<div class="body">
						<div id="capa_error" class="albox errorbox" style="display:<?php echo (isset($_GET['mensaje']) && $_GET['mensaje']!="" ? "block" : "none"); ?>;"> <b>Error : <?php echo (isset($_GET['mensaje']) && $_GET['mensaje']!="" ? $_GET['mensaje'] : $_GET['mensaje']); ?></b> <a href="javascript:void(0);" class="close tips" onclick="$('#capa_error').hide('slow');" title="close">close</a></div>
						<form action="./verificarUsuario.php" method="post" aid="form1" name="form1">
							<label for="usuario" class="log-lab">Usuario</label>
							<input type="text" name="usuario" value="" id="usuario" class="login-input-user" placeholder="Usuario" autocomplete="off" />
							<label for="password" class="log-lab">Contraseña</label>
							<input type="password" name="password" value="" id="password" class="login-input-user" placeholder="Contraseña"  />
							<input type="submit" name="button" id="button" value="Ingresar" class="button"/>
						</form>
					</div>
				</div>
				<footer class="footer_login">
					<div>CMS Imaginamos - Todos los derechos reservados © 2012.</div>
					<div>Diseño de software web: <a href="http://imaginamos.com">imaginamos.com</a>
					</div>
				</footer>
			</div>
		</div>
	</body>
</html>