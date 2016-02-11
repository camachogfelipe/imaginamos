<?php session_start();

require_once '../php/clases.php';

if( !isset($_SESSION['admin']) ){
    header("location: ./index.php");
    exit;
}

$promocionDAO = new promocionDAO();
$promocion = new promocion();
$promociones = $promocionDAO->gets();

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
<h3>Destacar Promoción</h3>
  <form action="./../php/action/promocionPrincipal.php" method="POST" id="destacarForm" name="destacarForm">
  <?php if($promociones>0): ?>
    <?php foreach ($promociones as $promocion): ?>
        

           <input name="id" type="radio" value="<?php echo $promocion->getId() ?>" /> <?php echo $promocion->getTitulo_e()?></br>

          
    <?php endforeach; ?>
  <?php endif; ?>
            <div class="actions">

            
            <input type="submit" name="submit" value="Guardar">
           
            <!--<a href="javascript:document.destacarForm.submit()" class="delete" target="_top" style="width:200px;"><button>Destacar</button></a> -->

          </div>
  </form>

</div>
</body>
</html>