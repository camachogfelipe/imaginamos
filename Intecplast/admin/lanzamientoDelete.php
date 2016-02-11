<?php session_start();?>
<?php
require_once '../php/clases.php';

if( !isset($_SESSION['admin']) ){
    header("location: ./index.php");
    exit;
}

$articuloDAO = new articuloDAO();
$lanzamiento = new articulo();
$lanzamientos = $articuloDAO->getBySeccionFlag(6,12);

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
  <title>.::</title>
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
<h3>Eliminar Lanzamientos</h3>
  <?php if($lanzamientos>0): ?>
    <?php foreach ($lanzamientos as $lanzamiento): ?>
        
        <div id="contWidget">
<?php
    
        echo "<a href='./../php/action/lanzamientoDelete.php?id=".$lanzamiento->getId()."' target='_top' onClick='return confirma(this)' ><img style='width:20px;height:20px; margin-right:20px;' src='imagenes/iconos/iconcerrar.png' align='left'/></a>";
        
        echo "<b>",$lanzamiento->getTitulo_e(),"</b>&nbsp;&nbsp;/&nbsp;&nbsp;<b>",$lanzamiento->getTitulo_i(),"</b>";
       
?>
          
        </div>
    <?php endforeach; ?>
  <?php endif; ?>

</div>
</body>
</html>