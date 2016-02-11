<?php 
	include('header.php');
	$iduser	  = $_SESSION["oUsuario"]->iduser;
	
	if($_SESSION["oUsuario"]->status<>1){
		RedireccionarHeader("login.php");
	}else{
		if($_SESSION["oUsuario"]->admin<>1) {
			RedireccionarHeader("home.php");
		}
	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>HelpDesk - Parameters</title>

<?php include("links.php"); ?>

</head>
<body>
<form action="profile.php" method="post" enctype="multipart/form-data" name="frmWrite" target="_self" id="frmWrite">
  <table width="100%" border="0" cellpadding="1" cellspacing="0" id="contenido">
    <tr>
      <td valign="middle" class="title"><b><a href="profile.php" target="_self"><img src="<?php print($_SESSION["oUsuario"]->avatarp); ?>" alt="Avatar" width="32" height="32" border="0" align="absmiddle">&#8250;&#8250;&nbsp;<?php print($_SESSION["oUsuario"]->name); ?></a>&nbsp;
          <a href='home.php'>&#8250;&#8250;&nbsp;Home</a>
      &#8250;&#8250;&nbsp;Parametros</b></td>
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
                    <?php } ?></td>
              </tr>
          </table></td>
          <td><table width="220" border="0" cellpadding="2" cellspacing="0" class="emoticon">
              <tr>
                <td height="80" align="center" valign="middle"><a href="parameters.messages.php" class="link"><img src="images/32x32/system/text.png" alt="Texto. Mensajes del sistema" width="32" height="32" border="0" align="absmiddle"><br>
                  Mensajes del sistema</a></td>
              </tr>
          </table></td>
          <td><table width="220" border="0" cellpadding="2" cellspacing="0" class="emoticon">
              <tr>
                <td height="80" align="center" valign="middle"><a href="parameters.default.php" class="link"><img src="images/32x32/system/user.png" alt="Iconos de usuario" width="32" height="32" border="0" align="absmiddle"><br>
                  Predeterminados</a></td>
              </tr>
          </table></td>
        </tr>
        <tr>
          <td><table width="220" border="0" cellpadding="2" cellspacing="0" class="emoticon">
              <tr>
                <td height="80" align="center" valign="middle"><a href="home.php" class="link"><img src="images/32x32/system/home.png" alt="Home" width="32" height="32" border="0" align="absmiddle"><br>
Home</a><a href="parameters.others.php" class="link"></a><a href="parameters.others.php" class="link"></a><a href="#" class="link"></a></td>
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
                <td height="80" align="center" valign="middle"><a href="home.php" class="link"></a></td>
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
                <td height="80" align="center" valign="middle"><a href="#" class="link"></a></td>
              </tr>
          </table></td>
          <td><table width="220" border="0" cellpadding="2" cellspacing="0" class="emoticon">
              <tr>
                <td height="80" align="center" valign="middle"><a href="#" class="link"><br>
                </a></td>
              </tr>
          </table></td>
          <td><table width="220" border="0" cellpadding="2" cellspacing="0" class="emoticon">
              <tr>
                <td height="80" align="center" valign="middle"><a href="logout.php" style="font-size:12; font-weight:bold; color:#333;"><img src="images/32x32/system/close.png" alt="Close" width="32" height="32" border="0" align="absmiddle"><br>
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