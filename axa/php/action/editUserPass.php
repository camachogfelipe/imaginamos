<?php session_start();?>
<?php


if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/userDAO.php';
include '../entities/user.php';

$pass_old = $_POST['pass_old'];
$pass_new = $_POST['pass_new'];
$pass_new2 = $_POST['pass_new2'];

if($pass_old == "" || $pass_new == "" || $pass_new2 == "" ){
    header("location: ./../../admin/menuAdmin.php?s=userPass&error0&");
    exit;
}

if($pass_new != $pass_new2 ){
    header("location: ./../../admin/menuAdmin.php?s=userPass&error2&");
    exit;
}

$passCrypt = mhash(MHASH_MD5, $pass_new);
$passCrypt_old = mhash(MHASH_MD5, $pass_old);

$userDAO = new userDAO;

$thisUser = unserialize($_SESSION['admin']);


if($passCrypt_old != $thisUser->getPass()){
    header("location: ./../../admin/menuAdmin.php?s=userPass&error1&");
    exit;
}


$thisUser->setPass($passCrypt);
$userDAO->updateUserPass($thisUser);

$_SESSION['admin'] = serialize($thisUser);

//everything fine!
header("location: ./../../admin/menuAdmin.php?s=userPass&ok");
exit;

?>