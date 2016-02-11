<?php
include("../../../core/class/db.class.php");
include '../define.php';
$db = new Database();
$db->connect();
$id = $_POST['id'];
if(isset($_POST['Eliminar2']) and $_POST['Eliminar2'] == "Eliminar")
{
echo $query = "UPDATE cms_productos2 SET adjunto2 = ''";    
$db->doQuery($query,UPDATE_QUERY);    
header('Location: ../view/Edit4.php?id='.base64_encode($id).'&erno=5');
exit;    
//echo "Oprimiste eliminar";
    
    
}
if(isset($_POST['Eliminar1']) and $_POST['Eliminar1'] == "Eliminar")
{
echo $query = "UPDATE cms_productos2 SET adjunto1 = ''";    
$db->doQuery($query,UPDATE_QUERY);    
header('Location: ../view/Edit4.php?id='.base64_encode($id).'&erno=5');
exit;    
//echo "Oprimiste eliminar";
    
    
}
if(isset($_POST['Eliminar3']) and $_POST['Eliminar3'] == "Eliminar")
{
echo $query = "UPDATE cms_productos2 SET imagen1 = ''";    
$db->doQuery($query,UPDATE_QUERY);    
header('Location: ../view/Edit2.php?id='.base64_encode($id).'&erno=5');
exit;    
//echo "Oprimiste eliminar";
    
    
}
if(isset($_POST['Eliminar4']) and $_POST['Eliminar4'] == "Eliminar")
{
echo $query = "UPDATE cms_productos2 SET imagen2 = ''";    
$db->doQuery($query,UPDATE_QUERY);    
header('Location: ../view/Edit2.php?id='.base64_encode($id).'&erno=5');
exit;    
//echo "Oprimiste eliminar";
    
    
}
?>
