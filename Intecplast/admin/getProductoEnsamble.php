<?php
$q=$_GET["id"];

require_once '../php/clases.php';
$ensambleDAO = new ensambleDAO();
$ensamble = new ensamble();
if ($q==0) {
        error_reporting(0);
        ini_set(display_errors, 0);       
        echo "<b>No se hallaron coincidencias</b>";
      }
else {
  
      $ensambles = $ensambleDAO->getByIdSearch($q);
}

$total = $ensambleDAO->total();

$nombre_columna=array('', 'Codigo', 'Nombre', 'Complemento', '');  ?>


<table style='text-align: left; width: 100%; margin-left: auto; margin-right: auto;' cellpadding='2' cellspacing='0'>

<tr class='titulo'>

<?php
for($i=0;$i<=4;$i++)
{
echo "<td>".$nombre_columna[$i]."</td>";

}  
?>                                                             

</tr>

<?php if ($total>0): ?>
  
<?php foreach ($ensambles as $ensamble): ?>
  

<tr>

    <td><?php echo $ensamble->getId() ?><br /></td>
    <td><?php echo $ensamble->getBase() ?><br /></td>
    <td><?php echo $ensamble->getImagen() ?><br /></td>
    <td><?php echo $ensamble->getComplemento() ?><br /></td>
    <td><a href="menuAdmin.php?s=viewEnsamble&id=<?php echo $ensamble->getId() ?>">Ver</a><br /></td>

</tr>

<?php endforeach ?>

<?php endif ?>
</table>
