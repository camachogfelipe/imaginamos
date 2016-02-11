<?php session_start();?>
<?php
    if( !isset($_SESSION['admin']) ){
        header("location: ./../../admin/index.php");
        exit;
    }

    include '../dao/daoConnection.php';
    include '../dao/userDAO.php';
    include '../entities/user.php';

    $id = $_GET['id'];

    $location = "location: ./../../admin/menuAdmin.php?s=userAdmin";

    if($id == ""){
        header($location.'&error1');
        exit;
    }


    $userDAO = new userDAO();
    $user = new user();
    $user = $userDAO->getById($id);

    if( $user == null ){
        header($location.'&error3');
        exit;
    }

    $userDAO->delete($id);

    //everything fine!
    header($location.'&ok');
    exit;
?>