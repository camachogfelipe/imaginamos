<?php session_start();?>
<?php
require_once '../php/clases.php';

if( !isset($_SESSION['admin']) ){
    header("location: ./index.php");
    exit;
}

$claseDAO = new claseDAO();
$clase = new clase();
$clases = $claseDAO->gets();
$total = $claseDAO->total();

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
  <title>.::Widget de Clases</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="Panel de administración">
  <meta name="author" content="@James_Garciap">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/widgets.css"/>

</head>
<body>

<h3>Clases Activas</h3>
  <?php if($total>0): ?>
    <?php foreach ($clases as $clase): ?>
        
        <div id="contWidget">
<?php

   
        echo "<a href='clasesEdit.php?id=".$clase->getid()."'><img style='width:20px;height:20px; margin-right:10px;' src='imagenes/iconos/iconeditar.png' align='left'/></a>";
                
        echo "<b>".$clase->getnombre_e()."</b>&nbsp;&nbsp;/&nbsp;&nbsp;<b>".$clase->getnombre_i()."</b>";
       
?>
          
        </div>
    <?php endforeach; ?>
  <?php endif; ?>


</body>
</html>