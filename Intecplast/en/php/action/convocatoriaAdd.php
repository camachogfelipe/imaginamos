<?php session_start();

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/convocatoriaDAO.php';
include '../entities/convocatoria.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';


$tituloEspanol = $_POST['tituloEspanol'];
$cargoEspanol = $_POST['cargoEspanol'];
$funcionesEspanol = $_POST['funcionesEspanol'];
$requisitosEspanol = $_POST['requisitosEspanol'];
$tituloIngles = $_POST['tituloIngles'];
$cargoIngles = $_POST['cargoIngles'];
$funcionesIngles = $_POST['funcionesIngles'];
$requisitosIngles = $_POST['requisitosIngles'];
$salario = $_POST['salario'];
$vigencia = $_POST['vigencia'];



$location = "location: ./../../admin/menuAdmin.php?s=admconvocatorias";

$convocatoriaDAO = new convocatoriaDAO();

$convocatoria = new convocatoria();

$tituloEspanol = accents2HTML($tituloEspanol);
$cargoEspanol = accents2HTML($cargoEspanol);
$funcionesEspanol = accents2HTML($funcionesEspanol);
$requisitosEspanol = accents2HTML($requisitosEspanol);
$tituloIngles = accents2HTML($tituloIngles);
$cargoIngles = accents2HTML($cargoIngles);
$funcionesIngles = accents2HTML($funcionesIngles);
$requisitosIngles = accents2HTML($requisitosIngles);


$convocatoria->setId($id);
$convocatoria->setTitulo_e($tituloEspanol);
$convocatoria->setCargo_e($cargoEspanol);
$convocatoria->setFunciones_e($funcionesEspanol);
$convocatoria->setRequisitos_e($requisitosEspanol);
$convocatoria->setTitulo_i($tituloIngles);
$convocatoria->setCargo_i($cargoIngles);
$convocatoria->setFunciones_i($funcionesIngles);
$convocatoria->setRequisitos_i($requisitosIngles);
$convocatoria->setSalario($salario);
$convocatoria->setVigencia($vigencia);
$convocatoria->setSeccionId(14);
$convocatoria->setFlagId(14);


$convocatoriaDAO->save($convocatoria);

$location = "location: ./../../admin/menuAdmin.php?s=admConvocatorias&add=1";

header($location);
exit;
?>