<?php 
	include('header.php');
	
	@$iduser	= $_POST['iduser']; settype($iduser,'string');	$iduser=trim(strtolower($iduser));
	@$name		= $_POST['name']; 	settype($name,'string'); 	$name=trim(ucwords(strtolower($name)));
	@$avatar	= $_POST['avatar']; settype($avatar,'string');	
	@$pass		= $_POST['pass']; 	settype($pass,'string');	$pass=trim($pass);
	@$passc		= $_POST['passc']; settype($pascs,'string');	$passc=trim($passc);
	$inform		= "<img src=\"images/16x16/system/application_key.png\" width=\"16\" height=\"16\" border=\"0\" align=\"absmiddle\">&nbsp;Ingrese sus credenciales o <a class=\"link\" href=\"register.php\" target=\"_self\">registrese aqui</a>";
	$result		= 0;

	if($_SESSION["oUsuario"]->status==1){
		$location=$_SESSION["oUsuario"]->admin<=0 ? "helpdesk.php" : "home.php" ;
		RedireccionarHeader($location);
	}else{
		if($_SERVER["REQUEST_METHOD"] == "POST") {
			$_SESSION["oUsuario"]->UserLogIn($iduser,$pass);
			if($_SESSION["oUsuario"]->status==1) {
				$location=$_SESSION["oUsuario"]->admin<=0 ? "helpdesk.php" : "home.php" ;
				RedireccionarHeader($location);
			}else{
				$inform="<img src=\"images/16x16/system/error.png\" width=\"16\" height=\"16\" border=\"0\" align=\"absmiddle\">&nbsp;El nombre de <b>usuario</b> o <b>clave</b> no son validos";
			}
		}
	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>HelpDesk - LogIn</title>

<?php include("links.php"); ?>

</head>
<body>
<form action="login.php" method="post" enctype="multipart/form-data" name="frmWrite" target="_self" id="frmWrite">
  <table width="100%" border="0" cellpadding="1" cellspacing="0" id="contenido">
    <tr>
      <td valign="middle" class="title">&nbsp;</td>
    </tr>
    <tr>
      <td align="center" valign="middle"><table width="100%" cellpadding="2" cellspacing="2" id="login">
        <tr>
          <td colspan="2" align="center" class="TituloGrupo">Iniciar sesi&oacute;n</td>
        </tr>
        <tr>
          <td width="160" class="Titulo">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td width="160" class="Titulo"><img src="images/other/usuario.png" width="16" height="16" border="0" align="absmiddle"> Usuario</td>
          <td><input id="iduser" name="iduser" value="<?php print($iduser); ?>" style="width:90%;"></td>
        </tr>
        <tr>
          <td class="Titulo"><img src="images/other/llave.png" width="16" height="16" border="0" align="absmiddle"> Contrase&ntilde;a</td>
          <td><input id="pass" name="pass" type="password"  style="width:90%;"></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input id="send" name="send" type="submit" value="Entrar"  style="width:90%;" class="submit"></td>
        </tr>
        <tr>
          <td colspan="2" align="right"></td>
        </tr>
      </table>
        <br>
      <?php print($inform);?>, ¿Desea <a class="link" href="#">recordar su contrase&ntilde;a via e-mail</a>?</td>
    </tr>
  </table>
</form>
<script type="text/javascript">
	setInitLogin();
</script>
</body>
</html>