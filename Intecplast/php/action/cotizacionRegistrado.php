<?php

include '../dao/daoConnection.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';
include '../dao/clienteDAO.php';
include '../entities/cliente.php';
include '../dao/cotizacionDAO.php';
include '../entities/cotizacion.php';

	date_default_timezone_set('America/Bogota');
	$date = getdate();

	$id=$_POST["identificacion"];
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
	$pais = $_POST['pais'];


	$clienteDAO = new clienteDAO();
	$cliente = new cliente();
	$cliente = $clienteDAO->getByClienteId($id);

	$cliente_nombre = accents2HTML($cliente_nombre);
	$cliente_apellidos = accents2HTML($cliente_apellidos);
	$cliente_empresa = accents2HTML($cliente_empresa);
	$cliente_cargo = accents2HTML($cliente_cargo);
	$cliente_telfijo = accents2HTML($cliente_telfijo);
	$cliente_telcel = accents2HTML($cliente_telcel);
	$cliente_direccion = accents2HTML($cliente_direccion);
	$cliente_email = accents2HTML($cliente_email);

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
	$cliente->setPais($pais);

	$clienteDAO->update($cliente);

	
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

	$location = "location: ./../../addProductosCotizacion.php?action=addproductos&cotizacion=".$cotizacion_id;

	header($location);
	exit;
	


?>