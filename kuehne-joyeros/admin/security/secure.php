<?php
////////////////////////////////
//@marionavas
//mail@marionavas.co
//Agencia: imaginamos.com
//Bogotá, Colombia, 2012
////////////////////////////////
session_start();
if(!isset($_SESSION["CMSimaginamos"])){
	
		include("../../../core/class/db.class.php");
		$db = new Database();
		$db->connect();
		
		$query = "SELECT config_path FROM cms_configuration WHERE config_id = '1'";
		$db->doQuery($query,SELECT_QUERY);
		$result = $db->results;
	
header("Location: ".$result[0][config_path]."");
}
?>