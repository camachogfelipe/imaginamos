<?php session_start();?>
<?php
require_once '../php/clases.php';

if( !isset($_SESSION['admin']) ){
    header("location: ./index.php");
    exit;
}

$paisDAO = new paisDAO();
$pais = new pais();
$paises = $paisDAO->gets();
$total = $paisDAO->total();

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
  <title>.::Widget de Paises</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="Panel de administración">
  <meta name="author" content="@James_Garciap">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/widgets.css"/>

</head>
<body>

<h3>Paises Activos</h3>
  <?php if($total>0): ?>
    <?php foreach ($paises as $pais): ?>
        
        <div id="contWidget">
<?php

   
        echo "<a href='paisesEdit.php?id=".$pais->getid()."'><img style='width:20px;height:20px; margin-right:10px;' src='imagenes/iconos/iconeditar.png' align='left'/></a>";
        
        echo "<a href='./../php/action/paisDelete.php?id=".$pais->getid()."' onClick='return confirma(this)' ><img style='width:20px;height:20px; margin-right:20px;' src='imagenes/iconos/iconcerrar.png' align='left'/></a>";
        
        echo "<b>".$pais->getnombre_e()."</b>&nbsp;&nbsp;/&nbsp;&nbsp;<b>".$pais->getnombre_i()."</b>";
       
?>
          
        </div>
    <?php endforeach; ?>
  <?php endif; ?>


</body>
</html>
