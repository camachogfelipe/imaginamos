<?php session_start();?>
<?php


if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/userDAO.php';

$login = $_SESSION['admin'];
$pass = $_POST['pass'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];
$nombre = $_POST['nombre'];



$location = "location: ./../../admin/menuAdmin.php?s=userPass";

if($login == "" || $pass == "" || $pass1 == "" || $pass2 == "" ){
    header($location."&error1");
    exit;
}

$userDAO = new userDAO;

$result = $userDAO->loginAdmin($login, $pass);
   
if($result != NULL){
    if ($pass1 == $pass2) {
        $result = $userDAO->updateAdminPass($login, $pass1, $nombre);
        if (!$result) {
            header($location."&error2");
            exit;
        }
    }
}

header($location."&ok");
exit;


?>