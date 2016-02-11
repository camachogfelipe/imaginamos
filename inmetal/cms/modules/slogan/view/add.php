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
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();
if ($titulo == '') {
    header('Location: ./../view/index.php?Erno=2');
    exit;
} else {

    
    $db->doQuery(" UPDATE cms_home SET titulo_home = '" . mysql_real_escape_string($titulo) . "'
                                       WHERE idcms_home ='" . $id . "'", 3);
     header('Location:./../view/index.php?Erno=1');

    exit;
}
?>
