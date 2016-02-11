<?php

$db->doQuery("SELECT idcontacto FROM contacto  ORDER BY idcontacto DESC Limit 1", 1);
$limit = $db->results[0];
$img = $limit["idcontacto"] + 1;

$id=!empty($_REQUEST['id']) ? $_REQUEST['id'] : null;  
$ciudad=!empty($_POST['ciudad']) ? $_POST['ciudad'] : null; 
$direccion1=!empty($_POST['direccion1']) ? $_POST['direccion1'] : null; 
$direccion2=!empty($_POST['direccion2']) ? $_POST['direccion2'] : null; 
$telefonos=!empty($_POST['telefonos']) ? $_POST['telefonos'] : null; 
$fax=!empty($_POST['fax']) ? $_POST['fax'] : null; 
$correos=!empty($_POST['correos']) ? $_POST['correos'] : null; 
$ciudad = str_replace("'", "&#39;" , $ciudad);
$ciudad = str_replace('"', "&quot;", $ciudad);
$fax = str_replace("'", "&#39;" , $fax);
$fax = str_replace('"', "&quot;", $fax);

if (empty($id)){
    $retorno = ClassFile::UploadImagenFile("img", "../../../../assets/img/contacto", "contacto_" . $img, "960_392_contacto_" . $img, 960, 392);
}else{
    $retorno = ClassFile::UploadImagenFile("img", "../../../../assets/img/contacto", "contacto_" . $id, "960_392_contacto_" . $id, 960, 392);
}
$retorno["Status"]=!empty($retorno["Status"]) ? $retorno["Status"] : null;

if (empty($_REQUEST['id']) && isset($_POST['tipo'])){
    if($_POST['ciudad'] == "" && $_POST['direccion1']=="" && $_POST['direccion2']=="" && $_POST['telefonos']=="" && $_POST['fax']=="" && $_POST['correos']=="" && $retorno=""){
        $Erno = 2;
    }else{
       if ($retorno["Status"] == "Uploader") {
           $sql="INSERT INTO contacto(ciudad,direccion1,direccion2,telefonos,fax,correos,imagen) VALUES ('".$ciudad."','".$direccion1."','".$direccion2."','".$telefonos."','".$fax."','".$correos."','" . $retorno["NameFile"] . "')";
           //echo $sql;
            $db->doQuery($sql, 2);
            $Erno = 1;
          } else {
           $Erno = 3;
        }
    }
}else if (!empty($_REQUEST['id']) && isset($_POST['tipo'])){
    if($_POST['ciudad'] == "" && $_POST['direccion1']=="" && $_POST['direccion2']=="" && $_POST['telefonos']=="" && $_POST['fax']=="" && $_POST['correos']=="" ) {
            $Erno = 2;
     }else{
         $sql="UPDATE contacto SET ciudad='" . $ciudad . "', direccion1='".$direccion1."', direccion2='".$direccion2."', telefonos='".$telefonos."', fax='".$fax."', correos='".$correos."' WHERE idcontacto=" . $id;
        $Erno = 1;// echo $sql;
         $db->doQuery($sql, 4);
       
        if ($retorno["Status"] == "Uploader") {
            $sql1="UPDATE contacto SET imagen='" . $retorno["NameFile"] . "' WHERE idcontacto=" . $id;
          //  echo $sql1;
            $db->doQuery($sql1, 4);
            $Erno = 1;
        } else {

        }     
    }
}

if (empty($id)){
    $db->doQuery("SELECT * FROM contacto ORDER BY idcontacto ASC", 1);
    $fil = $db->rows;
}

if (!empty($id)){
    //echo "SELECT * FROM contacto WHERE idcontacto=" . $id;
    $db->doQuery("SELECT * FROM contacto WHERE idcontacto=" . $id, 1);
    $contacto = $db->results[0];
}
?>

