<?php

$db->doQuery("SELECT idbanner FROM banner  ORDER BY idbanner DESC Limit 1", 1);
$limit = $db->results[0];
$img = $limit["idbanner"] + 1;

$id=!empty($_REQUEST['id']) ? $_REQUEST['id'] : null;  
$titulo=!empty($_POST['titulo']) ? $_POST['titulo'] : null; 
$subtitulo1=!empty($_POST['subtitulo1']) ? $_POST['subtitulo1'] : null; 
$subtitulo2=!empty($_POST['subtitulo2']) ? $_POST['subtitulo2'] : null; 
$texto=!empty($_POST['texto']) ? $_POST['texto'] : null; 

$titulo = str_replace("'", "&#39;" , $titulo);
$titulo = str_replace('"', "&quot;", $titulo);
$texto = str_replace("'", "&#39;" , $texto);
$texto = str_replace('"', "&quot;", $texto);

if (empty($id)){
    $retorno = ClassFile::UploadImagenFile("img", "../../../../assets/img/banner", "banner_" . $img, "960_392_banner_" . $img, 960, 392);
}else{
    $retorno = ClassFile::UploadImagenFile("img", "../../../../assets/img/banner", "banner_" . $id, "960_392_banner_" . $id, 960, 392);
}
$retorno["Status"]=!empty($retorno["Status"]) ? $retorno["Status"] : null;

if (empty($_REQUEST['id']) && isset($_POST['tipo'])){
    if($_POST['titulo'] == "" && $_POST['subtitulo1']=="" && $_POST['subtitulo2']=="" && $_POST['texto']=="" && $retorno=""){
        $Erno = 2;
    }else{
       if ($retorno["Status"] == "Uploader") {
           $sql="INSERT INTO banner(titulo,subtitulo1,subtitulo2,texto,imagen) VALUES ('".$titulo."','".$subtitulo1."','".$subtitulo2."','".$texto."','" . $retorno["NameFile"] . "')";
          // echo $sql;
            $db->doQuery($sql, 2);
            $Erno = 1;
          } else {
           $Erno = 3;
        }
    }
}else if (!empty($_REQUEST['id']) && isset($_POST['tipo'])){
    if($_POST['titulo'] == "" && $_POST['subtitulo1']=="" && $_POST['subtitulo2']=="" && $_POST['texto']=="") {
            $Erno = 2;
     }else{
         $sql="UPDATE banner SET titulo='" . $titulo . "', subtitulo1='".$subtitulo1."', subtitulo2='".$subtitulo2."', texto='".$texto."' WHERE idbanner=" . $id;
        // echo $sql;
         $db->doQuery($sql, 4);
       
        if ($retorno["Status"] == "Uploader") {
            $sql1="UPDATE banner SET imagen='" . $retorno["NameFile"] . "' WHERE idbanner=" . $id;
          //  echo $sql1;
            $db->doQuery($sql1, 4);
            $Erno = 1;
        } else {

        }     
    }
}

if (empty($id)){
    $db->doQuery("SELECT * FROM banner ORDER BY idbanner ASC", 1);
    $fil = $db->rows;
}

if (!empty($id)){
    echo "SELECT * FROM banner WHERE idbanner=" . $id;
    $db->doQuery("SELECT * FROM banner WHERE idbanner=" . $id, 1);
    $banner = $db->results[0];
}
?>

<!-- full width -->
<div class="header"><span><span class="ico gray window"></span>Imagenes Banner</span>
</div><!-- End header -->
<div class="content">

    <div class="formEl_b">
        <?php if ($fil < 5) { ?>
            <fieldset>
                <legend><h1>Nuevo Banner</h1></legend>

                <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">
                    <input type="hidden" value="<?php echo $banner["idbanner"] ?>" name="id" id="id">
                    <div class="section">                                                                                                  
                        <label>Titulo</label>
                        <div>
                            <input type="text" name="titulo" id="titulo" class="medium" value="<?php echo $banner["titulo"] ?>">
                            <span class="f_help">Limite de caracteres 9/<span class="titulo"></span></span>
                        </div>
                    </div>
                    <div class="section">                                                                                                  
                        <label>SubTitulo 1</label>
                        <div>
                            <input type="text" name="subtitulo1" id="subtitulo1" class="medium" value="<?php echo $banner["subtitulo1"] ?>">
                            <span class="f_help">Limite de caracteres 10/<span class="subtitulo1"></span></span>
                        </div>
                    </div>
                    <div class="section">                                                                                                  
                        <label>SubTitulo 2</label>
                        <div>
                            <input type="text" name="subtitulo2" id="subtitulo2" class="medium" value="<?php echo $banner["subtitulo2"] ?>">
                            <span class="f_help">Limite de caracteres 12/<span class="subtitulo2"></span></span>
                        </div>
                    </div>
                   <div class="section">                                                                                                  
                        <label>Texto</label>
                        <div>
                            <textarea name="texto" id="texto" class="large"><?php echo $banner["texto"] ?></textarea>
                            
                        </div>
                    </div>
                    <div class="section">
                       <?php if (!empty($banner["imagen"])){ ?> 
                        <label>Imagen actual</label> <br /><br />
                        <div>
                            <img src="../../../../assets/img/banner/<?php echo $banner["imagen"] . "?" . rand(0, 9999999); ?>" width="250" />
                        </div>
                        <br />
                       <?php }else{?>
                        <label>Imagen </label><br /><br />
                       <?php }?>                      
                        <label>Subir nueva imagen (640px x 438px) (.png, .jpg)</label>
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
            <label>Ya existen las 5 Banner permitidos</label><?php } ?>
            <br/><br/><br/>
        <fieldset>
         <?php if (empty($id)){ ?>
        <div class="tableName toolbar">
                <table class="display data_table2" >
                    <thead>
                        <tr>
                            <th><span class="th_wrapp">Titulo</span></th>
                            <th><span class="th_wrapp">SubTitulo1</span></th>
                            <th><span class="th_wrapp">SubTitulo2</span></th>
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
                                <td><?php echo $img["subtitulo1"] ?></td>
                                <td><?php echo $img["subtitulo2"] ?></td>
                                <td class="center" width="70px">
                                    <img src="../../../../assets/img/banner/<?php echo $img["imagen"] . "?" . rand(0, 9999999); ?>" width="150" /><br/>
                                </td>
                                <td class="center titulo" width="100px">
                                    <?php if(($i+1) != $fil){ ?>
                                    <a id="<?php echo $img["idbanner"] ?>" class="Delete uibutton special" tableToDelete="banner" nameField="idbanner">Eliminar</a> 
                                    <?php } ?>
                                    <a class="uibutton icon edit" href="index.php?seccion=menu&id=<?= $img["idbanner"] ?>">Editar</a>
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