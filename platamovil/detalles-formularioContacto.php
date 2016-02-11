<?php
require_once 'ConexionBD.php';
$mensajeAlert = "";
if ( isset($_POST['btnEnvia']) && $_POST['btnEnvia']!='' ){
	if ( $_POST['num-cel'] == 'Nº Celular' )
		$_POST['num-cel'] = '';
	if ( $_POST['motivo'] != 'Solicitud de apertura de cuenta de ahorros Platamóvil' )
		$_POST['regimen'] = '';
	if ( $_POST['opinion'] == 'Comentario' )
		$_POST['opinion'] = '';


	$mensaje = "
	<table style=\"width: 80%; border: 1px solid #000000;\">
		<tr>
			<th style=\"text-align: left; width: 30%\">Nombre:</th>
			<td style=\"text-align: left;\">{$_POST['nombre']}</td>
		</tr>
		<tr>
			<th style=\"text-align: left; width: 30%\">Ciudad:</th>
			<td style=\"text-align: left;\">{$_POST['ciudad']}</td>
		</tr>
		<tr>
			<th style=\"text-align: left; width: 30%\">Correo:</th>
			<td style=\"text-align: left;\">{$_POST['correo']}</td>
		</tr>
		<tr>
			<th style=\"text-align: left;\">Tel&eacute;fono:</th>
			<td style=\"text-align: left;\">{$_POST['telefono']}</td>
		</tr>
		<tr>
			<th style=\"text-align: left;\">Es Cliente?:</th>
			<td style=\"text-align: left;\">{$_POST['formulario']}</td>
		</tr>";
	if ( $_POST['formulario'] == 'si' ){
	$mensaje .= "
		<tr>
			<th style=\"text-align: left;\">Tipo de Documento:</th>
			<td style=\"text-align: left;\">{$_POST['tipoDocumento']}</td>
		</tr>
		<tr>
			<th style=\"text-align: left;\">Identificaci&oacute;n:</th>
			<td style=\"text-align: left;\">{$_POST['identificacion']}</td>
		</tr>
		<tr>
			<th style=\"text-align: left;\">Celular:</th>
			<td style=\"text-align: left;\">{$_POST['celular']}</td>
		</tr>";
	}
	$mensaje .= "
		<tr>
			<th style=\"text-align: left;\">Motivo:</th>
			<td style=\"text-align: left;\">{$_POST['motivo']}</td>
		</tr>";
	if ( $_POST['motivo'] == 'Solicitud de apertura de cuenta de ahorros Platamóvil' ){
	$mensaje .= "
		<tr>
			<th style=\"text-align: left;\">Regimen:</th>
			<td style=\"text-align: left;\">{$_POST['regimen']}</td>
		</tr>";
	}
	if ( $_POST['motivo'] == 'Aviso de pérdida del celular' ){
	$mensaje .= "
		<tr>
			<th style=\"text-align: left;\">Numero Cel:</th>
			<td style=\"text-align: left;\">{$_POST['num-cel']}</td>
		</tr>";
	}
	$mensaje .= "
		<tr>
			<th style=\"text-align: left;\">Opinion:</th>
			<td style=\"text-align: left;\">{$_POST['opinion']}</td>
		</tr>
	</table>";

	$to = 'servicioalcliente@platamovil.com';
	
	// Para enviar un correo HTML mail, la cabecera Content-type debe fijarse
	$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
	$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";

	// Cabeceras adicionales
	$cabeceras .= "To: Platamovil <$to>" . "\r\n";
	$cabeceras .= "From: Platamovil <$to>" . "\r\n";

	if ( mail($to, 'Nuevo contacto', $mensaje, $cabeceras) ){
		$conex = conexion();
		$sql = "INSERT INTO contacto (fecha, nombre, ciudad, correo, telefono, esCliente, tipoDocumento,
		identificacion, celular, motivo, regimen, numCel, opinion) VALUES ('".date('Y-m-d H:i:s')."', '".mysql_real_escape_string($_POST['nombre'], $conex)."',
		'".mysql_real_escape_string($_POST['ciudad'], $conex)."', '".mysql_real_escape_string($_POST['correo'], $conex)."',
		'".mysql_real_escape_string($_POST['telefono'], $conex)."', '".mysql_real_escape_string($_POST['formulario'], $conex)."',
		'".mysql_real_escape_string($_POST['tipoDocumento'], $conex)."', '".mysql_real_escape_string($_POST['identificacion'], $conex)."',
		'".mysql_real_escape_string($_POST['celular'], $conex)."', '".mysql_real_escape_string($_POST['motivo'], $conex)."',
		'".mysql_real_escape_string($_POST['regimen'], $conex)."', '".mysql_real_escape_string($_POST['num-cel'], $conex)."',
		'".mysql_real_escape_string($_POST['opinion'], $conex)."');";
		$result = mysql_query($sql, $conex);
		if (!$result) {
			$mensajeAlert = "<script language=\"javascript\" type=\"text/javascript\">alert('Error al ingresar contacto.');</script>";
		}
		else{
			$to = $_POST['correo'];
			$mensaje = "
Estimado Sr(a) {$_POST['nombre']}, gracias por haberse contactado con nosotros. Para nuestra Compañía es muy importante atender todos sus requerimientos, en el menor tiempo posible nos pondremos en contacto con Ud.
Reciba un cordial saludo,

Servicio al Cliente Mi Plata S.A.
Compañía de Financiamiento";
			// Para enviar un correo HTML mail, la cabecera Content-type debe fijarse
			$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
			$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";

			// Cabeceras adicionales
			$cabeceras .= "To: {$_POST['nombre']} <$to>" . "\r\n";
			$cabeceras .= "From: Platamovil <no-reply@platamovil.com>" . "\r\n";
			mail($to, 'Nuevo contacto', $mensaje, $cabeceras);

			$mensajeAlert = "<script language=\"javascript\" type=\"text/javascript\">alert('Gracias por habernos contactado, su solicitud será atendida lo más pronto posible por Servicio al Cliente');</script>";
		}
	}
}
?><!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>PLATAMÓVIL</title>

    <meta name="keywords" content="Palabras clave" />
    <meta name="description" content="Texto empresarial o descripción">
    <meta name="author" content="Diseño web: imaginamos.com">
    <meta name="robots" content="all" />
    <meta name="date" content="2012" />
	<link rel="shortcut icon" type="image/x-icon" href="imagenes/favicon.ico" />
	<link rel="shortcut icon" type="image/x-icon" href="imagenes/favicon.ico" />    
   <link href="css/idearama.css" rel="stylesheet" type="text/css">
     <!--menulateral-->
	<script type="text/javascript" src="js/jquery-1.7.2.js"></script>
	<script type="text/javascript" src="js/botones.js"></script>
	<script type="text/javascript" src="js/menu-2.js"></script>

     <!--JQUERY-->
    <script language="javascript" type="text/javascript" src="js/jquery.min.js"> </script>
     <!--LITE TABS from: http://nicolahibbert.com/lightweight-jquery-tab-plugin/-->
    <script language="javascript" type="text/javascript" src="js/litetabs.jquery.js"> </script>
    <link href="css/comercio.litetabs.css" rel="stylesheet" type="text/css">
    <!-- comercio -->
    <link href="css/detalles.css" rel="stylesheet" type="text/css">
    <!--header -->
    <link href="css/header.css" rel="stylesheet" type="text/css">
    <script language="javascript" type="text/javascript" src="js/header.js"> </script>
    <!--footer -->
    <link href="css/footer.css" rel="stylesheet" type="text/css">
    <!--menu -->
    <link href="css/menu.css" rel="stylesheet" type="text/css">
    <script language="javascript" type="text/javascript" src="js/menu.js"> </script>
    <script language="javascript" type="text/javascript" src="js/formulario.js"> </script>
    <script language="javascript" type="text/javascript" src="js/detalles.js"> </script>

