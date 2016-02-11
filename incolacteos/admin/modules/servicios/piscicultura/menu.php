<?php
$id = 2;
// Validamos si hizo post y desea subir una imagen
if (isset($_POST["id"])) {
    $id = $_POST["id"];

    if ($id == 0) {
        $id = 1;
    } else {
        //print_r(GetData("texto"));    exit;
           $desc = str_replace("'",'"', GetData("descripcion"));
        $texto = str_replace("'",'"', GetData("texto"));
        //print_r(GetData("texto"));    exit;
        $db->doQuery("UPDATE servicios SET             
                    titulo='" . GetData("titulo") . "',
                    texto_corto='" . $desc . "',
                    texto_largo='" . $texto . "',
                    posicion=2 
                    WHERE id=" . $id, 4);
        $retorno = ClassFile::UploadImagenFile("img", "../../../../img/servicios/equinos", "equinos_" . $id, "274_374_equinos_" . $id, 274, 374);
        if ($retorno["Status"] == "Uploader") {
            //  echo $retorno["NameFile"];
            $db->doQuery("UPDATE servicios SET img='" . $retorno["NameFile"] . "' WHERE id=" . $id, 4);
            $val = 1;
        } else {
            //  echo $retorno["Error"];
            $val = 2;
        }
        $val = 2;
    }
}
// Consultamos la img actual del banner
$db->doQuery("SELECT * FROM servicios WHERE id=" . $id, 1);
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
            SERVICIOS >> PISCICULTURA 
        </span>
    </div>
    <div class="content">
        <div class="formEl_b">
            
            <fieldset>
                 <a class="uibutton confirm" href="index.php?seccion=lista">Agregar contenido</a><br><br>
                <h3><?php echo ($id == 0) ? "" : "Editando" ?></h3>
                <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">
                    <input type="hidden" value="<?php echo $id ?>" name="id" id="id"> 
                    <div style="margin-top: 36px;">
                        <label>T&iacute;tulo</label>
                        <div>
                            <input type="text" id="titulo" name="titulo" class="validate[required]" data-validation-placeholder="" PlaceHolder="Agrega tu título" style="width: 325px; margin-left: 200px; margin-top: -25px;" value="<?php echo $oficina["titulo"]; ?>" />
                            <span class="f_help" style="margin-left: 200px;"> Límite de caracteres 50 / <span class="titulo"></span></span>
                        </div>
                    </div> 
                    <p>&nbsp;</p>    
                    <div style="margin-top: 36px;">
                        <label>Descripci&oacute;n</label>
                        <div>
                            <textarea style="width: 600px;margin-left: 200px;margin-top: -25px;height: 127px;" class="validate[required]" data-validation-placeholder=""  PlaceHolder="Agregar descripcion" name="descripcion" id="descripcion" style="width: 325px; margin-left: 200px; margin-top: -25px;"><?php echo $oficina["texto_corto"]; ?></textarea>
                            <span class="f_help" style="margin-left: 200px;"> Límite de caracteres 308 / <span class="descripcion"></span></span>
                        </div>
                    </div>
                    <p>&nbsp;</p>                              
                    <div style="margin-top: 36px;">
                        <label>Texto completo</label>
                        <div>
                            <textarea style="width: 600px;margin-left: 200px;margin-top: -25px;height: 127px;" class="validate[required]" data-validation-placeholder=""  PlaceHolder="Agregar texto" name="texto" id="texto" style="width: 325px; margin-left: 200px; margin-top: -25px;"><?php echo $oficina["texto_largo"]; ?></textarea>

                        </div>
                    </div>
                    <p>&nbsp;</p>      
                    <div style="margin-left: 200px;margin-top: 44px;">
                        <label style="position: absolute;margin-left: -201px;">Imagen</label>
                        <label style="color:red;">Subir imagen ( 274px  x  374px )</label><br><br>
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
                                    <img src="../../../../img/servicios/equinos/274_374_<?php echo $oficina["img"] . "?" . rand(0, 9999999); ?>" width="274" height="374" />
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
            echo '<script>setTimeout(\'alert("Servicio agregado correctamente");\',400);</script>';
        }
        if ($erno == 2) {
            echo '<script>setTimeout(\'alert("Servicio editado correctamente");\',400);</script>';
        }
    }
}
?>
<script type="text/javascript" language="javascript">
    $('#titulo').limit("50", ".titulo");
    $('#descripcion').limit("308", ".descripcion");
</script>