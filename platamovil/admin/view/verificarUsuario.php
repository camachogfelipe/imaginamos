<?php
session_start();

require_once '../../ConexionBD.php';
require_once '../../shared/clases/UtilBusiness.php';

$login = $_POST['usuario'];
$contrasena = md5($_POST['password']);

$conex = conexion();
$sql = "SELECT id, nombre, login, correo
		FROM usuario
		WHERE estado='1'
		AND login='$login'
		AND password='$contrasena'";
$result = mysql_query($sql, $conex);
$existe = false;
while ( $row = mysql_fetch_array($result) ) {
	$_SESSION['id'] = session_id();
	$_SESSION['idUsuario'] = $row['id'];
	$_SESSION['nombreUsuario'] = $row['nombre'];
	$_SESSION['login'] = $row['login'];
	$_SESSION['correo'] = $row['correo'];
	$existe = true;
}

if ( $existe === true ){
	?>
	<script language="javascript">
		document.location.href = './contactos.php';
	</script>
	<?php
}
else{
	session_destroy();
	?>
	<script language="javascript">
		document.location.href = 'index.php?mensaje=Lo sentimos sus credenciales estan erradas, por favor intentelo de nuevo.';
	</script>
	<?php
}

?>