<?php
////////////////////////////////////////////////////////
//@marionavas
//Agencia: imaginamos.com
//Bogotá, Colombia, 2012
////////////////////////////////////////////////////////
session_start();
include("../core/class/db.class.php");
$db = new Database();
$db->connect();
////////////////////////////////////////////////////////
$emailuser = $_POST['username'];
$pass = $_POST['password'];
$passEncripted = md5($pass);

$query = "SELECT * FROM cms_user where email_user = '".mysql_real_escape_string($emailuser)."' and password_user = '".mysql_real_escape_string($passEncripted)."'";
$db->doQuery($query,SELECT_QUERY);
if($result = $db->results)
		{		
			$_SESSION['CMSimaginamos'] = TRUE; //Variable de Sesión que indicará si concedemos o no acceso al CMS
			$_SESSION['CMSRolUser'] = $result[0]["rol_user"]; //Variable de Sesión que indicará el nivel de acceso
			$data = TRUE; // Se logró el LOGIN
		}
	else
		$data = FALSE; //No se logró el LOGIN
	echo $data;
////////////////////////////////////////////////////////
?>