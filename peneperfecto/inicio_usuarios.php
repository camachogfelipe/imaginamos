<?php session_start();?>
<?
    if( !isset($_SESSION['usuariosPP']) ){
        header("location: ./index.php?ur");
        exit;
    }
    
    include_once './php/clases.php';
    
    $venta = new venta();
    $venta = unserialize($_SESSION['usuariosPP']);
    
    $pdfDAO = new pdfDAO();
    $pdf = $pdfDAO->getById(1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PENEPERFECTO.com / Ejercicios para agrandar tu pene</title>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
<style type="text/css">
<!--
body {
	background-image: url(images/bg_pp.png);
	background-repeat: repeat-x;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
<link href="css/stylos_pperfecto.css" rel="stylesheet" type="text/css" />
<link href="stylesheet.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="wrapcontenidos">
  <!--------------------------------------------HEADER PP---------------------------->
  <div id="headlgomenu_usuarios">
    <div id="envlogo_usuarios"><a href="index.php"><img src="images/logopp_usuarios.png" alt="PENEPERFECTO.com" width="300" height="80" border="0" /></a></div>
    <div id="envtop_usuarios">
      <div id="envbienv_usuarios">
	  <div id="bthelpd02"><?php include "login.php"; ?></div>
	   <div id="btselector"><div id="btselectorbton"><a href="inicio_usuarios_cuenta.php">&nbsp;</a></div></div>
	    <div id="text_bienvenidos">Bienvenido</div>
	  
	  
	  
	  
	  
	  </div>
	  
	  
	  
	  <div id="envnombre_usuarios">
	  
	  
              <div id="text_nombrebienvenidos"><?= strtoupper($venta->getnombre().' '.$venta->getapellido()) ?> </div>
	  
	  
	  
	  
	  
	  </div>
	  
	  
	  
	  
	  
	  
	  
    </div>
  </div>
  <!-------------------------------FIN HEADER-------------------------------------->
  <!-------------------------------BANNER----------------------------------------->
  <!----------------------------------FIN BANNER------------------------------------------->
  <!----------------------------------CONTENIDOS--------------------------------------------->
<div id="env_internas">
    <div id="caja_centbienestar">
      <div class="cont_pperfecto" >
        <div id="colatizq">
		
		
		
		
		
		
		
		<?php include "columna_modulos_usuarios.php"; ?>
		
		
		
		
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
	
	
		
		
		
		
		
		
		
		
		
		

       
          </p>
        </div>
        <div id="envcolder_contacto">
		
		<div id="envcoments">
                    <script type="text/javascript">
                        function valcomentario(){
                            if(document.comentarios.comentario.value == "" || document.comentarios.comentario.value == "Deja aquí tu comentario..."){
                                alert('Debes ingresar un comentario');
                                return false;
                            }
                            return true;
                        }
                    </script>
                    <form name="comentarios" onsubmit="valcomentario()" action="./php/action/comentarioAdd.php" method="POST">
                        <input name="venta" type="hidden" value="<?=$venta->getid() ?>" />
                        <div id="envbotonenvcoment2"><a onclick="if(valcomentario()) document.comentarios.submit();" href="#">&nbsp;</a></div>
		 
		 
		<div id="envareacoment"><input name="comentario" type="textarea"  id="Buscar..." onfocus="if (this.value=='Deja aquí tu comentario...'){this.value='';};return false;" onblur="if (this.value==''){this.value='Deja aquí tu comentario...';return false;}" value="Deja aquí tu comentario..." class="transparentear" /></div>
		</form>
		</div>
		
		
		
		
		
		
          <div id="tit_barconts">Manual PenePerfecto.com</div>
          
          <div id="env_cajonprograma">
            <div id="textoscont_pperfectointernas">
             
              <div id="row_usuarios">
			  
			  
			  
                  <iframe width="730" height="850" src=".<?=$pdf->getarchivo() ?>" scrolling="no" frameborder="0" allowtransparency="yes" ></iframe>  
			  
			  
			  
			  </div>
              <br/>
        
              <br />
              <br />
          
            </div>
            <br/>
          </div><div id="footcajonprogram"></div>
        </div>
        <br />
        <br/>
      </div>
    </div>
  </div>
</div>
<!---------------------------------------FIN CONTENIDOS---------------------------------------->
<!---------------------------------------FOOTER PP--------------------------------------------->
<div id="piedepagina">
  
  <div id="envcont_foot">
  
  
  <?php include "foot_pperfecto.php"; ?>
  
  
  
  
  </div>
  <div id="envcreditos">
  <div class="footer_autor"><span id="ahorranito"></span><a href="http://www.imaginamos.com">Diseño Web: </a><a href="http://www.imaginamos.com">imagin<span>a</span>mos.com</a></div>
    <div id="logfootpperfecto">
     Copyright © 2013&nbsp; PenePerfecto.com  -Todos los derechos reservados.
    </div>
  </div>
</div>
</body>
</html>
