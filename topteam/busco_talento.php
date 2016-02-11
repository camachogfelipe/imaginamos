<?PHP

$verifica = "";


if (isset($_POST["nombre"]) && $_POST["nombre"] != "") {

	$nombre = $_POST["nombre"];
    $emp = $_POST["empresa"];
    $email = $_POST["email"];
    $tel = $_POST["telefono"];
    $msj = $_POST["mensaje"];
    
    $nombre = htmlentities($nombre);
	$emp = htmlentities($emp);
	$msj = htmlentities($msj);

	
    $para  = 'info@topteamgroup.com';
  
  $titulo = 'Mensaje Busco Talento TOPTEAM';

// message
$mensaje = '
<html>
<head>
  <title>Mensaje Busco Talento</title>
</head>
<body>
  <table>
    <tr>
      <td>Nombre:</td><td>'.$nombre.'</td>
    </tr>
	<tr>
      <td>Empresa:</td><td>'.$emp.'</td>
    </tr>
	<tr>
      <td>Tel&eacute;fono:</td><td>'.$tel.'</td>
    </tr>
	<tr>
      <td>Correo:</td><td>'.$email.'</td>
    </tr>
    <tr>
      <td>Mensaje:</td><td>'.$msj.'</td>
    </tr>
  </table>
</body>
</html>
';

// Para enviar un correo HTML mail, la cabecera Content-type debe fijarse
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
$cabeceras .= 'From: BuscarTalentoWEB <cms@imaginamos.com>' . "\r\n";
  
  if(mail($para, $titulo, $mensaje, $cabeceras)){
	$verifica = "Gracias, su mensaje fue enviado";
  }else{
	$verifica = "No se pudo enviar su mensaje";
  }
    
  
}

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
  <script type="text/javascript">
  	$(document).ready(function(event){
      $('.formDis').validationEngine();
	  
	    event.preventDefault();
		if( $(".formDis").validationEngine('validate') ){
				
			alert('formulario bien lleno');
				
					
					var valnom = $("#nombre").val();
					var emp = $("#empresa").val();
					var email = $("#email").val();
					var tel = $("#tel").val();				
					var msj = $("#msj").val();
					
					
					$.get('enviarbuscatal.php', { nombre: valnom, emp: emp, email: email, tel: tel, msj: msj } , function(resultado) { 
						alert(resultado);
						
					});
					
					
		}else{
			alert('formulario mal lleno');
		}
	  
	  
	  
    });
  </script>
  
 
  
  
  
<script type="text/javascript">

	$(function() {
		/*
		//alert('CARGANDO...');	
		
		$("#btbuscartal").click(function() {
		//$("#formBusTal").submit(function(event) {
		
		        alert('CARGANDO...');
				//event.preventDefault(); 
				
				var control = 0;
				
				var valnom = $("#nombre").val().length;
				var valnom2 = $("#nombre").val();
				var emp = $("#empresa").val().length;
				var emp2 = $("#empresa").val();
				var tel = $("#tel").val().length;
				var tel2 = $("#tel").val();				
				var email = $("#email").val().length;
				var email2 = $("#email").val();				
				var msj = $("#msj").val().length;
				var msj2 = $("#msj").val();
				
				
				
				if(valnom == 0){
					alert("Tiene que escribir su nombre");
					control = 1;
				}
				
				if(emp == 0){
					alert("Tiene que escribir el nombre de la empresa");
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
					alert("Todo verificado");
				
					$.get('enviarcontacto.php', { nombre: valnom2, tel: tel2, email: email2, msj: msj2 } , function(resultado) { 
						alert(resultado);
						
					});
					
				}
				
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
				
				
		});*/
		
		
	});

</script>
	
	<script type="text/javascript" src="js/scripts.js"></script>

<link href="css/stylos_teamgroup.css" rel="stylesheet" type="text/css" />
<link href="fuentes/stylesheet.css" rel="stylesheet" type="text/css" />
</head>

<body>



<!-----------------------------------HEADER TEAM GROUP--------------------------------->

