<?php session_start();?>
<?php

require_once '../php/clases.php';

if( !isset($_SESSION['admin']) ){
    header("location: ./index.php");
    exit;
}

  $cotizacion_id = $_GET['id'];
  $cotizacionDAO = new cotizacionDAO();
  $cotizacion = new cotizacion();
  $cotizacion = $cotizacionDAO->getById($cotizacion_id);



  $cliente_id = $cotizacion->getClienteId();
  $clienteDAO = new clienteDAO();
  $cliente = new cliente();
  $cliente = $clienteDAO->getByClienteId($cliente_id);

  $estado_id = $cotizacion->getEstadoId();

  $productoscotizacionesDAO = new productoscotizacionesDAO();
  $productoscotizaciones = new productoscotizaciones();
  $productoscotizaciones = $productoscotizacionesDAO->getByCotizacion($cotizacion_id);

?>



<!doctype html>
<head>
  <title>.::Clases</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="Adición de Clases">
  <meta name="author" content="@James_Garciap">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/modules.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="noty/css/jquery.noty.css"/>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
 
</head>
<body>
<!--Titulos-->
<div class="titulos">
    <div class="titulos_texto1">Cotización
      <div class="cerrar">
        <a href="../php/action/logout.php">
          <img src="imagenes/contenido/cerrar.png" alt="Cerrar Sesi&oacute;n" border="0" />
        </a>
      </div>
    </div>
</div>
<!--Fin Titulos-->
<div class="contenido_marco_sup"></div>
<div class="contenido_fondo">
  <div class="subcontenido">

    <div class="subtitulos">
        Detalle de Cotización.
    </div>  

  </div>
  <div class="subcontenido2">

  <div id="container" style="background-color:#FFF;">
      
<div class="right">
<table>
  <tr>
    <td class="title">Consecutivo:</td>
    <td><?php echo $cotizacion->getId() ?></td>
  </tr>
  <tr>
    <td class="title">Cliente:</td>
    <td><?php echo $cliente->getNombre()." ".$cliente->getApellido() ?></td>
  </tr>
  <tr>
    <td class="title">Empresa:</td>
    <td><?php echo $cliente->getEmpresa() ?></td>
  </tr>
  <tr>
    <td class="title">Cargo:</td>
    <td><?php echo $cliente->getCargo() ?></td>
  </tr>
  <tr>
    <td class="title">E-mail:</td>
    <td><?php echo $cliente->getEmail() ?></td>
  </tr>
  <tr>
    <td class="title">Teléfono Fijo:</td>
    <td><?php echo $cliente->getTelFijo() ?></td>
  </tr>
  <tr>
    <td class="title">Teléfono Celular:</td>
    <td><?php echo $cliente->getTelCel() ?></td>
  </tr>  
  <tr>
    <td class="title">Dirección:</td>
    <td><?php echo $cliente->getDireccion() ?></td>


  </tr>  
  <tr>
    <td class="title">País (Ciudad): </td>
    <td><?php echo $cliente->getPais()."(".$cliente->getCiudadId().")" ?></td>
  </tr>


  <tr>
    <td class="title">Fecha de Solicitud:</td>
    <td><?php echo $cotizacion->getFechaSolicitud() ?></td>
  </tr>
  <tr>
    <td class="title">Estado:</td>
                
                <?php 
                  switch ($estado_id) {
                    
                    case '1':
                      $estadoNombre="Abierto";
                      $color = "red";
                      break;
                    
                    case '2':
                      $estadoNombre="Cerrado";
                      $color = "green";
                      break;
                    
                    case '3':
                      $estadoNombre="En proceso";
                      $color = "blue";
                      break;
                    

                  }
                 ?>                    
                <td style="color:<?php echo $color ?>;"><?php echo $estadoNombre ?><br /></td>

  </tr>
  <tr>
    <td class="title">Fecha de Respuesta:</td>
    <td><?php echo $cotizacion->getFechaRespuesta() ?></td>
  </tr>
  <tr>
    <td class="title">Obsevaciones:</td>
    <td><?php echo $cotizacion->getObservacion() ?></td>
  </tr>
</table>

<table>
  <tr>
    <td class="title">Producto</td>
    <td class="title">Cantidad</td>
  </tr>
  <?php foreach ($productoscotizaciones as $item): ?>
  <tr>
    <td><?php echo $item->getProductoCodigo() ?></td>
    <td><?php echo $item->getCantidadProducto() ?></td>
  </tr>
  <?php endforeach ?>
</table>


          <button type="button" onclick="location.href='menuAdmin.php?s=editCotizacion&id=<?php echo $cotizacion->getId() ?>'">Editar</button>
          <button type="button" class="red" onclick="location.href='./../php/action/cotizacionDelete.php?id=<?php echo $cotizacion->getId() ?>'">Eliminar</button>
          
</div>

<?php if ($_GET['edit']==1):?>


  <script type="text/javascript" src="noty/js/jquery.noty.js"></script>


    <script>

        $('.ex1.alert').ready(function() {
           noty({"text":"Cotización Editada Correctamente!","layout":"center","type":"alert","textAlign":"center","easing":"swing","animateOpen":{"height":"toggle"},"animateClose":{"height":"toggle"},"speed":"500","timeout":"5000","closable":true,"closeOnSelfClick":true});
        });
    </script>


<?php endif; ?>
    
  </div>
  </div>
</div>
<div class="contenido_marco_inf"></div>
</body>
</html>