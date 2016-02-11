<?php
$id = (int) $_GET["id"];
$band = (int) $_GET["band"];
if (isset($_POST["id"])) {
    $id = $_POST["id"];
    if ($id == 0) {
        // var_dump($_POST);exit;productos_cat/780_528_
        //Primero creamos el campo en la bd
        $db->doQuery("INSERT INTO lineas_img_principal (id,id_lineas_cat) VALUES (NULL," . GetData("band") . ")", INSERT_QUERY);
        $id = $db->getLastId();

        $retorno = ClassFile::UploadImagenFile("img", "../../../../imagenes/productos_cat", "productos_" . $id, "780_528_productos_" . $id, 780, 528);

        if ($retorno["Status"] == "Uploader") {
            //  echo $retorno["NameFile"];
            $db->doQuery("UPDATE lineas_img_principal SET img='" . $retorno["NameFile"] . "' WHERE id=" . $id, 4);
            $val = 1;
        } else {
            //  echo $retorno["Error"];
            $val = 2;
        }
        // $id= $ids;
    } else {
        $retorno = ClassFile::UploadImagenFile("img", "../../../../imagenes/productos_cat", "productos_" . $id, "780_528_productos_" . $id, 780, 528);

        if ($retorno["Status"] == "Uploader") {
            //  echo $retorno["NameFile"];
            $db->doQuery("UPDATE lineas_img_principal SET img='" . $retorno["NameFile"] . "' WHERE id=" . $id, 4);
            $val = 1;
        } else {
            //  echo $retorno["Error"];
            $val = 2;
        }
    }
    // $ids = $id;
}

// Consultamos la img actual del banner
$db->doQuery("SELECT * FROM lineas_img_principal WHERE id=" . $id, 1);
$oficina = $db->results[0];
?>
<script type="text/javascript">
    function cambiar(valor){
        if(valor ==1){
            document.getElementById("imagen").style.display= "";
            document.getElementById("video").style.display= "none";
        }else if(valor ==2 || valor == 3){
            document.getElementById("video").style.display= "";
            document.getElementById("imagen").style.display= "none";
        }
    }
</script>
<!-- full width -->
<div class="widget">
    <div class="header">
        <span>
            <span class="ico gray window"></span>
            LINEAS DE NEGOCIO >> CATEGORIAS >> PRODUCTOS 
        </span>
    </div>

    <div class="content">
        <div class="formEl_b">
            <!--Inicio del contenido del modulo-->

            <a class="uibutton icon normal answer" href="index.php?seccion=subcat&id=<?php echo  $band ?>">Atr&aacute;s</a>

            <fieldset>
                <h3><?php echo  ($id == 0) ? "AGREGANDO IMAGEN " : "EDITANDO IMAGEN " ?></h3>

                <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">

                    <input type="hidden" value="<?php echo  $id ?>" name="id" id="id">
                    <input type="hidden" value="<?php echo  $band ?>" name="band" id="band">

                    <div style="margin-left: 200px;margin-top: 44px;">
                        <label style="position: absolute;margin-left: -201px;">Imagen</label>
                        <label style="color:red;">Subir imagen ( 780px  x  528px )</label><br><br>
                        <div>
                            <input type="file" name="img" id="img" />
                        </div>
                    </div>
                    <p>&nbsp;</p><p>&nbsp;</p>         

                    <p>&nbsp;</p><br><br>
                    <?php if ($id > 0) { ?>
                        <div style="margin-top: -122px;position: absolute;margin-left: 200px;">
                            <label>Imagen actual</label>
                            <div style="margin-top: -20px;">
                                <br><br>
                                <img src="../../../../imagenes/productos_cat/780_528_<?php echo $oficina["img"] . "?" . rand(0, 9999999); ?>" height="150" />
                            </div>
                        </div>

                    <?php } ?>

                </form>
                <div><a id="submitForm" onclick="$('#forminterno').submit();" class="uibutton normal large">Guardar</a></div>
            </fieldset>
            <p>&nbsp;</p>



        </div>
    </div>


    <!--Fin del Contenido del Modulo-->
</div>
<script type="text/javascript" language="javascript">
    $('#titulo1').limit('12','.titulo1');
    $('#titulo2').limit('10','.titulo2');
    $('#titulo3').limit('8','.titulo3');  

</script>
<?php
if (isset($val)) {
    $erno = $val;
    if (intval($erno)) {
        if ($erno == 1) {
            echo '<script>setTimeout(\'alert("Slide agregado correctamente");\',400);</script>';
        }
        if ($erno == 2) {
            echo '<script>setTimeout(\'alert("Slide editado correctamente");\',400);</script>';
        }
        if ($erno == 3) {
            echo '<script>setTimeout(\'alert("Agrega todos los campos");\',400);</script>';
        }
    }
}
?>