<?php
$db->doQuery("SELECT idbanner_sirius FROM banner_sirius  ORDER BY idbanner_sirius DESC Limit 1", 1);
$limit = $db->results[0];
$img = $limit["idbanner_sirius"] + 1;
if (isset($_POST["tipo"])) {
    $titulo = $_POST["titulo"];
    $subtitulo = $_POST["subtitulo"];
    if($titulo == "" || $subtitulo == "" ){
        $Erno =2;
    }else{
        $titulo = str_replace("'", "&#39;" , $titulo);
        $titulo = str_replace('"', "&quot;", $titulo);
        $subtitulo = str_replace("'", "&#39;" , $subtitulo);
        $subtitulo = str_replace('"', "&quot;", $subtitulo);
        $retorno = ClassFile::UploadImagenFile("img", "../../../../assets/img/banner_sirius", "banner_" . $img, "520_392_banner_" . $img, 520, 392);
        if ($retorno["Status"] == "Uploader") {
            $db->doQuery("INSERT INTO banner_sirius(titulo,subtitulo,imagen) VALUES ('" . $titulo . "','" . $subtitulo . "','" . $retorno["NameFile"] . "')", 2);
            $Erno = 1;
        } else {
            $Erno = 3;
        }
    }
}
$db->doQuery("SELECT * FROM banner_sirius ORDER BY idbanner_sirius ASC", 1);
$fil = $db->rows;
?>

<!-- full width -->
<div class="header"><span><span class="ico gray window"></span>Imagenes Banner</span>
</div><!-- End header -->
<div class="content">

    <div class="formEl_b">
        <?php if ($fil < 4) { ?>
            <fieldset>
                <legend><h1>Nuevo Banner</h1></legend>

                <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">
                    <div class="section">                                                                                                  
                        <label>Titulo</label>
                        <div>
                            <input type="text" name="titulo" id="titu" class="medium" value="">
                            <span class="f_help">Limite de caracteres 35/<span class="titu"></span></span>
                        </div>
                    </div>
                    <div class="section">                                                                                                  
                        <label>Subtitulo</label>
                        <div>
                            <input type="text" name="subtitulo" id="subtitu" class="medium" value="">
                            <span class="f_help">Limite de caracteres 50/<span class="subtitu"></span></span>
                        </div>
                    </div>
                    <div class="section">
                        <label>Imagen
                        </label>
                        <label>Subir nueva imagen (520px x 392px) (.png)</label>
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
            <label>Ya existen las 4 Banner permitidos</label><?php } ?>
        <table class="display" >
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
                            <img src="../../../../assets/img/banner_sirius/<?php echo $img["imagen"] . "?" . rand(0, 9999999); ?>" width="150" /><br/>
                        </td>
                        <td class="center titulo" width="100px">
                            <?php if($fil > 1){ ?>
                            <a id="<?php echo $img["idbanner_sirius"] ?>" class="Delete uibutton special" tableToDelete="banner_sirius" nameField="idbanner_sirius">Eliminar</a> 
                            <?php } ?>
                            <a class="uibutton icon edit" href="index.php?seccion=banner&id=<?= $img["idbanner_sirius"] ?>">Editar</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

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