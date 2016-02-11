<?php 
	include('header.php');
	
	@$iduser	= $_POST['iduser']; settype($iduser,'string');	$iduser=trim(strtolower($iduser));
	@$name		= $_POST['name']; 	settype($name,'string'); 	$name=trim(ucwords(strtolower($name)));
	@$avatar	= $_POST['avatar']; settype($avatar,'string');	
	@$pass		= $_POST['pass']; 	settype($pass,'string');	$pass=trim($pass);
	@$passc		= $_POST['passc']; settype($pascs,'string');	$passc=trim($passc);
	$inform		= "<img src=\"images/16x16/system/application_key.png\" width=\"16\" height=\"16\" border=\"0\" align=\"absmiddle\">&nbsp;Ingrese sus datos o <a class=\"link\" href=\"login.php\" target=\"_self\">Inicie sesion aqui</a>";
	$ierror		="<img src=\"images/16x16/system/error.png\" width=\"16\" height=\"16\" border=\"0\" align=\"absmiddle\">&nbsp;";
	$result		= 0;
		
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		if(CheckEmail($iduser) and !empty($name)){
			if($pass==$passc and !empty($pass)){
				if ($_SESSION["oUsuario"]->UserRegister($iduser,$pass,$name,$avatar,$iduser)==1) {
					RedireccionarHeader("helpdesk.php");
				}else{
					$inform=$ierror."No es posible crear el usuario. <b>Puede que el usuario ya se encuentre registrado</b>";
				}
			}else{
				$inform=$ierror."La clave y su confirmacion <b>No son iguales</b>";
			}
		}else{
			$inform=$ierror."El <b>nombre de usuario</b> no tiene formato de <b>e-mail</b> valido o el <b>Nombre real</b> esta en blanco";
		}
	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>HelpDesk - Register</title>

<?php include("links.php"); ?>

</head>
<body>
<form action="register.php" method="post" enctype="multipart/form-data" name="frmWrite" target="_self" id="frmWrite">
  <table width="100%" border="0" cellpadding="1" cellspacing="0" id="contenido">
    <tr>
      <td valign="middle" class="title">&nbsp;</td>
    </tr>
    <tr>
      <td align="center" valign="middle"><table width="100%" cellpadding="2" cellspacing="2" id="login">
        <tr>
          <td colspan="2" align="center" class="TituloGrupo">Registrar</td>
        </tr>
        <tr>
          <td width="160">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td width="160" class="Titulo"><img src="images/other/usuario.png" width="16" height="16" border="0" align="absmiddle"> Usuario</td>
          <td><input id="iduser" name="iduser" value="<?php print($iduser); ?>" style="width:90%;"></td>
        </tr>
        <tr>
          <td class="Titulo">Nombre real</td>
          <td><input id="name" name="name" value="<?php print($name); ?>" style="width:90%;"></td>
        </tr>
        <tr>
          <td class="Titulo">Avatar</td>
          <td><select id="avatar" name="avatar" style="width:90%;">
            <?php 
					print($_SESSION["oUsuario"]->getAvatars(1,$avatar,1));
				?>
          </select></td>
        </tr>
        <tr>
          <td class="Titulo"><img src="images/other/llave.png" width="16" height="16" border="0" align="absmiddle"> Contrase&ntilde;a</td>
          <td><input id="pass" name="pass" type="password" style="width:90%;"></td>
        </tr>
        <tr>
          <td class="Titulo">Confirmar contrase&ntilde;a</td>
          <td><input id="passc" name="passc" type="password" style="width:90%;"></td>
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
      <?php print($inform);?></td>
    </tr>
  </table>
</form>
<script type="text/javascript">
	setInitLogin();
</script>
</body>
</html>