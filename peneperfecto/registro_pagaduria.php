<?
    include_once './php/clases.php';
    
    $registrofracesDAO = new registrofracesDAO();
    $registrofraces = $registrofracesDAO->gets();
    
    $registrotextoDAO = new registrotextoDAO();
    $registrotexto = $registrotextoDAO->getById(1);
    $total = $registrotextoDAO->total();
    
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
  <div id="headlgomenu">
    <div id="envlogo"><a href="index.php"><img src="images/logopp.png" alt="PENEPERFECTO.com" width="484" height="129" border="0" /></a></div>
    <div id="envsearchmenu">
      <div id="envsearch">
        <form action="" method="get">
          <div id="campsearch">
            <input name="text" type="text"  id="Buscar..." onfocus="if (this.value=='Buscar...'){this.value='';};return false;" onblur="if (this.value==''){this.value='Buscar...';return false;}" value="Buscar..." class="transparente" />
          </div>
        </form>
      </div>
      <div id="envmenudest">
        <?php include "menutop_2.php"; ?>
      </div>
    </div>
  </div>
  <!-------------------------------FIN HEADER-------------------------------------->
  <!-------------------------------BANNER----------------------------------------->
  
  
  <div id="envbanner">	<?php include "banner_registro.php"; ?></div>
  
  
  
  
  
  <!----------------------------------FIN BANNER------------------------------------------->
  <!----------------------------------CONTENIDOS--------------------------------------------->
 <div id="envbienv">Bienvenido al programa de ejercicios naturales de PENEPERFECTO.COM</div>
 
 
 
 
 
 
  <div id="env_internas">
    <div id="caja_centbienestar">
      <div class="cont_pperfecto" >
        <div id="envpagoefectivo ">
          <div id="tit_registro">¡ Suscríbase Ahora !</div>
          <div id="env_cajonregistro">
            <div id="textos_registro">
                <p><?=$registrotexto->gettexto() ?></p>
              <p>&nbsp;</p>
              
<div id="row_sucrip">



<div id="coldersuscrip">


<div id="rounded-boxtit2">
DATOS PARA FACTURACIÓN
</div>





  <div id="rounded-boxtop2">




<?php include "form_registro.php"; ?>









</div>
</div>










<div id="colizqsuscrip">






<div id="rounded-boxtop">
<p>A TENER EN CUENTA</p>
</div>


<div id="clertitsep">&nbsp;</div>


<? if($total>0){ 
    
    $control = 3;
    
 foreach ($registrofraces as $registrofrace) {
        ?>

<div id="rounded-box<?=$control ?>">
                    <p><?=$registrofrace->gettexto() ?></p>
                </div>

        

    <?
    if($control == 3)
        $control = 4;
    else
        $control = 3;
    
        }
  }
    
    ?>

<!--


<div id="rounded-box3">
<p>Acceso inmediato con una clave o password</p>
</div>





<div id="rounded-box4">
<p>Nada se enviará a su hogar</p>
</div>




<div id="rounded-box3">
<p>A efectos de privacidad, su compra será cargada a nombre de PagosOnline.com</p>
</div>


<div id="rounded-box4">
<p>La clave la recibirá en forma inmediata en su email.</p>
</div>


<div id="rounded-box3">
<p>Es un único pago de solo USD 98.00</p>
</div>



<div id="rounded-box4">
<p>El acceso es de por vida, no se le volverá a cargar ningún importe en su tarjeta.</p>
</div>


<div id="rounded-box3">
<p>El pago es 100% seguro y confidencial, bajo la protección de PagosOnline.com</p>
</div>

<div id="rounded-box4">
<p>Es el método existente de costo más efectivo.</p>
</div>

-->

<div id="clertitsep">&nbsp;</div>


<div id="rounded-box5">
<p>Para proteger su privacidad, la información es enviada utilizando la encriptación VeriSign SSL 256bit.</p>
</div>















</div>











</div>



              <br/>
              <br/>
              <div id="clear_division">&nbsp;</div>
            </div>
            <br/>
          </div>
          <div id="footregistro"><img src="images/footregistro.png" width="1104" height="30" /></div>
        </div>
      </div>
    </div>
  </div>
</div>
<!---------------------------------------FIN CONTENIDOS---------------------------------------->
<!---------------------------------------FOOTER PP--------------------------------------------->
<div id="clear_division">&nbsp;</div>



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
