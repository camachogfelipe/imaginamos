<?php

//Evita presentar contenidos sin el login debido
include "../../../security/secure.php";
//include_once("../../../../config/config.php");
include "../../../core/class/db.class.php";
include "../../class/plGeneral.fnc.php";
include "../../class/PhpThumbFactory.class.php";
include "../../class/ClassFile.class.php";


//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

if (isset($_POST["order"])) {
    
    $array = $_POST["order"];
    $count = count($array);
    for($i=0;$i < $count ;$i++){
        
        
        $db->doQuery("UPDATE servicios SET orden = '$i' WHERE id=".$array[$i], UPDATE_QUERY);
    }
//    $update=$db->doQuery("UPDATE servicios SET orden = '$count' WHERE id= 1", UPDATE_QUERY);
}



?>

