<?php session_start();?>
<?php


if( isset($_SESSION['chatAdmin']) ){
    header("location: ./../../admin_chat/menuAdmin.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/userDAO.php';
include '../entities/user.php';

$login = $_POST['usuario'];
$pass = $_POST['pass'];


$location = "location: ./../../admin_chat/index.php?";

if($login == "" || $pass == ""){
    header($location."&error1");
    exit;
}

$userDAO = new userDAO;
//desde ahora getADmin me devuelve todos los admins (una lista)
$listaADmins = $userDAO->getChat();
$passCrypt = md5($pass);


foreach ($listaADmins as $admin){

   
    if($admin->getLogin() == $login && $admin->getPass() == $passCrypt ){
        $_SESSION['chatAdmin'] = serialize($admin);
        header("location: ./../../admin_chat/menuAdmin.php");
        exit;
    }
}


//everything bad!
header($location."&error2L");
exit;


?>