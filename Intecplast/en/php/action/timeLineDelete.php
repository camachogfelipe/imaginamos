<?php session_start();

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/timelineDAO.php';
include '../entities/timeline.php';

$timeline_id = $_GET['id'];

$timelineDAO = new timelineDAO();

$timeline = new timeline();
$timeline = $timelineDAO->getById($timeline_id);


    @unlink("./../..".$timeline->getImagen_e());
    @unlink("./../..".$timeline->getImagen_i());


$result = $timelineDAO->delete($timeline_id);

$location = "location: ./../../admin/menuAdmin.php?s=timeLine&delete=1";

if (!$result) {
    header($location.'&error');
    exit;
}

header($location);
exit;


?>