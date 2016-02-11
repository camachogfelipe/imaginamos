<?php

include("../../../core/class/db.class.php");


$db = new Database();
$db->connect();
$id = $_POST['ids'];
//$id = base64_decode($id);
$titulo = $_POST["titulo"];
$texto = $_POST["texto"];

$imagen = $_POST["IMUFiles"][0];
$imagen2 = $_POST['imagenant'];


//print_r($_POST);

if ($titulo == '' or $texto == '') {
    header('Location: ../view/Edit.php?id=' . base64_encode($id) . '&erno=3');
    exit;
} else {
    if (count($imagen) > 0) {
        $query = " UPDATE  cms_almacen SET
            almacen_titulo =  '" . mysql_real_escape_string($titulo) . "',
            almacen_texto =  '" . mysql_real_escape_string($texto) . "',
            
            almacen_image =  '" . mysql_real_escape_string($imagen) . "'
            WHERE  almacen_id ='" . $id . "'";
        if ($db->doQuery($query, UPDATE_QUERY)) {
            header('Location: ../view/Edit.php?id=' . base64_encode($id) . '&erno=1');
            exit;
        } else {
            header('Location: ../view/Edit.php?id=' . base64_encode($id) . '&erno=2');
            exit;
        }
    }else{
        //print_r($_POST);
       $query = " UPDATE  cms_almacen SET
            almacen_titulo =  '" . mysql_real_escape_string($titulo) . "',
            almacen_texto =  '" . mysql_real_escape_string($texto) . "',
            almacen_image =  '" . mysql_real_escape_string($imagen2) . "'
            
            WHERE  almacen_id ='" . $id . "'";
/* echo $query;
 echo $id;*/
        if ($db->doQuery($query, UPDATE_QUERY)) {
            header('Location: ../view/Edit.php?id=' . base64_encode($id) . '&erno=1');
            exit;
        } else {
            header('Location: ../view/Edit.php?id=' . base64_encode($id) . '&erno=2');
            exit;
        }
        
    }
}
?>