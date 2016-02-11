<?php

$db->doQuery("SELECT idgeometria FROM geometria  ORDER BY idgeometria DESC Limit 1", 1);
$limit = $db->results[0];
$img = $_POST['idgeometria'];
//echo $img.'-->ok';
$id=!empty($_REQUEST['id']) ? $_REQUEST['id'] : null;  
$idgeometria=!empty($_POST['idgeometria']) ? $_POST['idgeometria'] : null; 

if (empty($id)){
    $retorno = ClassFile::UploadImagenFile("img", "../../../../assets/img/geometria", "geometria_" . $img, "960_392_geometria_" . $img, 960, 392);
}else{
    $retorno = ClassFile::UploadImagenFile("img", "../../../../assets/img/geometria", "geometria_" . $id, "960_392_geometria_" . $id, 960, 392);
}
$retorno["Status"]=!empty($retorno["Status"]) ? $retorno["Status"] : null;

if (empty($_REQUEST['id']) && isset($_POST['tipo'])){
    if($_POST['idgeometria'] == "" && $retorno=""){
        $Erno = 2;
    }else{
       if ($retorno["Status"] != "") {
           $sql="INSERT INTO geometria(idgeometria,imagen) VALUES ('".$idgeometria."','" . $retorno["NameFile"] . "')";
          // echo $sql;
            $db->doQuery($sql, 2);
            $Erno = 1;
          } else {
           $Erno = 3;
        }
    }
}else if (!empty($_REQUEST['id']) && isset($_POST['tipo'])){
    if($retorno["Status"] == "") {
            $Erno = 2;
     }else{
            $sql1="UPDATE geometria SET imagen='" . $retorno["NameFile"] . "' WHERE idgeometria='".$id."'";
           // echo $sql1;
            $db->doQuery($sql1, 4);
            $Erno = 1;
     
    }
}

if (empty($id)){
    $db->doQuery("SELECT * FROM geometria ORDER BY idgeometria ASC", 1);
    $fil = $db->rows;
}

if (!empty($id)){
 //   echo "SELECT * FROM geometria WHERE idgeometria=" . $id;
    $db->doQuery("SELECT * FROM geometria WHERE idgeometria=" . $id, 1);
    $geometria = $db->results[0];
}
?>

<!-- full width -->
<div class="header"><span><span class="ico gray window"></span>Geometria</span>
</div><!-- End header -->
<div class="content">

    <div class="formEl_b">
        <?php if ($fil < 26) { ?>
            <fieldset>
                <legend><h1>Geometria</h1></legend>

                <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">
                   <!-- <input type="hidden" value="<?php echo $geometria["idgeometria"] ?>" name="id" id="id">-->
                    <div class="section">                                                                                                  
                        <label>Letra de identificaci&oacute;n</label>
                        <div>
                            <select id="idgeometria" name="idgeometria">
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
                                        $sql1="select count(*) as total from geometria where idgeometria='".$abc."'";
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
                           <!-- <input type="text" name="idgeometria" id="idgeometria" class="medium" value="<?php echo $geometria["idgeometria"] ?>">
                            <span class="f_help">Limite de caracteres 1/<span class="idgeometria"></span></span>-->
                        </div>
                    </div>
                    <div class="section">
                       <?php if (!empty($geometria["imagen"])){ ?> 
                        <label>Imagen actual</label> <br /><br />
                        <div>
                            <img src="../../../../assets/img/geometria/<?php echo $geometria["imagen"] . "?" . rand(0, 9999999); ?>" width="250" />
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
                            <th><span class="th_wrapp">Geometria</span></th>
                            <th><span class="th_wrapp">Imagen</span></th>
                            <th><span class="th_wrapp">Acciones</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $db->doQuery("SELECT * FROM geometria order by idgeometria asc", 1);                      
                        for ($i = 0; $i < $fil; $i++) {
                            
                            $img = $db->results[$i];
                            
                            ?>
                            <tr class="odd gradeX">
                                <td><?php echo $img["idgeometria"] ?></td>
                                <td class="center" width="70px">
                                    <img src="../../../../assets/img/geometria/<?php echo $img["imagen"] . "?" . rand(0, 9999999); ?>" width="150" /><br/>
                                </td>
                                <td class="center idgeometria" width="100px">
                                    <a id="<?php echo $img["idgeometria"] ?>" class="Delete uibutton special" tableToDelete="geometria" nameField="idgeometria">Eliminar</a> 
                                    <a class="uibutton icon edit" href="index.php?seccion=menu&id=<?= $img["idgeometria"] ?>">Editar</a>
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