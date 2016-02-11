<?php 
	include('header.php');
	
	$inform		= "";
	$result		= 0;
				
	if($_SESSION["oUsuario"]->status<>1){
		RedireccionarHeader("login.php");
	}else{			
		if($_SERVER["REQUEST_METHOD"] == "POST") {
			@$iduser	= $_POST['iduser']; settype($iduser,'string');	$iduser=trim(strtolower($iduser));
			@$name		= $_POST['name']; 	settype($name,'string'); 	$name=trim(ucwords(strtolower($name)));
			@$avatar	= $_POST['avatar']; settype($avatar,'string');	
			@$pass		= $_POST['pass']; 	settype($pass,'string');	$pass=trim($pass);
			@$passc		= $_POST['passc']; settype($pascs,'string');	$passc=trim($passc);
		
			if(CheckEmail($iduser)){
				if(!empty($pass)) {
					if($pass==$passc){
						if ($_SESSION["oUsuario"]->UserRegister($iduser,$pass,$name,$avatar,$iduser)==1) {
							$inform="Registro actualizado";
						}else{
							$inform="No es posible actualizar el registro en este momento";
						}
					}else{
						$inform="La clave y su confirmacion no son iguales";
					}
				}else{
					$inform="La clave no puede estar en blanco";
				}
			}else{
				$inform="El nombre de usuario no tiene formato de e-mail valido";
			}
		}
	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>HelpDesk - Profile</title>

<?php include("links.php"); ?>

</head>
<body>
<form action="profile.php" method="post" enctype="multipart/form-data" name="frmWrite" target="_self" id="frmWrite">
  <table width="100%" border="0" cellpadding="1" cellspacing="0" id="contenido">
    <tr>
      <td valign="middle" class="title"><b><a href="helpdesk.php" target="_self"><img src="<?php print($_SESSION["oUsuario"]->avatarp); ?>" alt="Avatar" width="32" height="32" border="0" align="absmiddle">&#8250;&#8250;&nbsp;<?php print($_SESSION["oUsuario"]->name); ?></a>&nbsp;
      <?php if($_SESSION["oUsuario"]->admin>=1) {print("<a href='home.php'>&#8250;&#8250;&nbsp;Home</a>"); } ?>
      </b></td>
    </tr>
    <tr>
      <td align="left" valign="top">
          <table width="100%" cellpadding="2" cellspacing="2">
            
            
            <tr>
              <td colspan="2" class="TituloGrupo">Informaci&oacute;n de registro</td>
            </tr>
            <tr>
              <td width="160" class="Titulo"><img src="images/other/usuario.png" alt="" width="16" height="16" border="0" align="absmiddle"> Usuario</td>
              <td><input name="iduser" id="iduser" value="<?php print($_SESSION["oUsuario"]->iduser); ?>" size="50" style="width:100%;"></td>
            </tr>
            <tr>
              <td class="Titulo">Nombre</td>
              <td><input name="name" id="name" value="<?php print($_SESSION["oUsuario"]->name); ?>" size="80" style="width:100%;"></td>
            </tr>
            <tr>
              <td class="Titulo">Avatar</td>
              <td><select id="avatar" name="avatar" style="width:100%;" onChange="javascript:setIconAvatar('avatar','iavatar');">
                  <?php 
					print($_SESSION["oUsuario"]->getAvatars(1,$_SESSION["oUsuario"]->avatar,1));
				?>
                </select>              </td>
            </tr>
            <tr>
              <td class="Titulo">&nbsp;</td>
              <td><img src="<?php print($_SESSION["oUsuario"]->avatarp); ?>" alt="Avatar" name="iavatar" width="32" height="32" id="iavatar"></td>
            </tr>
            <tr>
              <td class="Titulo">&nbsp;</td>
              <td>Actualizar contrase&ntilde;a (Obligatorio)</td>
            </tr>
            <tr>
              <td class="Titulo"><img src="images/other/llave.png" alt="" width="16" height="16" border="0" align="absmiddle"> Clave</td>
              <td valign="middle"><table border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="150"><input id="pass" name="pass" type="password"></td>
                  <td width="150" class="Titulo">Confirmar clave&nbsp;</td>
                  <td width="150"><input id="passc" name="passc" type="password"></td>
                  </tr>
                </table></td>
            </tr>
            <tr>
              <td colspan="2" class="TituloGrupo"><span style="color:#FF0000;"><?php print($inform); ?>&nbsp;</span></td>
            </tr>
            <tr>
              <td colspan="2" align="right"><table border="0" cellspacing="2" cellpadding="0">
                <tr>
                  <td width="32" height="32"><a href="javascript:document.forms[0].submit();"><img src="images/32x32/system/save.png" alt="Guardar" width="32" height="32" border="0" align="absmiddle"></a></td>
                  <td width="32" height="32"><a href="profile.php"><img src="images/32x32/system/update.png" alt="Actualizar" width="32" height="32" border="0" align="absmiddle"></a></td>
                  <td width="32" height="32">&nbsp;</td>
                  <td width="32" height="32"><a href="helpdesk.php"><img src="images/32x32/system/home.png" alt="Guardar" width="32" height="32" border="0" align="absmiddle"></a></td>
                </tr>
              </table></td>
              </tr>
          </table>
</td>
    </tr>
  </table>
</form>
</body>
</html>