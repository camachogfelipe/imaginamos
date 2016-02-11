<?php

include "admin/core/class/db.class.php";
include "admin/modules/class/ClassFile.class.php";

$bandera = $_POST["bandera"];
$db = new Database();
//Conectamos
$db->connect();

$db->doQuery("SELECT * FROM cotizaciones WHERE id=" . $bandera, SELECT_QUERY);
$fin = $db->results[0];
if ($fin["estado"] == "revisando") {
    $otro = "false";
} else {
    if ($fin["estado"] == "incompleto") {
        $db->doQuery("UPDATE cotizaciones SET estado='revisando' WHERE id=" . $bandera, UPDATE_QUERY);
        $fin1 = $db->results;
        if ($fin1) {
                $otro = "true";
        } else {
               $otro = "false";
        }
    } else {
            $otro = "false";
    }
}
echo     $otro ;
//echo "UPDATE cotizaciones SET estado='revisando' WHERE id=".$bandera;exti
?>
