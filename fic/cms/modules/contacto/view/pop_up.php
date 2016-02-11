<?php 
session_start();
include("../security/secure.php");
include("../../../core/class/db.class.php");
$db = new Database();
$db->connect();

$id_contacto=$_GET['id_contacto'];
$query = "SELECT * FROM t_contacto WHERE id_contacto='$id_contacto'";
$db->doQuery($query,SELECT_QUERY);  
$result = $db->results;

 ?>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <style type="text/css">
 body{
 	padding: 8px;
 	font-family: Arial;
 }
 table{
width: 100%;
padding: 5px;
 }
 td, th{
 	border: 1px #ccc solid;
 	padding: 8px;
 }

 </style>
<table>
<tr>
<th colspan="2">Mensaje</th>
</tr>
<tr>
<td valing="top" style="border-right:1px #ccc solid;">
	 <strong>Asunto</strong>
</td>
<td valing="top">
	<?php echo $result[0][asunto]; ?>
</td>
</tr>
<tr>
<td valing="top" style="border-right:1px #ccc solid;">
	 <strong>Nombre</strong>
</td>
<td valing="top">
	<?php echo $result[0][nombre]; ?>
</td>
</tr>
<tr>
<td valing="top" style="border-right:1px #ccc solid;">
	 <strong>E-mail</strong>
</td>
<td valing="top">
	<?php echo $result[0][email]; ?>
</td>
</tr>
<tr>
<td valing="top" style="border-right:1px #ccc solid;">
	 <strong>Mensaje</strong>
</td>
<td valing="top">
	<?php echo $result[0][mensaje]; ?>
</td>
</tr>
</table>