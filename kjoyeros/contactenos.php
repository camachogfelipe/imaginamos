<?php include('header.php'); 
	$contenido = selecContactenos();
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
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="scripts/maps.js"></script>    
    <script type="text/javascript">	$(function(){$('#datepicker').datepicker({inline: false});});</script>
	
<script>

function esInteger(e)
{
  var charCode
  if (navigator.appName == "Netscape") // Veo si es Netscape o Explorer (mas adelante lo explicamos)
    charCode = e.which // leo la tecla que ingreso
  else
    charCode = e.keyCode // leo la tecla que ingreso

  status = charCode
  if (charCode > 31 && (charCode < 48 || charCode > 57))
  { // Chequeamos que sea un numero comparandolo con los valores ASCII
    //alert("Esto no es un Numero !!")

    return false
  }
  return true
}


function enviar_formulario(){
	
	var nombre = document.form12.nombre.value;
	if (nombre == "" || nombre == <?php if($_SESSION['idioma'] == "en"){ ?>"Full Name"<?php }else{ ?>"Nombre completo"<?php } ?>){
		document.getElementById('nom').style.display = "";
		document.form12.nombre.focus();
		return false;
	}else{
		document.getElementById('nom').style.display = "none";
	}
	
	var email = document.form12.email.value;
	if (email == "" || email == <?php if($_SESSION['idioma'] == "en"){ ?>"E-mail"<?php }else{ ?>"Correo electrónico"<?php } ?>){
		document.getElementById('cor').style.display = "";
		document.form12.email.focus();
		return false;
	}else{
		document.getElementById('cor').style.display = "none";
	}
	
	if ((email.indexOf('@', 0) == -1) || (email.length < 5) || (email.indexOf('.', 0) == -1)) 	
	{
	 document.getElementById('c2').style.display = "";
	 document.form12.email.focus();
	  return false
	}else{
		document.getElementById('c2').style.display = "none";
	}

	var telefono = document.form12.telefono.value;
	if (telefono == "" || telefono == <?php if($_SESSION['idioma'] == "en"){ ?>"Phone"<?php }else{ ?>"Teléfono"<?php } ?>){
		document.getElementById('tel').style.display = "";
		document.form12.telefono.focus();
		return false;
	}else{
		document.getElementById('tel').style.display = "none";
	}
	
	var asunto = document.form12.asunto.value;
	if (asunto  == "" || asunto  == <?php if($_SESSION['idioma'] == "en"){ ?>"Issue"<?php }else{ ?>"Asunto"<?php } ?>){
		document.getElementById('asu').style.display = "";
		document.form12.asunto .focus();
		return false;
	}else{
		document.getElementById('com').style.display = "none";
	}
	
	var comentario = document.form12.comentario.value;
	if (comentario == "" || comentario == <?php if($_SESSION['idioma'] == "en"){ ?>"Comment"<?php }else{ ?>"Comentario"<?php } ?>){
		document.getElementById('com').style.display = "";
		document.form12.comentario.focus();
		return false;
	}else{
		document.getElementById('com').style.display = "none";
	}
	  
	   document.getElementById('form12').submit();
	   
}


function valida(){
	
	var nombre = document.form12.nombre.value;
	if(nombre == ""){
		document.form12.nombre.value = <?php if($_SESSION['idioma'] == "en"){ ?>"Full Name"<?php }else{ ?>"Nombre completo"<?php } ?>;
	}
	
	var email = document.form12.email.value;
	if(email == ""){
		document.form12.email.value = <?php if($_SESSION['idioma'] == "en"){ ?>"E-mail"<?php }else{ ?>"Correo electrónico"<?php } ?>;
	}
	
	var telefono = document.form12.telefono.value;
	if(telefono == ""){
		document.form12.telefono.value = <?php if($_SESSION['idioma'] == "en"){ ?>"Phone"<?php }else{ ?>"Teléfono"<?php } ?>;
	}
	
	
	var asunto = document.form12.asunto.value;
	if(asunto == ""){
		document.form12.asunto.value = <?php if($_SESSION['idioma'] == "en"){ ?>"Issue"<?php }else{ ?>"Asunto"<?php } ?>;
	}
	
	var comentario = document.form12.comentario.value;
	if(comentario == ""){
		document.form12.comentario.value = <?php if($_SESSION['idioma'] == "en"){ ?>"Comment"<?php }else{ ?>"Comentario"<?php } ?>;
	}
	
}
	
