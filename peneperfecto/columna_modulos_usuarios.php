<?
    include_once './php/clases.php';
    
    $videoDAO = new videoDAO();
    $video = $videoDAO->getById(1);
    
    $encuestaDAO = new encuestaDAO();
    $encuesta = $encuestaDAO->getById(1);
    
    $encuestaresDAO = new encuestaresDAO();
    
    $usuario = new venta();
    $usuario = unserialize($_SESSION['usuariosPP']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
<link href="css/stylos_pperfecto.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="tit_recomendacion"><a href="tecnicas_aevitar.php">Video Pene Perfecto</a> </div>
          <div id="envdemostracion">
          
            <div id="env_videolat">
              <iframe src="./reproductor/example/video-user.php" wmode="transparent" style="border: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;" width="258" height="175" allowtransparency="no" scrolling="no"></iframe>
            </div>
            
          </div>
          
          

          <div id="tit_encuesta">Encuesta</div>
          <div id="envencuesta">
              <div id="txt_encuesta"><?=$encuesta->getpregunta() ?></div>
            <div id="opciones_encuesta">
                <table style="text-align: left;" width="100%" ><tr style="height:40px;">
                        <td><input type="radio" name="encuesta" style="height:16px; float:left; margin-right:8px;"><div style="float: left; padding-right: 10px;"><?=$encuesta->geto1() ?></div><div style="background-color: #e02020; float: left; width: <?=(((($encuestaresDAO->totalo(1)*100)/$encuestaresDAO->total())*90)/100)  ?>px; max-width:100px; height: 16px; border:1px solid #bbb; border-radius:2px; margin-right:15px;">&nbsp;</div><div style="float:right; width:20px; height:16px; font:14px Helvetica, sans-serif; color:#888; line-height:22px;">0%</div></td>
                    </tr>
                    <tr style="height:40px;">
                        <td><input type="radio" name="encuesta" style="height:16px; float:left; margin-right:8px;"><div style="float: left; padding-right: 10px;"><?=$encuesta->geto2() ?></div><div style="background-color: #e06020; float: left; width: <?=(((($encuestaresDAO->totalo(2)*100)/$encuestaresDAO->total())*90)/100)  ?>px; height: 16px; border:1px solid #bbb; border-radius:2px; margin-right:15px;">&nbsp;</div><div style="float:right; width:20px; height:16px; font:14px Helvetica, sans-serif; color:#888; line-height:22px;">0%</div></td>
                    </tr>
                    <tr style="height:40px;">
                        <td><input type="radio" name="encuesta" style="height:16px; float:left; margin-right:8px;"><div style="float: left; padding-right: 10px;"><?=$encuesta->geto3() ?></div><div style="background-color: #90d010; float: left; width: <?=(((($encuestaresDAO->totalo(3)*100)/$encuestaresDAO->total())*90)/100)  ?>px; height: 16px; border:1px solid #bbb; border-radius:2px; margin-right:15px;">&nbsp;</div><div style="float:right; width:20px; height:16px; font:14px Helvetica, sans-serif; color:#888; line-height:22px;">0%</div></td>
                      </tr>
                    <?php /*?><tr>
                        <td><div style="float: left; padding-right: 3px;"><?=$encuesta->geto4() ?></div><div style="background-color: #004F8E; float: left; width: <?=(((($encuestaresDAO->totalo(4)*100)/$encuestaresDAO->total())*90)/100)  ?>px; height: 16px; border:1px solid #bbb; border-radius:2px;">&nbsp;</div></td>
                      </tr><?php */?>
                </table>
            </div>
            
          </div>
          
          <div id="envbtencuesta">
            <div id="bt-voto-user"><a href="#"></a></div>
            <!-- Modar resultados -->
            <div id="bresult" style="float:right;"><a href="#con-vista-2" class="modal-res"></a></div>
		 	 		</div>
          
          
          <!--<div id="envbtencuesta">
          	<div id="btver_resul" style="padding-top: 10px;" ><a href="#con-vista-2" class="modal-res"><img src="images/btverresultados.png" border="0" /></a></div>
            <div id="btenviar_resul" style="padding-top: 10px;" ><a href="#" onclick="document.encuestausuario.submit()" ><img src="" src="images/btenviarresultados.png" border="0" /></a></div>
          </div>-->

          
  <div style="display:none;">
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
          
          
          
          
          
          
          
          
          
          
          
         
     <?php /*?><div id="tit_encuesta">Encuesta</div>
<div id="envencuesta">
            <div id="txt_encuesta">¿Cuanto es su aumento por mes?</div>
            <div id="opciones_encuesta">
                
                <? if($encuestaresDAO->getByVenta($usuario->getid()) == NULL): ?>
                
                <form name="encuestausuario" method="POST" action="./php/action/encuestaresAdd.php" >
                    <input name="venta" type="hidden" value="<?=$usuario->getid() ?>" />
                    <table style="text-align: left; width: 200px; " width="100%" >
                        <tr>
                            <td>
                                <label>
                                    <input name="respuesta" type="radio" value="1" />
                                </label>
                                <?=$encuesta->geto1() ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>
                                    <input name="respuesta" type="radio" value="2" />
                                </label>
                                <?=$encuesta->geto2() ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>
                                    <input name="respuesta" type="radio" value="3" />
                                </label>
                                <?=$encuesta->geto3() ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>
                                    <input name="respuesta" type="radio" value="4" />
                                </label>
                                <?=$encuesta->geto4() ?> 
                            </td>
                        </tr>
                    </table>
              
              
              
              
                </form>
                <? endif; ?>
                <? if($encuestaresDAO->getByVenta($usuario->getid()) != NULL): ?>
                <table style="text-align: left; width: 200px;" width="100%" ><tr>
                        
                    
                        <td><div style="float: left; padding-right: 3px;"><?=$encuesta->geto1() ?></div><div style="background-color: #004F8E; float: left; width: <?=(((($encuestaresDAO->totalo(1)*100)/$encuestaresDAO->total())*90)/100)  ?>px; height: 20px">&nbsp;</div></td>
                    </tr>
                    <tr>
                        <td><div style="float: left; padding-right: 3px;"><?=$encuesta->geto2() ?></div><div style="background-color: #004F8E; float: left; width: <?=(((($encuestaresDAO->totalo(2)*100)/$encuestaresDAO->total())*90)/100)  ?>px; height: 20px">&nbsp;</div></td>
                    </tr>
                    <tr>  
                        <td><div style="float: left; padding-right: 3px;"><?=$encuesta->geto3() ?></div><div style="background-color: #004F8E; float: left; width: <?=(((($encuestaresDAO->totalo(3)*100)/$encuestaresDAO->total())*90)/100)  ?>px; height: 20px">&nbsp;</div></td>
                      </tr>
                    <tr>
                        <td><div style="float: left; padding-right: 3px;"><?=$encuesta->geto4() ?></div><div style="background-color: #004F8E; float: left; width: <?=(((($encuestaresDAO->totalo(4)*100)/$encuestaresDAO->total())*90)/100)  ?>px; height: 20px">&nbsp;</div></td>
                      </tr></table>
                <? endif; ?>
            </div>
            <? if($encuestaresDAO->getByVenta($usuario->getid()) == NULL): ?>
            <div id="btver_resul" style="padding-top: 10px;" ><a href="#nogo"><img src="images/btverresultados.png" border="0" /></a></div>
            <div id="btenviar_resul" style="padding-top: 10px;" ><a href="#" onclick="document.encuestausuario.submit()" ><img src="images/btenviarresultados.png" border="0" /></a></div>
            <? endif; ?>
          </div><?php */?>
          
          
          
        
</body>
</html>
