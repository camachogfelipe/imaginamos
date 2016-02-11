<?php 

 session_start();

 if(!isset($_SESSION['admin']) ){
  header("location: ./index.php");
  exit;
 }
 require_once '../php/clases.php';

 //Objetos de base de datos
 $claseDAO = new claseDAO();
 $sublineaDAO = new sublineaDAO();
 $lineaDAO = new lineaDAO();
 $productoDAO = new productoDAO();
 //Listado completo de productos
 $productos = $productoDAO->gets();

?>
<style type="text/css" title="currentStyle">
  @import "./datatable/media/css/jquery.dataTables_themeroller.css";
  @import "./datatable/media/css/jquery-ui-1.8.4.custom.css";

  tr{height: 30px;}

  .boton a{color: #FFF; text-decoration: none;}
  .boton a:visited{color: #FFF; text-decoration: none;}
  .boton a:active{color: #FFF;  text-decoration: none;}
  .boton a:hover{color: #FFF; text-decoration: none;}

</style>

<script type="text/javascript" language="javascript" src="./datatable/media/js/jquery.js"></script>
<script type="text/javascript" language="javascript" src="./datatable/media/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf-8">
  $(document).ready(function() {
    $('#table').dataTable( {
      "sScrollY": 318,
      "bJQueryUI": true,
      "sPaginationType": "full_numbers"
    });
  });
</script>
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
   Administración de Productos.
  </div>
 </div>
 <div class="subcontenido2">
  <div id="dashboard" role="dashboard">
   <div id="consultas">
    <div id="toolbar">
     <div class="boton">
      <a href="menuAdmin.php?s=nwProducto">Nuevo Producto</a>
     </div>
    </div>
    <div id="txtHint">
     <table class="display" id="table">
      <thead>
       <th>Clase</th>
       <th>Codigo</th>
       <th>Nombre</th>
       <th>Linea</th>
       <th>Sublinea</th>
       <th>&nbsp;</th>
      </thead>
      <tbody>

       <?php foreach ($productos as $producto): 

        //Llamado de Clase
        $clase = $claseDAO->getById($producto->getClase_id());
        //Llamado de Sublinea
        $sublinea = $sublineaDAO->getById($producto->getSublinea_id());
        //Llado de Linea
        $linea = $lineaDAO->getById($sublinea->getLineaId());

       ?>

       <tr>
        <td><?php echo $clase->getnombre_e() ?><br /></td>
        <td><?php echo $producto->getProducto_codigo() ?><br /></td>
        <td><?php echo $producto->getProducto_nombre() ?><br /></td>
        <td><?php echo $linea->getnombre_e() ?><br /></td>
        <td><?php echo $sublinea->getnombre_e() ?><br /></td>
        <td><a href="menuAdmin.php?s=viewProducto&id=<?php echo $producto->getProducto_codigo() ?>" target="_blank">Ver</a><br /></td>
       </tr>
       
       <?php endforeach ?>
      
      </tbody>
     </table>
    </div>
   </div>
  </div>
 </div>
</div>
<!--Mensaje en caso de eliminar dato-->
<?php if ($_GET['delete']==1):?>
 <link rel="stylesheet" type="text/css" href="noty/css/jquery.noty.css"/>
 <script type="text/javascript" src="noty/js/jquery.noty.js"></script>
 <script>
  $('.ex1.alert').ready(function() {
   noty({"text":"Producto Eliminado Correctamente!","layout":"center","type":"alert","textAlign":"center","easing":"swing","animateOpen":{"height":"toggle"},"animateClose":{"height":"toggle"},"speed":"500","timeout":"5000","closable":true,"closeOnSelfClick":true});
  });
 </script>
<?php endif; ?>
<!--Mensaje en caso de presentarse un error-->
 <?php if ($_GET['error']==1):?>
 <link rel="stylesheet" type="text/css" href="noty/css/jquery.noty.css"/>
 <script type="text/javascript" src="noty/js/jquery.noty.js"></script>
 <script>
  $('.ex1.alert').ready(function() {
   noty({"text":"Este producto tiene ensambles asociados","layout":"center","type":"alert","textAlign":"center","easing":"swing","animateOpen":{"height":"toggle"},"animateClose":{"height":"toggle"},"speed":"500","timeout":"5000","closable":true,"closeOnSelfClick":true});
  });
  </script>
 <?php endif; ?>

 <div class="contenido_marco_inf"></div>
