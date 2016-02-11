<?php
$id = (int) $_GET["id"];
if (isset($_POST["id"])) {
    $id = $_POST["id"];
    if ($id == 0) {
        
        if ($_FILES['img']['type'] != "image/jpeg" && $_FILES['img']['type'] != "image/png") {
            $val = 7;
        } else {
            //Primero creamos el campo en la bd
            $db->doQuery("INSERT INTO banner (id) VALUES (NULL)", INSERT_QUERY);
            $id = $db->getLastId();
           // $remplazo = array("'"=>"&#34;",'"'=>"&#39;");
            $titulo = str_replace("'", "&#39;", GetData('titulo'));
            $titulo = str_replace('"', "&#34;", $titulo);
            $posicion = str_replace("'", "&#39;", GetData('posicion'));
            $posicion = str_replace('"', "&#34;", $posicion);
            $texto = str_replace("'", "&#39;", GetData('texto'));
            $texto = str_replace('"', "&#34;",$texto);
            $db->doQuery("UPDATE banner SET 
                                titulo='" . $titulo . "',
                                link='" . $posicion . "',
                                texto='" . $texto . "'
                                WHERE id=" . $id, 4);
            //subimos la imagen 
            $retorno = ClassFile::UploadImagenFile("img", "../../../../img/banner", "banner_" . $id, "1349_608_banner_" . $id, 1349, 608);
            if ($retorno["Status"] == "Uploader") {
                //  echo $retorno["NameFile"];
                $db->doQuery("UPDATE banner SET img='" . $retorno["NameFile"] . "' WHERE id=" . $id, 4);
                $val = 1;
            } else {
                //  echo $retorno["Error"];
                $val = 2;
            }
        }
    } else {
        
        if ($_FILES['img']['tmp_name'] != "") {
            if ($_FILES['img']['type'] != "image/jpeg" && $_FILES['img']['type'] != "image/png") {
                $val = 7;
            }
        } else {
            $titulo = str_replace("'", "&#39;", GetData('titulo'));
            $titulo = str_replace('"', "&#34;", $titulo);
            $posicion = str_replace("'", "&#39;", GetData('posicion'));
            $posicion = str_replace('"', "&#34;", $posicion);
            $texto = str_replace("'", "&#39;", GetData('texto'));
            $texto = str_replace('"', "&#34;",$texto);
            $db->doQuery("UPDATE banner SET 
                                titulo='" . $titulo . "',
                                link='" . $posicion . "',
                                texto='" . $texto . "'
                                WHERE id=" . $id, 4);
            $retorno = ClassFile::UploadImagenFile("img", "../../../../img/banner", "banner_" . $id, "1349_608_banner_" . $id, 1349, 608);
            if ($retorno["Status"] == "Uploader") {
                //  echo $retorno["NameFile"];
                $db->doQuery("UPDATE banner SET img='" . $retorno["NameFile"] . "' WHERE id=" . $id, 4);
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
$db->doQuery("SELECT * FROM banner WHERE id=" . $id, 1);
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
            alert("Debes agregar una imagen")
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
            HOME >> BANNER >> <?php echo ($id == 0) ? "AGREGANDO" : "EDITANDO" ?>
        </span>
    </div>

    <div class="content">
        <div class="formEl_b">
            <!--Inicio del contenido del modulo-->

            <a class="uibutton icon normal answer" href="index.php">Atr&aacute;s</a>

            <fieldset>
                <h3><?php echo ($id == 0) ? "AGREGANDO BANNER" : "EDITANDO BANNER" ?></h3>
                <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">

                    <input type="hidden" value="<?php echo $id ?>" name="id" id="id">
                    <div style="margin-top: 36px;">
                        <label>T&iacute;tulo</label>
                        <div>
                            <input type="text" id="titulo" name="titulo" class="validate[required]" data-validation-placeholder="" PlaceHolder="Agrega tu título" style="width: 325px; margin-left: 200px; margin-top: -25px;" value="<?php echo $oficina["titulo"]; ?>" />
                            <span class="f_help" style="margin-left: 200px;"> Límite de caracteres 20 / <span class="titulo"></span></span>
                        </div>
                    </div> 
                    <p>&nbsp;</p>    
                    <div style="margin-top: 36px;">
                        <label>Texto</label>
                        <div>
                            <textarea style="width: 600px;margin-left: 200px;margin-top: -25px;height: 127px;" class="validate[required]" data-validation-placeholder=""  PlaceHolder="Agrega tu texto" name="texto" id="texto" style="width: 325px; margin-left: 200px; margin-top: -25px;"><?php echo $oficina["texto"]; ?></textarea>
                            <span class="f_help" style="margin-left: 200px;"> Límite de caracteres 55 / <span class="texto"></span></span>
                        </div>
                    </div>
                    <div style="margin-top: 36px;">
                        <label>Link ver m&aacute;s</label>
                        <div style="margin-left: 200px;">
                            <select name="posicion" >
                                <option value="index.php?seccion=index">Selecciones...</option>
                                <option <?php echo ($oficina["link"] == "index.php?seccion=index") ? "selected='selected'" : "" ?> value="index.php?seccion=index">Home</option>
                                <option <?php echo ($oficina["link"] == "index.php?seccion=servicios") ? "selected='selected'" : "" ?> value="index.php?seccion=servicios">Servicios</option>
                                <option <?php echo ($oficina["link"] == "index.php?seccion=servicio-1") ? "selected='selected'" : "" ?>value="index.php?seccion=servicio-1">Ganader&iacute;a y equinos</option>
                                <option <?php echo ($oficina["link"] == "index.php?seccion=servicio-2") ? "selected='selected'" : "" ?>value="index.php?seccion=servicio-2">Piscicultura</option>
                                <option <?php echo ($oficina["link"] == "index.php?seccion=servicio-3") ? "selected='selected'" : "" ?> value="index.php?seccion=servicio-3">Agroindustria</option>
                                <option <?php echo ($oficina["link"] == "index.php?seccion=noticias") ? "selected='selected'" : "" ?>value="index.php?seccion=noticias">Noticias</option>
                                <option <?php echo ($oficina["link"] == "index.php?seccion=empresa") ? "selected='selected'" : "" ?>value="index.php?seccion=empresa">Acerca de nosotros</option>
                                <option <?php echo ($oficina["link"] == "index.php?seccion=contacto") ? "selected='selected'" : "" ?>value="index.php?seccion=contacto">Cont&aacute;ctenos</option>
                            </select>

                        </div>
                    </div>
                    <p>&nbsp;</p> 
                    <div style="margin-left: 200px;margin-top: 44px;">
                        <label style="position: absolute;margin-left: -201px;">Imagen</label>
                        <label style="color:red;">Subir imagen ( 1349px  x  608px )</label><br>
                        <label style="color:red;">Subir imagen  formato( .png , .jpg)</label><br><br>
                        <div>
                            <input type="file" name="img" id="img" />
                        </div>
                    </div>

                    <p>&nbsp;</p><p>&nbsp;</p>                   
                    <?php if ($id > 0) { ?>
                        <?php if ($oficina["img"] != "") { ?>
                            <div>
                                <label>Imagen</label>
                                <div>
                                    <br><br>
                                    <img src="../../../../img/banner/1349_608_<?php echo $oficina["img"] . "?" . rand(0, 9999999); ?>" width="449" height="202" />
                                </div>
                            </div>  
                            <?php
                        }
                    }
                    ?><br><br>
                    <div><a id="submitForm" onclick="$('#forminterno').submit();" class="uibutton normal large">Guardar</a></div>
                </form>
            </fieldset>
            <p>&nbsp;</p>

        </div>
    </div>


    <!--Fin del Contenido del Modulo-->
</div>
<script type="text/javascript" language="javascript">
    $('#titulo').limit('20', '.titulo');
    $('#subtitulo').limit('22', '.subtitulo');
    $('#texto').limit('55', '.texto');

</script>
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
        if ($erno == 7) {
            echo '<script>setTimeout(\'alert("Imagen recomendada, (.jpg , .png)");\',400);</script>';
        }
    }
}
?>