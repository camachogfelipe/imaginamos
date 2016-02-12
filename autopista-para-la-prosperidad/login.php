<?php session_start();
ini_set('display_errors','1');
error_reporting(E_ALL);
include("cms/core/class/db.class.php");
include("cms/core/mapping/functions.mapping.php");
include("cms/core/mapping/mapping.class.php");


    
$correo = $_POST['correo'];
$password = $_POST['password'];
//Creamos objeto database
$db = new Database();
$db->connect();
            
$constructor = new CMS_mapping("usuario", $db);
$db->doQuery("SELECT * FROM usuario WHERE correo ='$correo' AND clave ='$password' AND activo = 1",SELECT_QUERY);
$results = $db->results;
$obj = $constructor->mapping($results);
//echo $obj->id;

if($obj != NULL){
    $arr = array('nombre'=> $obj->nombre,'apellido'=> $obj->apellido,'correo'=> $obj->correo);
    $_SESSION['usuario'] = $arr;
    header('Location: dataroom.php?LogOk');
    exit;
}
if(isset($_POST["log"])){
    header('Location: dataroom.php?LogErno');
}  else {
    header('Location: index.php?LogErno');
}

exit;

?>
