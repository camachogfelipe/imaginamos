<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Norquimicos</title>
    <meta name="viewport" content="width=1024, maximum-scale=2">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <meta http-equiv="content-language" content="es" />
    <meta http-equiv="pragma" content="No-Cache" />
    <meta name="Keywords" lang="es" content="" />
    <meta name="Description" lang="es" content="" />
    <meta name="copyright" content="imaginamos.com" />
    <meta name="date" content="2011" />
    <meta name="author" content="diseño web: imaginamos.com" />
    <meta name="robots" content="All" />
    <link href="../css/norquimicos.css" rel="stylesheet" type="text/css" />
    <link href="../css/validationEngine.jquery.css" rel="stylesheet" type="text/css" />
    <style type="text/css">.con-catalogos {width:940px; margin:140px auto 0;} .catalogo {width:250px; height:auto; margin:0 auto;} .catalogo h1 {color: #ee3135; font-size:25px; font-family: 'MyriadPro-Bold'; text-align:center;} .con-alert-catalogo {width:940px; height:auto; margin:50px 0 0;} .con-robot {width:200px; height:144px; float:left;} .con-info-robot {width:320px; height:auto; float:right;} .con-info-robot h1 {font:600 18px "Comic Sans MS", cursive; color:#333; line-height:24px;} .con-info-robot h1 strong {color:#db0000;} #modal-precios {background-color:#fff; padding:20px; overflow:hidden;} #modal-precios h1 {font-size:22px; line-height:22px; margin-bottom:5px;} #modal-precios p {color:#333;} #formulario {margin:15px 10px;}</style>
    <script src="../js/jquery-1.8.2.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="../js/jquery.colorbox.js"></script>
    <script type="text/javascript" src="../js/jquery.validationEngine.js"></script> 
   	<script type="text/javascript" src="../js/jquery.validationEngine-es.js"></script>
    <script type="text/javascript" src="http://www.imaginamos.com/footer_ahorranito/jquery.ahorranito.js"></script>
    <script type="text/javascript">$(document).ready(function(){$('.footer-ahorranito').ahorranito({theme:"oscuro", type:1}); $(".catalogo").hover(function(){$(this).children("img").animate({margin:"-10px 0px 10px"});}, function(){$(this).children("img").animate({margin:"0"});}); if($(".modal-precios").size()>0){$(".modal-precios").colorbox({inline:true, width:"460px", height:"200px"});}; if($("#precios-form").size()>0){$("#precios-form").validationEngine({promptPosition:"bottomLeft"});};});</script>
	</head>
	<body>

    <div class="header">
      <div class="contieneheader">
      	<div class="logo"><a href="../index.php?seccion=index" class="<?php if ($_GET['seccion'] == 'index'){echo 'activo';}?>"><img src="../imagenes/logo.png" /></a></div>
      </div>
    </div>
	<div class="con-catalogos">
    	<a href="#modal-precios" class="modal-precios seguridad cboxElement">
        <div class="catalogo">
          <img src="pdf-img.png" width="250" height="250" alt="">
          <h1>LISTA DE PRECIOS</h1>
        </div>
      </a>
      <div class="con-alert-catalogo">
      	<div class="con-robot"><img src="robot-img.png" width="200" height="144" alt=""></div>
        <div class="con-info-robot">
        	<h1><strong>¡ATENCIÓN!</strong> LA DESCARGA PUEDE TARDAR VARIOS MINUTOS, NO OLVIDES DESCARGARLO EN TU ORDENADOR.</h1>
        </div>
      </div>
    </div>
    <div class="footer">
      <div class="pie">
      	<img src="../imagenes/logo.png" />
      	<div id="texpie">2013 <span id="rojo">NORQUIMICOS.</span> Todos los derechos reservados <div class="footer-ahorranito" style="overflow: hidden;"></div></div>
      </div>
    </div>
    <div style="display:none;">
    	<div id="modal-precios">
      	<h1>Un momento!</h1>
        <p>Es necesario ingresar su contraseña, para continuar con la descarga.</p>
        <form id="precios-form" action="" method="get">
        	<div id="formulario"><input type="text" id="texto" name="texto" placeholder="" class="validate[required]"></div>
          <input id="btnmoreenviar" name="btnmoreenviar" type="submit" value="Confirmar">
        </form>
      </div>
    </div>

	</body>
</html>
<script>
    $(':submit').click(function(event) {
               var contra=$("#texto").val();            
               if (contra=='3737'){
                  // alert(contra+'aca');
                   //$(location).attr('href','http://norquimicos.com.co/catalogo2013.pdf');
                    url = $(this).attr("href");
                    window.open('http://www.norquimicos.com.co/catalogo2013.pdf');
                    return false;
               }else{
                   alert('La contraseña es invalida')
                   $(location).attr('href','http://norquimicos.com.co/catalogo2013/index.php');
               }
                });
</script>
<?php
    /*echo $_POST['btnmoreenviar'];
    if(isset($_POST['btnmoreenviar'])){
        if ($_POST['texto']=='3737'){
            ?>
            <script>
                window.open('http://www.norquimicos.com.co/catalogo2013.pdf','pdf','') 
            </script>
            <?
        }else{
            echo "<script>alert('Contraseña Incorrecta')</script>";
        }
    }
*/
?>