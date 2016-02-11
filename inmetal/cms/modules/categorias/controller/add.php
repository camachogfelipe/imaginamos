<?php

session_start();
ini_set('display_errors','On');

//Evita presentar contenidos sin el login debido
include "../../../security/secure.php";
define('SITE_ROOT', dirname(dirname(__FILE__)) . '/');
include("../../../core/class/db.class.php");
include SITE_ROOT."class/plGeneral.fnc.php";
include SITE_ROOT."class/PhpThumbFactory.class.php";
include SITE_ROOT."class/ClassFile.class.php";


$titulo=$_POST['titulo'];
$descripcion = $_POST['des'];


//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();
if ($titulo == '' || $descripcion == '' )
{
	 header('Location: ./../view/index.php?Erno=2');
         exit;	
}else{

            $db->doQuery("INSERT INTO cms_industrias_categorias (tiulo_industrias_categorias,des_industrias_categorias,	tipo_industrias_categorias) VALUES (
                    '".mysql_real_escape_string($titulo)."',
                    '".mysql_real_escape_string($descripcion)."','0')",2);
                    
                    
                    
                    header('Location:./../view/index.php?Erno=1');
                    exit;
           

}
?>
