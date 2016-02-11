<?php require_once("class/pintar.php");
require_once("class.validar.php");
$obj = new Pintar();

if (isset($_SESSION["usuario"])){

    echo "<script type='text/javascript'>window.location='blog-categorias.php';</script>";

}
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
<script type="text/javascript" src="js/jquery.valid.js"></script>
<script type="text/javascript">




$(document).ready(function(){



$("#topnav li").hover(function(){
  $(this).animate({top:'-3px' }, 250);
  }, function () {
  $(this).animate({top:'0px'}, 250); });
		
  $(".m1").hover(function(){
  $(this).animate({top:'-10px' }, 250);
  }, function () {
  $(this).animate({top:'0px'}, 250); });
		
  $(".m2").hover(function(){
  $(this).animate({top:'10px' }, 250);
  }, function () {
  $(this).animate({top:'0px'}, 250); });	
  
  $(".m3").hover(function(){
  $(this).animate({top:'-10px' }, 250);
  }, function () {
  $(this).animate({top:'0px'}, 250); });	
  
  $(".m4").hover(function(){
  $(this).animate({top:'-10px' }, 250);
  }, function () {
  $(this).animate({top:'0px'}, 250); });
  
   $(".m5").hover(function(){
  $(this).animate({top:'20px' }, 250);
  }, function () {
  $(this).animate({top:'0px'}, 250); });	
  
  $(".m6").hover(function(){
  $(this).animate({top:'-10px' }, 250);
  }, function () {
  $(this).animate({top:'0px'}, 250); });




$('.registro').validationEngine();
$('.loguin').validationEngine();

    
})


</script>
<script type="text/javascript" src="http://www.imaginamos.com/footer_ahorranito/jquery.ahorranito.js"></script>
<script type="text/javascript" src="js/ahorranito.js"></script>
</head>

<body>

<div class="logo"></div>
<a class="logotipo" href="index.php"></a>
<?php include("header.php"); ?>

<div class="main">
  <div class="blog-titulo">blog</div>
  

    
    <form action="" method="POST" class="registro">
    <div class="titulo">Registro</div>
    
    <label>Nombre y apellido</label>
    <input name="nombre" type="text" class="validate[required]" data-validation-placeholder="nombre" />
    <label>Usuario</label>
    <input name="usuario" type="text" class="validate[required]" data-validation-placeholder="usuario" />
       <label>Contraseña</label>
       <input name="pass" type="password" class="validate[required]" data-validation-placeholder="pass" />
      <label>Confirmar contraseña</label>
      <input name="pass2" type="password" class="validate[required]" data-validation-placeholder="pass2" />
    <label>E-mail</label>
    <input name="email" type="text" class="validate[required,custom[email]]" data-validation-placeholder="email" />
    <input name="" type="submit" class="registrarse" value="Enviar"/>
    <input type="hidden" name="grabar" value="no"/>
     <?php
                //print_r($_POST);exit;
                if (isset($_POST['grabar']) and $_POST['grabar'] == 'no'){
                       $obj = new Validar();
                      $obj->enviar_email();		
                  //print_r($_POST);
                    
                  }
                ?>
    </form>

     <form action="" method="POST" class="loguin">
    <div class="titulo">Acceso</div>
    
    <label>Usuario</label>
    <input name="user" type="text" class="validate[required]" data-validation-placeholder="user" />
       <label>Contraseña</label>
       <input name="password" type="password" class="validate[required]" data-validation-placeholder="password" />
<input name="" type="submit" class="registrarse" value="Entrar" /> 
<input type="hidden" name="grabar" value="si"/>
<?php 
if(isset($_POST['grabar']) and $_POST['grabar'] == "si" ){
 //
    $a = ($_POST['user']);
    $b = ($_POST['password']);
    $obj->validacion($a,$b);
}
?>
    </form>
  <div class="elefante"></div>
</div>
<?php include("footer.php"); ?>
</body>
</html>
