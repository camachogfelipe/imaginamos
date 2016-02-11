<?php
if(!isset($_SESSION)) session_start();
include("cms/core/class/db.class.php");

error_reporting(E_ALL);
ini_set('display_errors', '1');

$id=$_REQUEST['id'];
$cant=$_REQUEST['cant'];
$ori=$_REQUEST['ori'];
$det=$$_REQUEST['det'];
$tabla=$_REQUEST['tabla'];
$valor=$_REQUEST['valor'];
$user_id=$_SESSION['id'];

$fec=date('Y-m-d');

$db = new Database();
$db->connect();
if (!empty($_SESSION['id'])){
    $sql="INSERT INTO compras (idprod,cant,ori,det,tabla,valor,user_id,estado,fecha) 
          values ('".$id."','".$cant."','".$ori."','".$det."','".$tabla."','".$valor."','".$user_id."','Proceso','".$fec."')";
    $db->doQuery($sql, INSERT_QUERY);
    $result='Se registro exitosamente';
}

$data = array('success'=> true,'message'=> $result,'id'=>$id);
//print_r($data);
echo json_encode($data);
?>