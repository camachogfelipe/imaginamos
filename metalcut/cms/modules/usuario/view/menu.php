<?php

$db->doQuery("SELECT iduser_carrito FROM user_carrito  ORDER BY iduser_carrito DESC Limit 1", 1);
$limit = $db->results[0];
$img = $limit["iduser_carrito"] + 1;

$id=!empty($_REQUEST['id']) ? $_REQUEST['id'] : null;  
$estado=!empty($_POST['estado']) ? $_POST['estado'] : null; 



if (empty($_REQUEST['id']) && isset($_POST['tipo'])){
    if($_POST['estado'] == "" && $_POST['link']=="" && $_POST['texto']==""){
        $Erno = 2;
    }else{
           $sql="INSERT INTO user_carrito(titulo,link,texto,imagen) VALUES ('".$titulo."','".$link."','".$texto."','" . $retorno["NameFile"] . "')";
          // echo $sql;
            $db->doQuery($sql, 2);
            $Erno = 1;
    }
}else if (!empty($_REQUEST['id']) && isset($_POST['tipo'])){
    if($_POST['estado'] == "" ) {
            $Erno = 2;
     }else{
         $sql="UPDATE user_carrito SET estado='" . $estado . "' WHERE iduser_carrito=" . $id;
        // echo $sql;
         $db->doQuery($sql, 4);      
    }
}

if (empty($id)){
    $db->doQuery("SELECT * FROM user_carrito ORDER BY iduser_carrito ASC", 1);
    $fil = $db->rows;
}

if (!empty($id)){
   // echo "SELECT * FROM user_carrito WHERE iduser_carrito=" . $id;
    $db->doQuery("SELECT * FROM user_carrito WHERE iduser_carrito=" . $id, 1);
    $user_carrito = $db->results[0];
}
?>

<!-- full width -->
<div class="header"><span><span class="ico gray window"></span>Usuario</span>
</div><!-- End header -->
<div class="content">
      <a class="uibutton icon normal answer" href="../../usuario/view/">Atras</a>
    <div class="formEl_b">
        <?php if ($fil < 1) { ?>
            <fieldset>
                <legend><h1>Usuario</h1></legend>

                <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">
                    <input type="hidden" value="<?php echo $user_carrito["iduser_carrito"] ?>" name="id" id="id">
                    <input type="hidden" value="1" name="tipo" id="tipo">
                    <div class="section">                                                                                                  
                        <label>Estado</label>
                        <div>
                           <select id="estado" name="estado">
                               <option value=''>Seleccione</option>
                               <option value='Activo'>Activo</option>
                               <option value='Inactivo'>Inactivo</option>  
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
                <a href="../../usuario/view/exportar.php" target="_blank" class="uibutton large"  >Exportar</a> 
                <table class="display data_table2" >
                    <thead>
                        <tr>
                            <th><span class="th_wrapp">Nombre</span></th>
                            <th><span class="th_wrapp">Usuario</span></th>
                            <th><span class="th_wrapp">Empresa</span></th>
                            <th><span class="th_wrapp">Nit Empresa</span></th>
                            <th><span class="th_wrapp">Ciudad</span></th>
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
                                <td><?php echo $img["nombre"] ?></td>
                                <td><?php echo $img["correo"] ?></td>
                                <td><?php echo $img["empresa"] ?></td>
                                <td><?php echo $img["nit_empresa"] ?></td>
                                <td><?php echo $img["ciudad"] ?></td>
                                <td><?php echo $img["estado"] ?></td>
                                <td class="center titulo" width="100px">
                                    <?php //if(($i+1) != $fil){ ?>
                                    <a id="<?php echo $img["iduser_carrito"] ?>" class="Delete uibutton special" tableToDelete="user_carrito" nameField="iduser_carrito">Eliminar</a> 
                                    <?php// } ?>
                                    <a class="uibutton icon edit" href="index.php?seccion=menu&id=<?= $img["iduser_carrito"] ?>">Editar</a>
                                </td>
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