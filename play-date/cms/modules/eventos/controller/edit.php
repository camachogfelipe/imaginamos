<?php

include("../../../core/class/db.class.php");
include '../define.php';

$db = new Database();
$db->connect();
$id = $_POST['grabar'];
$titulo = $_POST["titulo"];
$fecha = $_POST["fecha"];
//$url = $_POST["link"];
//print_r($_POST);
$s = 'actividades.php';

if ($titulo == '' or $fecha == "" or $_POST["link"] = "") {
    header('Location: ../view/Edit.php?id=' . base64_encode($id) . '&erno=3');
    exit;
} else {
//print_r($_POST);
        //$lastId = $db->getLastId();
        
        
        $db->doQuery("UPDATE cms_eventos SET titulo_evento = '".mysql_real_escape_string($titulo)."', fecha_evento = '".mysql_real_escape_string($fecha)."', url_evento = '".$s.$_POST["sebas"]."' WHERE id_evento = '$id'",UPDATE_QUERY);
        
       header('Location: ../view/Edit.php?id=' . base64_encode($id) . '&erno=1');
       exit;
    }
    

?>