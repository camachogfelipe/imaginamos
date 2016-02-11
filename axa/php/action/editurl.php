<?php session_start();?>
<?php


if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/costoDAO.php';
include '../entities/costo.php';
include '../functions/simpleImages.php';


foreach ($_POST as $key => $value) {
    $$key = $value;
}


$id = base64_decode($id);




$location = "location: ./../../admin/menuAdmin.php?s=costoVer&id=".base64_encode($id);

if($nombre == "" ){
    header($location.'&error1');
    exit;
}


$costoDAO = new costoDAO;
$costo = $costoDAO->getcosto($id);

//$titulo = accents2HTML($titulo);

//$home = new home;
$costo->setDescripciontbl_costos($nombre);

$costoDAO->updatecosto($costo);


//$homeDAO->updateHome($home);

$location = "location: ./../../admin/menuAdmin.php?s=costoEditar&id=".base64_encode($id);

//everything fine!
header($location.'&ok');
exit;

function accents2HTML($mensaje){
    $mensaje = str_replace("á","&aacute;",$mensaje);
    $mensaje = str_replace("é","&eacute;",$mensaje);
    $mensaje = str_replace("í","&iacute;",$mensaje);
    $mensaje = str_replace("ó","&oacute;",$mensaje);
    $mensaje = str_replace("ú","&uacute;",$mensaje);
    $mensaje = str_replace("ñ","&ntilde;",$mensaje);
    return $mensaje;
}

?>