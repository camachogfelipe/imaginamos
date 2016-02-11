<?php session_start();?>
<?php


if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/aspectsDAO.php';
include '../entities/aspect.php';

$nombre = $_POST['nombre'];
$valor = $_POST[$nombre];
$s = $_POST['s'];
$a = $_POST['a'];
$type = 1;
if(isset ($_POST['type'])){
    $type = $_POST['type'];
    $descri = $_POST['descri'];
}


if( $type == 1 )
    $location = "location: ./../../admin/menuAdmin.php?s=".$s."&a=".$a;
else
    $location = "location: ./../../admin/menuAdmin.php?s=".$s."&a=".$a."&type=".$type;

if($valor == ""){
    header($location.'&error1');
    exit;
}

$aspectoDAO = new AspectsDAO;
$aspecto = $aspectoDAO->getAspect($nombre);

$aspecto->setValue($valor);

if( $type == 2 ){
    $aspecto->setDescrp($descri);
}

$aspectoDAO->updateAspect($aspecto);


//everything fine!
header($location.'&ok');
exit;

?>