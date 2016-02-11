<?php
$q=$_GET["q"];
$s=$_GET["s"];



require_once '../php/clases.php';
$productoDAO = new productoDAO();
$producto = new producto();
if ($q==0) {
        error_reporting(0);
        ini_set(display_errors, 0);       
        echo "<b>No se hallaron coincidencias</b>";
      }
else {
  
  if (!$s) {
      $productos = $productoDAO->getFilter($q);
    }

  else {
    if ($s==0) {
      $productos = $productoDAO->getFilter($q);
    }
    else {
      
      if ($productos = $productoDAO->getFilterSublinea($q,$s)==NULL) {
            error_reporting(0);
            ini_set(display_errors, 0);       
            echo "<b>No se hallaron coincidencias</b>";
      }
      else {
        $productos = $productoDAO->getFilterSublinea($q,$s);
      }
    }
  }
}

$total = $productoDAO->total();

$nombre_columna=array('Clase', 'Codigo', 'Descripción', 'Linea', 'Sublinea','');  ?>


<table style='text-align: left; width: 100%; margin-left: auto; margin-right: auto;' cellpadding='2' cellspacing='0'>

<tr class='titulo'>

<?php
for($i=0;$i<=5;$i++)
{
echo "<td>".$nombre_columna[$i]."</td>";

}  
?>                                                             

</tr>

<?php if ($total>0): ?>
  
<?php foreach ($productos as $producto): 
  
  //Llamado de Clase
  $clase_id = $producto->getClase_id();
  $claseDAO = new claseDAO();
  $clase = new clase();
  $clase = $claseDAO->getById($clase_id);


  $sublinea_id = $producto->getSublinea_id();
  $sublineaDAO = new sublineaDAO();
  $sublinea = new sublinea();
  $sublinea = $sublineaDAO->getById($sublinea_id);
  $linea_id = $sublinea->getLineaId();


  $lineaDAO = new lineaDAO();
  $linea = new linea();
  $linea = $lineaDAO->getById($linea_id);



?>
  

<tr>

    <td><?php echo $clase->getnombre_e() ?><br /></td>
    <td><?php echo $producto->getProducto_codigo() ?><br /></td>
    <td><?php echo $producto->getProducto_descripcion() ?><br /></td>
    <td><?php echo $linea->getnombre_e() ?><br /></td>
    <td><?php echo $sublinea->getnombre_e() ?><br /></td>
    <td><a href="menuAdmin.php?s=viewProducto&id=<?php echo $producto->getProducto_codigo() ?>">Ver</a><br /></td>

</tr>

<?php endforeach ?>

<?php endif ?>
</table>
