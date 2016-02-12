<?php

include("../../../core/class/db.class.php");
$db = new Database();
$db->connect();


$actividad = $_POST["actividad"];
$fecha = $_POST["fecha"];
$id = $_POST['id'];

//echo "<pre>"; var_dump($_POST); echo "</pre>";
//echo print_r($titulo);
//exit();

if ($actividad == '' || $fecha == '') {
    header('Location: ../view/EditActividad.php?id=' . base64_encode($id) . '&erno=3');
    exit;
} else {
    $query = " UPDATE actividad SET 
			   actividad = '" . $actividad . "',
			   fecha = '" . $fecha . "'
			   WHERE
			   id = '" . $id . "'";

    //die($query);
    if ($db->doQuery($query, INSERT_QUERY)) {
        header('Location: ../view/EditActividad.php?id=' . base64_encode($id) . '&erno=1');
        exit;
    } else {
        header('Location: ../view/EditActividad.php?id=' . base64_encode($id) . '&erno=2');
        exit;
    }
}
?>