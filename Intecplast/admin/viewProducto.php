<?php 
  session_start();
  //Llamado de clases
  require_once '../php/clases.php';
  //Validación de sesión
  if( !isset($_SESSION['admin']) ){
    header("location: ./index.php");
    exit;
  }
  //Objetos de base de datos
  $productoDAO = new productoDAO();
  $claseDAO = new claseDAO();
  $sublineaDAO = new sublineaDAO();
  $lineaDAO = new lineaDAO();
  $materialDAO = new materialDAO();
  $formaDAO = new formaDAO();
  $unidadDAO = new unidadDAO();
  $bocaDAO = new bocaDAO();
  $atributoDAO = new atributoDAO();
  $linnerDAO = new linnerDAO();
  $tamanoDAO = new tamanoDAO();
  $colorDAO = new colorDAO();
  $faldaDAO = new faldaDAO();
  $capacidadDAO = new capacidadDAO();
  //Obtener producto
  $producto_codigo = $_GET['id'];
  $producto = $productoDAO->getById($producto_codigo);
  //Obtener atributos relacionales del producto
  $clase = $claseDAO->getById($producto->getClase_id());//Llamado de clase
  $sublinea = $sublineaDAO->getById($producto->getSublinea_id());//Llamado de sublinea
  $linea = $lineaDAO->getById($sublinea->getLineaId());//Llamado de linea
  $material = $materialDAO->getById($producto->getMaterial_id());//Llamado material
  $forma = $formaDAO->getById($producto->getForma_id());//Llamado de forma
  $unidadBoca = $unidadDAO->getById($producto->getProducto_unidadBoca());//Llamado unidad boca
  $boca = $bocaDAO->getById($producto->getBoca_id());//Llamado de boca
  $unidadCapacidad = $unidadDAO->getById($producto->getProducto_unidadCap());//Llamado unidad capacidad
  $atributo1 = $atributoDAO->getById($producto->getProducto_atributo1());//Llamado de atributo 1
  $atributo2 = $atributoDAO->getById($producto->getProducto_atributo2());//Llamado de atributo 2
  $linner = $linnerDAO->getById($producto->getLinner_id());//Llamado de linner
  $tamano = $tamanoDAO->getById($producto->getTamano_id());//Llamado de tamaño
  $color = $colorDAO->getById($producto->getColor_id());//Llamado de color
  $falda = $faldaDAO->getById($producto->getFalda_id());//Llamado de falda
  $capacidadActual = $capacidadDAO->getById($producto->getCapacidad_id());//Llamado de capacidad

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
        Detalle de Producto.
    </div>  

  </div>
  <div class="subcontenido2">

  <div id="container" style="background-color:#FFF;">
      
<div class="right">
<table>

  <tr>
    <td class="title">Código:</td>
    <td><?php echo $producto->getProducto_codigo() ?></td>
  </tr>
  <tr>
    <td class="title">Nombre:</td>
    <td><?php echo $producto->getProducto_nombre() ?></td>
  </tr>
  <tr>
    <td class="title">Descripción:</td>
    <td><?php echo $producto->getProducto_descripcion() ?></td>
  </tr>
  <tr>
    <td class="title">Clase:</td>
    <td><?php echo $clase->getnombre_e() ?></td>
  </tr>
  <tr>
    <td class="title">Linea:</td>
    <td><?php echo $linea->getnombre_e() ?></td>
  </tr>
  <tr>
    <td class="title">Sublinea:</td>
    <td><?php echo $sublinea->getnombre_e() ?></td>
  </tr>
  <tr>
    <td class="title">Atributo #1: </td>
    <td><?php echo $atributo1->getNombre_e() ?></td>
  </tr>
  <tr>
    <td class="title">Atributo #2: </td>
    <td><?php echo $atributo2->getNombre_e() ?></td>
  </tr>
  <tr>
    <td class="title">Boca: </td>
    <td><?php echo $boca->getBoca() ?></td>
  </tr>
  <tr>
    <td class="title">Rango de Capacidad: </td>
    <td><?php echo $capacidadActual->getCapacidad_rango() ?></td>
  </tr>
  <tr>
    <td class="title">Capacidad (<?php echo strtolower($unidadCapacidad->getnombre()) ?>): </td>
    <td><?php echo $producto->getProducto_capacidad() ?></td>
  </tr>
  <tr>
    <td class="title">Forma:</td>
    <td><?php echo $forma->getnombre_e() ?></td>
  </tr>
  <tr>
    <td class="title">Linner:</td>
    <td><?php echo $linner->getnombre_e() ?></td>
  </tr>
  <tr>
    <td class="title">Falda:</td>
    <td><?php echo $falda->getnombre_e() ?></td>
  </tr>
  <tr>
    <td class="title">Material:</td>
    <td><?php echo $material->getnombre_e() ?></td>
  </tr>
  <tr>
    <td class="title">Tamaño:</td>
    <td><?php echo $tamano->getnombre_e() ?></td>
  </tr>
  <tr>
    <td class="title">Color:</td>
    <td><?php echo $color->getnombre_e() ?></td>
  </tr>
  <tr>
    <td class="title">Entradas:</td>
    <td><?php echo $producto->getProducto_entradas() ?></td>
  </tr>
  <tr>
    <td class="title">Terminado:</td>
    <td><?php echo $producto->getProducto_terminado() ?></td>
  </tr>
  <tr>
    <td class="title">Cavidades:</td>
    <td><?php echo $producto->getProducto_cavidades() ?></td>
  </tr>
  <tr>
    <td class="title">Peso (g): </td>
    <td><?php echo $producto->getProducto_peso() ?></td>
  </tr>
  <tr>
    <td class="title">Anotación: </td>
    <td><?php echo $producto->getProducto_anotacion() ?></td>
  </tr>
  <tr>
    <td class="title">Imagen: </td>
    <td>
    <img id="img_02" src="./..<?php echo $producto->getProducto_imagen() ?>" width="260" />
    </td>
  </tr>
</table>
          <button type="button" onclick="location.href='menuAdmin.php?s=view_productosEjemplos&id=<?php echo $producto->getProducto_codigo() ?>'">Ejemplos</button>
          <button type="button" onclick="location.href='menuAdmin.php?s=editProducto&id=<?php echo $producto->getProducto_codigo() ?>'">Editar</button>
          <button type="button" class="red" onclick="location.href='./../php/action/productoDelete.php?id=<?php echo $producto->getProducto_codigo() ?>'">Eliminar</button>
          
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