<?php

include("../../../core/class/db.class.php");
$db = new Database();
$db->connect();


$enlace = $_POST["enlace"];
$id = $_POST['id'];
//echo "<pre>"; var_dump($_POST); echo "</pre>";
//echo print_r($titulo);
//exit();

if ($enlace == '') {
    header('Location: ../view/Edit.php?id=' . base64_encode($id) . '&erno=3');
    exit;
} else {
    $query = " UPDATE categoria SET 
			   nombre = '" . $enlace . "'
			   WHERE
			   id = '" . $id . "'";

    //die($query);
    if ($db->doQuery($query, INSERT_QUERY)) {
        header('Location: ../view/Edit.php?id=' . base64_encode($id) . '&erno=1');
        exit;
    } else {
        header('Location: ../view/Edit.php?id=' . base64_encode($id) . '&erno=2');
        exit;
    }
}
?>