<?php
$id = 1;
// Validamos si hizo post y desea subir una imagen
if (isset($_POST["id"])) {
    $id = $_POST["id"];

    if ($id == 0) {
        $id = 1;
    } else {
        
        $texto = str_replace("'", '&#39;',  GetData("texto"));
        $texto = str_replace('"', '&#34;', $texto);
        //print_r(GetData("texto"));    exit;
        $db->doQuery("UPDATE cont_contactenos SET                         
                    texto='" .$texto . "',                   
                    correo='" . GetData("correo") . "'                   
                    WHERE id=" . $id, 4);
        $retorno = ClassFile::UploadImagenFile("img", "../../../../img/contacto", "contacto_" . $id, "450_200_contacto_" . $id, 450, 200);
        if ($retorno["Status"] == "Uploader") {
            //  echo $retorno["NameFile"];
            $db->doQuery("UPDATE cont_contactenos SET img='" . $retorno["NameFile"] . "' WHERE id=" . $id, 4);
            $val = 1;
        } else {
            //  echo $retorno["Error"];
            $val = 2;
        }
        $val = 2;
    }
}
// Consultamos la img actual del banner
$db->doQuery("SELECT * FROM cont_contactenos WHERE id=" . $id, 1);
$oficina = $db->results[0];
?>
<script type="text/javascript">
    $(function() {
        $('#forminterno').validationEngine();
    });
</script>
<!-- full width -->
<div class="widget">
    <div class="header">
        <span>
            <span class="ico gray window"></span>
            CONT&Aacute;CTENOS
        </span>
    </div>
    <div class="content">
        <div class="formEl_b">

            <fieldset>
                <a class="uibutton confirm" href="index.php?seccion=lista">Agregar direcci&oacute;n f&iacute;sica</a><br><br>
                <a class="uibutton confirm" href="index.php?seccion=lista2">Agregar correo electr&oacute;nico</a><br><br>
                <h3><?php echo ($id == 0) ? "" : "Editando" ?></h3>
                <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">
                    <input type="hidden" value="<?php echo $id ?>" name="id" id="id">

                    <p>&nbsp;</p>                              
                    <div style="margin-top: 36px;">
                        <label>Texto</label>
                        <div>
                            <textarea style="width: 600px;margin-left: 200px;margin-top: -25px;height: 127px;" class="validate[required]" data-validation-placeholder=""  PlaceHolder="Agregar texto" name="texto" id="texto" style="width: 325px; margin-left: 200px; margin-top: -25px;"><?php echo $oficina["texto"]; ?></textarea>

                        </div>
                    </div>
                    <p>&nbsp;</p> 
                     <div style="margin-top: 36px;">
                         <label>Correo de env&iacute;o</label>
                        <div>
                            <input type="text" id="titulo" name="correo" class="validate[required,custom[email]]" data-validation-placeholder="" PlaceHolder="Agregar correo de envío" style="width: 325px; margin-left: 200px; margin-top: -25px;" value="<?php echo $oficina["correo"]; ?>" />
                            <span class="f_help" style="margin-left: 200px;"> Límite de caracteres 58 / <span class="titulo"></span></span>
                        </div>
                    </div> 
                    <p>&nbsp;</p>      
                    <div style="margin-left: 200px;margin-top: 44px;">
                        <label style="position: absolute;margin-left: -201px;">Imagen</label>
                        <label style="color:red;">Subir imagen ( 450px  x  200px )</label><br><br>
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
                                    <img src="../../../../img/contacto/450_200_<?php echo $oficina["img"] . "?" . rand(0, 9999999); ?>" width="450" height="200" />
                                </div>
                            </div>  
                            <?php
                        }
                    }
                    ?>
                </form>        
            </fieldset>
            <p>&nbsp;</p>
            <div><a id="submitForm" onclick="$('#forminterno').submit();" class="uibutton normal large">Guardar</a></div>
        </div>
    </div>
    <!--Fin del Contenido del Modulo-->
</div>
<script>
    cambiar(<?php echo $oficina["id_tipos"] ?>);
</script>
<?php
if (isset($val)) {
    $erno = $val;
    if (intval($erno)) {
        if ($erno == 1) {
            echo '<script>setTimeout(\'alert("Contacto agregado correctamente");\',400);</script>';
        }
        if ($erno == 2) {
            echo '<script>setTimeout(\'alert("Contacto editado correctamente");\',400);</script>';
        }
    }
}
?>
<script type="text/javascript" language="javascript">
    $('#titulo').limit("44", ".titulo");
    $('#descripcion').limit("308", ".descripcion");
</script>