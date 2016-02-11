<?php

session_start();
ini_set('display_errors', 'Off');

//Evita presentar contenidos sin el login debido
include "../../../security/secure.php";
define('SITE_ROOT', dirname(dirname(__FILE__)) . '/');
include("../../../core/class/db.class.php");
include SITE_ROOT . "class/plGeneral.fnc.php";
include SITE_ROOT . "class/PhpThumbFactory.class.php";
include SITE_ROOT . "class/ClassFile.class.php";

$id = $_POST['id'];
$sub = $_POST['sub'];
$nombre = $_POST['nombre'];
$titulopro = $_POST['titulopro'];
$subtitulo = $_POST['subtitulo'];
$despro = $_POST['despro'];
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();
if ($nombre == ''|| $titulopro=='' || $subtitulo == '' || $despro == '') {
    header('Location:./../view/index.php?seccion=editpro&Erno=3&id='.$id.'');
    exit;
} else {

     $db->doQuery(" UPDATE cms_industrias_productos SET nombre_industrias_subcategorias = '" . mysql_real_escape_string($nombre) . "',
                                       titulo_industrias_productos = '" . mysql_real_escape_string($titulopro) . "',
                                       subtitulo_industrias_productos = '" . mysql_real_escape_string($subtitulo) . "',
                                       des_industrias_productos = '" . mysql_real_escape_string($despro) . "' WHERE idcms_industrias_productos ='".$id."'", 3);
     
     $retorno = ClassFile::UploadImagenFile("img1", "../../../../images", "prod1_$id", "346_398_prod1_$id",346,398);
    if ($retorno["Status"] == "Uploader") {
        $db->doQuery("UPDATE cms_industrias_productos SET img1_industrias_productos = '" . $retorno["NameFile"] . "' WHERE idcms_industrias_productos = '".$id."'", 3);
    } 
    $retorno1 = ClassFile::UploadImagenFile("img2", "../../../../images", "prod2_$id", "199_199_prod2_$id", 199, 199);
    if ($retorno1["Status"] == "Uploader") {
        $db->doQuery("UPDATE cms_industrias_productos SET img2_industrias_productos = '" . $retorno1["NameFile"] . "' WHERE idcms_industrias_productos = '".$id."'", 3);
        
    }  
    $retorno2 = ClassFile::UploadImagenFile("img3", "../../../../images", "prod3_$id", "199_199_prod3_$id", 199, 199);
    if ($retorno2["Status"] == "Uploader") {
        $db->doQuery("UPDATE cms_industrias_productos SET img3_industrias_productos = '" . $retorno2["NameFile"] . "' WHERE idcms_industrias_productos = '".$id."'", 3);
        
    }  
    $retorno3 = ClassFile::UploadImagenFile("img4", "../../../../images", "prod4_$id", "199_199_prod4_$id", 199, 199);
    if ($retorno3["Status"] == "Uploader") {
        $db->doQuery("UPDATE cms_industrias_productos SET img4_industrias_productos = '" . $retorno3["NameFile"] . "' WHERE idcms_industrias_productos = '".$id."'", 3);
        
   }  
   header('Location:./../view/index.php?seccion=editpro&Erno=1&id='.$id.'&sub='.$sub.'');

    exit;
}
?>
