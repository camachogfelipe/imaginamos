<?PHP
require_once("includes/clase_parametros.php");
$msjcompro = "";

if (isset($_POST["nombre"]) && $_POST["nombre"] != "") {

//echo"Se esta procesando el formulario...";

	$otraprofe ="";

	$nombre = $_POST["nombre"];
	$apellido = $_POST["apellido"];
	$cedula = $_POST["cedula"];
	$fechanac = $_POST["fechanac"];
	$email = $_POST["email"];
	$telefono = $_POST["telefono"];
	$celular = $_POST["celular"];
	$profesional = $_POST["profesional"];
	$profesion = $_POST["profesion"];
	$otraprofe = $_POST["otraprofe"];
	$experiencia = $_POST["experiencia"];
	$comentario = $_POST["comentario"];
	
	$nombre = htmlentities($nombre);
	$apellido = htmlentities($apellido);
	$comentario = htmlentities($comentario);
	
	
	if($profesional == 1){
		$txtprofesional = "Si";
	}else{
		$txtprofesional = "No";
	}
	
	$datos3 = Parametros::getInfoProfesiones($profesion);
	$txtprofesion = trim($datos3[0]['buscar_catpro_nombre']);
	
	$datos4 = Parametros::getInfoProfesiones($experiencia);
	$txtexperiencia = trim($datos4[0]['buscar_catexp_nombre']);


$uploaddir = 'uploads/';
$uploadfile = $uploaddir . basename($_FILES['hojav']['name']);


if (move_uploaded_file($_FILES['hojav']['tmp_name'], $uploadfile)) {
    //echo "El archivo es válido y fue cargado exitosamente.\n";
} else {
    //echo "¡No se pudo cargar el archivos!\n";
}

//echo 'Aquí hay más información de depurado:';
//print_r($_FILES);



	$sAsunto = "Mensaje Busca Trabajo TOPTEAM";
	
	$sTexto = '
<html>
<head>
  <title>Mensaje Busco Trabajo</title>
</head>
<body>
  <table>
    <tr>
      <td>Nombre y apellidos:</td><td>'.$nombre.' '.$apellido.'</td>
    </tr>
	<tr>
      <td>C&ecute;dula:</td><td>'.$cedula.'</td>
    </tr>
	<tr>
      <td>Fecha de nacimiento:</td><td>'.$fechanac.'</td>
    </tr>
	<tr>
      <td>Correo:</td><td>'.$email.'</td>
    </tr>
	<tr>
      <td>Tel&eacute;fono:</td><td>'.$telefono.'</td>
    </tr>
	<tr>
      <td>Celular:</td><td>'.$celular.'</td>
    </tr>
	
	<tr>
      <td>Profesional:</td><td>'.$txtprofesional.'</td>
    </tr>
	<tr>
      <td>Profesi&oacute;n:</td><td>'.$txtprofesion.'</td>
    </tr>
	<tr>
      <td>Otra profesi&oacute;n:</td><td>'.$otraprofe.'</td>
    </tr>
	<tr>
      <td>Experiencia:</td><td>'.$txtexperiencia.'</td>
    </tr>
	
    <tr>
      <td>Comentario:</td><td>'.$comentario.'</td>
    </tr>
  </table>
</body>
</html>
';
	
	$bHayFicheros = 0;
	$sCabeceraTexto = "";
	$sAdjuntos = "";
	 
	$sCabeceras = "From: cms@imaginamos.com\n";

	$sCabeceras .= "MIME-version: 1.0\n";
	
	   
	

		$sCabeceras .= "Content-type: multipart/mixed;";
		$sCabeceras .= "boundary=\"--_Separador-de-mensajes_--\"\n";
		 
		$sCabeceraTexto = "----_Separador-de-mensajes_--\n";
		$sCabeceraTexto .= "Content-type: text/html;charset=iso-8859-1\n";
		$sCabeceraTexto .= "Content-transfer-encoding: 7BIT\n";
		 
		$sTexto = $sCabeceraTexto.$sTexto;
		
		if ($_FILES['hojav']['size'] > 0)
		{
			$sAdjuntos .= "\n\n----_Separador-de-mensajes_--\n";
			$sAdjuntos .= "Content-type: ".$_FILES['hojav']['type'].";name=\"".$_FILES['hojav']['name']."\"\n";;
			$sAdjuntos .= "Content-Transfer-Encoding: BASE64\n";
			$sAdjuntos .= "Content-disposition: attachment;filename=\"".$_FILES['hojav']['name']."\"\n\n";
			 
			$oFichero = fopen($_FILES['hojav']['tmp_name'], 'r');
			$sContenido = fread($oFichero, filesize($_FILES['hojav']['tmp_name']));
			$sAdjuntos .= chunk_split(base64_encode($sContenido));
			fclose($oFichero);
		}
	
	 
	
		$sTexto .= $sAdjuntos."\n\n----_Separador-de-mensajes_----\n";
	
	
	if(mail("info@topteamgroup.com", $sAsunto, $sTexto, $sCabeceras)){
		$msjcompro = "Su informaci&oacute;n ha sido enviada con exito";
	}else{
		$msjcompro = "Su informaci&oacute;n no pudo ser enviada";
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
	<link rel="stylesheet" type="text/css" href="css/base/jquery.ui.all.css" />
	<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="js/jquery.valid.js"></script>
	<script type="text/javascript" src="js/enhance.js"></script>
	<script type="text/javascript" src="js/jquery-ui-1.8.20.custom.min.js"></script>
	<script type="text/javascript" src="js/jquery.ui.datepicker-es.js"></script>
	
  <script type="text/javascript">
  	$(document).ready(function(event){
		
		
		$("input.adjunto").filestyle({ 
			image: "images/btsubriarchivo.png",
			imageheight: 29,
			imagewidth: 121,
			width: 358
		});
		
		
		$( "#datepicker" ).datepicker({
			  showOn: "button",
			  buttonImage: "images/iconcalendar.png",
			  buttonImageOnly: false
		});
	
	
		//$('.formBusTra').validationEngine();
		
	  
	    $("#btguardar").click(function() {
			jQuery("#formBusTra").validationEngine();
			//jQuery('#formBusTra').validationEngine('validate');
			
			if( $("#formBusTra").validationEngine('validate') ){
				$('#formBusTra').submit();
			}else{
			
			
			}
			
			
			
		});
		
		$("#btcancelar").click(function() {
			jQuery('#formBusTra').validationEngine('hide');
		});
		
		
	  
	  
	 });
  </script>

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
<?php include "redes.php"; ?>











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
<div id="tituloseccion">BUSCO TRABAJO </div>
<div id="sepclear2"></div>



<div id="txtbuscotrabajo">Regístrate en nuestra base de datos para tener acceso a nuestras vacantes laborales. Estas se basan en la información consignada en el formulario a continuación:</div>

<div id="sepclear2"></div>

<div id="tituloseccion"><?PHP echo $msjcompro; ?></div>
<div id="sepclear2"></div>

<div id="rowimgnosotros"><div id="imgnosot"><img src="images/look_forjob.png" width="739" height="305" /></div>
</div>

  
  <div id="sepclear"></div>
  
  <div id="sepclear"></div>
  
  <form class="formBusTra" id="formBusTra" method="post" enctype="multipart/form-data" action="busco_trabajo.php" accept-charset='UTF-8' >
  
<div id="rowidentificacampo">Nombres  </div>
  
  <div id="rowcampo1"><input id="nombre" name="nombre" type="text" class="transcamp1  validate[required]"  /></div>
  
  <div id="rowidentificacampo">Apellidos   </div>
  
  <div id="rowcampo1"><input id="apellido" name="apellido" type="text" class="transcamp1 validate[required]"  /></div>
  
  
  
  
  
  
  
  <div id="rowidentificacampo">CÉDULA DE CIUDADANÍA   </div>
    <div id="rowcampo2"><input id="cedula" name="cedula" type="text" class="transcamp2 validate[required,custom[cedula]]"  /></div>
	
	
	  <div id="rowidentificacampo">FECHA DE NACIMIENTO   </div>
	  
	  <div id="envrow3">
	  <div id="rowcampo3date">
	  
		<input id="datepicker" type="text" name="fechanac" class="transcamp3Date validate[required]"  id="DD / MM / AAA" onfocus="if (this.value=='DD / MM / AAA'){this.value='';};return false;" onblur="if (this.value==''){this.value='DD / MM / AAA';return false;}" value="DD / MM / AAA"  data-validation-placeholder="DD / MM / AAA" />
	  
	  
	  </div>
	  <div >&nbsp;</div> 	  
	  </div>
	  
	  
	   <div id="rowidentificacampo">CORREO ELECTRÓNICO</div>
	   <div id="rowcampo1"><input id="email" name="email" type="text" class="transcamp1 validate[required,custom[email]]"  /></div>
	   
	   
	    <div id="rowidentificabicampo">
	   
	   <div id="bicampoleft">TELÉFONO</div>
	   
	    <div id="bicamporight">CELULAR</div>
	    </div>
		
		<div id="envrowcampo4">
		
		<div id="rowcampo4left"><input id="tel" name="telefono" type="text" class="transcamp4 validate[required,custom[phone]]"  /></div>
		<div id="rowcampo4right"><input id="cel" name="celular" type="text" class="transcamp4 validate[required,custom[celular]]"   /></div>
		
		</div>
		<div id="sepclear"></div>
		<div id="rowidentificacampo">¿ES USTED PROFESIONAL? </div>
		<div id="envrowcheck">
		
		
		
		<div id="rowchecktxtimg">
		<div id="rowsitxtcheck">SI</div>
		
		<div id="rowsicheck"><div style="width: 28px; float: left;" class="noindent"><input type="radio" name="profesional" value="1" class="styled" checked /></div></div>
		</div>	
		
		
		
			<div id="rowchecktxtimg">
		<div id="rowsitxtcheck">NO</div>
		
		<div id="rowsicheck"><div style="width: 28px; float: left;" class="noindent"><input type="radio" name="profesional" value="2" class="styled" /></div></div>
		</div>	
		
		
		
		</div>
		
		
		
		<div id="sepclear"></div>
		
		<div id="rowidentificabicampo">
	   
	   <div id="bicampoleft">¿quÉ PROFESIÓN TIENE? </div>
	   
	    <div id="bicamporight">OTRA</div>
	    </div>
		
		<div id="envrowcampo4">
		
		<div id="rowselectleft">
			<div style="width: 362px; float: left;" class="noindent">
			<select id="profesion" name="profesion" class="styled">
				<?PHP

					$datos = Parametros::getProfesiones();
					
					if(is_array($datos) && !empty($datos)) {
				
						for($i = 0; $i < sizeof($datos); $i++) {
						
							?>	 
									<option value="<?PHP echo trim($datos[$i]['buscar_catpro_id']); ?>"><?PHP echo trim($datos[$i]['buscar_catpro_nombre']); ?></option>
							<?PHP
							
						}
					}
				?>
			
			
			  </select>
		</div>
		
		</div>
		<div id="rowcampo4right"><input name="otraprofe" type="text" class="transcamp4" /></div>
		
		</div>
		
		
		
  
  
 <div id="rowidentificabicampo">
	   
	   <div id="bicampoleft">TIEMPO DE EXPERIENCIA EN LA PROFESIÓN </div>
	   
	    <div id="bicamporight">&nbsp;</div>
    </div>
  
  
  
  

   <div id="envrowcampo4">
		
		<div id="rowselectleft">
			<div style="width: 362px; float: left;" class="noindent">
			<select id="experiencia" name="experiencia" class="styled">
				<?PHP

					$datos2 = Parametros::getExperiencia();
					
					if(is_array($datos2) && !empty($datos2)) {
				
						for($j = 0; $j < sizeof($datos2); $j++) {
						
							?>	 
									<option value="<?PHP echo trim($datos2[$j]['buscar_catexp_id']); ?>"><?PHP echo trim($datos2[$j]['buscar_catexp_nombre']); ?></option>
							<?PHP
							
						}
					}
				?>		
			  </select>
		</div>
		
		</div>
		<div id="rowselectright">
		
			&nbsp;
		
		
		</div>
		
	</div>
  
  
  
  
  
   <div id="sepclear"></div>
   <div id="rowidentificabicampo">
	   
	   <div id="bicampoleft">EnvÍenos su hoja de vida </div>
	   
	    <div id="bicamporight">&nbsp;</div>
    </div>
  
  <div id="envrowcampo4">
		
		<div id="rowselectleft">
			<div id="rowcampo4left"><input class="adjunto" id="hojav" name="hojav" type="file" /></div>
		
		</div>
		<div id="rowselectright">
		
		<div >&nbsp;</div>
		
		
		</div>
		
	</div>
		
		
		
		<div id="rowidentificacampolarge">COMENTARIOS:</div>
		
		<div id="rowcampoarealarge"><input id="comentario" name="comentario" type="text" class="transcamparealarge"/></div>
		
		
		
	<div id="rowidentificabicampo">
	   
	   <div id="bicampoleft"></div>
	   
	    <div id="bicamporight">&nbsp;</div>
    </div>	
		
		
		
		
 <div id="envrowmenuinfgc">
 
 <div id="rowmenuinfgc">
 <!-- <div id="btguardar"><a href="#nogo"></a></div> -->
 <!-- <div id="btcancelar"><a href="#nogo"></a></div> -->
	<div id="btguardar"><a href="#nogo" ></a></div>
	<div id="btcancelar"><a href="#nogo" ></a></div>
 
 </div>
 
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
