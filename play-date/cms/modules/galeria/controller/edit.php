<?php

include("../../../core/class/db.class.php");
include '../define.php';

$db = new Database();
$db->connect();
$id = $_POST['foren'];
$titulo = $_POST["titulo"];

$imagen = $_POST['imagenant'];
//print_r($_POST);
if ($_POST["IMUFiles"][0]!='')
{
	$imagen = $_POST["IMUFiles"][0];	
}

if ($titulo == '') {
    header('Location: ../view/Edit.php?id=' . base64_encode($id) . '&erno=3');
    exit;
} else {
//print_r($_POST);
        //$lastId = $db->getLastId();
        
        
        $db->doQuery("UPDATE cms_galeria SET titulo_galeria = '".mysql_real_escape_string($titulo)."', imagen_galeria = '".mysql_real_escape_string($imagen)."' WHERE id_galeria = '$id'",UPDATE_QUERY);
        
        header('Location: ../view/Edit.php?id=' . base64_encode($id) . '&erno=1');
        exit;
    }
    

?>