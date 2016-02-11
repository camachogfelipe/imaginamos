<?PHP 
	require_once("includes/clase_parametros.php");
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
<meta name="Keywords" lang="es" content="palabras clave" />
<meta name="Description" lang="es" content="texto empresarial" />
<meta name="date" content="2011" />
<meta name="author" content="diseño web: imaginamos.com" />
<meta name="robots" content="All" />
<title>TeamGroup</title>



	<link rel="stylesheet" type="text/css" href="css/static.layout.css" media="screen" />
	<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="js/jquery.valid.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
  <script type="text/javascript">
  	$(document).ready(function(){
      $('.form_pedidos').validationEngine();
    });
  </script>


<link href="css/stylos_teamgroup.css" rel="stylesheet" type="text/css" />
<link href="fuentes/stylesheet.css" rel="stylesheet" type="text/css" />
</head>

<body>



<!-----------------------------------HEADER TEAM GROUP--------------------------------->

<div id="headlogmenu">
<div id="headlogmenu">
<div id="envmenuprincipal">
<div id="cajbarmenu">

<div id="bt1"><a href="index.php">INICIO</a></div>
<div id="bt2"><a href="nosotros.php">NOSOTROS</a></div>
<div id="bt3"><a href="soluciones.php">SOLUCIONES</a></div>
<div id="bt4"><a href="aliados.php">ALIADOS</a></div>
<div id="bt4"><a href="noticias.php">NOTICIAS</a></div>
<div id="bt5fijo"><a href="contactenos.php">CONTÁCTENOS</a></div>

</div>












<div id="envmenuregistro">

<iframe  height="57" src="redes.php" scrolling="no" frameborder="0" allowtransparency="yes" ></iframe>










</div>




</div>


<div id="logoteamgropu"><a href="index.php"><img src="images/logo.png" border="0" /></a></div>
</div>



</div>



</div>

<!-----------------------------------FIN HEADER TEAM GROUP--------------------------------->


<!-----------------------------------BANNER TEAM GROUP--------------------------------->
<!-----------------------------------FIN BANNER TEAM GROUP--------------------------------->
<!-----------------------------------CONTENIDOS TEAM GROUP-------------------------------------->
<div id="sepclear"></div>

<div id="sepclear2"></div>
<?PHP
$url_mapa = Parametros::getURLMapa();

?>



<div id="cajondestacados">

<div id="envcontentnosotros">
<div id="tituloseccion">CONTÁCTENOS</div>
<div id="sepclear2"></div>



<div id="txtbuscotrabajo">La comunicación con nuestros clientes es muy importante. Diigéncie complentamente este formulario para ponerse en contacto con nosotros.</div>

<div id="sepclear2"></div>



<div id="rowandmaps">


<div id="envsmaptg">
<?PHP echo trim($url_mapa[0]['mapa_enlace']); ?>	

</div>





<form class="form_pedidos" action="contactenos.php" method="post" id="formPedido" name="fvalida">
<div id="envsrowscampos">

<div id="rowidentificacamposhort">Nombre completo</div>
  
  <div id="rowcamposhort"><input id="nombrecontacto" type="text" name="nombre" class="transcamp2 validate[required]" data-validation-placeholder="nombre"/></div>
  
  <div id="rowidentificacamposhort">tELÉFONO</div>
    <div id="rowcamposhort">
      <input id="telcontacto" type="text" name="tel" class="transcamp2 validate[custom[phone]]" data-validation-placeholder="tel"/>
    </div>
    <div id="rowidentificacamposhort">CORREO ELECTRÓNICO</div>
	   <div id="rowcamposhort"><input id="emailcontacto" type="text" name="email" class="transcamp2 validate[custom[email]]" data-validation-placeholder="email"/></div>
	   
	   
	    <div id="rowidentificacamposhort">MENSAJE</div>
	     <div id="rowcampoareashort"><input id="msjcontacto" name="mensaje" type="text" class="transcampareacont"/></div>
	   
	   
      </div>
	  
</div>
<div id="sepclear"></div>
		
		<div id="sepclear"></div>
  
  
  
  <div id="rowtablalabores">
    <div id="sepclear"></div>
  </div>
  
    
  <div id="sepclear"></div>
 <div id="envrowmenuinfgc">
 
 <div id="btenviocontact"><a href="#" ><img src="images/btenviar.png" width="82" height="37" border="0" /></a></div>
 
 </div> 
 
 </form>
  
  
  
  
  
  <div id="sepclear"></div>
  
</div>

<div id="colmenulat">


<div id="sepclear4"></div>
<div id="menuv">

        <ul>

              <li><a href="foodservice.php">foodservice</a></li>

 <li><a href="consulting.php">consulting</a></li>

                <li><a href="gestion_humana.php">GESTIÓN HUMANA Y TALENTOS </a></li>      
        </ul>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</div>






  <div id="sepclear">
    
  </div>
