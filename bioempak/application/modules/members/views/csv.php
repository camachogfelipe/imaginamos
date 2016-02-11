<?php
header('Content-type: application/vnd.ms-excel');
header("Content-Disposition: attachment; filename=Miembros.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>
<table  width="800" style="font-family: arial">
   <tr>
      <th width="400">Usuario</th>
      <th width="400">Email</th>
   </tr>
<?php $c = 0; ?>
<?php foreach($data as $d): ?>
<?php if($c == 0){ $class='#f1f1f1'; }else{ $class='white'; } ?>   
   <tr bgcolor="<?php echo $class; ?>">
      <td><?php echo $d->name; ?></td>
      <td><?php echo $d->email; ?></td>
   </tr>
<?php if($c == 0){ $c=1; }else{ $c=0; } ?> 
<?php endforeach; ?>
</table>