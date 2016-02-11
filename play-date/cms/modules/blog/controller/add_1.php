<?php

include("../../../core/class/db.class.php");
include '../define.php';
$db = new Database();
$db->connect();
$id = $_POST['grabar'];
$texto = $_POST["texto"];



//print_r($_POST);

if ($texto == '' ) {
    header('Location: ../view/coment.php?id=' . base64_encode('1') . '&erno=3');
    exit;
} else {

   

      
        $db->doQuery("INSERT INTO cms_comentarios(id_comentario,id_blog, nombre_comentario, texto_comentario, fecha_comentario)VALUES(NULL,'".$id."','Play Date','".mysql_real_escape_string($texto)."','".date("Y-m-d H:i:s")."')", INSERT_QUERY);
        
         
        header('Location: ../view/coment.php?id=' . base64_encode($id) . '&erno=1');
        exit;
    
}
?>


