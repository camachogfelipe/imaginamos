<?php
$db->doQuery("SELECT idbanner FROM banner  ORDER BY idbanner DESC Limit 1", 1);
$limit = $db->results[0];
$img = $limit["idbanner"] + 1;
if (isset($_POST["tipo"])) {
    $titulo = $_POST["titulo"];
    if($titulo == "" ){
        $Erno =2;
    }else{
        $titulo = str_replace("'", "&#39;" , $titulo);
        $titulo = str_replace('"', "&quot;", $titulo);
        $retorno = ClassFile::UploadImagenFile("img", "../../../../assets/img/banner", "banner_" . $img, "960_392_banner_" . $img, 960, 392);
        if ($retorno["Status"] == "Uploader") {
            $db->doQuery("INSERT INTO banner(titulo,imagen) VALUES ('" . $titulo . "','" . $retorno["NameFile"] . "')", 2);
            $Erno = 1;
        } else {
            $Erno = 3;
        }
    }
}
$db->doQuery("SELECT * FROM banner ORDER BY idbanner ASC", 1);
$fil = $db->rows;
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
                    <div class="section">                                                                                                  
                        <label>Titulo</label>
                        <div>
                            <input type="text" name="titulo" id="titu" class="medium" value="">
                            <span class="f_help">Limite de caracteres 38/<span class="titu"></span></span>
                        </div>
                    </div>
                    <div class="section">
                        <label>Imagen
                        </label>
                        <label>Subir nueva imagen (960px x 392px) (.png)</label>
                        <div>
                            <input type="file" name="img" id="img" />
                            <input type="hidden" value="1" name="tipo" id="tipo">
                        </div>
                    </div> 
                    <br />
                    <div><a id="submitForm"  class="uibutton large">Guardar</a></div>
                </form>
            </fieldset>
        <?php } else { ?>
            <label>Ya existen las 5 Banner permitidos</label><?php } ?>
            <br/><br/><br/>
        <fieldset>
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
                                    <img src="../../../../assets/img/banner/<?php echo $img["imagen"] . "?" . rand(0, 9999999); ?>" width="150" /><br/>
                                </td>
                                <td class="center titulo" width="100px">
                                    <?php if(($i+1) != $fil){ ?>
                                    <a id="<?php echo $img["idbanner"] ?>" class="Delete uibutton special" tableToDelete="banner" nameField="idbanner">Eliminar</a> 
                                    <?php } ?>
                                    <a class="uibutton icon edit" href="index.php?seccion=banner&id=<?= $img["idbanner"] ?>">Editar</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
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