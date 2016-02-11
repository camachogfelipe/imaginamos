<?php

include "admin/core/class/db.class.php";
include "admin/modules/class/ClassFile.class.php";

$bandera = $_POST["bandera"];
$db = new Database();
//Conectamos
$db->connect();
//echo "UPDATE cotizaciones SET estado='revisando' WHERE id=".$bandera;exti
 $db->doQuery("SELECT * FROM cotizaciones WHERE id=".$bandera, SELECT_QUERY);
//$fin1 = DbHandler::GetAll("UPDATE cotizaciones SET estado='revisando' WHERE id=".$bandera);
$fin1 = $db->results;
$html="";
if($fin[0]["estado"]=="incompleto"){
    $db->doQuery("UPDATE cotizaciones SET estado='revisando' WHERE id=".$bandera, UPDATE_QUERY);
    $html = "1";
    
}else{
    $html = "0";
}

return $html;



?>
