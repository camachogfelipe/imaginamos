<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
    
    <title>FIC - FOCUS INVESTMENT CORP</title>
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <script>

function validar(){
  nombre=document.contactoform.nombre.value;
  email=document.contactoform.email.value;
  asunto=document.contactoform.asunto.value;
  mensaje=document.contactoform.mensaje.value;
  m="0"
  aler="Llenar los datos solicitados para el envío:\n "
if(m=="0"){
  if(nombre=="" || nombre=="Nombre"){
    m++
    aler+="Debes digitar el Nombre \n"
    } 
   if (!(/[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/.test(email)) ){
     m++
    aler+="El E-mail debe ser ingresado correctamente \n"
   }
  if(asunto=="" || asunto=="Asunto"){
    m++
    aler+="Debes digitar un asunto \n"
    }    
  if(mensaje=="" || mensaje=="Mensaje"){
    m++
    aler+="Debes dejar un mensaje\n"
    }
    if(m!="0"){
    
    alert(aler);
  
    }else{

    document.contactoform.submit();
      }
}
  }
  
 
</script>
<?php include('commonLibs.php');?>
    
</head>

<body>
<?php include('header.php')?>

<div class="internasWrapper">
  	<div class="contLeft">
    	<div class="tituloLine">CONTACTENOS</div>
        <div class="t">
        	<strong>Tel&eacute;fonos:</strong> <br>
			(57) (1) 678 89 87<br>
			310 678 89 87<br>
			310 456 78 43<br><br>
			<strong>Direcci&oacute;n:</strong><br>
			Cll 123 # 43 - 12, Oficina 3012<br><br>
			<strong>Email:</strong><br>
			FIC@fic.com<br><br>
			<strong>Website:</strong><br>
			www.fic.com<br><br>
        </div>
    </div>
    <div class="contRight">
    	<form method="POST" name="contactoform" id="contactoform" action="includes/enviar.php">
        	<input type="text" class="hint" value="Nombre" name="nombre" title="Nombre"  />
        	<input type="text" class="hint" value="E-mail" name="email" title="E-mail"  />
        	<input type="text" class="hint" value="Asunto" name="asunto" title="Asunto"  />
          <textarea class="hint" name="mensaje" title="Mensaje">Mensaje</textarea>
            <input name="" type="button" onClick="validar()" value="Enviar">
            <input type="hidden" name="MM_insert" value="contactoform">
    	</form>
        </form>
    </div>
    <div class="clear"></div>
</div>

<?php include('footer.php')?>
<?php if (isset($_GET['envio2'])){ ?>
<script>
alert('Mensaje enviado correctamente')
</script>
<?php }?>
</body>
</html>
