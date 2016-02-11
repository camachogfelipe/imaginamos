<?php require_once("class/pintar.php");
require_once("class.validar.php");
$obj = new Pintar();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Play Date</title>
<meta name="viewport" content="width=1024, maximum-scale=2">
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
<meta http-equiv="content-language" content="es" />
<meta http-equiv="pragma" content="No-Cache" />
<meta name="Keywords" lang="es" content="" />
<meta name="Description" lang="es" content="" />
<meta name="copyright" content="imaginamos.com" />
<meta name="date" content="2013" />
<meta name="author" content="diseño web: imaginamos.com" />
<meta name="robots" content="All" />
<link href="css/playdate.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="js/playdate.js"></script>
<script type="text/javascript" src="http://www.imaginamos.com/footer_ahorranito/jquery.ahorranito.js"></script>
<script type="text/javascript" src="js/ahorranito.js"></script>
<script type="text/javascript" src="js/jquery.valid.js"></script>
</head>

<body>

<div class="logo"></div>
<a class="logotipo" href="index.php"></a>
<?php include("header.php"); ?>

<div class="main">
  <div class="blog-titulo">blog</div>
  

    
    <form action="" method="get" class="registro">
    <div class="titulo">Registro</div>
    
    <label>Nombre y apellido</label>
    <input name="" type="text" />
    <label>Usuario</label>
    <input name="" type="text" />
       <label>Contraseña</label>
    <input name="" type="text" />
      <label>Confirmar contraseña</label>
    <input name="" type="text" />
    <label>E-mail</label>
    <input name="" type="text" />
    <input name="" type="button" class="registrarse" value="Enviar" onclick="location.href = './blog.php'"/>
    </form>

     <form action="" method="get" class="loguin">
    <div class="titulo">Acceso</div>
    
    <label>Usuario</label>
    <input name="" type="text" />
       <label>Contraseña</label>
    <input name="" type="text" />
<input name="" type="button" class="registrarse" value="Entrar" onclick="location.href = './blog.php'"/>    
    </form>
  <div class="elefante"></div>
</div>
<?php include("footer.php"); ?>
</body>
</html>
