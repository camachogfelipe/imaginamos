<?php
$modulo='roscado'; 
$nivel=!empty($_REQUEST['nivel']) ? $_REQUEST['nivel'] : null; 
$db->doQuery("SELECT idroscado FROM roscado where modulo='".$modulo."' and nivel='".$nivel."'  ORDER BY idroscado DESC Limit 1", 1);
$limit = $db->results[0];
$img = $limit["idroscado"] + 1;

$id=!empty($_REQUEST['id']) ? $_REQUEST['id'] : null;  
$titulo=!empty($_POST['titulo']) ? $_POST['titulo'] : null; 
$texto=!empty($_POST['texto']) ? $_POST['texto'] : null; 
$paso=!empty($_POST['paso']) ? $_POST['paso'] : null;
$titulo = str_replace("'", "&#39;" , $titulo);
$titulo = str_replace('"', "&quot;", $titulo);
$texto = str_replace("'", "&#39;" , $texto);
$texto = str_replace('"', "&quot;", $texto);

if ($nivel=='0'){
    $idportafoliopadre=$id.'xxx';  
}else{
     $idportafoliopadre=!empty($_REQUEST['idpadre']) ? $_REQUEST['idpadre'] : 0; 
}

if (empty($id)){
    $retorno = ClassFile::UploadImagenFile("img", "../../../../assets/img/roscado", "roscado_" . $img, "960_392_roscado_" . $img, 960, 392);
}else{
    $retorno = ClassFile::UploadImagenFile("img", "../../../../assets/img/roscado", "roscado_" . $id, "960_392_roscado_" . $id, 960, 392);
}
$retorno["Status"]=!empty($retorno["Status"]) ? $retorno["Status"] : null;

if (empty($_REQUEST['id']) && isset($_POST['tipo'])){
    if($_POST['titulo'] == "" && $_POST['texto']=="" && $retorno=""){
        $Erno = 2;
    }else{
       if ($retorno["Status"] == "Uploader") {
           $sql="INSERT INTO roscado(modulo,titulo,texto,imagen,paso,nivel,idportafoliopadre) VALUES ('".$modulo."','".$titulo."','".$texto."','" . $retorno["NameFile"] . "','".$paso."','".$nivel."','".$idportafoliopadre."')";
          // echo $sql;
            $db->doQuery($sql, 2);
            $Erno = 1;
          } else {
           $Erno = 3;
        }
    }
}else if (!empty($_REQUEST['id']) && isset($_POST['tipo'])){
    if($_POST['titulo'] == ""  && $_POST['texto']=="" && $_POST['paso']=="" && $_POST['nivel']=="") {
            $Erno = 2;
     }else{
         $sql="UPDATE roscado SET titulo='" . $titulo . "',  texto='".$texto."', paso='".$paso."', nivel='".$nivel."', idportafoliopadre='".$idportafoliopadre."' WHERE idroscado=" . $id;
        // echo $sql;
         $db->doQuery($sql, 4);
         $Erno = 1;
       
        if ($retorno["Status"] == "Uploader") {
            $sql1="UPDATE roscado SET imagen='" . $retorno["NameFile"] . "' WHERE idroscado=" . $id;
          //  echo $sql1;
            $db->doQuery($sql1, 4);
            $Erno = 1;
        } else {

        }     
    }
}

if (empty($id)){
    $db->doQuery("SELECT * FROM roscado where modulo='".$modulo."' and nivel='".$nivel."' and idportafoliopadre='".$idportafoliopadre."' ORDER BY idroscado ASC", 1);
    $fil = $db->rows;
}

if (!empty($id)){
 //   echo "SELECT * FROM roscado WHERE idroscado=" . $id;
    $db->doQuery("SELECT * FROM roscado WHERE idroscado=" . $id, 1);
    $roscado = $db->results[0];
}
?>

<!-- full width -->
<div class="header"><span><span class="ico gray window"></span>Roscado</span>
</div><!-- End header -->
<div class="content">
        <a class="uibutton icon normal answer" href="../../roscado/view/">Atras</a>

    <div class="formEl_b">
        <?php if ($fil < 1) { ?>
            <fieldset>
                <legend><h1>Roscado</h1></legend>

                <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">
                    <input type="hidden" value="<?php echo $roscado["idroscado"] ?>" name="id" id="id">
                    <div class="section">                                                                                                  
                        <label>Titulo</label>
                        <div>
                            <input type="text" name="titulo" id="titulo" class="medium" value="<?php echo $roscado["titulo"] ?>">
                            <span class="f_help">Limite de caracteres 30/<span class="titulo"></span></span>
                         </div>
                    </div>
                   <div class="section">                                                                                                  
                        <label>Texto</label>
                        <div>
                            <textarea name="texto" id="texto" class="large"><?php echo $roscado["texto"] ?></textarea>
                            
                        </div>
                    </div>
                    <div class="section">
                       <?php if (!empty($roscado["imagen"])){ ?> 
                        <label>Imagen actual</label> <br /><br />
                        <div>
                            <img src="../../../../assets/img/roscado/<?php echo $roscado["imagen"] . "?" . rand(0, 9999999); ?>" width="250" />
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
                    
                    <div class="section">                                                                                                  
                        <label>Paso Siguiente</label>
                        <div>
                            <?php if ($nivel<7){ ?>
                           <select id="paso" name="paso">
				<option value="">-Seleccionar-</option>
				<option value="P">Portaherramientas</option>
				<option value="S">Subnivel</option>
			   </select>
                            <?php }else{ ?>
                            <select id="paso" name="paso">
				<option value="">-Seleccionar-</option>
				<option value="P">Portaherramientas</option>
			   </select>
                            <?php } ?>
                        </div>
                    </div>
                    <br />
                    <div>
                        <a id="submitForm"  class="uibutton large">Guardar</a>
                    
                    </div>
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
                            <th><span class="th_wrapp">Titulo</span></th>
                            <th><span class="th_wrapp">Texto</span></th>
                            <th><span class="th_wrapp">Imagen</span></th>
                            <th><span class="th_wrapp">Nivel</span></th>
                            <th><span class="th_wrapp">Acciones</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        for ($i = 0; $i < $fil; $i++) {
                            
                            $img = $db->results[$i];
                            ?>
                            <tr class="odd gradeX">
                                <td><?php echo $img["titulo"] ?></td>
                                <td><?php echo $img["texto"] ?></td>
                                <td class="center" width="70px">
                                    <img src="../../../../assets/img/roscado/<?php echo $img["imagen"] . "?" . rand(0, 9999999); ?>" width="150" /><br/>
                                </td>
                                <td><?php echo $img["nivel"] ?></td>
                                
                                
                                
                                <td class="center idtitulo" width="100px">
                                    <?php if(($i+1) != $fil){ ?>
                                    <a id="<?php echo $img["idroscado"] ?>" class="Delete uibutton special" tableToDelete="roscado" nameField="idroscado">Eliminar</a> 
                                    <?php } ?>
                                    <a class="uibutton icon edit" href="index.php?seccion=menu&id=<?= $img["idroscado"] ?>">Editar</a>
                                    <a class="uibutton icon edit" href="index.php?seccion=productos_roscado&nivel=<?= $nivel ?>&idroscado=<?= $img["idroscado"] ?>">Editar Opciones</a>
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