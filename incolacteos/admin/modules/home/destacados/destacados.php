<?php
$id = $_GET["id"];
$posss = array(1, 2, 3);
if (!in_array($id, $posss)) {
    echo "<script>window.location.href='index.php?seccion=menu'</script>";
}
if (isset($_POST["id"])) {
    $id = $_POST["id"];

    if ($id == 0) {
        echo "<script>window.location.href='index.php?seccion=menu'</script>";
    } else {

        if ($_FILES['img']['tmp_name'] != "") {
            if ($_FILES['img']['type'] != "image/jpeg" && $_FILES['img']['type'] != "image/png") {
                $val = 7;
            } else {
                //subimos la imagen 
                $retorno = ClassFile::UploadImagenFile("img", "../../../../img/destacados", "destacados_" . $id, "270_168_destacados_" . $id, 270, 168);
                if ($retorno["Status"] == "Uploader") {
                    //  echo $retorno["NameFile"];
                    $db->doQuery("UPDATE destacados_home SET img='" . $retorno["NameFile"] . "' WHERE id=" . $id, 4);
                    $val = 2;
                } else {

                    $val = 2;
                }
            }
            $db->doQuery("UPDATE destacados_home SET  
                                titulo='" . GetData("titulo") . "',
                                subtitulo='" . GetData("subtitulo") . "',                              
                                link='" . GetData("link") . "'                              
                                WHERE id=" . $id, 4); $val = 2;
        } else {
            $db->doQuery("UPDATE destacados_home SET  
                                titulo='" . GetData("titulo") . "',
                                subtitulo='" . GetData("subtitulo") . "',                              
                                link='" . GetData("link") . "'                              
                                WHERE id=" . $id, 4); $val = 2;
        }
    }
}


// Consultamos la img actual del banner
$db->doQuery("SELECT * FROM destacados_home WHERE id=" . $id, 1);
$oficina = $db->results[0];
?>

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
            HOME >> DESTACADOS >> <?php echo ($id == 0) ? "AGREGANDO" : "EDITANDO" ?>
        </span>
    </div>

    <div class="content">
        <div class="formEl_b">
            <!--Inicio del contenido del modulo-->

            <a class="uibutton icon normal answer" href="index.php">Atr&aacute;s</a>

            <fieldset>
                <h3><?php echo ($id == 0) ? "" : "EDITANDO DESTACADO" ?></h3>
                <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">

                    <input type="hidden" value="<?php echo $id ?>" name="id" id="id">
                    <div style="margin-top: 36px;">
                        <label>T&iacute;tulo azul claro</label>
                        <div style="margin-left: 200px;">
                            <input class="large validate[required]" type="text" name="titulo"  id="titulo1" placeholder="Agregar título azul claro" value="<?php echo $oficina["titulo"] ?>">
                            <span class="f_help">Limite de caracteres 13 / <span class="titulo1"></span> Caracteres</span>
                        </div>
                    </div>
                    <p>&nbsp;</p>
                    <div style="margin-top: 36px;">
                        <label>T&iacute;tulo azul oscuro</label>
                        <div style="margin-left: 200px;">
                            <input class="large validate[required]" type="text" name="subtitulo" id="subtitulo" placeholder="Agregar título azul oscuro" value="<?php echo $oficina["subtitulo"] ?>">
                            <span class="f_help">Limite de caracteres 13 / <span class="subtitulo"></span> Caracteres</span>
                        </div>
                    </div>
                    <p>&nbsp;</p>
                    <div style="margin-top: 36px;">
                        <label>Link ver m&aacute;s</label>
                        <div style="margin-left: 200px;">
                            <select name="link" >
                                <option value="index.php?seccion=index">Seleccione...</option>
                                <option <?php echo ($oficina["link"] == "index.php?seccion=index") ? "selected='selected'" : "" ?> value="index.php?seccion=index">Home</option>
                                <option <?php echo ($oficina["link"] == "index.php?seccion=california") ? "selected='selected'" : "" ?> value="index.php?seccion=california">Quienes somos</option>
                                <option <?php echo ($oficina["link"] == "index.php?seccion=productos-california") ? "selected='selected'" : "" ?>value="index.php?seccion=productos-california">Productos</option>
                                <option <?php echo ($oficina["link"] == "index.php?seccion=recetas-california") ? "selected='selected'" : "" ?>value="index.php?seccion=recetas-california">Recetas</option>
                                <option <?php echo ($oficina["link"] == "index.php?seccion=promociones") ? "selected='selected'" : "" ?> value="index.php?seccion=promociones">Promociones</option>
                                <option <?php echo ($oficina["link"] == "index.php?seccion=contacto") ? "selected='selected'" : "" ?>value="index.php?seccion=contacto">Cont&aacute;ctenos</option>
                                <option <?php echo ($oficina["link"] == "index.php?seccion=california") ? "selected='selected'" : "" ?>value="index.php?seccion=california">Quienes somos (California)</option>
                                <option <?php echo ($oficina["link"] == "index.php?seccion=productos-california") ? "selected='selected'" : "" ?>value="index.php?seccion=productos-california">Productos (California)</option>
                                <option <?php echo ($oficina["link"] == "index.php?seccion=lechesan") ? "selected='selected'" : "" ?>value="index.php?seccion=lechesan">Quienes somos (Lechesan)</option>
                                <option <?php echo ($oficina["link"] == "index.php?seccion=productos-lechesan") ? "selected='selected'" : "" ?>value="index.php?seccion=productos-lechesan">Productos (Lechesan)</option>
                                <option <?php echo ($oficina["link"] == "index.php?seccion=recetas-lechesan") ? "selected='selected'" : "" ?>value="index.php?seccion=recetas-lechesan">Recetas (Lechesan)</option>

                            </select>

                        </div>
                    </div>

                    <p>&nbsp;</p> 
                    <div style="margin-left: 200px;margin-top: 44px;">
                        <label style="position: absolute;margin-left: -201px;">Imagen</label>
                        <label style="color:red;">Subir imagen ( 270px  x  168px )</label><br>                      
                        <div>
                            <input type="file" name="img" id="img" />
                        </div>
                    </div><br>
                    <label style="position: absolute;margin-left: 201px;color:red;">Subir imagen  formato( .png , .jpg)</label><br><br>
                    <p>&nbsp;</p><p>&nbsp;</p>                   
                    <?php if ($id > 0) { ?>
                        <?php if ($oficina["img"] != "") { ?>
                            <div>
                                <label>Imagen</label>
                                <div>
                                    <br><br>
                                    <img src="../../../../img/destacados/270_168_<?php echo $oficina["img"] . "?" . rand(0, 9999999); ?>" width="449" height="202" />
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
    $('#titulo1').limit('13', '.titulo1');
    $('#subtitulo').limit('13', '.subtitulo');
    $('#texto').limit('55', '.texto');

</script>
<?php
if (isset($val)) {
    if (intval($val)) {
        if ($val == 7) {
            ?><script>showError('Formato imagen (PNG - JPG)',3000);</script>
            <?php
        } elseif ($val == 1) {
            ?><script>showSuccess('Agregado correctamente',8000)</script>
            <?php
        } elseif ($val == 2) {
            ?><script>showSuccess('Editado correctamente',8000)</script>
            <?php
        }
    }
}
?>  