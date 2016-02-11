<?php session_start();?>
<?php

require_once '../php/clases.php';

if( !isset($_SESSION['admin']) ){
    header("location: ./index.php");
    exit;
}


    $id = $_GET['id'];
    $ensambleDAO = new ensambleDAO();
    $ensamble = new ensamble();
    $ensamble = $ensambleDAO->getById($id);


    $base = $ensamble->getBase();
    $complemento = $ensamble->getComplemento();

    $productoDAO = new productoDAO();
    $productoBase = new producto();
    $productoBase = $productoDAO->getById($base);
    //var_dump($productoBase);

    $productoComplemento = new producto();
    $productoComplemento = $productoDAO->getById($complemento);
 

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
    <div class="titulos_texto1">Productos
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
        Detalle del Ensamble.
    </div>  

  </div>
  <div class="subcontenido2">

  <div id="container" style="background-color:#FFF;">
      
<div class="right">
<table>

  <tr>
    <td class="title">Código Base:</td>
    <td><?php echo $productoBase->getProducto_codigo() ?></td>
  </tr>
  <tr>
    <td class="title">Nombre Producto Base:</td>
    <td><?php echo $productoBase->getProducto_nombre() ?></td>
  </tr>
  <tr>
    <td class="title">Descripción Producto Base:</td>
    <td><?php echo $productoBase->getProducto_descripcion() ?></td>
  </tr>
  <tr>
    <td class="title">Imagen Producto Base: </td>
    <td>
    <img id="img_02" src="./..<?php echo $productoBase->getProducto_imagen() ?>" width="160" />
    </td>
  </tr>
</table>
<p></p>
<table>

  <tr>
    <td class="title">Código Complemento:</td>
    <td><?php echo $productoComplemento->getProducto_codigo() ?></td>
  </tr>
  <tr>
    <td class="title">Nombre Producto Complemento:</td>
    <td><?php echo $productoComplemento->getProducto_nombre() ?></td>
  </tr>
  <tr>
    <td class="title">Descripción Producto Complemento:</td>
    <td><?php echo $productoComplemento->getProducto_descripcion() ?></td>
  </tr>
  <tr>
    <td class="title">Imagen Producto Complemento: </td>
    <td>
    <img id="img_02" src="./..<?php echo $productoComplemento->getProducto_imagen() ?>" width="160" />
    </td>
  </tr>
</table>

<table>
    <td class="title">Imagen Ensamble: </td>
    <td>
    <img id="img_02" src="./..<?php echo $ensamble->getImagen() ?>" width="160" />
    </td>
  </tr>
</table>


     <button type="button" onclick="location.href='menuAdmin.php?s=editEnsamble&id=<?php echo $ensamble->getId() ?>'">Editar</button>
     <button type="button" class="red" onclick="location.href='./../php/action/ensambleDelete.php?id=<?php echo $ensamble->getId() ?>'">Eliminar</button>
          
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