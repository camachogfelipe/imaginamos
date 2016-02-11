<?php

$db->doQuery("SELECT idmateriales FROM materiales  ORDER BY idmateriales DESC Limit 1", 1);
$limit = $db->results[0];
$img = $_POST['idmateriales'];
//echo $img.'-->ok';
$id=!empty($_REQUEST['id']) ? $_REQUEST['id'] : null;  
$idmateriales=!empty($_POST['idmateriales']) ? $_POST['idmateriales'] : null; 
$color=!empty($_POST['color']) ? $_POST['color'] : null;
$descripcion=!empty($_POST['descripcion']) ? $_POST['descripcion'] : null;
if (empty($id)){
    $retorno = ClassFile::UploadImagenFile("img", "../../../../assets/img/materiales", "materiales_" . $img, "960_392_materiales_" . $img, 960, 392);
}else{
    $retorno = ClassFile::UploadImagenFile("img", "../../../../assets/img/materiales", "materiales_" . $id, "960_392_materiales_" . $id, 960, 392);
}
$retorno["Status"]=!empty($retorno["Status"]) ? $retorno["Status"] : null;

if (empty($_REQUEST['id']) && isset($_POST['tipo'])){
    if($_POST['idmateriales'] == "" && $_POST['color'] == "" && $_POST['descripcion'] == ""  && $retorno=""){
        $Erno = 2;
    }else{
       if ($retorno["Status"] != "") {
           $sql="INSERT INTO materiales(idmateriales,color,descripcion,imagen) VALUES ('".$idmateriales."','".$color."','".$descripcion."','" . $retorno["NameFile"] . "')";
          // echo $sql;
            $db->doQuery($sql, 2);
            $Erno = 1;
          } else {
           $Erno = 3;
        }
    }
}else if (!empty($_REQUEST['id']) && isset($_POST['tipo'])){
    if($_POST['color'] == "" && $_POST['descripcion'] == "" ) {
            $Erno = 2;
     }else{
         $sql="UPDATE materiales SET color='" . $color . "', descripcion='".$descripcion."' WHERE idmateriales='" . $id."'";
        // echo $sql;
         $db->doQuery($sql, 4);
       
        if ($retorno["Status"] == "Uploader") {
            $sql1="UPDATE materiales SET imagen='" . $retorno["NameFile"] . "' WHERE idmateriales='".$id."'";
           // echo $sql1;
            $db->doQuery($sql1, 4);
            $Erno = 1;
        }
            
     
    }
}

if (empty($id)){
    $db->doQuery("SELECT * FROM materiales ORDER BY idmateriales ASC", 1);
    $fil = $db->rows;
}

if (!empty($id)){
   // echo "SELECT * FROM materiales WHERE idmateriales='" . $id."'";
    $db->doQuery("SELECT * FROM materiales WHERE idmateriales='" . $id."'", 1);
    $materiales = $db->results[0];
}
?>

<!-- full width -->
<div class="header"><span><span class="ico gray window"></span>Materiales</span>
</div><!-- End header -->
<div class="content">

    <div class="formEl_b">
        <?php if ($fil < 26) { ?>
            <fieldset>
                <legend><h1>Material</h1></legend>

                <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">
                   <!-- <input type="hidden" value="<?php echo $materiales["idmateriales"] ?>" name="id" id="id">-->
                    <div class="section">                                                                                                  
                        <label>Letra de identificaci&oacute;n</label>
                        <div>
                            <select id="idmateriales" name="idmateriales">
                              <?php
                                if(!empty($_REQUEST['id'])){
                                    ?>
                                       <option value=<?php echo $_REQUEST['id'] ?> ><?php echo $_REQUEST['id'] ?></option>
                                     <?php
                                }else{
                              ?>
                                <option value="">-Seleccione-</option>
                                <?php 
                                   $abecedario = range('a', 'z');
                                    foreach($abecedario as $abc){
                                        $sql1="select count(*) as total from materiales where idmateriales='".$abc."'";
                                        echo $sql1;
                                        $db->doQuery($sql1, 1);
                                        $t = $db->results[0];
                                        $tt=$t['total'];
                                        if ($tt==0){
                                            ?>
                                            <option value=<?php echo $abc ?>><?php echo $abc ?></option>
                                            <?php
                                        }
                                    }
                                }
                                ?>
                            </select>
                           <!-- <input type="text" name="idmateriales" id="idmateriales" class="medium" value="<?php echo $materiales["idmateriales"] ?>">
                            <span class="f_help">Limite de caracteres 1/<span class="idmateriales"></span></span>-->
                        </div>
                    </div>
                    <div class="section">                                                                                                  
                        <label>Color</label>
                        <div>
                            <input type="text" name="color" id="color" class="color" value="<?php echo $materiales["color"] ?>">
                        </div>
                    </div>
                    <div class="section">                                                                                                  
                        <label>Descripcion</label>
                        <div>
                            <textarea name="descripcion" id="descripcion" class="large"><?php echo $materiales["descripcion"] ?></textarea>
                            
                        </div>
                    </div>
                    <div class="section">
                       <?php if (!empty($materiales["imagen"])){ ?> 
                        <label>Imagen actual</label> <br /><br />
                        <div>
                            <img src="../../../../assets/img/materiales/<?php echo $materiales["imagen"] . "?" . rand(0, 9999999); ?>" width="250" />
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
                            <th><span class="th_wrapp">Material</span></th>
                            <th><span class="th_wrapp">Color</span></th>
                            <th><span class="th_wrapp">Descripcion</span></th>
                            <th><span class="th_wrapp">Imagen</span></th>
                            <th><span class="th_wrapp">Acciones</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $db->doQuery("SELECT * FROM materiales order by idmateriales asc", 1);                      
                        for ($i = 0; $i < $fil; $i++) {
                            
                            $img = $db->results[$i];
                            
                            ?>
                            <tr class="odd gradeX">
                                <td><?php echo $img["idmateriales"] ?></td>
                                <td><div style="background-color:#<?php echo $img["color"] ?>;color:#<?php echo $img["color"] ?>">-</div></td>
                                <td><?php echo $img["descripcion"] ?></td>
                                <td class="center" width="70px">
                                    <img src="../../../../assets/img/materiales/<?php echo $img["imagen"] . "?" . rand(0, 9999999); ?>" width="150" /><br/>
                                </td>
                                <td class="center idmateriales" width="100px">
                                    <a id="<?php echo $img["idmateriales"] ?>" class="Delete uibutton special" tableToDelete="materiales" nameField="idmateriales">Eliminar</a> 
                                    <a class="uibutton icon edit" href="index.php?seccion=menu&id=<?= $img["idmateriales"] ?>">Editar</a>
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