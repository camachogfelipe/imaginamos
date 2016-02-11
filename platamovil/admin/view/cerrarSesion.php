<?php
session_start();
if( $_SESSION['id'] ){
	session_destroy();
	echo "<script language='javascript' type='text/javascript'>document.location.href='./index.php'</script>";
}
?>