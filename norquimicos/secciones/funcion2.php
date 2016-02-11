<?php

$id = $_POST["id"];
$ss = $_POST["ss"];
include("admin/core/class/db.class.php");
$db = new Database();
$db->connect();
$query = $db->doQuery("DELETE FROM cantidad_cotizacion WHERE id_productos=" . $id . " AND id_cotizacion=" . $ss . "", DELETE_QUERY);
//$resultados = $db->results;
//echo "DELETE FROM cantidad_cotizacion WHERE id_productos=".$id." AND id_cotizacion=".$ss."";exit;

if ($db->doQuery($query, DELETE_QUERY)) {
    $vartodo = 0;
} else {
    $vartodo = 1;
}
echo $vartodo;
echo json_encode($vartodo);
?>

