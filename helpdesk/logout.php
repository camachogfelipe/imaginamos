<?php 
	include('header.php');
	
	$_SESSION["oUsuario"]->UserLogOut();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Cerrar sesion</title>

<?php include("links.php"); ?>

</head>
<body>
<table id="contenido">
  <tr>
    <td align="center" valign="middle"><table border="0" cellpadding="0" cellspacing="0" id="logout">
      <tr>
        <td align="center" valign="middle">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>