<!-- full width -->
<div class="header"><span><span class="ico gray window"></span>Contacto</span>
</div><!-- End header -->
<div class="content">

    <div class="formEl_b">
        <?php if ($fil < 1) { ?>
            <fieldset>
                <legend><h1>Nuevo Contacto</h1></legend>

                <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">
                    <input type="hidden" value="<?php echo $contacto["idcontacto"] ?>" name="id" id="id">
                    <div class="section">                                                                                                  
                        <label>Ciudad</label>
                        <div>
                            <input type="text" name="ciudad" id="ciudad" class="medium" value="<?php echo $contacto["ciudad"] ?>">
                            <span class="f_help">Limite de caracteres 23/<span class="ciudad"></span></span>
                        </div>
                    </div>
                    <div class="section">                                                                                                  
                        <label>Direccion 1</label>
                        <div>
                            <input type="text" name="direccion1" id="direccion1" class="medium" value="<?php echo $contacto["direccion1"] ?>">
                            <span class="f_help">Limite de caracteres 45/<span class="direccion1"></span></span>
                        </div>
                    </div>
                    <div class="section">                                                                                                  
                        <label>Direccion 2</label>
                        <div>
                            <input type="text" name="direccion2" id="direccion2" class="medium" value="<?php echo $contacto["direccion2"] ?>">
                            <span class="f_help">Limite de caracteres 45/<span class="direccion2"></span></span>
                        </div>
                    </div>
                    <div class="section">                                                                                                  
                        <label>Telefonos</label>
                        <div>
                            <input type="text" name="telefonos" id="telefonos" class="medium" value="<?php echo $contacto["telefonos"] ?>">
                            <span class="f_help">Limite de caracteres 37/<span class="telefonos"></span></span>
                        </div>
                    </div>
                   <div class="section">                                                                                                  
                        <label>Fax</label>
                        <div>
                           <input type="text" name="fax" id="fax" class="medium" value="<?php echo $contacto["fax"] ?>">
                            <span class="f_help">Limite de caracteres 33/<span class="fax"></span></span>
                            
                        </div>
                    </div>
                    <div class="section">                                                                                                  
                        <label>Correos</label>
                        <div>
                            <input type="text" name="correos" id="correos" class="medium" value="<?php echo $contacto["correos"] ?>">
                            <span class="f_help">Limite de caracteres 29/<span class="correos"></span></span>
                        </div>
                    </div>
                    <div class="section">
                       <?php if (!empty($contacto["imagen"])){ ?> 
                        <label>Imagen actual</label> <br /><br />
                        <div>
                            <img src="../../../../assets/img/contacto/<?php echo $contacto["imagen"] . "?" . rand(0, 9999999); ?>" width="250" />
                        </div>
                        <br />
                       <?php }else{?>
                        <label>Imagen </label><br /><br />
                       <?php }?>                      
                        <label>Subir nueva imagen (250px x 246px) (.png, .jpg)</label>
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
                            <th><span class="th_wrapp">Ciudad</span></th>
                            <th><span class="th_wrapp">Direccion 1</span></th>
                            <th><span class="th_wrapp">Direccion 2</span></th>
                            <th><span class="th_wrapp">Telefonos</span></th>
                            <th><span class="th_wrapp">Fax</span></th>
                            <th><span class="th_wrapp">Correos</span></th>
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
                                <td><?php echo $img["ciudad"] ?></td>
                                <td><?php echo $img["direccion1"] ?></td>
                                <td><?php echo $img["direccion2"] ?></td>
                                <td><?php echo $img["telefonos"] ?></td>
                                <td><?php echo $img["fax"] ?></td>   
                                <td><?php echo $img["correos"] ?></td>
                               
                                <td class="center" width="70px">
                                    <img src="../../../../assets/img/contacto/<?php echo $img["imagen"] . "?" . rand(0, 9999999); ?>" width="150" /><br/>
                                </td>
                                <td class="center ciudad" width="100px">
                                    <?php if(($i+1) != $fil){ ?>
                                    <a id="<?php echo $img["idcontacto"] ?>" class="Delete uibutton special" tableToDelete="contacto" nameField="idcontacto">Eliminar</a> 
                                    <?php } ?>
                                    <a class="uibutton icon edit" href="index.php?seccion=menu&id=<?= $img["idcontacto"] ?>">Editar</a>
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