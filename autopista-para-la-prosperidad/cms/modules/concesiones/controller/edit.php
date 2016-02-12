<?php

include("../../../core/class/db.class.php");
$db = new Database();
$db->connect();


$titulo = $_POST["titulo"];
$texto = $_POST["texto"];
$id = $_POST['id'];


//echo "<pre>"; var_dump($_POST); echo "</pre>";
//echo print_r($titulo);
//exit();

if ($texto == '' || $titulo == '') {
    header('Location: ../view/Edit.php?id=' . base64_encode($id) . '&erno=3');
    exit;
} else {
    $query = " UPDATE concesiones SET 
			   titulo = '" . $titulo . "',
			   texto = '" . mysql_real_escape_string($texto) . "'
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