<?php session_start();?>
<?php
require_once '../php/clases.php';

if( !isset($_SESSION['admin']) ){
    header("location: ./index.php");
    exit;
}

$profesionDAO = new profesionDAO();
$profesion = new profesion();
$profesiones = $profesionDAO->gets();
$total = $profesionDAO->total();

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
  <title>.::Widget de profesiones</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="Panel de administración">
  <meta name="author" content="@James_Garciap">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/widgets.css"/>

</head>
<body>

<h3>Profesiones Activas</h3>
  <?php if($total>0): ?>
    <?php foreach ($profesiones as $profesion): ?>
        
        <div id="contWidget">
<?php

   
        echo "<a href='profesionesEdit.php?id=".$profesion->getId()."'><img style='width:20px;height:20px; margin-right:10px;' src='imagenes/iconos/iconeditar.png' align='left'/></a>";
        
        echo "<a href='./../php/action/profesionDelete.php?id=".$profesion->getId()."' onClick='return confirma(this)' ><img style='width:20px;height:20px; margin-right:20px;' src='imagenes/iconos/iconcerrar.png' align='left'/></a>";
        
        echo "<b>".$profesion->getNombre_e()."</b>&nbsp;&nbsp;/&nbsp;&nbsp;<b>".$profesion->getNombre_i()."</b>";
       
?>
          
        </div>
    <?php endforeach; ?>
  <?php endif; ?>


</body>
</html>