<?php session_start();?>
<?php
require_once '../php/clases.php';

if( !isset($_SESSION['admin']) ){
    header("location: ./index.php");
    exit;
}

$ciudadDAO = new ciudadDAO();
$ciudad = new ciudad();
$ciudades = $ciudadDAO->gets();
$total = $ciudadDAO->total();

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
  <title>.::Widget de Ciudades</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="Panel de administración">
  <meta name="author" content="@James_Garciap">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/widgets.css"/>

</head>
<body>

<h3>Ciudades Activas</h3>
  <?php if($total>0): ?>
    <?php foreach ($ciudades as $ciudad): ?>
        
        <div id="contWidget">
<?php

   
        echo "<a href='ciudadesEdit.php?id=".$ciudad->getid()."'><img style='width:20px;height:20px; margin-right:10px;' src='imagenes/iconos/iconeditar.png' align='left'/></a>";
        
        echo "<a href='./../php/action/ciudadDelete.php?id=".$ciudad->getid()."' onClick='return confirma(this)' ><img style='width:20px;height:20px; margin-right:20px;' src='imagenes/iconos/iconcerrar.png' align='left'/></a>";
        
        echo "<b>".$ciudad->getnombre_e()."</b>&nbsp;&nbsp;/&nbsp;&nbsp;<b>".$ciudad->getnombre_i()."</b>";
       
?>
          
        </div>
    <?php endforeach; ?>
  <?php endif; ?>


</body>
</html>