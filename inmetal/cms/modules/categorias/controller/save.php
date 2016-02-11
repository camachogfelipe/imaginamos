<?php

ini_set('display_errors', 'On');

define('SITE_ROOT', dirname(dirname(__FILE__)) . '/');
include("../../../core/class/db.class.php");
include SITE_ROOT . "class/plGeneral.fnc.php";
include SITE_ROOT . "class/PhpThumbFactory.class.php";
include SITE_ROOT . "class/ClassFile.class.php";

$db = new Database();
$db->connect();


$id = $_POST['id'];
$titulo=$_POST['titulo'];
$descripcion = $_POST['des'];


if ($titulo == '' || $descripcion == '' )
{
	 header('Location: ./../view/index.php?Erno=2');
         exit;	
} else {

  
    $db->doQuery(" UPDATE cms_industrias_categorias SET tiulo_industrias_categorias = '" . mysql_real_escape_string($titulo) . "',
                                                        des_industrias_categorias = '" . mysql_real_escape_string($descripcion) . "'
                                                        WHERE idcms_industrias_categorias ='" . $id . "'", 3);
        header('Location:./../view/index.php?seccion=edit&Erno=1&id='.$id.'');
        exit;
}
?>