<script language="javascript" type="text/javascript">
function valmail(control, mensaje) {
	var campo = document.getElementById(control);
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if (filter.test(campo.value) || campo.value == '') {
		return true;
	} else {
		alert(mensaje);
		campo.value = "";
		campo.focus();
		return false;
	}
}

function validarNumero(control, mensaje) {
	if ( isNaN( $('#' + control).val() ) ) {
		alert(mensaje);
		$('#' + control).val('');
		$('#' + control).focus()
		return false;
	}
	return true;
}

function validarSelec(control, mensaje) {
	if ( $('#' + control).val() == "N") {
		alert(mensaje);
		$('#' + control).focus()
		return false;
	}
	return true;
}

function validarTextoDefecto(control, mensaje, defecto) {
	if ( $('#' + control).val() == "" || $('#' + control).val() == defecto) {
		alert(mensaje);
		$('#' + control).focus()
		return false;
	}
	return true;
}

function validarTexto(control, mensaje) {
	if ( $('#' + control).val() == "") {
		alert(mensaje);
		$('#' + control).focus()
		return false;
	}
	return true;
}

function validarRadio(control, mensaje) {
	var exito = false;
	var ultimo;
	$('input[id='+control+']:radio').each(function(){
		if ( $(this).is(':checked') == true ){
			return exito = true;
		}
		ultimo = $(this);
	});

	if ( exito == false ){
		alert(mensaje);
		ultimo.focus();
		return exito = false;
	}

	return exito;
}


