<?php

include("../../../core/class/db.class.php");
include '../define.php';
$db = new Database();
$db->connect();
$id = $_POST['id'];
$titulo = $_POST["titulo"];

$descripcion = $_POST["descriptivo"];


//print_r($_POST);

if ($titulo == '' or $descripcion == '' ) {
    //header('Location: ../view/cont.php?id=' . base64_encode($id) . '&erno=3');
    //exit;
} else {

   

      
        $db->doQuery("INSERT INTO `cms_contenido`(`id_contenido`, `id_actividades`, `titulo_contenido`, `texto_contenido`) VALUES (NULL,'".$id."','".mysql_real_escape_string($titulo)."','".mysql_real_escape_string($descripcion)."')", INSERT_QUERY);
       

       print_r($_POST);
         
        header('Location: ../view/cont.php?id=' . base64_encode($id) . '&erno=1');
        exit;
    
}
?>