</div>


<div id="sepclear"></div>
</div>


<!-----------------------------------FIN CONTENIDOS TEAM GROUP-------------------------------------->
<!----------------------------------FOOT TEAM GROUP------------------------------->
<div id="sepclear3"></div>

<div id="sombfoot"></div>
<div id="footteamgroup">
<div id="cajfooter">


<?php include "foot_teamgroup.php"; ?>



</div>



</div>

<!----------------------------------FIN FOOT TEAM GROUP------------------------------->

<script type="text/javascript">

	$(function() {
		
		
		$("#btenviocontact").click(function() {
				
				
				//alert("Envio la consulta");
				
				var control = 0;
				
				var valnom = $("#nombrecontacto").val().length;
				var valnom2 = $("#nombrecontacto").val();
				var tel = $("#telcontacto").val().length;
				var tel2 = $("#telcontacto").val();				
				var email = $("#emailcontacto").val().length;
				var email2 = $("#emailcontacto").val();				
				var msj = $("#msjcontacto").val().length;
				var msj2 = $("#msjcontacto").val();
				
				
				
				if(valnom == 0){
					alert("Tiene que escribir su nombre");
					control = 1;
				}
				
				if(tel == 0){
					alert("Tiene que escribir su teléfono");
					control = 1;
				}
				
				if (!isNumber(tel2)) 
				{
					alert("El número de teléfono debe ser numérico");
					control = 1;
				}
				
				if(email == 0){
					alert("Tiene que escribir un correo");
					control = 1;
				}else if(!valEmail(email2)){
				  alert("la direccion de correo no es correcta");
				  control = 1;
				}
				
				if(msj == 0){
					alert("Tiene que escribir un mensaje");
					control = 1;
				}
				
				if(control == 0){
				
					$.get('enviarcontacto.php', { nombre: valnom2, tel: tel2, email: email2, msj: msj2 } , function(resultado) { 
						alert(resultado);
						
					});
				}
				
				
				/*
				else if(!valEmail(email2)){
				  alert("la direccion de correo no es correcta");
				  control = 1;
				}
				*/
				
				function valEmail(mail){
				  re=/^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,3})$/
				  if(!re.exec(mail)){
					return false;
				  }else{
					return true;
				  }
				}
				
				
				function isNumber(n) {
				  return !isNaN(parseFloat(n)) && isFinite(n);
				}
				

				/*
				
				var nombre = $("#nombrecontacto").val();	
				var tel = $("#telcontacto").val();	
				var email = $("#emailcontacto").val();	
				var msj = $("#msjcontacto").val();	

				if(nombre == "" OR tel == "" OR email == "" OR msj == ""){
					alert("Debe llenar todos los campos del formulario");
				}
				
				$.get('enviarcontacto.php', { nombre: nombre, tel: tel, email: email, msj: msj } , function(resultado) { 
					alert(resultado);
					
				});
				
				*/
				
		});
		
		
		
	});

</script>
<script>
/*
      function valida_envia(){
        
		//valido el nombre
        if (document.fvalida.nombre.value.length==0){
          alert("Tiene que escribir su nombre")
          document.fvalida.nombre.focus()
          return 0;
        }
    
        if (document.fvalida.direccion.value.length==0){
          alert("Tiene que escribir su dirección")
          document.fvalida.direccion.focus()
          return 0;
        }
    
        if (document.fvalida.cedula.value.length==0){
          alert("Tiene que escribir su cedula")
          document.fvalida.cedula.focus()
          return 0;
        }



        tel=document.fvalida.tel.value
        if (document.fvalida.tel.value.length==0){
          alert("Tiene que escribir su teléfono")
          document.fvalida.tel.focus()
          return 0;
        }else if(!isNumber(tel)){
          alert("El número de teléfono debe ser numérico");
          document.fvalida.tel.focus()
          return 0;
        }
     
     

        email=document.fvalida.email.value
        if (document.fvalida.email.value.length==0){
          alert("Tiene que escribir un correo")
          document.fvalida.email.focus()
          return 0;
        }else if(!valEmail(email)){
          alert("la direccion de correo no es correcta");
          document.fvalida.email.focus()
          return 0;
        }
        
        

        function valEmail(email){
          re=/^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,3})$/
          if(!re.exec(email))    {
            return false;
          }else{
            return true;
          }
        }
    
        function isNumber(n) {
          return !isNaN(parseFloat(n)) && isFinite(n);
        }
		
		
		
		

        //el formulario se envia
        alert("va enviar");
        document.fvalida.submit();
      }

*/
    </script>





</body>
</html>