function validaEnvia(){
	if ( !validarTexto('nombre', 'Por favor digite el nombre.') ) return false;
	if ( !validarSelec('ciudad', 'Por favor seleccione la ciudad.') ) return false;
	if ( !validarTexto('telefono', 'Por favor digite el telefono.') ) return false;
	if ( !validarTexto('correo', 'Por favor digite el correo.') ) return false;
	if ( !valmail('correo', 'Formato de correo invalido.') ) return false;
	if ( !validarTextoDefecto('opinion', 'Por favor digite el comentario.', 'Comentario') ) return false;

	return true;
}
</script>
<script type="text/javascript">
			function Borrar(valor)
			{
				if(document.getElementById('correo').value==valor)
				{
					document.getElementById('correo').value="";
				}
			}
			
			function Escribir(valor)
			{
				if(document.getElementById('correo').value=="")
				{
					document.getElementById('correo').value=valor;
				}
				
			}
			function Borrar2(valor)
			{
				if(document.getElementById('telefono').value==valor)
				{
					document.getElementById('telefono').value="";
				}
			}
			
			function Escribir2(valor)
			{
				if(document.getElementById('telefono').value=="")
				{
					document.getElementById('telefono').value=valor;
				}
				
			}
			
			function Borrar3(valor)
			{
				if(document.getElementById('nombre').value==valor)
				{
					document.getElementById('nombre').value="";
				}
			}
			
			function Escribir3(valor)
			{
				if(document.getElementById('nombre').value=="")
				{
					document.getElementById('nombre').value=valor;
				}
				
			}
			
			function Borrar4(valor)
			{
				if(document.getElementById('identificacion').value==valor)
				{
					document.getElementById('identificacion').value="";
				}
			}
			
			function Escribir4(valor)
			{
				if(document.getElementById('identificacion').value=="")
				{
					document.getElementById('identificacion').value=valor;
				}
				
			}
			
			function Borrar5(valor)
			{
				if(document.getElementById('celular').value==valor)
				{
					document.getElementById('celular').value="";
				}
			}
			
			function Escribir5(valor)
			{
				if(document.getElementById('celular').value=="")
				{
					document.getElementById('celular').value=valor;
				}
				
			}
</script>
<?=$mensajeAlert?>
</head>

<body>

<?php include ('header.php'); ?>
<?php include ('menu.php'); ?>

<div class="detallesWrapper">
	<div class="migasVolverBox">
    	<div class="migasWrapper">
        	<div class="migasLeft"></div>
        	<div class="migasCenter"><a class="migaslink" href="<?php echo selecionOrigen() . '.php?v='.selecionOrigen(); ?>" id="seccion"><?php if (selecionOrigen()== 'index'){ echo 'Home';}else{echo  ucwords(selecionOrigen());} ; ?></a><span class="arrow"></span><a class="migaslinkS" >Contacto Web</a></div>
        	<div class="migasRight"></div>
        </div>
        <div class="volverBtnBox">
        	<a class="volverBtn" href="<?php echo selecionOrigen() . '.php?v='.selecionOrigen(). '&t1='. t1() . '&t2='.t2(); ?>"></a>
        </div>
    </div>

    <div class="mainContetBoxLeft" style="width:100%">
   	  <div class="tituloWrapper">
        	<div class="icono"><img src="imagenes/iconDetalles.png" width="77" height="78" /></div>
            <div class="titulo"><strong>Contacto</strong><br />Web</div>
       </div>
       <div class="textosBox"><span class="letraAzul"> A continuación estará disponible un formulario de contacto en el cuál usted podrá enviarnos la información que usted desee.</span><br />
