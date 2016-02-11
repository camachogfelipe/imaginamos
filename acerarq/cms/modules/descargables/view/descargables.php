<?php
$id = (int) $_GET["id"];
// Validamos si hizo post y desea subir una imagen
if (isset($_POST["id"])) {
    $id = $_POST["id"];
    $titulo = $_POST["titu"];
    $texto = $_POST["texto"];
    if($titulo == "" || $texto == ""){
        $Erno = 2;
    }else{
    $db->doQuery("UPDATE descargables SET titulo='" . $titulo . "',texto='".$texto."' WHERE iddescargables=" . $id, 4);

    $retorno = ClassFile::UploadImagenFile("img", "../../../../assets/img/descargables", "descargables_" . $id, "170_100_descargables_" . $id, 170, 100);
    if ($retorno["Status"] == "Uploader") {
        $db->doQuery("UPDATE descargables SET imagen='" . $retorno["NameFile"] . "' WHERE iddescargables=" . $id, 4);
        $Erno = 1;
    }
    $retorno2 = ClassFile::UploadFile("archivo", "../../../../assets/img/descargables/archivos");
    if ($retorno2["Status"] == "Uploader") {
            $db->doQuery("UPDATE descargables SET archivo='" . $retorno2["NameFile"] . "' WHERE iddescargables=" . $id, 4);
            $Erno = 1;
        }
    $Erno = 1;
        }
}

// Consultamos la img actual del banner
$db->doQuery("SELECT * FROM descargables WHERE iddescargables=" . $id, 1);
$data = $db->results[0];
?>

<div class="header">
    <span>
        <span class="ico gray window"></span>Descargables</span>
</div>

<div class="content">
    <div class="formEl_b">
        <!--Inicio del contenido del modulo-->
         <a class="uibutton icon normal answer" href="index.php">Atr&aacute;s</a>
        <fieldset>
            <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">
                <input type="hidden" value="<?php echo $data["iddescargables"]; ?>" name="id" id="id">
                <div class="section">                                                                                                  
                    <label>Titulo</label>
                    <div>
                        <input type="text" name="titu" id="titu" class="medium" value="<?php echo $data["titulo"]?>">
                        <span class="f_help">Limite de caracteres 25/<span class="titu"></span></span>
                    </div>
                </div>
                <div class="section">
                    <label>Texto Descriptivo</label>
                    <div>
                        <textarea name="texto" id="texto" class="large"><?php echo $data["texto"]?></textarea>
                        <span class="f_help"> Limite de caracteres 127/<span class="texto"></span></span>
                    </div>
                </div>
                <div class="section">
                    <label>Imagen actual </label> <br /><br />
                    <div>
                        <img src="../../../../assets/img/descargables/<?php echo $data["imagen"] . "?" . rand(0, 9999999); ?>" width="150" />
                    </div>
                    <br />
                    <div>
                      <label>Subir nueva imagen (170px x 100px) (.jpg - .png)</label><br />
                        <input type="file" name="img" id="img" />
                    </div>
                </div>
                <div class="section">
                    <label>Archivo actual </label> <br /><br />
                    <div>
                        <a target="_blank" href="../../../../assets/img/descargables/archivos/<?php echo $data["archivo"] ?>"><img src="../../../../assets/img/pdf.jpg" width="150" /> </a>
                    </div>
                    <br />
                    <div>
                        <label>Archivo  formato Pdf</label><br />
                        <input type="file" name="archivo" id="archivo" />
                    </div>
                </div>
            </form>
            <p>&nbsp;</p>

            <div><a id="submitForm" class="uibutton normal large">Guardar</a></div>

        </fieldset>
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
            ?><script>showError('Max. 727 caracteres en el texto Descriptivo',8000)</script>
            <?php
        } elseif ($valor == 5) {
            ?><script>showError('No selecciono imagen',8000)</script>
            <?php
        }
    }
}
?>