<div id="headlogmenu">
<div id="envmenuprincipal">
<div id="cajbarmenu">

<div id="bt1"><a href="index.php">INICIO</a></div>
<div id="bt2"><a href="nosotros.php">NOSOTROS</a></div>
<div id="bt3"><a href="soluciones.php">SOLUCIONES</a></div>
<div id="bt4"><a href="aliados.php">ALIADOS</a></div>
<div id="bt4"><a href="noticias.php">NOTICIAS</a></div>
<div id="bt5"><a href="contactenos.php">CONTÁCTENOS</a></div>

</div>












<div id="envmenuregistro">







<iframe width="689" height="57" src="redes.php" scrolling="no" frameborder="0" allowtransparency="yes" ></iframe>




</div>




</div>

<div id="logoteamgropu"><a href="index.php"><img src="images/logo.png" border="0" /></a></div>

</div>



</div>

<!-----------------------------------FIN HEADER TEAM GROUP--------------------------------->


<!-----------------------------------BANNER TEAM GROUP--------------------------------->
<!-----------------------------------FIN BANNER TEAM GROUP--------------------------------->
<!-----------------------------------CONTENIDOS TEAM GROUP-------------------------------------->
<div id="sepclear"></div>

<div id="sepclear2"></div>


<div id="cajondestacados">

<div id="envcontentnosotros">
<div id="tituloseccion">BUSCO TALENTO </div>
<div id="sepclear2"></div>



<div id="txtbuscotrabajo">Diligencie el formulario a continuación de acuerdo a las característias de su búsqueda. Nosotros nos comunicaremos con usted a la mayor brevedad posible.</div>

<div id="sepclear2"></div>

<div id="tituloseccion"><?PHP echo $verifica; ?> </div>
<div id="sepclear2"></div>



<div id="rowimgnosotros"><div id="imgnosot"><img src="images/img_buscotalento.png" width="739" height="305" /></div>
</div>

  
  <div id="sepclear"></div>
  
  <div id="sepclear"></div>
  
	<form class="formDis" id="formBusTal" method="post" action="busco_talento.php" >
	
    <div id="rowidentificabicampo">
	   
	   <div id="bicampoleft">NOMBRE </div>
	   
	    <div id="bicamporight">EMPRESA</div>
    </div>
		
		<div id="envrowcampo4">
		
		<div id="rowcampo4left"><input id="nombre" name="nombre"  type="text"  class="transcamp4 validate[required]" data-validation-placeholder="nombre"  /></div>
		<div id="rowcampo4right"><input id="empresa" name="empresa"  type="text" class="transcamp4 validate[required]" data-validation-placeholder="empresa"   /></div>
		
		</div>
		<div id="sepclear"></div>
		
		<div id="sepclear"></div>
		
		<div id="rowidentificabicampo">
	   
	   <div id="bicampoleft">E-MAIL</div>
	   
	    <div id="bicamporight">TELÉFONO</div>
	    </div>
		<div id="envrowcampo4">
		
		<div id="rowcampo4left"><input id="email" name="email"  type="text" class="transcamp4 validate[custom[email]]" data-validation-placeholder="email" /></div><div id="rowcampo4right"><input id="tel"  name="telefono"  type="text" class="transcamp4 validate[custom[phone]]" data-validation-placeholder="telefono"  /></div>
		</div>
		<div id="sepclear"></div>
		<div id="rowidentificacampolarge">DESCRIPCIÓN DE LA BÚSQUEDA </div>
	     <div id="rowcampoarealarge"><input id="msj" name="mensaje" type="text" class="transcamparealarge"/></div>
       <div id="rowtablalabores">
    <div id="sepclear"></div>
  
  
  
  </div>
  

  
    
  <div id="sepclear"></div>
 <div id="envrowmenuinfgc">
 

<!-- <div id="btbuscartal"><a href="#"><img src="images/btbuscar.png" border="0" /></a></div> -->
 <div id="btbuscartal"><input title="" alt="" src="images/btbuscar.png" type="image" /></div>

 

 
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







</body>
</html>
