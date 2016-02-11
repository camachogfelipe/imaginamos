<?php session_start();?>
<?php
require_once '../php/clases.php';

if( !isset($_SESSION['admin']) ){
    header("location: ./index.php");
    exit;
}

$articuloDAO = new articuloDAO();
$servicio = new articulo();
$servicios = $articuloDAO->getBySeccionFlag(1,2);
$total = $articuloDAO->total();

?>

        <script type="text/javascript">
            function confirma(formObj) { 
                if(!confirm("¿Está seguro de realizar esta acción?")) { 
                    return false;
                }
            }

        </script>

<!doctype html>
<head>
  <title>.::Widget de Articulos</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="Panel de administración">
  <meta name="author" content="@James_Garciap">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/widgets.css"/>
  <link rel="stylesheet" type="text/css" href="css/modules.css"/>

</head>
<body>
<div style="margin:10px;">
<h3>Eliminar Servicios</h3>
  <?php if($total>0): ?>
    <?php foreach ($servicios as $servicio): ?>
        
        <div id="contWidget">
<?php
    
        echo "<a href='./../php/action/servicioDelete.php?id=".$servicio->getId()."' target='_top' onClick='return confirma(this)' ><img style='width:20px;height:20px; margin-right:20px;' src='imagenes/iconos/iconcerrar.png' align='left'/></a>";
        
        echo "<b>",$servicio->getTitulo_e(),"</b>&nbsp;&nbsp;/&nbsp;&nbsp;<b>",$servicio->getTitulo_i(),"</b>";
       
?>
          
        </div>
    <?php endforeach; ?>
  <?php endif; ?>

</div>
</body>
</html>