<?php
session_start();
include("../core/class/db.class.php");
$db = new Database();
$db->connect();



$valor=$_POST['mod'];
$contador=0;
foreach($valor as $k){
$contador++;	
echo $query = "UPDATE cms_menu SET orden = $contador WHERE menu_id =$k";
$db->doQuery($query,UPDATE_QUERY);

}

?>