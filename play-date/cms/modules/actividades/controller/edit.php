<?php

include("../../../core/class/db.class.php");
include '../define.php';

$db = new Database();
$db->connect();
 $id = $_POST['titulo5'];
 //$id = base64_decode($id);
$titulo = $_POST["titulo"];
$subtitulo = $_POST["subtitulo"];
$subtitulo2 = $_POST["subtitulo2"];
$descripcion = $_POST["descriptivo"];
$completo = $_POST["completo"];
$imagen = $_POST["IMUFiles"][0];
//$imagen2 = $_POST["IMU1Files"][0];

if ($titulo == '' or $subtitulo == '' or $subtitulo2 == '' or $descripcion == '') {
    header('Location: ../view/Edit.php?id=' . base64_encode($id) . '&erno=3');
    exit;
} else {
//print_r($_POST);
        //$lastId = $db->getLastId();
       
        if(count($_POST["IMU1Files"]) > 0)
		{
		for($i=0; $i<count($_POST["IMU1Files"]); $i++)
		$db->doQuery("INSERT INTO cms_actividades_pics  (actividades_pics_id, id_actividades, actividades_pics_path)VALUES(NULL,'".$id."','".$_POST['IMU1Files'][$i]."')",INSERT_QUERY);
		}
        if(count($_POST["IMUFiles"][0]) == 0){
            
            $db->doQuery("UPDATE cms_actividades SET titulo_actividades = '".  mysql_real_escape_string($titulo)."', subtitulo_actividades = '".  mysql_real_escape_string($subtitulo)."', subtitulo2_actividades = '".  mysql_real_escape_string($subtitulo2)."', texto_actividades = '".  mysql_real_escape_string($descripcion)."', texto_actividades_completo = '".  mysql_real_escape_string($completo)."'  WHERE id_actividades = '$id'",UPDATE_QUERY); 
        }  else {
            $db->doQuery("UPDATE cms_actividades SET titulo_actividades = '".  mysql_real_escape_string($titulo)."', subtitulo_actividades = '".  mysql_real_escape_string($subtitulo)."', subtitulo2_actividades = '".  mysql_real_escape_string($subtitulo2)."', texto_actividades = '".  mysql_real_escape_string($descripcion)."', texto_actividades_completo = '".  mysql_real_escape_string($completo)."' , imagen_actividades = '".  mysql_real_escape_string($_POST["IMUFiles"][0])."' WHERE id_actividades = '$id'",UPDATE_QUERY); 
        
        }
               
        
        header('Location: ../view/Edit.php?id=' . base64_encode($id) . '&erno=1');
        exit;
  
  
    }
    

?>