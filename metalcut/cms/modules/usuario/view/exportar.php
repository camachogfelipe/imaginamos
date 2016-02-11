<?
  header("Content-Type: application/vnd.ms-excel");
  header("Expires: 0");
  header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
  header("content-disposition: attachment;filename=usuario.xls");
  error_reporting(E_ALL);
  ini_set('display_errors', '1');

  include("../../../core/class/db.class.php");
  $db = new Database();
  $db->connect();
  
$db->doQuery("SELECT * FROM user_carrito  ORDER BY iduser_carrito DESC ", 1);
$fil = $db->rows;
?>
 <table class="display data_table2" >
<thead>
    <tr>
        <th><span class="th_wrapp">Nombre</span></th>
        <th><span class="th_wrapp">Usuario/Correo</span></th>
        <th><span class="th_wrapp">Empresa</span></th>
        <th><span class="th_wrapp">Nit Empresa</span></th>
        <th><span class="th_wrapp">Ciudad</span></th>
        <th><span class="th_wrapp">Genero</span></th>
        <th><span class="th_wrapp">Fecha de Nacimiento</span></th>
        <th><span class="th_wrapp">Estado</span></th>     
    </tr>
</thead>
<tbody>
<?php
for ($i = 0; $i < $fil; $i++) {
     $img = $db->results[$i];
    // print_r($img);
    ?>
    <tr class="odd gradeX">
        <td><?php echo $img["nombre"] ?></td>
        <td><?php echo $img["correo"] ?></td>
        <td><?php echo $img["empresa"] ?></td>
        <td><?php echo $img["nit_empresa"] ?></td>
        <td><?php echo $img["ciudad"] ?></td>
        <td><?php echo $img["genero"] ?></td>
        <td><?php echo $img["fecha_nacimiento"] ?></td>
        <td><?php echo $img["estado"] ?></td>
    </tr>
    
<?php
}
?>


