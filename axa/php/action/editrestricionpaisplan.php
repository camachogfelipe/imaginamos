<?php session_start();?>
<?php


if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/restricionpaisplanDAO.php';
include '../entities/restricionpaisplan.php';
include '../functions/simpleImages.php';

foreach ($_POST as $key => $value) {
    $$key = $value;
}



$location = "location: ./../../admin/menuAdmin.php?s=restricionpaisplanVer&id=".$id;

if($idtbl_destino == "" || $idtbl_plan == ""){
    header($location.'&error1');
    exit;
}


$restricionpaisplanDAO= new restricionpaisplanDAO;
$restricionpaisplan = $restricionpaisplanDAO->getrestricionpaisplan($id);

//$titulo = accents2HTML($titulo);

//$home = new home;

$restricionpaisplan->setTbl_plan_idtbl_plan($idtbl_plan);
$restricionpaisplan->setTbl_destino_idtbl_destino($idtbl_destino);;


$restricionpaisplanDAO->updaterestricionpaisplan($restricionpaisplan);

//$lineaDAO->updateLinea($home);

//$homeDAO->updateHome($home);

$location = "location: ./../../admin/menuAdmin.php?s=restricionpaisplanEditar&id=".$id;

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