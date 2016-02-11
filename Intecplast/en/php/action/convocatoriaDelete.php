<?php session_start();

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/convocatoriaDAO.php';
include '../entities/convocatoria.php';

$convocatoria_id = $_GET['id'];

$convocatoriaDAO = new convocatoriaDAO();

$convocatoria = new convocatoria();
$convocatoria = $convocatoriaDAO->getById($convocatoria_id);

$result = $convocatoriaDAO->delete($convocatoria_id);

$location = "location: ./../../admin/menuAdmin.php?s=admConvocatorias&delete=1";

if (!$result) {
    header($location.'&error');
    exit;
}

header($location);
exit;


?>