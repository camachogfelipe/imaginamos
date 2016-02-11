<?php
$id = (int) $_GET["id"];
if (isset($_POST["id"])) {
    $id = $_POST["id"];
    if ($id == 0) {       
            //Primero creamos el campo en la bd
            $db->doQuery("INSERT INTO slide_english (id) VALUES (NULL)", INSERT_QUERY);
            $id = $db->getLastId();           
            //subimos la imagen 
            $retorno = ClassFile::UploadImagenFile("img", "../../../../imagenes/english", "english_" . $id, "980_380_english_" . $id, 980, 380);
          
            if ($retorno["Status"] == "Uploader") {
                //  echo $retorno["NameFile"];
                $db->doQuery("UPDATE slide_english SET img='" . $retorno["NameFile"] . "' WHERE id=" . $id, 4);
                $val = 1;
            } else {
                //  echo $retorno["Error"];
                $val = 2;
            }
            // $id= $ids;
        
    } else {
       
            $retorno = ClassFile::UploadImagenFile("img", "../../../../imagenes/english", "english_" . $id, "980_380_english_" . $id, 980, 380);
          
            if ($retorno["Status"] == "Uploader") {
                //  echo $retorno["NameFile"];
                $db->doQuery("UPDATE slide_english SET img='" . $retorno["NameFile"] . "' WHERE id=" . $id, 4);
                $val = 2;
            } else {
                //  echo $retorno["Error"];
                $val = 2;
            }
    }
    // $ids = $id;
}

// Consultamos la img actual del banner
$db->doQuery("SELECT * FROM slide_english WHERE id=" . $id, 1);
$oficina = $db->results[0];
?>
<!-- full width -->
<div class="widget">
    <div class="header">
        <span>
            <span class="ico gray window"></span>
            HOME >> BANNER >> <?php echo  ($id == 0) ? "AGREGANDO BANNER" : "EDITANDO BANNER" ?>
        </span>
    </div>

    <div class="content">
        <div class="formEl_b">
            <!--Inicio del contenido del modulo-->

            <a class="uibutton icon normal answer" href="index.php">Atr&aacute;s</a>

            <fieldset>
                <h3><?php echo  ($id == 0) ? "AGREGANDO " : "EDITANDO " ?></h3>

                <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">

                    <input type="hidden" value="<?php echo  $id ?>" name="id" id="id">

                    <div style="margin-left: 200px;margin-top: 44px;">
                        <label style="position: absolute;margin-left: -201px;">Imagen</label>
                        <label style="color:red;">Subir imagen ( 980px  x  380px )</label><br><br>
                        <div>
                            <input type="file" name="img" id="img" />
                        </div>
                    </div>
                    <p>&nbsp;</p><p>&nbsp;</p>

                    <p>&nbsp;</p><p>&nbsp;</p>
                    <p>&nbsp;</p><br><br>
                    <?php if ($id > 0) { ?>
                        <div style="margin-top: -228px;">
                            <label>Imagen actual </label>
                            <div>
                                <br><br>
                                <img src="../../../../imagenes/english/980_380_<?php echo $oficina["img"] . "?" . rand(0, 9999999); ?>" width="500" height="150" />
                            </div>
                        </div>
                        <p>&nbsp;</p>                      
                    <?php } ?>
                    <div><a id="submitForm" onclick="$('#forminterno').submit();" class="uibutton normal large">Guardar</a></div>
                </form>
            </fieldset>
            <p>&nbsp;</p>



        </div>
    </div>
    <!--Fin del Contenido del Modulo-->
</div>
<?php
if (isset($val)) {
    $erno = $val;
    if (intval($erno)) {
        if ($erno == 1) {
            echo '<script>setTimeout(\'alert("Banner agregado correctamente");\',400);</script>';
        }
        if ($erno == 2) {
            echo '<script>setTimeout(\'alert("Banner editado correctamente");\',400);</script>';
        }
        if ($erno == 3) {
            echo '<script>setTimeout(\'alert("Agrega todos los campos");\',400);</script>';
        }
    }
}
?>