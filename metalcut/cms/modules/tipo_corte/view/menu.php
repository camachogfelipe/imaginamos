<?php

$db->doQuery("SELECT idtipo_corte FROM tipo_corte  ORDER BY idtipo_corte DESC Limit 1", 1);
$limit = $db->results[0];
$img = $_POST['idtipo_corte'];
//echo $img.'-->ok';
$id=!empty($_REQUEST['id']) ? $_REQUEST['id'] : null;  
$idtipo_corte=!empty($_POST['idtipo_corte']) ? $_POST['idtipo_corte'] : null; 

if (empty($id)){
    $retorno = ClassFile::UploadImagenFile("img", "../../../../assets/img/tipo_corte", "tipo_corte_" . $img, "960_392_tipo_corte_" . $img, 960, 392);
}else{
    $retorno = ClassFile::UploadImagenFile("img", "../../../../assets/img/tipo_corte", "tipo_corte_" . $id, "960_392_tipo_corte_" . $id, 960, 392);
}
$retorno["Status"]=!empty($retorno["Status"]) ? $retorno["Status"] : null;

if (empty($_REQUEST['id']) && isset($_POST['tipo'])){
    if($_POST['idtipo_corte'] == "" && $retorno=""){
        $Erno = 2;
    }else{
       if ($retorno["Status"] != "") {
            $sql1="select count(*) as total from tipo_corte where idtipo_corte='".$_POST['idtipo_corte']."'";
           // echo $sql1;
            $db->doQuery($sql1, 1);
            $t = $db->results[0];
            $tt=$t['total'];
            if ($tt==0){
                $sql="INSERT INTO tipo_corte(idtipo_corte,imagen) VALUES ('".$idtipo_corte."','" . $retorno["NameFile"] . "')";
               // echo $sql;
                 $db->doQuery($sql, 2);
                 $Erno = 1;
            }else{
                $Erno = 6;
            }
          } else {
           $Erno = 3;
        }
    }
}else if (!empty($_REQUEST['id']) && isset($_POST['tipo'])){
    if($retorno["Status"] == "") {
            $Erno = 2;
     }else{
            $sql1="UPDATE tipo_corte SET imagen='" . $retorno["NameFile"] . "' WHERE idtipo_corte='".$id."'";
           // echo $sql1;
            $db->doQuery($sql1, 4);
            $Erno = 1;
     
    }
}

if (empty($id)){
    $db->doQuery("SELECT * FROM tipo_corte ORDER BY idtipo_corte ASC", 1);
    $fil = $db->rows;
}

if (!empty($id)){
 //   echo "SELECT * FROM tipo_corte WHERE idtipo_corte=" . $id;
    $db->doQuery("SELECT * FROM tipo_corte WHERE idtipo_corte='" . $id."'", 1);
    $tipo_corte = $db->results[0];
}
?>

<!-- full width -->
<div class="header"><span><span class="ico gray window"></span>Espesor</span>
</div><!-- End header -->
<div class="content">

    <div class="formEl_b">
        <?php if ($fil < 99) { ?>
            <fieldset>
                <legend><h1>Tipo de Corte</h1></legend>

                <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">
                   <!-- <input type="hidden" value="<?php echo $tipo_corte["idtipo_corte"] ?>" name="id" id="id">-->
                    <div class="section">                                                                                                  
                        <label>C&oacute;digo de identificaci&oacute;n</label>
                        <div class="section">
                           <?php 
                           $read='';
                           if (!empty($_REQUEST['id'])){
                              $read='readonly' ;
                           }
                           ?>
                           <input type="text" name="idtipo_corte" id="idtipo_corte" class="medium" <?php echo $read ?> value="<?php echo $tipo_corte["idtipo_corte"] ?>">
                            <span class="f_help">Limite de caracteres 2/<span class="idtipo_corte"></span></span>
                        </div>
                    </div>
                    <div class="section">
                       <?php if (!empty($tipo_corte["imagen"])){ ?> 
                        <label>Imagen actual</label> <br /><br />
                        <div>
                            <img src="../../../../assets/img/tipo_corte/<?php echo $tipo_corte["imagen"] . "?" . rand(0, 9999999); ?>" width="250" />
                        </div>
                        <br />
                       <?php }else{?>
                        <label>Imagen </label><br /><br />
                       <?php }?>                      
                        <label>Subir nueva imagen (196px x 246px) (.png, .jpg)</label>
                        <div>
                            <input type="file" name="img" id="img" />
                            <input type="hidden" value="1" name="tipo" id="tipo">
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
                <table class="display data_table2" >
                    <thead>
                        <tr>
                            <th><span class="th_wrapp">ipo de Corte</span></th>
                            <th><span class="th_wrapp">Imagen</span></th>
                            <th><span class="th_wrapp">Acciones</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $db->doQuery("SELECT * FROM tipo_corte order by idtipo_corte asc", 1);                      
                        for ($i = 0; $i < $fil; $i++) {
                            
                            $img = $db->results[$i];
                            
                            ?>
                            <tr class="odd gradeX">
                                <td><?php echo $img["idtipo_corte"] ?></td>
                                <td class="center" width="70px">
                                    <img src="../../../../assets/img/tipo_corte/<?php echo $img["imagen"] . "?" . rand(0, 9999999); ?>" width="150" /><br/>
                                </td>
                                <td class="center idtipo_corte" width="100px">
                                    <a id="<?php echo $img["idtipo_corte"] ?>" class="Delete uibutton special" tableToDelete="tipo_corte" nameField="idtipo_corte">Eliminar</a> 
                                    <a class="uibutton icon edit" href="index.php?seccion=menu&id=<?= $img["idtipo_corte"] ?>">Editar</a>
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
        } elseif ($valor == 6) {
            ?><script>showError('Ya existe este codigo',8000)</script>
            <?php
        }
    }
}
?>