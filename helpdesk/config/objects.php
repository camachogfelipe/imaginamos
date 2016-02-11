<?php
// Control de sesión
if (!isset($_SESSION["oUsuario"])){
	$_SESSION["oUsuario"] = new classHelpDeskUser();
}

?>