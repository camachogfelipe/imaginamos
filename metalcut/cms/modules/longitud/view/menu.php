<?php

$db->doQuery("SELECT idlongitud FROM longitud  ORDER BY idlongitud DESC Limit 1", 1);
$limit = $db->results[0];
$img = $_POST['idlongitud'];
//echo $img.'-->ok';
$id=!empty($_REQUEST['id']) ? $_REQUEST['id'] : null;  
$idlongitud=!empty($_POST['idlongitud']) ? $_POST['idlongitud'] : null;
$idgeometria=!empty($_POST['idgeometria']) ? $_POST['idgeometria'] : null;
if(isset($_REQUEST['g']))
    $idgeometria = $_REQUEST['g'];

if (empty($id)){
    $retorno = ClassFile::UploadImagenFile("img", "../../../../assets/img/longitud", "longitud_" . $img . "-" . $idgeometria, "960_392_longitud_" . $img . "-" . $idgeometria, 960, 392);
}else{
    $retorno = ClassFile::UploadImagenFile("img", "../../../../assets/img/longitud", "longitud_" . $id . "-" . $idgeometria, "960_392_longitud_" . $id . "-" . $idgeometria, 960, 392);
}
//echo print_r($retorno);
$retorno["Status"]=!empty($retorno["Status"]) ? $retorno["Status"] : null;

if (empty($_REQUEST['id']) && isset($_POST['tipo'])  && isset($_POST['idgeometria'])){
    if($_POST['idlongitud'] == "" || $retorno=="" || $_POST['idgeometria'] == ""){
        $Erno = 2;
    }else{
       $db->doQuery("SELECT count(idlongitud) as cuenta FROM longitud where idlongitud = '$idlongitud' and idgeometria ='$idgeometria'", 1);
       $limit = $db->results[0];
       if($limit['cuenta'] > 0 ){
           $Erno = 6;
       }
       elseif ($retorno["Status"] != "") {
           $sql="INSERT INTO longitud(idlongitud,imagen, idgeometria) VALUES ('".$idlongitud."','" . $retorno["NameFile"] . "', '".$idgeometria."')";
          // echo $sql;
            $db->doQuery($sql, 2);
            $Erno = 1;
          } else {
           $Erno = 3;
        }
    }
}else if (!empty($_REQUEST['id']) && isset($_POST['tipo']) && !empty($_REQUEST['g'])){
    if($retorno["Status"] == "") {
            $Erno = 2;
     }else{
            $idgeometria = $_REQUEST['g'];
            $sql1="UPDATE longitud SET imagen='" . $retorno["NameFile"] . "' WHERE idgeometria='".$idgeometria."' and idlongitud='".$id."'";
           // echo $sql1;
            $db->doQuery($sql1, 4);
            $Erno = 1;
     
    }
}

if (empty($id)){
    $db->doQuery("SELECT * FROM longitud ORDER BY idlongitud ASC", 1);
    $fil = $db->rows;
}

if (!empty($id) && !empty($_REQUEST['g'])){
 //   echo "SELECT * FROM longitud WHERE idlongitud=" . $id;
    $db->doQuery("SELECT * FROM longitud WHERE idgeometria='".$_REQUEST['g']."' and idlongitud='" . $id."'", 1);
    $longitud = $db->results[0];
}
?>

