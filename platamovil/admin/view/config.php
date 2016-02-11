<?php
session_start();

if( !$_SESSION['id'] ){
	session_destroy();
	echo "<script language='javascript' type='text/javascript'>document.location.href='./index.php'</script>";
}

require_once '../../ConexionBD.php';
require_once '../../shared/clases/UtilBusiness.php';
require_once '../../shared/clases/Form.php';
?>