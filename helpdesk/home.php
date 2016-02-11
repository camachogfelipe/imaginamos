<?php 
	include('header.php');
	
	@$panic=$_GET["panic"]; settype($panic,"integer");
	@$clear=$_GET["clear"]; settype($clear,"integer");
	
	if($_SESSION["oUsuario"]->status<>1){
		RedireccionarHeader("login.php");
	}else{
		if($_SESSION["oUsuario"]->admin<=0) {
			RedireccionarHeader("login.php");
		}else{			
			if($_SERVER["REQUEST_METHOD"] == "GET") {				
				$_SESSION["oUsuario"]->setPanic($panic,$panic);
				$_SESSION["oUsuario"]->setClear($clear);
			}
		}
	}
	
	//Parametros
	$panicEst = $_SESSION["oUsuario"]->getParameter("UserLocationSend","int",0)==0 ? "Activar" : "Desactivar";
	$panicLoc = $_SESSION["oUsuario"]->getParameter("UserLocationSend","text","");
	$iduser	  = $_SESSION["oUsuario"]->iduser;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>HelpDesk - Home</title>

<?php include("links.php"); ?>

</head>
<body>
<form action="profile.php" method="post" enctype="multipart/form-data" name="frmWrite" target="_self" id="frmWrite">
  <table width="100%" border="0" cellpadding="1" cellspacing="0" id="contenido">
    <tr>
      <td valign="middle" class="title"><b><a href="profile.php" target="_self"><img src="<?php print($_SESSION["oUsuario"]->avatarp); ?>" alt="Avatar" width="32" height="32" border="0" align="absmiddle">&#8250;&#8250;&nbsp;<?php print($_SESSION["oUsuario"]->name); ?></a>&nbsp;
          <?php if($_SESSION["oUsuario"]->admin>=1) {print("<a href='home.php'>&#8250;&#8250;&nbsp;Home</a>"); } ?>
      </b></td>
    </tr>
    <tr>
      <td align="center" valign="middle"><table width="684" border="0" cellpadding="4" cellspacing="0">
        <tr>
          <td><table width="220" border="0" cellpadding="2" cellspacing="0" class="emoticon">
              <tr>
                <td height="80" align="center" valign="middle" class="commandInput" ><?php if($_SESSION["oUsuario"]->admin>=1) { ?>
                    <a href="helpdesk.php" style="font-size:12; font-weight:bold; color:#333;"><img src="images/32x32/system/helpdesk.png" alt="Helpdesk" width="32" height="32" border="0" align="absmiddle"><br>
                      Help desk<br>
                      <?php printf("<div class='nickname' style='font-size:9;color:#969696;'>%s</div>",$iduser); ?></a>
                    <?php } ?>
                </td>
              </tr>
          </table></td>
          <td><table width="220" border="0" cellpadding="2" cellspacing="0" class="emoticon">
              <tr>
                <td height="80" align="center" valign="middle"><?php if($_SESSION["oUsuario"]->admin==1) { ?>
                    <a href="home.php?panic=<?php print($panic==0 ? "1" : "0"); ?>" style="font-size:12; font-weight:bold; color:#333;"><img src="images/32x32/system/alarm_bell.png" alt="<?php print($panicLoc); ?>" width="32" height="32" border="0" align="absmiddle"><br>
                      Panico !!!<br>
                      <?php printf("<div class='nickname' style='font-size:9;color:#969696;'>%s</div>",$panicEst); ?></a>
                    <?php } ?>
                </td>
              </tr>
          </table></td>
          <td><table width="220" border="0" cellpadding="2" cellspacing="0" class="emoticon">
              <tr>
                <td height="80" align="center" valign="middle"><?php if($_SESSION["oUsuario"]->admin==1) { ?>
                    <a href="home.php?clear=1" style="font-size:12; font-weight:bold; color:#333;"><img src="images/32x32/system/draw_eraser.png" alt="<?php print($panicLoc); ?>" width="32" height="32" border="0" align="absmiddle"><br>
                      Limpiar historico <br>
                    </a>
                    <?php } ?></td>
              </tr>
          </table></td>
        </tr>
        <tr>
          <td><table width="220" border="0" cellpadding="2" cellspacing="0" class="emoticon">
              <tr>
                <td height="80" align="center" valign="middle"><?php if($_SESSION["oUsuario"]->admin>=1) { ?>
                    <a href="parameters.lockusers.php" style="font-size:12; font-weight:bold; color:#333;"><img src="images/32x32/system/set_security_question.png" alt="Seguridad" width="32" height="32" border="0" align="absmiddle"><br>
                      Moderar                        usuarios</a>
                    <?php } ?></td>
              </tr>
          </table></td>
          <td><table width="220" border="0" cellpadding="2" cellspacing="0" class="emoticon">
              <tr>
                <td height="80" align="center" valign="middle"><?php if($_SESSION["oUsuario"]->admin==1) { ?>
                    <a href="parameters.users.php" style="font-size:12; font-weight:bold; color:#333;"><img src="images/32x32/system/user.png" alt="Usuarios" width="32" height="32" border="0" align="absmiddle"><br>
                      Usuarios</a>
                    <?php } ?></td>
              </tr>
          </table></td>
          <td><table width="220" border="0" cellpadding="2" cellspacing="0" class="emoticon">
              <tr>
                <td height="80" align="center" valign="middle"><?php if($_SESSION["oUsuario"]->admin==1) { ?>
                    <a href="parameters.php" style="font-size:12; font-weight:bold; color:#333;"><img src="images/32x32/system/document_properties.png" alt="Propiedades" width="32" height="32" border="0" align="absmiddle"><br>
                      Parametros avanzados</a>
                    <?php } ?></td>
              </tr>
          </table></td>
        </tr>
        <tr>
          <td><table width="220" border="0" cellpadding="2" cellspacing="0" class="emoticon">
              <tr>
                <td height="80" align="center" valign="middle">&nbsp;</td>
              </tr>
          </table></td>
          <td><table width="220" border="0" cellpadding="2" cellspacing="0" class="emoticon">
              <tr>
                <td height="80" align="center" valign="middle">&nbsp;</td>
              </tr>
          </table></td>
          <td><table width="220" border="0" cellpadding="2" cellspacing="0" class="emoticon">
              <tr>
                <td height="80" align="center" valign="middle">&nbsp;</td>
              </tr>
          </table></td>
        </tr>
        <tr>
          <td><table width="220" border="0" cellpadding="2" cellspacing="0" class="emoticon">
              <tr>
                <td height="80" align="center" valign="middle"><a href="logout.php" style="font-size:12; font-weight:bold; color:#333;"></a></td>
              </tr>
          </table></td>
          <td><table width="220" border="0" cellpadding="2" cellspacing="0" class="emoticon">
              <tr>
                <td height="80" align="center" valign="middle">&nbsp;</td>
              </tr>
          </table></td>
          <td><table width="220" border="0" cellpadding="2" cellspacing="0" class="emoticon">
              <tr>
                <td height="80" align="center" valign="middle"><a href="logout.php" style="font-size:12; font-weight:bold; color:#333;"><img src="images/32x32/system/close.png" alt="Cerrar" width="32" height="32" border="0" align="absmiddle"><br>
                  Cerrar sesi&oacute;n</a></td>
              </tr>
          </table></td>
        </tr>
      </table></td>
    </tr>
  </table>
</form>
</body>
</html>