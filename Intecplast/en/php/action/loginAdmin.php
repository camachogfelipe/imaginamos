<?php session_start();?>
<?php


if( isset($_SESSION['admin']) ){
    header("location: ./../../admin/menuAdmin.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/userDAO.php';

$login = $_POST['usuario'];
$pass = $_POST['pass'];


$location = "location: ./../../admin/index.php?";

if($login == "" || $pass == ""){
    header($location."&error1");
    exit;
}

$userDAO = new userDAO;

$result = $userDAO->loginAdmin($login, $pass);
   
if($result != NULL){
    $_SESSION['admin'] = $result;
    header("location: ./../../admin/menuAdmin.php");
    exit;
}

header($location."&error2L");
exit;


?>