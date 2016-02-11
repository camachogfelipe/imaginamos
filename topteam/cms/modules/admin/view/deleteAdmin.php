<?php
////////////////////////////////
//@marionavas
//mail@marionavas.co
//Agencia: imaginamos.com
//Bogotá, Colombia, 2012
////////////////////////////////
session_start();
include("../../../core/class/db.class.php");
$db = new Database();
$db->connect();		

function sendToPage($url,$typeRedirection)
	{
		if($typeRedirection == "back")
			echo '<script>javascript:history.back();</script>';		
		else
			echo '<script>document.location.href=\''.$url.'\';</script>';
	}

	//Recibo id del admin
	$admin = $_GET['admin'];

	//Elimino archivos (fotos) y registros en la DB
		$query = "DELETE FROM cms_user WHERE id_user = '$admin'";
		$db->doQuery($query,DELETE_QUERY);
		sendToPage("administrators.php","");
	

?>