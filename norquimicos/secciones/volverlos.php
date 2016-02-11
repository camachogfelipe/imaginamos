<?php

include "admin/core/class/db.class.php";
include "admin/modules/class/ClassFile.class.php";

$bandera = $_POST["bandera"];
$db = new Database();
//Conectamos
$db->connect();

$query = $db->doQuery("UPDATE cotizaciones SET estado='incompleto' WHERE id=" . $bandera, UPDATE_QUERY);
//$fin1 = $db->results;
if (!$db->doQuery($query, UPDATE_QUERY)) {
    echo 1;
} else {
    echo 0;
}
?>
