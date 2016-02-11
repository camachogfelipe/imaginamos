<?php

$db->doQuery("SELECT idtaladrado FROM taladrado  ORDER BY idtaladrado DESC Limit 1", 1);
$limit = $db->results[0];
$img = $limit["idtaladrado"] + 1;

$id=!empty($_REQUEST['id']) ? $_REQUEST['id'] : null;  
$titulo=!empty($_POST['titulo']) ? $_POST['titulo'] : null; 
$texto=!empty($_POST['texto']) ? $_POST['texto'] : null; 

$titulo = str_replace("'", "&#39;" , $titulo);
$titulo = str_replace('"', "&quot;", $titulo);
$texto = str_replace("'", "&#39;" , $texto);
$texto = str_replace('"', "&quot;", $texto);

if (empty($id)){
    $retorno = ClassFile::UploadImagenFile("img", "../../../../assets/img/taladrado", "taladrado_" . $img, "960_392_taladrado_" . $img, 960, 392);
}else{
    $retorno = ClassFile::UploadImagenFile("img", "../../../../assets/img/taladrado", "taladrado_" . $id, "960_392_taladrado_" . $id, 960, 392);
}
$retorno["Status"]=!empty($retorno["Status"]) ? $retorno["Status"] : null;

if (empty($_REQUEST['id']) && isset($_POST['tipo'])){
    if($_POST['titulo'] == "" && $_POST['texto']=="" && $retorno=""){
        $Erno = 2;
    }else{
       if ($retorno["Status"] == "Uploader") {
           $sql="INSERT INTO taladrado(titulo,texto,imagen) VALUES ('".$titulo."','".$texto."','" . $retorno["NameFile"] . "')";
          // echo $sql;
            $db->doQuery($sql, 2);
            $Erno = 1;
          } else {
           $Erno = 3;
        }
    }
}else if (!empty($_REQUEST['id']) && isset($_POST['tipo'])){
    if($_POST['titulo'] == ""  && $_POST['texto']=="") {
            $Erno = 2;
     }else{
         $sql="UPDATE taladrado SET titulo='" . $titulo . "',  texto='".$texto."' WHERE idtaladrado=" . $id;
        // echo $sql;
         $db->doQuery($sql, 4);
         $Erno = 1;
       
        if ($retorno["Status"] == "Uploader") {
            $sql1="UPDATE taladrado SET imagen='" . $retorno["NameFile"] . "' WHERE idtaladrado=" . $id;
          //  echo $sql1;
            $db->doQuery($sql1, 4);
            $Erno = 1;
        } else {

        }     
    }
}

if (empty($id)){
    $db->doQuery("SELECT * FROM taladrado ORDER BY idtaladrado ASC", 1);
    $fil = $db->rows;
}

if (!empty($id)){
 //   echo "SELECT * FROM taladrado WHERE idtaladrado=" . $id;
    $db->doQuery("SELECT * FROM taladrado WHERE idtaladrado=" . $id, 1);
    $taladrado = $db->results[0];
}
?>

<!-- full width -->
<div class="header"><span><span class="ico gray window"></span>Taladrado</span>
</div><!-- End header -->
<div class="content">

    <div class="formEl_b">
        <?php if ($fil < 10) { ?>
            <fieldset>
                <legend><h1>Taladrado</h1></legend>

                <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">
                    <input type="hidden" value="<?php echo $taladrado["idtaladrado"] ?>" name="id" id="id">
                    <div class="section">                                                                                                  
                        <label>Titulo</label>
                        <div>
                            <input type="text" name="titulo" id="titulo" class="medium" value="<?php echo $taladrado["titulo"] ?>">
                            <span class="f_help">Limite de caracteres 30/<span class="titulo"></span></span>
                        </div>
                    </div>
                   <div class="section">                                                                                                  
                        <label>Texto</label>
                        <div>
                            <textarea name="texto" id="texto" class="large"><?php echo $taladrado["texto"] ?></textarea>
                            
                        </div>
                    </div>
                    <div class="section">
                       <?php if (!empty($taladrado["imagen"])){ ?> 
                        <label>Imagen actual</label> <br /><br />
                        <div>
                            <img src="../../../../assets/img/taladrado/<?php echo $taladrado["imagen"] . "?" . rand(0, 9999999); ?>" width="250" />
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
                    <div>
                        <a id="submitForm"  class="uibutton large">Guardar</a>
                        <a href="index.php?seccion=img_taladrado"  class="uibutton large">Imagen Porta Herramienta</a>
                    
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
                                    <img src="../../../../assets/img/taladrado/<?php echo $img["imagen"] . "?" . rand(0, 9999999); ?>" width="150" /><br/>
                                </td>
                                <td class="center idtitulo" width="100px">
                                    <a id="<?php echo $img["idtaladrado"] ?>" class="Delete uibutton special" tableToDelete="taladrado" nameField="idtaladrado">Eliminar</a> 
                                    <a class="uibutton icon edit" href="index.php?seccion=menu&id=<?= $img["idtaladrado"] ?>">Editar</a>
                                    <a class="uibutton icon edit" href="index.php?seccion=porta_taladrado&idtaladrado=<?= $img["idtaladrado"] ?>">Crear Portaherramienta</a>
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