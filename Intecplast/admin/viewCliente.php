<?php session_start();?>
<?php

require_once '../php/clases.php';

if( !isset($_SESSION['admin']) ){
    header("location: ./index.php");
    exit;
}



  $cliente_id = $_GET['id'];

  $clienteDAO = new clienteDAO();
  $cliente = new cliente();
  $cliente = $clienteDAO->getByClienteId($cliente_id);

  $tipoid_cod = $cliente->getTipoid();
  $tipoidDAO = new tipoidDAO();
  $tipoid = new tipoid();
  $tipoid = $tipoidDAO->getById($tipoid_cod);




?>



<!doctype html>
<head>
  <title>.::Clientes</title>
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
    <div class="titulos_texto1">Clientes
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
        Detalle de Clientes.
    </div>  

  </div>
  <div class="subcontenido2">

  <div id="container" style="background-color:#FFF;">
      
<div class="right">
<table>

  <tr>
    <td class="title">Identificación:</td>
    <td><?php echo $cliente->getClienteId() ?></td>
  </tr>
  <tr>
    <td class="title">Tipo Identificación:</td>
    <td><?php echo $tipoid->getnombre() ?></td>
  </tr>
  <tr>
    <td class="title">Nombres:</td>
    <td><?php echo $cliente->getNombre() ?></td>
  </tr>
  <tr>
    <td class="title">Apellidos:</td>
    <td><?php echo $cliente->getApellido() ?></td>
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
    <td class="title">Teléfono Fijo:</td>
    <td><?php echo $cliente->getTelFijo() ?></td>
  </tr>
  <tr>
    <td class="title">Celular: </td>
    <td><?php echo $cliente->getTelCel() ?></td>
  </tr>
  <tr>
    <td class="title">Dirección: </td>
    <td><?php echo $cliente->getDireccion() ?></td>
  </tr>
  <tr>
    <td class="title">País (Ciudad): </td>
    <td><?php echo $cliente->getPais()."(".$cliente->getCiudadId().")" ?></td>
  </tr>
  <tr>
    <td class="title">Email: </td>
    <td><?php echo $cliente->getEmail() ?></td>
  </tr>
  <tr>
    <td class="title">Fecha de Registro:</td>
    <td><?php echo $cliente->getRegistro() ?></td>
  </tr>
</table>
          <!--<button type="button" onclick="location.href='menuAdmin.php?s=editProducto&id=<?php echo $cliente->getClienteId() ?>'">Editar</button>-->

          
</div>

<?php if ($_GET['edit']==1):?>


  <script type="text/javascript" src="noty/js/jquery.noty.js"></script>


    <script>

        $('.ex1.alert').ready(function() {
           noty({"text":"Producto Editado Correctamente!","layout":"center","type":"alert","textAlign":"center","easing":"swing","animateOpen":{"height":"toggle"},"animateClose":{"height":"toggle"},"speed":"500","timeout":"5000","closable":true,"closeOnSelfClick":true});
        });
    </script>


<?php endif; ?>
    
  </div>
  </div>
</div>
<div class="contenido_marco_inf"></div>
</body>
</html>