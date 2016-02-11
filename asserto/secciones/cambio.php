<?php
$password = md5($_POST['password']);
if(isset($_SESSION['id'])) :
	include "admin/core/class/db.class.php";
	include "admin/modules/class/ClassFile.class.php";
	//Creamos el nuevo objeto "Database"
	$id = $_SESSION['id'];
	$db = new Database();
	$db->connect();
	$db->doQuery("UPDATE usuarios SET password='$password' WHERE id=".$id, UPDATE_QUERY);
	echo "<script>window.location.href = 'index.php?seccion=zona-usuario&camok'</script>";
endif;





