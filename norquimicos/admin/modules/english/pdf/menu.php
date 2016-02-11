<?php
$id = 1;
// Validamos si hizo post y desea subir una imagen
if (isset($_POST["id"])) {
    $id = $_POST["id"];

    if ($id == 0) {
        $id = $db->getLastId();
    } else {
        $retorno = ClassFile::UploadFile("img", "../../../../imagenes/pdf/", "pdf_" . $id);
        if ($retorno["Status"] == "Uploader") {
            $db->doQuery("UPDATE pdf SET pdf='" . $retorno["NameFile"] . "' WHERE id=" . $id, 4);
            $val = 2;
        } else {
          //  echo $retorno["Error"];
            $val = 2;
        }
    }
}

// Consultamos la img actual del banner
$db->doQuery("SELECT * FROM pdf WHERE id=1", 1);
$oficina = $db->results;
?>

<!-- full width -->
<div class="widget">
    <div class="header">
        <span>
            <span class="ico gray window"></span>
            PDF 
        </span>
    </div>

    <div class="content">
        <div class="formEl_b">
            <!--Inicio del contenido del modulo-->
            <fieldset>
                <h3><?php echo  ($id == 0) ? "" : "Editando PDF" ?></h3>

                <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">

                    <input type="hidden" value="<?php echo  $id ?>" name="id" id="id">         
                    <div id="imagen" name="imagen">
                        <div style="margin-top: 36px;">

                            <label>PDF</label>
                            <div style="margin-left: 200px;">
                                <a target="_blank" href="../../../../imagenes/pdf/<?php echo  $oficina[0]["pdf"] ?>"> Ver PDF Activo </a>
                            </div><br><br>

                        </div>
                        <p>&nbsp;</p>
                        <div style="  margin-left: 200px; margin-top: -25px;">
                            <label style="color:red;">Cambiar PDF ( .pdf )</label>
                            <div>
                                <input  style=" margin-top: 13px;" type="file" name="img" id="img" />
                            </div>
                        </div>
                    </div>
                    <p>&nbsp;</p>

                </form>

            </fieldset>

            <p>&nbsp;</p>

            <div><a id="submitForm" onclick="$('#forminterno').submit();" class="uibutton normal large">Guardar</a></div>

        </div>
    </div>

    <!--Fin del Contenido del Modulo-->
</div>
<?php
if (isset($val)) {
  $erno = $val;
  if (intval($erno)) {
    if ($erno == 1) {
      echo '<script>setTimeout(\'alert("Bienvenidos agregado correctamente");\',400);</script>';
    }
    if ($erno == 2) {
      echo '<script>setTimeout(\'alert(" PDF editado correctamente");\',400);</script>';
    }
    if ($erno == 3) {
      echo '<script>setTimeout(\'alert("Agrega todos los campos ");\',400);</script>';
    }
  }
}
?>