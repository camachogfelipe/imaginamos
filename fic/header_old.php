<?php require_once('Connections/cnn_fic.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}
?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['email'])) {
  $loginUsername=$_POST['email'];
  $password=$_POST['contrasena'];
  $MM_fldUserAuthorization = "estado";
  $MM_redirectLoginSuccess = "micuenta.php";
  $MM_redirectLoginFailed = "index.php?error=login";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_cnn_fic, $cnn_fic);
  	
  $LoginRS__query=sprintf("SELECT email, contrasena, estado FROM t_usuarios WHERE email=%s AND contrasena=%s AND estado=1",
  GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text")); 
   
  $LoginRS = mysql_query($LoginRS__query, $cnn_fic) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
    
    $loginStrGroup  = mysql_result($LoginRS,0,'estado');
    
	if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<script>
$(document).ready(function(e) {
    $('.regBtn').colorbox({iframe:true, innerWidth:460, innerHeight:400	});
    $('.passBtn').colorbox({iframe:true, innerWidth:460, innerHeight:300 });
});
</script>
<div class="headerBox">
	<div class="logo"><a href="index.php"><img src="images/logo.png" width="386" height="56" border="0	"></a></div>
    <div class="regLogBox">
    	<a href="<?php if (!isset($_SESSION['MM_Username'])){ echo "#"; }else{ echo "micuenta.php";}?>" class="loginBtn" <?php if (isset($_SESSION['MM_Username'])){?> style="text-indent:13px;"<?php }?>><?php if (!isset($_SESSION['MM_Username'])){ echo "LOGIN";}else{ echo"MI CUENTA";} ?></a>
    	<a href="#" class="chatBtn">CHAT</a>
    </div>
    <?php if (!isset($_SESSION['MM_Username'])){ ?>
    <div class="logInBox">
    	<div class="closeBtn"></div>
        <div class="logInFormBox">
        	<form METHOD="POST" action="<?php echo $loginFormAction; ?>" name="login">
                <input type="text" class="inpText hint" name="email" value="E-mail" title="E-mail" />
                <input type="password" class="inpText hint" name="contrasena" value="Contraseña" title="Contraseña" />
                <div class="opt"><a href="pass.php" class="passBtn">¿Olvido su contraseña?</a> | <a href="registro.php" class="regBtn" > Regístrate</a></div>
                <input type="submit" value="ENTRAR" />
            </form>
        </div>
    </div>
    <?php }?>
    <div class="chatBox">
    	<div class="closeBtn"></div>
    </div>
    
    <div class="menuHeaderBox">
    	<a href="index.php">Home</a>
        <a href="quienesSomos.php">Quienes somos</a>
        <a href="servicios.php" class="servBtn">Servicios</a>
        <a href="blog.php">Blog</a>
        <a href="contactenos.php">Contáctenos</a>
    </div>
</div>
<div class="submenuWrap">
	<div class="submenuBox">
    	<div class="submenu">
        	<a href="servicioDetalle2.php">Inversiones Diamante</a>
        	<a href="servicioDetalle.php">Inversiones Zafiro</a>
        	<a href="servicioDetalle3.php">Inversiones Ruby</a>
        </div>
    </div>	
</div>

<?php if (isset($_GET['error'])){ ?>
<script>
alert("Usuaio y Contraseña incorrectas.")
</script>
<?php }?>