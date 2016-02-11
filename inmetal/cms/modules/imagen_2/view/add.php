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
$titulo = $_POST['titulo'];
$subtitulo = $_POST['subtitulo'];
$link = $_POST['link'];
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();
if ($titulo == ''|| $subtitulo=='' || $link == '') {
    header('Location: ./../view/index.php?Erno=2');
    exit;
} else {

     $db->doQuery(" UPDATE cms_home SET titulo_home = '" . mysql_real_escape_string($titulo) . "',
                                       subtitulo_home = '" . mysql_real_escape_string($subtitulo) . "',
                                       link_home = '" . mysql_real_escape_string($link) . "' WHERE idcms_home ='" . $id . "'", 3);
    $retorno = ClassFile::UploadImagenFile("img", "../../../../images","home_$id", "381_392_home_$id", 381,392);
    if ($retorno["Status"] == "Uploader") {
        $db->doQuery("UPDATE cms_home SET imagen_home = '" . $retorno["NameFile"] . "' WHERE idcms_home = '" . $id . "'", 3);
    } 
    $retorno1 = ClassFile::UploadImagenFile("imgbn", "../../../../images","homebn_$id", "381_392_homebn_$id", 381,392);
    if ($retorno1["Status"] == "Uploader") {
        $db->doQuery("UPDATE cms_home SET imagenbn_home = '" . $retorno1["NameFile"] . "' WHERE idcms_home = '" . $id . "'", 3);
    }

   header('Location:./../view/index.php?Erno=1');

    exit;
}
?>
