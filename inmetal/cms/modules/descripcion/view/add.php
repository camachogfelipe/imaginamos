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
$des = $_POST['des'];
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();
if ($titulo == '' || $des == '') {
    header('Location: ./../view/index.php?Erno=2');
    exit;
} else {

    
    $db->doQuery(" UPDATE cms_industrias_categorias SET tiulo_industrias_categorias = '" . mysql_real_escape_string($titulo) . "',
                                                        des_industrias_categorias = '" . mysql_real_escape_string($des) . "'
                                                        WHERE idcms_industrias_categorias ='" . $id . "'", 3);
     header('Location:./../view/index.php?Erno=1');

    exit;
}
?>
