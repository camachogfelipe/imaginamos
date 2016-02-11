<?php
////////////////////////////////
//@marionavas
//mail@marionavas.co
//Agencia: imaginamos.com
//Bogotá, Colombia, 2012
////////////////////////////////
include("../core/class/db.class.php");

$db = new Database();
$db->connect();

$query = "SELECT config_path FROM cms_configuration WHERE config_id = 1";
$db->doQuery($query,SELECT_QUERY);
$result = $db->results;

session_start();
session_unset();
session_destroy();
foreach($_SESSION as $key) unset($_SESSION[$key]);
//echo $result[0][config_path]; exit();
header("Location: ".$result[0][config_path]);
?>