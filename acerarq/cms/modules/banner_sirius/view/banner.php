<?php
$id = (int) $_GET["id"];
// Validamos si hizo post y desea subir una imagen
if (isset($_POST["id"])) {
    $titulo = $_POST["titulo"];
    $subtitulo = $_POST["subtitulo"];
    if($titulo == "" || $subtitulo == ""){
        $Erno = 2;
    }else{
        $titulo = str_replace("'", "&#39;" , $titulo);
        $titulo = str_replace('"', "&quot;", $titulo);
        $subtitulo = str_replace("'", "&#39;" , $subtitulo);
        $subtitulo = str_replace('"', "&quot;", $subtitulo);
    $db->doQuery("UPDATE banner_sirius SET titulo='" . $titulo . "',subtitulo='" . $subtitulo . "' WHERE idbanner_sirius=" . $id, 4);

    $retorno = ClassFile::UploadImagenFile("img", "../../../../assets/img/banner_sirius", "banner_" . $id, "520_392_banner_" . $id, 520, 392);
    if ($retorno["Status"] == "Uploader") {
        $db->doQuery("UPDATE banner_sirius SET imagen='" . $retorno["NameFile"] . "' WHERE idbanner_sirius=" . $id, 4);
        $Erno = 1;
    } else {
        
    }
    $Erno = 1;
    }
}

// Consultamos la img actual del banner
$db->doQuery("SELECT * FROM banner_sirius WHERE idbanner_sirius=" . $id, 1);
$banner = $db->results[0];
?>

<!-- full width -->
<div class="header">
    <span>
        <span class="ico gray window"></span>
        Informaci&oacute;n Banner
    </span>
</div>

<div class="content">
    <div class="formEl_b">
        <!--Inicio del contenido del modulo-->

        <a class="uibutton icon normal answer" href="index.php">Atr&aacute;s</a>

        <fieldset>

            <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">
                <input type="hidden" value="<?= $banner["banner_sirius"] ?>" name="id" id="id">
                <div class="section">                                                                                                  
                    <label>Titulo</label>
                    <div>
                        <input type="text" name="titulo" id="titu" class="medium" value="<?php echo $banner["titulo"] ?>">
                        <span class="f_help">Limite de caracteres 35/<span class="titu"></span></span>
                    </div>
                </div>
                <div class="section">                                                                                                  
                    <label>Titulo</label>
                    <div>
                        <input type="text" name="subtitulo" id="subtitu" class="medium" value="<?php echo $banner["subtitulo"] ?>">
                        <span class="f_help">Limite de caracteres 50/<span class="subtitu"></span></span>
                    </div>
                </div>
                <div class="section">
                    <label>Imagen actual</label> <br /><br />
                    <div>
                        <img src="../../../../assets/img/banner_sirius/<?php echo $banner["imagen"] . "?" . rand(0, 9999999); ?>" width="250" />
                    </div>
                    <br />
                    <div>
                        <label>Subir nueva imagen (520px x 392px)(.png)</label><br />
                        <input type="file" name="img" id="img" />
                    </div>
                </div>
                <br />
                <p>&nbsp;</p>
            </form>

        </fieldset>

        <p>&nbsp;</p>

        <div><a id="submitForm"  class="uibutton normal large">Guardar</a></div>

    </div>
</div>

<!--Fin del Contenido del Modulo-->
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