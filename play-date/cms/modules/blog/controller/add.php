<?php

include("../../../core/class/db.class.php");
include '../define.php';
$db = new Database();
$db->connect();

$titulo = $_POST["titulo"];
$texto = $_POST["texto"];


//print_r($_POST);

if ($titulo == '' or $texto == ''  ) {
    header('Location: ../view/Add.php?id=' . base64_encode('1') . '&erno=3');
    exit;
} else {

        $db->doQuery("INSERT INTO cms_blog(id_blog, title_blog, texto_blog, fecha_blog)VALUES(NULL,'".mysql_real_escape_string($titulo)."','".mysql_real_escape_string($texto)."','".date("Y-m-d H:i:s")."')", INSERT_QUERY);
        
         
        header('Location: ../view/Add.php?id=' . base64_encode('1') . '&erno=1');
        exit;
    
}
?>


