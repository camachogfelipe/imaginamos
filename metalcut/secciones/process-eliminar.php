<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

if(!isset($_SESSION)) session_start();
include("../cms/core/class/db.class.php");

$db = new Database();
$db->connect();

$id=isset($_REQUEST['id']) ? $_REQUEST['id'] : '';
$id2='';
$sql="DELETE FROM compras WHERE idcompras='".$id."' ";
//echo $sql;

$db->doQuery($sql, DELETE_QUERY);
$result='Eliminado El porducto';


$data = array('success'=> true,'message'=> $result,'id'=>$id2);
//print_r($data);
echo json_encode($data);
?>