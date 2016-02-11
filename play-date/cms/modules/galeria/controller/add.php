<?php

include("../../../core/class/db.class.php");
include '../define.php';
$db = new Database();
$db->connect();

$titulo = $_POST["titulo"];
$imagen = $_POST["IMUFiles"][0];


//print_r($_POST);

if ($titulo == '' ) {
    header('Location: ../view/Add.php?id=' . base64_encode('1') . '&erno=3');
    exit;
} else {

    if (count($imagen) == 0) {
        header('Location: ../view/Add.php?id=' . base64_encode('1') . '&erno=4');
        exit;
    } else {


      
        $db->doQuery("INSERT INTO cms_galeria(id_galeria, titulo_galeria, imagen_galeria)VALUES(NULL,'".mysql_real_escape_string($titulo)."','".mysql_real_escape_string($imagen)."')", INSERT_QUERY);
        
         
        header('Location: ../view/Add.php?id=' . base64_encode('1') . '&erno=1');
        exit;
    }
}
?>


