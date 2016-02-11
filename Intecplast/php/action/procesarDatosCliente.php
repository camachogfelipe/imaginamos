<?php

/*
	@session_start();
	echo "<pre>";
	var_dump($_SESSION["ocarrito"]);
	echo "</pre>";
*/



include '../dao/daoConnection.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';
include '../dao/clienteDAO.php';
include '../entities/cliente.php';
include '../dao/cotizacionDAO.php';
include '../entities/cotizacion.php';

	date_default_timezone_set('America/Bogota');
	$date = getdate();



if ($_GET["action"]=="new") {

	$cliente_id = $_POST['identificacion'];
	$clienteDAO = new clienteDAO();
	$cliente = new cliente();
	$cliente = $clienteDAO->getByClienteId($cliente_id);

	if ($cliente!=NULL) {

		$pass = $cliente->getClave();

		if ($pass!="") {
			$location = "location: ./../../datos_contacto.php?error=1";

			header($location);
			exit;

		}
		
		$id = $cliente->getId();
			

	}
	else {
		$cliente_id = $_POST['identificacion'];
		$tipoid_cod = $_POST['tipoid'];
		$cliente_nombre = $_POST['nombre'];
		$cliente_apellidos = $_POST['apellido'];
		$cliente_empresa = $_POST['empresa'];
		$cliente_cargo = $_POST['cargo'];
		$cliente_telfijo = $_POST['telfijo'];
		$cliente_telcel = $_POST['telcel'];
		$cliente_direccion = $_POST['direccion'];
		$ciudad_id = $_POST['ciudad'];
		$cliente_email = $_POST['email'];
		$cliente_pass = $_POST['pass1'];
		$cliente_pass2 = $_POST['pass2'];
	  	$cliente_registro = ($date["year"]."-". $date["mon"]."-". $date["mday"]."");
		$cliente_newsletter = $_POST['newsletter'];
		$cliente_terminos = $_POST['terminos'];
		$cliente_newsletter =1;
		$cliente_idioma=1;
		$pais = $_POST['pais'];


		$location = "location: ./procesarDatosCliente.php?action=cotizacion";


		$clienteDAO = new clienteDAO();

		$cliente = new cliente();

		$cliente_nombre = accents2HTML($cliente_nombre);
		$cliente_apellidos = accents2HTML($cliente_apellidos);
		$cliente_empresa = accents2HTML($cliente_empresa);
		$cliente_cargo = accents2HTML($cliente_cargo);
		$cliente_telfijo = accents2HTML($cliente_telfijo);
		$cliente_telcel = accents2HTML($cliente_telcel);
		$cliente_direccion = accents2HTML($cliente_direccion);
		$cliente_email = accents2HTML($cliente_email);

		$cliente->setClienteId($cliente_id);
		$cliente->setTipoid($tipoid_cod);
		$cliente->setNombre($cliente_nombre);
		$cliente->setApellido($cliente_apellidos);
		$cliente->setEmpresa($cliente_empresa);
		$cliente->setCargo($cliente_cargo);
		$cliente->setTelFijo($cliente_telfijo);
		$cliente->setTelCel($cliente_telcel);
		$cliente->setDireccion($cliente_direccion);
		$cliente->setCiudadId($ciudad_id);
		$cliente->setEmail($cliente_email);
		$cliente->setClave($cliente_pass);
		$cliente->setRegistro($cliente_registro);
		$cliente->setNewsletter($cliente_newsletter);
		$cliente->setIdioma($cliente_idioma);
		$cliente->setPais($pais);

		$clienteDAO->save($cliente);

		$id = $clienteDAO->getLastId();

	}
	

	$location = "location: ./procesarDatosCliente.php?action=cotizacion&cliente=";

	header($location.$id);
	exit;

}


if ($_GET["action"]=="registrado") {

	$id=$_POST["identificacion2"];
	$pass=$_POST['pass'];

	$clienteDAO = new clienteDAO();
	$cliente = new cliente();
	$cliente = $clienteDAO->getByClienteId($id);

	if ($cliente!=NULL) {

		$clave = $cliente->getClave();

		if ($clave==$pass) {

			/*
			$cotizacionDAO = new cotizacionDAO();
			$cotizacion = new cotizacion();

		 	$fechaSolicitud = ($date["year"]."-". $date["mon"]."-". $date["mday"]."");

			$cotizacion->setId($cotizacion_id);
			$cotizacion->setClienteId($id);
			$cotizacion->setFechaSolicitud($fechaSolicitud);
			$cotizacion->setFechaRespuesta("0000-00-00");
			$cotizacion->setEstadoId("1");
			$cotizacion->setObservacion("");
			
			$cotizacionDAO->save($cotizacion);

			$cotizacion_id = $cotizacionDAO->getLastId();

			$location = "location: ./../../addProductosCotizacion.php?action=addproductos&cotizacion=";
*/
			$location = "location: ./../../detalleCliente.php?id=".$id;
			header($location);
			exit;
			
		}
		else{
			$location = "location: ./../../datos_contacto.php?error=3";

			header($location);
			exit;			

		}


	}

	else{
		$location = "location: ./../../datos_contacto.php?error=2";

		header($location);
		exit;

	}

}




if ($_GET["action"]=="cotizacion") {

	$id=$_GET["cliente"];


	$clienteDAO = new clienteDAO();
	$cliente = new cliente();
	$cliente = $clienteDAO->getById($id);

	$cliente_id = $cliente->getClienteId();
	
	$cotizacionDAO = new cotizacionDAO();
	$cotizacion = new cotizacion();

 	$fechaSolicitud = ($date["year"]."-". $date["mon"]."-". $date["mday"]."");

	$cotizacion->setId($cotizacion_id);
	$cotizacion->setClienteId($cliente_id);
	$cotizacion->setFechaSolicitud($fechaSolicitud);
	$cotizacion->setFechaRespuesta("0000-00-00");
	$cotizacion->setEstadoId("1");
	$cotizacion->setObservacion("");
	
	$cotizacionDAO->save($cotizacion);

	$para  = 'servicio_cliente@intecplast.com.co' . ', '; 
	$para .= 'james.garcia@imaginamos.com.co';

	// subject
	$titulo = 'Nueva Cotización';

	$msg.="<html>";
	$msg.="<head>";
	$msg.="</head>";
	$msg.="<body>";
	$msg.="<h3>Se ha registrado una nueva solicitud de cotización a desde el portal Web:</h3>";
	$msg.="</html>";

	// Para enviar un correo HTML mail, la cabecera Content-type debe fijarse
	$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
	$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	// Cabeceras adicionales
	$cabeceras .= 'From: Intecplast Web <servicio_cliente@intecplast.com.co>' . "\r\n";


	// Mail it
	mail($para, $titulo, $msg, $cabeceras);


	$cotizacion_id = $cotizacionDAO->getLastId();

	$location = "location: ./../../addProductosCotizacion.php?action=addproductos&cotizacion=";

	header($location.$cotizacion_id);
	exit;

}
?>