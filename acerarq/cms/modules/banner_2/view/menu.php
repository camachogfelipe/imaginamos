<?php
$db->doQuery("SELECT idbanner_dos FROM banner_dos  ORDER BY idbanner_dos DESC Limit 1", 1);
$limit = $db->results[0];
$img = $limit["idbanner_dos"] + 1;
if (isset($_POST["tipo"])) {
    $titulo = $_POST["titulo"];
    if($titulo == "" ){
        $Erno =2;
    }else{
        $titulo = str_replace("'", "&#39;" , $titulo);
        $titulo = str_replace('"', "&quot;", $titulo);
        $retorno = ClassFile::UploadImagenFile("img", "../../../../assets/img/banner_dos", "banner_" . $img, "234_206_banner_" . $img, 234, 206);
        if ($retorno["Status"] == "Uploader") {
            $db->doQuery("INSERT INTO banner_dos(titulo,imagen) VALUES ('" . $titulo . "','" . $retorno["NameFile"] . "')", 2);
            $Erno = 1;
        } else {
            $Erno = 3;
        }
    }
}
$db->doQuery("SELECT * FROM banner_dos ORDER BY idbanner_dos ASC", 1);
$fil = $db->rows;
?>

<!-- full width -->
<div class="header"><span><span class="ico gray window"></span>Imagenes Banner Sirius</span>
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
                            <span class="f_help">Limite de caracteres 51/<span class="titu"></span></span>
                        </div>
                    </div>
                    <div class="section">
                        <label>Imagen
                        </label>
                        <label>Subir nueva imagen (234px x 206px) (.png)</label>
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
                            <img src="../../../../assets/img/banner_dos/<?php echo $img["imagen"] . "?" . rand(0, 9999999); ?>" width="150" /><br/>
                        </td>
                        <td class="center titulo" width="100px">
                            <?php if($fil > 1){ ?>
                            <a id="<?php echo $img["idbanner_dos"] ?>" class="Delete uibutton special" tableToDelete="banner_dos" nameField="idbanner_dos">Eliminar</a> 
                            <?php } ?>
                            <a class="uibutton icon edit" href="index.php?seccion=banner&id=<?= $img["idbanner_dos"] ?>">Editar</a>
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