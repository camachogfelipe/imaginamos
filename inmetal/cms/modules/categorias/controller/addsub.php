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

$idcategoria = $_POST['id'];
$titulo = $_POST['titulop'];
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();
if ($titulo == '') {
    header('Location:./../view/index.php?seccion=edit&Erno=2&id='.$idcategoria.'');
    exit;
}
    $db->doQuery("INSERT INTO cms_industrias_subcategotias (titulo_industrias_subcategorias,id_indsutrias_categorias) VALUES (
                    '" . mysql_real_escape_string($titulo) . "',
                    '" . mysql_real_escape_string($idcategoria) . "')", 2);
header('Location:./../view/index.php?seccion=edit&Erno=1&id='.$idcategoria.'');
exit;
?>