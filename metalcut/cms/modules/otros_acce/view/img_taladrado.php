<?php

$db->doQuery("SELECT idimg_taladrado FROM img_taladrado  ORDER BY idimg_taladrado DESC Limit 1", 1);
$limit = $db->results[0];
$img = $limit["idimg_taladrado"] + 1;

$id=!empty($_REQUEST['id']) ? $_REQUEST['id'] : null;  


if (empty($id)){
    $retorno = ClassFile::UploadImagenFile("img", "../../../../assets/img/img_taladrado", "img_taladrado_" . $img, "960_392_img_taladrado_" . $img, 960, 320);
}else{
    $retorno = ClassFile::UploadImagenFile("img", "../../../../assets/img/img_taladrado", "img_taladrado_" . $id, "960_392_img_taladrado_" . $id, 960, 320);
}
$retorno["Status"]=!empty($retorno["Status"]) ? $retorno["Status"] : null;

if (empty($_REQUEST['id']) && isset($_POST['tipo'])){
    if($retorno=""){
        $Erno = 2;
    }else{
      // if ($retorno["Status"] != "") {
           $sql="INSERT INTO img_taladrado(imagen) VALUES (" . $retorno["NameFile"] . "')";
          // echo $sql;
            $db->doQuery($sql, 2);
            $Erno = 1;
        /*  } else {
           $Erno = 3;
        }*/
    }
}else if (!empty($_REQUEST['id']) && isset($_POST['tipo'])){
        if ($retorno["Status"] == "Uploader") {
            $sql1="UPDATE img_taladrado SET imagen='" . $retorno["NameFile"] . "' WHERE idimg_taladrado=" . $id;
          //  echo $sql1;
            $db->doQuery($sql1, 4);
            $Erno = 1;
        } else {
        $Erno = 2;
        }     

}

if (empty($id)){
    $db->doQuery("SELECT * FROM img_taladrado ORDER BY idimg_taladrado ASC", 1);
    $fil = $db->rows;
}

if (!empty($id)){
 //   echo "SELECT * FROM img_taladrado WHERE idimg_taladrado=" . $id;
    $db->doQuery("SELECT * FROM img_taladrado WHERE idimg_taladrado=" . $id, 1);
    $img_taladrado = $db->results[0];
}
?>

<!-- full width -->
<div class="header"><span><span class="ico gray window"></span>Taladrado</span>
</div><!-- End header -->
<div class="content">

    <div class="formEl_b">
        <?php if ($fil < 1) { ?>
            <fieldset>
                <legend><h1>Porta Herramientas</h1></legend>

                <form method="post" action="" name="forminterno4" id="forminterno4" enctype="multipart/form-data">
                    <input type="hidden" value="<?php echo $img_taladrado["idimg_taladrado"] ?>" name="id" id="id">
                    <div class="section">
                       <?php if (!empty($img_taladrado["imagen"])){ ?> 
                        <label>Imagen actual</label> <br /><br />
                        <div>
                            <img src="../../../../assets/img/img_taladrado/<?php echo $img_taladrado["imagen"] . "?" . rand(0, 9999999); ?>" width="250" />
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
                    <div><a id="submitForm4"  class="uibutton large">Guardar</a></div>
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
                              <th><span class="th_wrapp">Imagen</span></th>
                            <th><span class="th_wrapp">Acciones</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        for ($i = 0; $i < $fil; $i++) {
                            
                            $img = $db->results[$i];
                            ?>
                            <tr class="odd gradeX">
                                <td class="center" width="70px">
                                    <img src="../../../../assets/img/img_taladrado/<?php echo $img["imagen"] . "?" . rand(0, 9999999); ?>" width="150" /><br/>
                                </td>
                                <td class="center titulo" width="100px">
                                    <?php if(($i+1) != $fil){ ?>
                                    <a id="<?php echo $img["idimg_taladrado"] ?>" class="Delete uibutton special" tableToDelete="img_taladrado" nameField="idimg_taladrado">Eliminar</a> 
                                    <?php } ?>
                                    <a class="uibutton icon edit" href="index.php?seccion=img_taladrado&id=<?= $img["idimg_taladrado"] ?>">Editar</a>
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
 <script type="text/javascript">
            $(document).ready(function(){              
                 $("#submitForm4").click(function(){
                     $('#forminterno4').submit();
                });
            });
        </script>