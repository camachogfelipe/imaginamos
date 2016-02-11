<?php

include("../../../core/class/db.class.php");
include '../define.php';

$db = new Database();
$db->connect();
$id = $_POST['grabar'];
$titulo = $_POST["titulo"];
$texto = $_POST["texto"];
//print_r($_POST);


if ($titulo == '' or $texto == "") {
    header('Location: ../view/Edit.php?id=' . base64_encode($id) . '&erno=3');
    exit;
} else {
//print_r($_POST);
        //$lastId = $db->getLastId();
        
        
        $db->doQuery("UPDATE cms_blog SET title_blog = '".mysql_real_escape_string($titulo)."', texto_blog = '".mysql_real_escape_string($texto)."' WHERE id_blog = '$id'",UPDATE_QUERY);
        
        header('Location: ../view/Edit.php?id=' . base64_encode($id) . '&erno=1');
        exit;
    }
    

?>