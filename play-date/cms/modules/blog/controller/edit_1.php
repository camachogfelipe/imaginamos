<?php

include("../../../core/class/db.class.php");
include '../define.php';

$db = new Database();
$db->connect();
$id = $_POST['foren'];
$texto = $_POST["texto"];

$imagen = $_POST['imagenant'];
//print_r($_POST);
if ($_POST["IMUFiles"][0]!='')
{
	$imagen = $_POST["IMUFiles"][0];	
}

if ($texto == '') {
    header('Location: ../view/Edit_1.php?id=' . base64_encode($id) . '&erno=3');
    exit;
} else {
//print_r($_POST);
        //$lastId = $db->getLastId();
        
        
        $db->doQuery("UPDATE cms_subcategoria SET texto_subcategoria = '".mysql_real_escape_string($texto)."', imagen_subcategoria = '".mysql_real_escape_string($imagen)."' WHERE id_subcategoria = '$id'",UPDATE_QUERY);
        
        header('Location: ../view/Edit_1.php?id=' . base64_encode($id) . '&erno=1');
        exit;
    }
    

?>