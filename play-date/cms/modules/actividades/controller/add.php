<?php

include("../../../core/class/db.class.php");
include '../define.php';
$db = new Database();
$db->connect();

$titulo = $_POST["titulo"];
$subtitulo = $_POST["subtitulo"];
$subtitulo2 = $_POST["subtitulo2"];
$descripcion = $_POST["descriptivo"];
$completo = $_POST["completo"];
$imagen = $_POST["IMUFiles"][0];
$imagen2 = $_POST["IMU1Files"][0];

//print_r($_POST);

if ($titulo == '' or $subtitulo == '' or $subtitulo2 == '' or $descripcion == '' ) {
    header('Location: ../view/Add.php?id=' . base64_encode('1') . '&erno=3');
    exit;
} else {

    if (count($imagen) == 0) {
        header('Location: ../view/Add.php?id=' . base64_encode('1') . '&erno=4');
        exit;
    } else {


      
        $db->doQuery("INSERT INTO cms_actividades(id_actividades, titulo_actividades, subtitulo_actividades, subtitulo2_actividades, texto_actividades, texto_actividades_completo, imagen_actividades)VALUES(NULL,'".mysql_real_escape_string($titulo)."','".mysql_real_escape_string($subtitulo)."','".mysql_real_escape_string($subtitulo2)."','".mysql_real_escape_string($descripcion)."','".mysql_real_escape_string($completo)."','".mysql_real_escape_string($imagen)."')", INSERT_QUERY);
        $lastId = $db->getLastId();

        if (count($_POST["IMU1Files"] > 0)) {
            for ($i = 0; $i < count($_POST["IMU1Files"]); $i++) {
                $imageOk = $_POST['IMU1Files'][$i];
                $db->doQuery("INSERT INTO cms_actividades_pics(actividades_pics_id, id_actividades, actividades_pics_path)VALUES('','$lastId','".mysql_real_escape_string($imageOk)."')", INSERT_QUERY);
                
                
            }
        }
         
        header('Location: ../view/Add.php?id=' . base64_encode('1') . '&erno=1');
        exit;
    }
}
?>