</script>	

		
  </head>

<body onLoad="initialize();">



<div class="container">
   
  
  <div class="home">    
    <div class="contact val">
      <h2><?php if($_SESSION['idioma'] == "en"){ echo substr($contenido->tituloContactenosEn[0],0, 50); }else{ echo substr($contenido->tituloContactenosEs[0],0, 50); } ?></h2>
      <p><?php if($_SESSION['idioma'] == "en"){ echo substr($contenido->descripcionContactenosEn[0],0, 300); }else{ echo substr($contenido->descripcionContactenosEs[0],0, 300); } ?></p>
      <div class="clearfix">
       
         <form action="enviar.php" method="post" name="form12" id= "form12">
        <div class="left">  
         <div id="nom" style="color:#FF0000; display:none; ">* <?php if($_SESSION['idioma'] == "en"){ ?>Required Field<?php }else{ ?>Campo Obligatorio<?php } ?></div>
          <input type="text" name="nombre" id="nombre" value="<?php if($_SESSION['idioma'] == "en"){ ?>Full Name<?php }else{ ?>Nombre completo<?php } ?>" onBlur="valida();">
          <div id="cor" style="color:#FF0000; display:none;">* <?php if($_SESSION['idioma'] == "en"){ ?>Required Field<?php }else{ ?>Campo Obligatorio<?php } ?></div>
          <div id="c2" style="color:#FF0000; display:none">* <?php if($_SESSION['idioma'] == "en"){ ?>Invalid E-mail... (xx@xxxx.com)<?php }else{ ?>Correo Electrónico no válido... (xx@xxxx.com)<?php } ?></div>
          <input type="text" name="email" id="email"  value="<?php if($_SESSION['idioma'] == "en"){ ?>E-mail<?php }else{ ?>Correo electrónico<?php } ?>" onBlur="valida();">
          <div id="tel" style="color:#FF0000; display:none;">* <?php if($_SESSION['idioma'] == "en"){ ?>Required Field<?php }else{ ?>Campo Obligatorio<?php } ?></div>
          <input type="text" name="telefono" id="telefono"  value="<?php if($_SESSION['idioma'] == "en"){ ?>Phone<?php }else{ ?>Teléfono<?php } ?>" onBlur="valida();" onKeyPress="return esInteger(event);">
        </div> 
        
        <div class="right textarea_contact">
         	<div id="asu" style="color:#FF0000; display:none;">* <?php if($_SESSION['idioma'] == "en"){ ?>Required Field<?php }else{ ?>Campo Obligatorio<?php } ?></div>
          <input name="asunto" id="asunto" type="text" value="<?php if($_SESSION['idioma'] == "en"){ ?>Issue<?php }else{ ?>Asunto<?php } ?>" onBlur="valida();">
           <div id="com" style="color:#FF0000; display:none;">* <?php if($_SESSION['idioma'] == "en"){ ?>Required Field<?php }else{ ?>Campo Obligatorio<?php } ?></div>
          <textarea name="comentario" id="comentario" value="" onBlur="valida();"><?php if($_SESSION['idioma'] == "en"){ ?>Comment<?php }else{ ?>Comentario<?php } ?></textarea>
 			<a href="#" class="registrar e2 right" onClick="javascript:enviar_formulario();"><?php if($_SESSION['idioma'] == "en"){ ?>SEND<?php }else{ ?>ENVIAR<?php } ?></a>
        </div>
         
           </form>
        </div>
      </div>
     
    </div>
      
  </div>
  
<?php include('footer.php'); ?>

</div>	

	





</body>
</html>
