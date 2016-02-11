<?php

$db->doQuery("SELECT idcompras FROM   ORDER BY idcompras DESC Limit 1", 1);
$limit = $db->results[0];
$img = $limit["idcompras"] + 1;

$id=!empty($_REQUEST['id']) ? $_REQUEST['id'] : null;  
$estado=!empty($_POST['estado']) ? $_POST['estado'] : null; 



if (empty($_REQUEST['id']) && isset($_POST['tipo'])){
    if($_POST['estado'] == "" && $_POST['link']=="" && $_POST['texto']==""){
        $Erno = 2;
    }else{
           $sql="INSERT INTO compras(titulo,link,texto,imagen) VALUES ('".$titulo."','".$link."','".$texto."','" . $retorno["NameFile"] . "')";
          // echo $sql;
            $db->doQuery($sql, 2);
            $Erno = 1;
    }
}else if (!empty($_REQUEST['id']) && isset($_POST['tipo'])){
    if($_POST['estado'] == "" ) {
            $Erno = 2;
     }else{
         $sql="UPDATE compras SET estado='" . $estado . "' WHERE idcompras=" . $id;
        // echo $sql;
         $db->doQuery($sql, 4);  
         $Erno = 1;
    }
}

if (empty($id)){
    $db->doQuery("SELECT idcompras, `idprod` ,  `cant` ,  `ori` ,  `det` ,  `valor` , empresa, nit_empresa, nombre, ciudad, correo, c.estado
                    FROM  `compras` AS c
                    INNER JOIN user_carrito AS u ON ( iduser_carrito = user_id ) 
                    ", 1);
    $fil = $db->rows;
}

if (!empty($id)){
   // echo "SELECT * FROM compras WHERE idcompras=" . $id;
    $db->doQuery("SELECT * FROM compras WHERE idcompras=" . $id, 1);
    $compras = $db->results[0];
}
?>

<!-- full width -->
<div class="header"><span><span class="ico gray window"></span>Compras</span>
</div><!-- End header -->
<div class="content">
     <a class="uibutton icon normal answer" href="../../compras/view/">Atras</a>
    <div class="formEl_b">
        <?php if ($fil < 1) { ?>
            <fieldset>
                <legend><h1>Compras / Cotizaciones</h1></legend>

                <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">
                    <input type="hidden" value="<?php echo $compras["idcompras"] ?>" name="id" id="id">
                    <input type="hidden" value="1" name="tipo" id="tipo">
                    <div class="section">                                                                                                  
                        <label>Estado</label>
                        <div><?php //echo $compras["estado"] ?>
                           <select id="estado" name="estado">
                               <option value=''>Seleccione</option>
                               <option value='Compra' <?php if ($compras["estado"]=='Compra') echo 'selected';  ?> >Compra</option>
                               <option value='En Cotizacion' <?php if ($compras["estado"]=='En Cotizacion') echo 'selected';  ?>>En Cotizacion</option>  
                               <option value='Cancelada' <?php if ($compras["estado"]=='Cancelada') echo 'selected';  ?>>Cancelada</option>  
                               <option value='Proceso' <?php if ($compras["estado"]=='Proceso') echo 'selected';  ?>>Proceso</option>  
                            </select>
                        </div>
                    </div>
                    <br />
                    <div><a id="submitForm"  class="uibutton large">Guardar</a></div>
                </form>
            </fieldset>
        <?php } else { 
            
            ?>
            <label></label><?php } ?>
            <br/><br/><br/>
        <fieldset>
         <?php if (empty($id)){ ?>
        <div class="tableName toolbar">
                <!--<a href="../../usuario/view/exportar.php" target="_blank" class="uibutton large"  >Exportar</a>--> 
                <table class="display data_table2" >
                    <thead>
                        <tr>
                            <th><span class="th_wrapp">Deatlle</span></th>
                            <th><span class="th_wrapp">Cant.</span></th>
                            <th><span class="th_wrapp">Valor</span></th>
                            <th><span class="th_wrapp">Empresa</span></th>
                            <th><span class="th_wrapp">Nombre</span></th>
                            <th><span class="th_wrapp">Ciudad</span></th>
                            <th><span class="th_wrapp">Correo</span></th> 
                            <th><span class="th_wrapp">Estado</span></th>
                            <th><span class="th_wrapp">Acciones</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        for ($i = 0; $i < $fil; $i++) {
                            
                            $img = $db->results[$i];
                            ?>
                            <tr class="odd gradeX">
                                <td><?php echo $img["det"] ?></td>
                                <td><?php echo $img["cant"] ?></td>
                                <td><?php echo $img["valor"] ?></td>
                                <td><?php echo $img["empresa"] ?></td>
                                <td><?php echo $img["nombre"] ?></td>
                                <td><?php echo $img["ciudad"] ?></td>
                                <td><?php echo $img["correo"] ?></td>
                                <td><?php echo $img["estado"] ?></td>
                                <td><a class="uibutton icon edit" href="index.php?seccion=menu&id=<?= $img["idcompras"] ?>">Editar</a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            
            </div>
            <?php
                }
            ?>
         </fieldset>
    </div>

</div>
<?php
if (isset($Erno)) {
    if (intval($Erno)) {
        $valor = $Erno;
        if ($valor == 2) {
            ?><script>showError('Faltan datos ',3000);</script>
            <?php
        } elseif ($valor == 1) {
            ?><script>showSuccess('Información ingresada',8000)</script>
            <?php
        } elseif ($valor == 3) {
            ?><script>showError('Error al ingresar los datos',8000)</script>
            <?php
        } elseif ($valor == 4) {
            ?><script>showError('No se puede ingresar destacado',8000)</script>
            <?php
        } elseif ($valor == 5) {
            ?><script>showError('No selecciono imagen',8000)</script>
            <?php
        }
    }
}
?>