<br />
 Y también puede escribirnos al correo electrónico <a class="inlineLink" a href="mailto:servicioalcliente@platamovil.com">servicioalcliente@platamovil.com</a> para presentarnos toda la información que usted desea que conozcamos, este canal es apropiado si necesita adjuntar información en archivos electrónicos. <br />
<br />


       <div class="detalles-form" style="width:400px; margin:0 auto">
        	<div class="detalles-form-tit">Formulario de contacto Platamóvil</div>
            <div class="detalles-cam-ob"><span class="est">*</span>Campos obligatorios</div>
        	<form id="formContacto" name="formContacto" action="" method="post" onsubmit="if ( validaEnvia() == false ) { return false; }">

				<span><span class="est">*</span>Nombre y Apellidos</span><br> <input type="text" name="nombre" id="nombre" size="25"  value="Nombre y Apellido" onfocus="Borrar3('Nombre y Apellido')" onblur="Escribir3('Nombre y Apellido')" ><br><br>

				<span><span class="est">*</span>Ciudad</span>
				<select name="ciudad" id="ciudad">
					<!-- <option value="+ST000">Bogotá D.C.</option>
					<option value="+ST001">Amazonas </option>
					<option value="+ST002">Antioquia </option>
					<option value="+ST003">Arauca </option>
					<option value="+ST004">Atlántico </option>
					<option value="+ST005">Bolivar </option>
					<option value="+ST006">Boyaca </option>
					<option value="+ST007">Caldas </option>
					<option value="+ST008">Caquetá </option>
					<option value="+ST009">Cauca </option>
					<option value="+ST010">Cesar </option>
					<option value="+ST011">Cundinamarca </option>
					<option value="+ST012">Guainia </option>
					<option value="+ST013">Guajira </option>
					<option value="+ST014">Huila </option>
					<option value="+ST015">Magdalena </option>
					<option value="+ST016">Meta </option>
					<option value="+ST017">Nariño </option>
					<option value="+ST018">N. de Santander </option>
					<option value="+ST019">Risaralda </option>
					<option value="+ST020">S. Andrés y P. </option>
					<option value="+ST021">Santander </option>
					<option value="+ST022">Sucre </option>
					<option value="+ST023">Tolima </option>
					<option value="+ST024">Valle </option> -->
					<option value="Bogotá D.C.">Bogotá D.C.</option>
					<option value="Amazonas">Amazonas </option>
					<option value="Antioquia">Antioquia </option>
					<option value="Arauca">Arauca </option>
					<option value="Atlántico">Atlántico </option>
					<option value="Bolivar">Bolivar </option>
					<option value="Boyaca">Boyaca </option>
					<option value="Caldas">Caldas </option>
					<option value="Caquetá">Caquetá </option>
					<option value="Cauca">Cauca </option>
					<option value="Cesar">Cesar </option>
					<option value="Cundinamarca">Cundinamarca </option>
					<option value="Guainia">Guainia </option>
					<option value="Guajira">Guajira </option>
					<option value="Huila">Huila </option>
					<option value="Magdalena">Magdalena </option>
					<option value="Meta">Meta </option>
					<option value="Nariño">Nariño </option>
					<option value="N. de Santander">N. de Santander </option>
					<option value="Risaralda">Risaralda </option>
					<option value="S. Andrés y P.">S. Andrés y P. </option>
					<option value="Santander">Santander </option>
					<option value="Sucre">Sucre </option>
					<option value="Tolima">Tolima </option>
					<option value="Valle">Valle </option>
				</select><br><br>

				<span><span class="est">*</span>Teléfono de contacto</span>  <input type="text" name="telefono" id="telefono"  size="40" value="Telefono" onfocus="Borrar2('Telefono')" onblur="Escribir2('Telefono')" >  <br><br>

				<span><span class="est">*</span>Correo electrónico</span>  <input type="text"  name="correo" id="correo" size="40" value="Correo" onfocus="Borrar('Correo')" onblur="Escribir('Correo')" ><br><br>

				<div class="pregunta">
					<span>Es Ud cliente de Mi Plata S.A.?</span> <input type="radio" class="radius" name="formulario" id="formulario" value="si" onClick="mostrar()" checked="checked" />Si
					<input type="radio" class="radius" name="formulario" id="formulario" value="no" onClick="ocultar()"/>No
					<br><br>
				</div>

				<div id="cliente" >
					<span class="acotacion">Si Ud ya es cliente de Mi Plata S.A. por favor debe suministrar la siguiente información:</span><br><br>

					<span class="est">*</span>Tipo de documento de identificación:
					<select name="tipoDocumento" id="tipoDocumento">
						<option value="Cédula de Ciudadanía">Cédula de Ciudadanía</option>
						<option value="Cédula de Extranjería">Cédula de Extranjería</option>
						<option value="Pasaporte">Pasaporte</option>
						<option value="Otro">Otro</option>

					</select><br><br>
					<span class="est">*</span> Nº de documento  <input type="text" name="identificacion" id="identificacion" size="40" value="Documento" onfocus="Borrar4('Documento')" onblur="Escribir4('Documento')">  <br><br>
					<span class="est">*</span> Nº Celular  		<input type="text"  name="celular" id="celular" size="40"  value="Celular" onfocus="Borrar5('Celular')" onblur="Escribir5('Celular')"><br><br>
				</div>



				Motivo del Contacto:<br><br>

				<div class="tab-iz">Solicitud de apertura de cuenta de ahorros Platamóvil</div>
				<input type="radio" class="radius2" name="motivo" id="motivo" value="Solicitud de apertura de cuenta de ahorros Platamóvil" onClick="mostrar3()"> <br>

				<select name="regimen" id="regimen" style="display: none;">
					<option value="Simplificada">Simplificada</option>
					<option value="Típica Natural">Típica Natural</option>
					<option value="Típica Jurídica">Típica Jurídica</option>
				</select>


				<div class="tab-iz">Información sobre los productos </div>
                <input type="radio" class="radius2" name="motivo"  id="motivo" value="Información sobre los productos" onClick="ocultar2(); mostrar4(); "><br>
                <select name="infoProd" id="infoProd" style="display: none;">
					<option value="CATAS">CATAS</option>
					<option value="Típica">Típica</option>
					<option value="Jurídica">Jurídica</option>
				</select>

				<div class="tab-iz">Información sobre su cuenta 	</div>
                <input type="radio" class="radius2" name="motivo"  id="motivo" value="Información sobre su cuenta" onClick="ocultar2(); mostrar5(); "><br>
                <select name="infoCuenta" id="infoCuenta" style="display: none;">
					<option value="Saldo">Saldo</option>
					<option value="Movimientos">Movimientos</option>
					<option value="Costos">Costos</option>
					<option value="Condiciones">Condiciones</option>
				</select>

				<div class="tab-iz">Quejas o reclamos	</div>
                <input type="radio" class="radius2" name="motivo"  id="motivo" value="Quejas o Reclamos" onClick="ocultar2(); "> <br>

				<div class="tab-iz">Aviso de pérdida del celular   </div> <input type="radio" class="radius2" name="motivo"  id="motivo" value="Aviso de pérdida del celular" onClick="mostrar2(); ">
				<input type="text"  id="num-cel" value="Nº Celular" name="num-cel" size="40" ><br><br><br>

				Deje su comentario
                <textarea cols="40" rows="5" name="opinion" id="opinion"  class="comentarios"></textarea>
				<br><br>

				<table width="50%" border="0" align="center" cellpadding="10" cellspacing="0">
					<tr>
						<td><div align="center">
								<input type="submit" name="btnEnvia" id="btnEnvia" class="bot-env" value="Enviar">
							</div></td>
						<td><div align="center">
								<input type="Reset" name="btnBorra" id="btnBorra" class="bot-bor" value="Borrar">
							</div></td>
					</tr>
				</table>
			</form>
        </div>

       </div>
    </div>

</div>

<?php include ('footer.php'); ?>

</body>
</html>
