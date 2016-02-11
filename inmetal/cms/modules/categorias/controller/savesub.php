<?php

session_start();
ini_set('display_errors', 'On');

//Evita presentar contenidos sin el login debido
include "../../../security/secure.php";
define('SITE_ROOT', dirname(dirname(__FILE__)) . '/');
include("../../../core/class/db.class.php");
include SITE_ROOT . "class/plGeneral.fnc.php";
include SITE_ROOT . "class/PhpThumbFactory.class.php";
include SITE_ROOT . "class/ClassFile.class.php";

$id = $_POST['id'];
$cat = $_POST['cat'];
$titulo = $_POST['titulop'];


//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

if ($titulo == '') {
    header('Location:./../view/index.php?seccion=editsub&Erno=2&id='.$id.'');
    exit;
} 

        $db->doQuery("UPDATE  cms_industrias_subcategotias SET titulo_industrias_subcategorias ='" . mysql_real_escape_string($titulo) . "' WHERE idcms_industrias_subcategotias ='".$id."' ", 3);

header('Location:./../view/index.php?seccion=editsub&Erno=1&id='.$id.'&cat='.$cat.'');
exit;
?>