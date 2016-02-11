<?php
$id = (int) $_GET["id"];
if (isset($_POST["id"])) {
    $id = $_POST["id"];
    if ($id == 0) {

        if ($_FILES['img']['type'] != "application/pdf") {
            $val = 7;
        } else {
            //Primero creamos el campo en la bd
            $db->doQuery("INSERT INTO archivos (id) VALUES (NULL)", INSERT_QUERY);
            $id = $db->getLastId();
            $db->doQuery("UPDATE archivos SET 
                                    fecha='" . date("Y-m-d") . "',
                                    titulo = '" . GetData('titulo') . "'
                                    WHERE id=" . $id, 4);
            //subimos la imagen UploadImagenFile("img", "../../../../img/pdf", "banner_" . $id, "850_290_banner_" . $id, 850, 290);
            $retorno = ClassFile::UploadFile("img", "../../../../img/pdf", "pdf_" . rand(1, 4000) . "_" . $id);
            if ($retorno["Status"] == "Uploader") {
                //  echo $retorno["NameFile"];
                $db->doQuery("UPDATE archivos SET fecha='" . date("Y-m-d") . "', pdf='" . $retorno["NameFile"] . "' WHERE id=" . $id, 4);
                $val = 1;
            } else {
                //  echo $retorno["Error"];
                $val = 2;
            }
        }
    } else {
        if ($_FILES['img']['type'] != "application/pdf") {
            $val = 7;
        } else {

            $db->doQuery("UPDATE archivos SET 
                                    fecha='" . date("Y-m-d") . "',
                                    titulo = '" . GetData('titulo') . "'
                                    WHERE id=" . $id, 4);
            //subimos la imagen UploadImagenFile("img", "../../../../img/pdf", "banner_" . $id, "850_290_banner_" . $id, 850, 290);
            $retorno = ClassFile::UploadFile("img", "../../../../img/pdf", "pdf_" . rand(1, 4000) . "_" . $id);
            if ($retorno["Status"] == "Uploader") {
                //  echo $retorno["NameFile"];
                $db->doQuery("UPDATE archivos SET pdf='" . $retorno["NameFile"] . "' WHERE id=" . $id, 4);
                $val = 2;
            } else {
                //  echo $retorno["Error"];
                $val = 2;
            }
        }
    }
    // $ids = $id;
}

// Consultamos la img actual del banner
$db->doQuery("SELECT * FROM archivos WHERE id=" . $id, 1);
$oficina = $db->results[0];
?>
<script type="text/javascript">
    function cambiar(valor) {
        if (valor == 1) {
            document.getElementById("imagen").style.display = "";
            document.getElementById("video").style.display = "none";
        } else if (valor == 2 || valor == 3) {
            document.getElementById("video").style.display = "";
            document.getElementById("imagen").style.display = "none";
        }
    }
    function validar() {
        if (document.forminterno.img.value == "") {
            alert("Debes agregar una archivo pdf")
        } else {
            $('#forminterno').submit();
        }
    }
</script>
<script type="text/javascript">

    $(function() {
        $("#forminterno").validationEngine();
    });
</script>
<!-- full width -->
<div class="widget">
    <div class="header">
        <span>
            <span class="ico gray window"></span>
            ZONA SEGURA >> ARCHIVOS PDF>> <?php echo ($id == 0) ? "AGREGANDO" : "EDITANDO" ?>
        </span>
    </div>

    <div class="content">
        <div class="formEl_b">
            <!--Inicio del contenido del modulo-->

            <a class="uibutton icon normal answer" href="index.php">Atr&aacute;s</a>

            <fieldset>
                <h3><?php echo ($id == 0) ? "AGREGANDO PDF" : "EDITANDO PDF" ?></h3>
                <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">

                    <input type="hidden" value="<?php echo $id ?>" name="id" id="id">
                    <div style="margin-top: 36px;">
                        <label>T&iacute;tulo</label>
                        <div>
                            <input type="text" id="titulo" name="titulo" class="validate[required]" data-validation-placeholder="" PlaceHolder="Agrega tu título" style="width: 325px; margin-left: 200px; margin-top: -25px;" value="<?php echo $oficina["titulo"]; ?>" />
                            <span class="f_help" style="margin-left: 200px;"> Límite de caracteres 58 / <span class="titulo"></span></span>
                        </div>
                    </div>
                    <p>&nbsp;</p>
                    <div style="margin-left: 200px;margin-top: 44px;">
                        <label style="position: absolute;margin-left: -201px;">Archivo</label>
                        <label style="color:red;">Subir archivo ( .pdf )</label><br><br>
                        <div>
                            <input type="file" name="img" id="img" />
                        </div>
                    </div>
                    <p>&nbsp;</p><p>&nbsp;</p>                   
                    <?php if ($id > 0) { ?>
                        <?php if ($oficina["pdf"] != "") { ?>
                            <div>
                                <label>Archivo (PDF) actual</label>
                                <div>
                                    <br><br>
                                    <a href="../../../../img/pdf/<?php echo $oficina["pdf"] . "?" . rand(0, 9999999); ?>" target="_blank">VER PDF </a>
                                </div>
                            </div>  
                            <?php
                        }
                    }
                    ?>
                </form>
            </fieldset>
            <p>&nbsp;</p>
            <div><a id="submitForm" onclick="validar();" class="uibutton normal large">Guardar</a></div>
        </div>
    </div>


    <!--Fin del Contenido del Modulo-->
</div>
<script type="text/javascript" language="javascript">
    $('#titulo').limit('80', '.titulo');
    $('#subtitulo').limit('22', '.subtitulo');
    $('#texto').limit('320', '.texto');

</script>
<?php
if (isset($val)) {
    $erno = $val;
    if (intval($erno)) {
        if ($erno == 1) {
            echo '<script>setTimeout(\'alert("Pdf agregado correctamente");\',400);</script>';
        }
        if ($erno == 2) {
            echo '<script>setTimeout(\'alert("Pdf editado correctamente");\',400);</script>';
        }
        if ($erno == 3) {
            echo '<script>setTimeout(\'alert("Agrega todos los campos");\',400);</script>';
        }
        if ($erno == 7) {
            echo '<script>setTimeout(\'alert("Debe subir un archivo con extensión PDF (.pdf)");\',400);</script>';
        }
    }
}
?>