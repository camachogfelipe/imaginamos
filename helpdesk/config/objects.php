<?php
// Control de sesi�n
if (!isset($_SESSION["oUsuario"])){
	$_SESSION["oUsuario"] = new classHelpDeskUser();
}

?>