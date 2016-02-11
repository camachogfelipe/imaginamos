<?php

include("../../../core/class/db.class.php");
include '../define.php';
$db = new Database();
$db->connect();

$titulo = $_POST["titulo"];



$fecha = $_POST["fecha"];
$url = $_POST["link"];


//print_r($_POST);

if ($titulo == '' or $fecha == ''or $url == '') {
    header('Location: ../view/Add.php?id=' . base64_encode('1') . '&erno=3');
    exit;
} else {
        
       // echo $pieces[0];
        //echo $pieces[1];
        $db->doQuery("INSERT INTO cms_eventos(id_evento, titulo_evento, fecha_evento, url_evento)VALUES(NULL,'".$titulo."','".mysql_real_escape_string($fecha)."','".'actividades.php'.$url."')", INSERT_QUERY);
        
         
        header('Location: ../view/Add.php?id=' . base64_encode('1') . '&erno=1');
        exit;
    
}
?>