<!-- full width -->
<div class="header"><span><span class="ico gray window"></span>Longitud</span>
</div><!-- End header -->
<div class="content">

    <div class="formEl_b">
        <?php if ($fil < 99) { ?>
            <fieldset>
                <legend><h1>Longitud</h1></legend>

                <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">
                   <!-- <input type="hidden" value="<?php echo $longitud["idlongitud"] ?>" name="id" id="id">-->
                    <div class="section">                                                                                                  
                        <label>Geometría (Letra de identificaci&oacute;n)</label>
                        <div>
                            <?php
                                $sqlTI="select idgeometria from geometria order by idgeometria asc"; 
                                $db->doQuery($sqlTI, 1);
                                $cTI = $db->rows;                      
                            ?>
                            <select id="idgeometria" name="idgeometria">
                                <?php if(!empty($_REQUEST['g'])){ ?>
                                        <option value="<?php echo $longitud["idgeometria"] ?>"><?php echo $longitud["idgeometria"] ?></option>
                                <?php }else{ ?>
                                    <option value="">-Seleccione-</option>
                                    <?php 
                                       for ($i = 0; $i < $cTI; $i++) {
                                             $dTI = $db->results[$i];
                                              ?>
                                               <option value="<?php echo $dTI["idgeometria"] ?>"
                                                 <?php
                                                 if($angulo["idgeometria"]==$dTI["idgeometria"])
                                                 echo "selected='selected'";
                                                 ?> ><?php echo $dTI["idgeometria"] ?></option>
                                              <?php
                                       }
                                   }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="section">                                                                                                  
                        <label>C&oacute;digo de identificaci&oacute;n</label>
                        <div>
                            <select id="idlongitud" name="idlongitud">
                              <?php
                                if(!empty($_REQUEST['id'])){
                                    ?>
                                       <option value=<?php echo $_REQUEST['id'] ?> ><?php echo $_REQUEST['id'] ?></option>
                                     <?php
                                }else{
                              ?>
                                <option value="">-Seleccione-</option>
                                <?php 
                                    $abecedario = range(1, 99);
                                    foreach($abecedario as $abc){
                                        $abc = substr("0" . $abc, -2);
                                        //if ($abc<10) $abc='0'.$abc;
                                        //$sql1="select count(*) as total from longitud where idlongitud='".$abc."'";
                                        //echo $sql1;
                                        //$db->doQuery($sql1, 1);
                                        //$t = $db->results[0];
                                        //$tt=$t['total'];
                                        //if ($tt==0){
                                            ?>
                                            <option value=<?php echo $abc ?>><?php echo $abc ?></option>
                                            <?php
                                        //}
                                    }
                                }
                                ?>
                            </select>
                           <!-- <input type="text" name="idlongitud" id="idlongitud" class="medium" value="<?php echo $longitud["idlongitud"] ?>">
                            <span class="f_help">Limite de caracteres 1/<span class="idlongitud"></span></span>-->
                        </div>
                    </div>
                    <div class="section">
                       <?php if (!empty($longitud["imagen"])){ ?> 
                        <label>Imagen actual</label> <br /><br />
                        <div>
                            <img src="../../../../assets/img/longitud/<?php echo $longitud["imagen"] . "?" . rand(0, 9999999); ?>" width="250" />
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
                            <th><span class="th_wrapp">Geometría</span></th>
                            <th><span class="th_wrapp">Longitud</span></th>
                            <th><span class="th_wrapp">Imagen</span></th>
                            <th><span class="th_wrapp">Acciones</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $db->doQuery("SELECT * FROM longitud order by idlongitud asc", 1);                      
                        for ($i = 0; $i < $fil; $i++) {
                            
                            $img = $db->results[$i];
                            
                            ?>
                            <tr class="odd gradeX">
                                <td><?php echo $img["idgeometria"] ?></td>
                                <td><?php echo $img["idlongitud"] ?></td>
                                <td class="center" width="70px">
                                    <img src="../../../../assets/img/longitud/<?php echo $img["imagen"] . "?" . rand(0, 9999999); ?>" width="150" /><br/>
                                </td>
                                <td class="center idlongitud" width="100px">
                                    <a id="<?php echo $img["id"] ?>" class="Delete uibutton special" tableToDelete="longitud" nameField="id">Eliminar</a> 
                                    <a class="uibutton icon edit" href="index.php?seccion=menu&id=<?= $img["idlongitud"] ?>&g=<?= $img["idgeometria"] ?>">Editar</a>
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
        }elseif ($valor == 6) {
            ?><script>showError('la Geometría y la Longitud seleccionada ya existe.',8000)</script>
            <?php
        }
    }
}
?>