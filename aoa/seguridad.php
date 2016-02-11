<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
  <title></title>
  <style type="text/css">
#boton {
font-size:11;
border: solid #6666CC;
border-width: thin;
}
#boton1 {
font-size:11;
border: solid #6666CC;
border-width: thin;
width:60px;
height:19px;
}
  </style>
</head>
<?php 
if ($_POST['usuario'] != ""){
 require('lib/lib_class.php');
 $usuario = $_POST['usuario'];
 @session_start();
 session_destroy();
 if (VerificaSiniestro($usuario)=='TRUE'){
  echo "<script language='JavaScript'>location.href='encuesta.php?".SID."'</script>";
 }
 else{
  $msj = "Cliente no habilitado en el sistema.";
 }
}  
?>
<body>
<div style="position:absolute; top:350px; width:100%; padding:0;">
<form name="login" action="" method="post">
 <table align="center" border="0" cellspacing="0">
  <tbody>
   <tr>
    <td align="right"> Documento: </td>
    <td><input id="boton" name="usuario" type="text"></td>
   </tr>
   <tr>
    <td></td>
    <td>
     <table align="center" border="0" cellspacing="0">
  <tbody>
   <tr>
    <td align="center"><input id="boton1" value="Ingresar" type="submit"></td>
    </form>
   </tr>
  </tbody>
 </table>
	</td>
   </tr>
  </tbody>
 </table>
 <table align="center" border="0" cellspacing="0">
  <tbody>
   <tr>
    <td style="color: RED" align="center"><?php echo $msj; ?> </td>
   </tr>
  </tbody>
 </table>
</div>
<table style="text-align: center; width: 100%; height: 100%;"
 border="0" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <td style="text-align: center; vertical-align: middle;">
	   <img style="width: 790px; height: 497px;" alt="" src="img/logo_seg.JPG">
	  </td>
    </tr>
  </tbody>
</table>
</body>
</html>