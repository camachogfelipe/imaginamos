<?php
@session_start();
//Verifica que la session este activa para asignar el id del siniestro.
if (!isset($_SESSION['id_siniestro'])){No_session();}
else{$id_siniestro = $_SESSION['id_siniestro'];}
$p1=$_POST['p1'];
$p2=$_POST['p2'];
$p3=$_POST['p3'];
$p4=$_POST['p4'];
$p5=$_POST['p5'];
$p5=$_POST['p6'];
include ("lib/lib_class.php");
//Conectar a la BD
 include ("lib/libMYSQL.php");
 $link=Conectarse();
 $MyQuery="INSERT INTO encuesta(id_siniestro,p1,p2,p3,p4,p5,p6,fecha_creacion) VALUES ('$id_siniestro','$p1','$p2','$p3','$p4','$p5','$p6',
 (SELECT CURDATE()))";
 mysql_query($MyQuery,$link);
 $mensaje1="La encuesta fue registrada en el sistema.";
  $mensaje2="No se pudo registrar la encuesta, verifique los datos.";
 $TestInsert =mysql_affected_rows($link);
 mensajes_mysql($TestInsert,$mensaje1,$mensaje2);
 mysql_close($link);
//echo "<script language='JavaScript'>location.href='seguridad.php?".SID."'</script>";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <meta content="text/html; charset=ISO-8859-1"
 http-equiv="content-type">
  <title></title>
</head>
<body style="background-image: url(img/logAOA.jpg);">
<br>
</body>
</html>