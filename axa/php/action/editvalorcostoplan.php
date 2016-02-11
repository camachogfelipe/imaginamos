<?php session_start();?>
<?php


if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/valorcostoplanDAO.php';
include '../entities/valorcostoplan.php';
include '../functions/simpleImages.php';

foreach ($_POST as $key => $value) {
    $$key = $value;
}



$location = "location: ./../../admin/menuAdmin.php?s=valorcostoplanVer&id=".$id;

if($valortbl_valorcosto == "" ){
    header($location.'&error1');
    exit;
}


$valorcostoplanDAO= new valorcostoplanDAO;
$valorcostoplan = $valorcostoplanDAO->getvalorcostoplan($id);;

//$titulo = accents2HTML($titulo);

//$home = new home;
$valorcostoplan->setIdtbl_plan($idtbl_plan);
$valorcostoplan->setIdtbl_costos($idtbl_costos);
$valorcostoplan->setValortbl_valorcosto($valortbl_valorcosto);


$valorcostoplanDAO->updatevalorcostoplan($valorcostoplan);

//$lineaDAO->updateLinea($home);

//$homeDAO->updateHome($home);

$location = "location: ./../../admin/menuAdmin.php?s=valorcostoplanEditar&id=".$id;

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