<?
    @session_start();
    
    include_once './php/clases.php';
    
    $videoDAO = new videoDAO();
    $video = $videoDAO->getById(1);
    
    $encuestaDAO = new encuestaDAO();
    $encuesta = $encuestaDAO->getById(1);
    
    $encuestaresDAO = new encuestaresDAO();
    
    $usuario = new venta();
    $usuario = unserialize($_SESSION['usuariosPP']);
    
    $homerecomendadoDAO = new homerecomendadoDAO();
    $homerecomendado = $homerecomendadoDAO->getById(1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
<link href="css/stylos_pperfecto.css" rel="stylesheet" type="text/css" />

</head>

<body>
          <div id="tit_modpperfecto">Usuario </div>
          
          

<script type="text/javascript">
    function validarHoja (){
        var control = true;
        
        if (document.login.mail.value+"" == ""  || document.hoja.mail.value+"" == "E-mail..."){
            alert('Debes ingresar tu E-Mail');
            control = false;
        }
        else{
            if (document.login.pass.value+"" == "" || document.hoja.pass.value+"" == "Contraseña..."){
               alert('Debes ingresar tu contraseña');
                control = false;
            }
        }       
        return control;
    }
</script>
          
          <div id="envsuscripcion">
              <form name="login" onsubmit="return validarHoja ()" action="./php/action/loginUsuario.php" target="_parent" method="post">
                  <div id="btforminicio"><a href="#" onclick=" document.login.submit(); " >&nbsp;</a></div>
              <div id="bgcampo2">
                <input name="mail" type="text"  id="E-mail..." onfocus="if (this.value=='E-mail...'){this.value='';};return false;" onblur="if (this.value==''){this.value='E-mail...';return false;}" value="E-mail..." class="transparente2" />
              </div>
              <div id="bgcampo3">
                <input name="pass" type="password"  id="Contraseña..." onfocus="if (this.value=='Contraseña...'){this.value='';};return false;" onblur="if (this.value==''){this.value='Contraseña...';return false;}" value="Contraseña..." class="transparente2" />
              </div>
            </form>
            <div id="btsucripcaja"><a href="registro_pagaduria.php">&nbsp;</a></div>
          </div>
          
          
          <div id="tit_encuesta">Encuesta</div>
          <div id="envencuesta">
              <div id="txt_encuesta"><?=$encuesta->getpregunta() ?></div>
            <div id="opciones_encuesta">
                <table style="text-align: left;" width="100%" ><tr style="height:40px;">
                        <td><!--<input type="radio" name="encuesta" style="height:16px; float:left; margin-right:8px;">--><div style="float: left; padding-right: 10px;"><?=$encuesta->geto1() ?></div><div style="background-color: #e02020; float: left; width: <?=(((($encuestaresDAO->totalo(1)*100)/$encuestaresDAO->total())*90)/100)  ?>px; max-width:100px; height: 16px; border:1px solid #bbb; border-radius:2px; margin-right:15px;">&nbsp;</div><div style="float:right; width:20px; height:16px; font:14px Helvetica, sans-serif; color:#888; line-height:22px;">0%</div></td>
                    </tr>
                    <tr style="height:40px;">
                        <td><!--<input type="radio" name="encuesta" style="height:16px; float:left; margin-right:8px;">--><div style="float: left; padding-right: 10px;"><?=$encuesta->geto2() ?></div><div style="background-color: #e06020; float: left; width: <?=(((($encuestaresDAO->totalo(2)*100)/$encuestaresDAO->total())*90)/100)  ?>px; height: 16px; border:1px solid #bbb; border-radius:2px; margin-right:15px;">&nbsp;</div><div style="float:right; width:20px; height:16px; font:14px Helvetica, sans-serif; color:#888; line-height:22px;">0%</div></td>
                    </tr>
                    <tr style="height:40px;">
                        <td><!--<input type="radio" name="encuesta" style="height:16px; float:left; margin-right:8px;">--><div style="float: left; padding-right: 10px;"><?=$encuesta->geto3() ?></div><div style="background-color: #90d010; float: left; width: <?=(((($encuestaresDAO->totalo(3)*100)/$encuestaresDAO->total())*90)/100)  ?>px; height: 16px; border:1px solid #bbb; border-radius:2px; margin-right:15px;">&nbsp;</div><div style="float:right; width:20px; height:16px; font:14px Helvetica, sans-serif; color:#888; line-height:22px;">0%</div></td>
                      </tr>
                    <?php /*?><tr>
                        <td><div style="float: left; padding-right: 3px;"><?=$encuesta->geto4() ?></div><div style="background-color: #004F8E; float: left; width: <?=(((($encuestaresDAO->totalo(4)*100)/$encuestaresDAO->total())*90)/100)  ?>px; height: 16px; border:1px solid #bbb; border-radius:2px;">&nbsp;</div></td>
                      </tr><?php */?>
                </table>
            </div>
            
          </div>
		  
		  
		  <div id="envbtencuesta">
		   <div id="bregen"><a href="registro_pagaduria.php"></a></div>
       
      <!-- Ususario sin registro -->
      <div id="bresult"><a href="#con-vista-1" class="modal-res"></a></div>
      
      <!-- Ususario registrado -->
      <!--<div id="bresult"><a href="#con-vista-2" class="modal-res"></a></div>-->
		  
		  </div>
		  
		  
		  
		  
          <div id="tit_demostracion">Demostración</div>
          <div id="envdemostracion">
            <div id="env_videolat">
              <iframe src="./reproductor/example/index.php" wmode="transparent" style="border: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;" width="258" height="175" allowtransparency="no" scrolling="no"></iframe>
            </div>
          </div>
          <div id="tit_recomendacion">100% Recomendado </div>
          <div id="envrecomendacion">
            <div id="env_banner">
                <a href="<?=$homerecomendado->getlink() ?>"><img src=".<?=$homerecomendado->getimagen() ?>" width="246" height="212" /></a>
            </div>
          </div>
          <div id="btempiezaahora"><a href="registro_pagaduria.php">&nbsp;</a></div>
     

	<div style="display:none;">
  
  	<!--Modal sin registro-->
  	<div id="con-vista-1">
      <div class="head-mod">¿Cuanto es su aumento por mes?</div>
      <p><span>Numero de votantes</span><strong>999999</strong></p>
      <p><span>Ultimo voto</span><strong>30 de Abril del 2013 22:30</strong></p>
      <div class="con-tabla-res">
      	<div class="head-tabla-res">
        	<div class="item-tabla-res res-def">Opciones</div>
          <div class="item-tabla-res res-vot">Votos</div>
          <div class="item-tabla-res res-def">Porcentaje</div>
          <div class="item-tabla-res res-gra">Gráfico</div>
        </div>
        <!--Porcentaje 1-->
        <div class="tabla-res">
        	<div class="item-res res-def">1.5 Centimetros</div>
          <div class="item-res res-vot">9999999</div>
          <div class="item-res res-def">40%</div>
          <div class="item-res res-gra"><div class="porcent"><div class="porcent-1" style="width:40%;"></div></div></div>
        </div>
        <!--Porcentaje 2-->
        <div class="tabla-res">
        	<div class="item-res res-def">1.0 Centimetros</div>
          <div class="item-res res-vot">9999999</div>
          <div class="item-res res-def">80%</div>
          <div class="item-res res-gra"><div class="porcent"><div class="porcent-2" style="width:80%;"></div></div></div>
        </div>
        <!--Porcentaje 3-->
        <div class="tabla-res">
        	<div class="item-res res-def">0.5 Centimetros</div>
          <div class="item-res res-vot">9999999</div>
          <div class="item-res res-def">20%</div>
          <div class="item-res res-gra"><div class="porcent"><div class="porcent-3" style="width:20%;"></div></div></div>
        </div>
      </div>
      <p>Esta opción es solo para usuarios registrados para poder votar por favor inicie sesión o suscribase.</p>
      <form action="#" method="post">
        <div class="con-bts-modal">
          <input type="submit" class="ingresa" value="Ingresar" />
          <input type="submit" class="suscribe" value="¡Suscribase Ahora!" />
        </div>
      </form>
    </div>
    
    
    
    <!--Modal registrado-->
    <div id="con-vista-2">
    	<div class="head-mod">¿Cuanto es su aumento por mes?</div>
      <p><span>Numero de votantes</span><strong>999999</strong></p>
      <p><span>Ultimo voto</span><strong>30 de Abril del 2013 22:30</strong></p>
      <div class="con-tabla-res">
      	<div class="head-tabla-res">
        	<div class="item-tabla-res res-def">Opciones</div>
          <div class="item-tabla-res res-vot">Votos</div>
          <div class="item-tabla-res res-def">Porcentaje</div>
          <div class="item-tabla-res res-gra">Gráfico</div>
        </div>
        <!--Porcentaje 1-->
        <div class="tabla-res">
        	<div class="item-res res-def"><input type="radio" name="enc" />1.5 Centimetros</div>
          <div class="item-res res-vot">9999999</div>
          <div class="item-res res-def">40%</div>
          <div class="item-res res-gra"><div class="porcent"><div class="porcent-1" style="width:40%;"></div></div></div>
        </div>
        <!--Porcentaje 2-->
        <div class="tabla-res">
        	<div class="item-res res-def"><input type="radio" name="enc" />1.0 Centimetros</div>
          <div class="item-res res-vot">9999999</div>
          <div class="item-res res-def">80%</div>
          <div class="item-res res-gra"><div class="porcent"><div class="porcent-2" style="width:80%;"></div></div></div>
        </div>
        <!--Porcentaje 3-->
        <div class="tabla-res">
        	<div class="item-res res-def"><input type="radio" name="enc" />0.5 Centimetros</div>
          <div class="item-res res-vot">9999999</div>
          <div class="item-res res-def">20%</div>
          <div class="item-res res-gra"><div class="porcent"><div class="porcent-3" style="width:20%;"></div></div></div>
        </div>
      </div>
      <form action="#" method="post">
        <div class="con-bts-modal">
          <input type="submit" class="vota" value="Votar" />
        </div>
      </form>
    </div>
    
  </div>
        
</body>
</html>
