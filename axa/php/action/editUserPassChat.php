<?php session_start();?>
<?php


if( !isset($_SESSION['chatAdmin']) ){
    header("location: ./../../admin_chat/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/userDAO.php';
include '../entities/user.php';

$pass_old = $_POST['pass_old'];
$pass_new = $_POST['pass_new'];
$pass_new2 = $_POST['pass_new2'];

if($pass_old == "" || $pass_new == "" || $pass_new2 == "" ){
    header("location: ./../../admin_chat/menuAdmin.php?s=userPassChat&error0&");
    exit;
}

if($pass_new != $pass_new2 ){
    header("location: ./../../admin_chat/menuAdmin.php?s=userPassChat&error2&");
    exit;
}

$passCrypt = mhash(MHASH_MD5, $pass_new);
$passCrypt_old = mhash(MHASH_MD5, $pass_old);

$userDAO = new userDAO;

$thisUser = unserialize($_SESSION['chatAdmin']);


if($passCrypt_old != $thisUser->getPass()){
    header("location: ./../../admin_chat/menuAdmin.php?s=userPassChat&error1&");
    exit;
}


$thisUser->setPass($passCrypt);
$userDAO->updateUserPass($thisUser);

$_SESSION['chatAdmin'] = serialize($thisUser);

//everything fine!
header("location: ./../../admin_chat/menuAdmin.php?s=userPassChat&ok");
exit;

?>