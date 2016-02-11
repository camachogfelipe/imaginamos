<?php include('header.php');
$producto = selectProductoDetalle($_GET['id']); 



function currency($from_Currency,$to_Currency,$amount) {
$amount = urlencode($amount);
$from_Currency = urlencode($from_Currency);
$to_Currency = urlencode($to_Currency);
$url = "http://www.google.com/ig/calculator?hl=en&q=$amount$from_Currency=?$to_Currency";
$ch = curl_init();
$timeout = 0;
curl_setopt ($ch, CURLOPT_URL, $url);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch,  CURLOPT_USERAGENT , "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1)");
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
$rawdata = curl_exec($ch);
curl_close($ch);
$data = explode('"', $rawdata);
$data = explode(' ', $data['3']);
$var = $data['0'];
return round($var,3);
}

?>
<!DOCTYPE HTML>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">    
    <title>KUEHNE - JOYEROS</title>
    
    <meta name="author" content="Gustavo Vera Gomez" />
    <meta name="Copyright" content="" />
    
    <meta name="DC.title" content=" " />
    <meta name="DC.subject" content=" " />
    <meta name="DC.creator" content="" />
    
    <link href="styles/all.css" rel="stylesheet" type="text/css" />
    <link href="styles/reset.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" >
    
    <script type="text/javascript" src="scripts/jquery.js"></script>
    <script type="text/javascript" src="scripts/functions.js"></script>
    <script type="text/javascript" src="scripts/jquery.sudoSlider.js"></script>	
    <script type="text/javascript" src="scripts/jquery-ui-1.8.21.custom.min.js"></script>
    <script type="text/javascript">	$(function(){$('#datepicker').datepicker({inline: false});});</script>
    
<script>

function validar(){

	var nombre = document.getElementById('nombre').value;
	var correo = document.getElementById('correo').value;
	var datepicker = document.getElementById('datepicker').value;
	
	if(nombre == "Nombre completo" || nombre == ""){
		alert('El campo Nombre completo no debe ir vacio.');
		document.getElementById('nombre').focus();
	}else if(correo == "Correo electrónico" || correo == ""){
		alert('El campo Correo electrónico no debe ir vacio.');
		document.getElementById('correo').focus();
	}else if ((correo.indexOf('@', 0) == -1) || (correo.length < 5) || (correo.indexOf('.', 0) == -1)){
	    alert("Correo Electrónico no válido")
	    document.getElementById('correo').focus();
	}else if(datepicker == "Fecha estimada de visita" || datepicker == ""){
		alert('Seleccione una Fecha estimada de visita.');
		document.getElementById('datepicker').focus();
	}else{
		document.getElementById('form1').submit();
	}
	
	
}

</script>	

		
  </head>

<body>

<div class="container">
 
  <div class="home">
    <div class="interna_1 clearfix">
      <div class="left foto_interna">
        <a href="javascript:LanzarLight()"><?php if($_SESSION['idioma'] == "en"){ ?>Separate in-store<?php }else{ ?>Separalo en la tienda<?php } ?></a>
        <img src="admin/modules/producto/files/<?php echo $producto->imagen[0]; ?>" width="656" height="395" class="left">
      </div>  
      <div class="left">
        <h2><?php if($_SESSION['idioma'] == "en"){ echo $producto->nombre_producto_en[0]; }else{ echo $producto->nombre_producto_es[0]; } ?></h2>
        <h3>código</h3>
        <h4><?php if($_SESSION['idioma'] == "en"){ echo $producto->referencia_producto_en[0]; }else{ echo $producto->referencia_producto_es[0]; } ?></h4>
        <p><?php if($_SESSION['idioma'] == "en"){ echo $producto->desc_producto_en[0]; }else{ echo $producto->desc_producto_es[0]; } ?></p>
        <div class="clearfix pesos">
          <span class="left precio_tit">precio peso</span>
          <span class="left precio_valor"> $ <?php echo $producto->precio_producto[0]; ?></span>
        </div>
        <div class="clearfix">
          <span class="left precio_tit">precio dolares</span>
          <span class="left precio_valor"> $ <?php echo currency("COP","USD",$producto->precio_producto[0]); ?> </span>
        </div>
        <div class="clearfix">
          <span class="left precio_tit">precio euros</span>
          <span class="left precio_valor"> $ <?php echo currency("COP","EUR",$producto->precio_producto[0]); ?> </span>
        </div>
        <div class="redes_interna">          
          <!-- AddThis Button BEGIN -->
                <div class="addthis_toolbox addthis_default_style">
                
               
                
			<script language="javascript" type="text/javascript">
                function fbs_click() { 
                u = location.href; 
                t = document.title; 
                window.open('http://www.facebook.com/sharer.php?u=' + encodeURIComponent(u) + '&t=' + encodeURIComponent(t) + '&redirect_uri=' + encodeURIComponent('http://www2.highpoint.edu/close_popup.php'), 'sharer', 'toolbar=0,status=0,width=656,height=436'); return false; }
            </script>
				<a id="share-facebook" class="shareLink" href="http://www.facebook.com/share.php?u=<url>" onclick="return fbs_click()" target="_blank"><span class="facebook left">Compartir</span></a>

                <a href="https://twitter.com/share" data-lang="es" data-count="none" target="_blank"><span class="twitter left">Tweet</span></a>

                </div>
            <!-- AddThis Button END --> 
              
        </div>
      </div>
    </div>
    
  
    <div style="position:relative;" align="center" class="slide_interna1">
        <!--slider home -->
		<div id="slider2"><?php selectProductoGaleria($producto->id_categoria[0],$producto->id_subcategoria[0]); ?></div>  
    </div>
  </div>
  
  
<?php include('footer.php'); ?>

</div>	

<div class="lightbox" id="light">
  <div onClick="javascript:cerrarPopup();" class="layer_close"></div>      
  <div class="contenido_light">   
    <div class="clearfix">     
      <h3 class="fon22 mayus left"><?php if($_SESSION['idioma'] == "en"){ ?>Format scheduled visit<?php }else{ ?>Formato de visita programada<?php } ?></h3>
      <a href="javascript:cerrarPopup();" class="cerrar right">cerrar_registro</a>
    </div>  
    <div class="content_l_form val">
      <form name="form1" id="form1" action="enviar_producto.php" method="post">
          <input name="nombre" id="nombre" type="text" value="Nombre completo">
          <input name="correo" id="correo" type="text" value="Correo electrónico">
          <input name="datepicker" type="text" id="datepicker" value="Fecha estimada de visita">
          <input name="id" id="id" type="hidden" value="<?php echo $_GET['id']; ?>">
     
      <div class="clearfix">

        <a href="javascript:validar();" class="registrar right"><?php if($_SESSION['idioma'] == "en"){ ?>REGISTER<?php }else{ ?>REGISTRAR<?php } ?></a>
          
      </div>
    </form>
    </div>
  </div>
</div>


	
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>


</body>
</html>
