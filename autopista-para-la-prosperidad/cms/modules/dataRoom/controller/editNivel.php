<?php

include("../../../core/class/db.class.php");
$db = new Database();
$db->connect();

$tabla=$_POST['tabla'];
$nombre = $_POST["nombre"];
$id = $_POST['id'];

//echo "<pre>"; var_dump($_POST); echo "</pre>";
//echo print_r($titulo);
//exit();

if ($nombre == '') {
    header('Location: ../view/EditActividad.php?id=' . base64_encode($id) . '&erno=3');
    exit;
} else {
    $query = " UPDATE $tabla SET 
			   nombre = '" . $nombre. "'
			   WHERE
			   id = '" . $id . "'";

    //die($query);
    if ($db->doQuery($query, INSERT_QUERY)) {
        
        header('Location: ../view/Edit'.$tabla.'.php?id=' . base64_encode($id) . '&erno=1&ant='.$_POST["ant"].'&idt='.$_POST["idt"].'&idtt='.$_POST["idtt"].'&anttt='.$_POST["anttt"]);
        exit;
    } else {
        header('Location: ../view/Edit'.$tabla.'.php?id=' . base64_encode($id) . '&erno=2');
        exit;
    }
}
?>