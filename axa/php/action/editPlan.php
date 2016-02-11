<?php session_start();?>
<?php


if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/PlanDAO.php';
include '../entities/Plan.php';
include '../functions/simpleImages.php';



foreach ($_POST as $key => $value) {
    $$key = $value;
}

$location = "location: ./../../admin/menuAdmin.php?s=PlanVer&id=".$id;

if($nombre == "" ){
    header($location.'&error1');
    exit;
}


$planDAO = new PlanDAO;
$plan = $planDAO->getPlan($id);;

//$titulo = accents2HTML($titulo);

//$home = new home;
$plan->setDescripciontbl_plan($nombre);
$plan->setProductoanualtbl_plan($panual);
$plan->setDiasmaxtbl_plan($diasmax);
$plan->setEdadmintbl_plan($edadmin);
$plan->setEdamaxtbl_plan($edadmax);
$plan->setValordiaAddtbl_plan($valordia);

$planDAO->updatePlan($plan);

//$lineaDAO->updateLinea($home);

//$homeDAO->updateHome($home);

$location = "location: ./../../admin/menuAdmin.php?s=PlanEditar&id=".$id;

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