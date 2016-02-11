<?php session_start();?>
<?php
require_once '../php/clases.php';

if( !isset($_SESSION['admin']) ){
    header("location: ./index.php");
    exit;
}

$categoriaDAO = new categoriaDAO();
$categoria = new categoria();
$categorias = $categoriaDAO->gets();
$total = $categoriaDAO->total();

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
  <title>.::Widget de Categorias</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="Panel de administración">
  <meta name="author" content="@James_Garciap">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/widgets.css"/>
  <style type="text/css" title="currentStyle">
    @import "./datatable/media/css/jquery.dataTables_themeroller.css";
    @import "./datatable/media/css/jquery-ui-1.8.4.custom.css";


  </style>

  <script type="text/javascript" language="javascript" src="./datatable/media/js/jquery.js"></script>
  <script type="text/javascript" language="javascript" src="./datatable/media/js/jquery.dataTables.js"></script>
  <script type="text/javascript" charset="utf-8">
      $(document).ready(function() {
        $('#table').dataTable( {
          "sScrollY": 260,
          "bJQueryUI": true,
          "sPaginationType": "full_numbers"
        } );

     });
  </script>

</head>
<body>

<h3>Categorias Activas</h3>
  <table class="display" id="table">
  <thead>
    <th>Acciones</th>
    <th>Item</th>
  </thead>
  <tbody>
    <?php if($total!=null): ?>
      <?php foreach ($categorias as $categoria): ?>
        <tr>
          <td style="width:50px;">
            <?php 
            echo "<a href='categoriasEdit.php?id=".$categoria->getid()."'><img style='width:20px;height:20px; margin-right:5px;' src='imagenes/iconos/iconeditar.png' align='left'/></a>";
            echo "<a href='./../php/action/categoriaDelete.php?id=".$categoria->getid()."' onClick='return confirma(this)' ><img style='width:20px;height:20px; margin-right:10px;' src='imagenes/iconos/iconcerrar.png' align='left'/></a>";
             ?>
          </td>
          <td><?php echo "<b>".$categoria->getnombre_e()."</b>"; ?></td>
        </tr>
      <?php endforeach; ?>
    <?php endif; ?>
  </tbody>
</table>


</body>
</html>