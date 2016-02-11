<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

if(!isset($_SESSION)) session_start();
include("../cms/core/class/db.class.php");

$db = new Database();
$db->connect();

$id=isset($_REQUEST['id']) ? $_REQUEST['id'] : '';
$cant=isset($_REQUEST['cant']) ? $_REQUEST['cant'] : ''; 
$ori=isset($_REQUEST['ori']) ? $_REQUEST['ori'] : '';
$det=isset($_REQUEST['det']) ? $_REQUEST['det'] : ''; 
$tabla=isset($_REQUEST['tabla']) ? $_REQUEST['tabla'] : ''; 
$valor=isset($_REQUEST['valor']) ? $_REQUEST['valor'] : '';
$result='Debe Registrarse Primero';
$user_id=isset($_SESSION['id']) ? $_SESSION['id'] : '';;
$id2='';
$fec=date('Y-m-d');


if (!empty($_SESSION['id'])){
    $sql="INSERT INTO compras (idprod,cant,ori,det,tabla,valor,user_id,estado,fecha) 
          values ('".$id."','".$cant."','".$ori."','".$det."','".$tabla."','".$valor."','".$user_id."','Proceso','".$fec."')";
    $db->doQuery($sql, INSERT_QUERY);
    $result='Articulo Ingesado a la tienda';
}else{
    $result='No esta registrado, por favor realice el registro';
}

$data = array('success'=> true,'message'=> $result,'id'=>$id2);
//print_r($data);
echo json_encode($data);
?>