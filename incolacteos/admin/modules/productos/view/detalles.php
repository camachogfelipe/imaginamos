<?php
$id = $_GET["id"];
// Validamos si hizo post y desea subir una imagen
if (isset($_POST["id"])) {
    $id = $_POST["id"];

    if ($id == 0) {
        
    } else {
        $tittulo = str_replace("'", '&#39;', GetData("titulo"));
        $tittulo = str_replace('"', '&#34;', $tittulo);
        $texto = str_replace("'", '&#39;', GetData("texto"));
        $texto = str_replace('"', '&#34;', $texto);
        $db->doQuery("UPDATE productos_detalles SET             
                    titulo='" . $tittulo . "',                             
                    texto='" . $texto . "',                             
                    receta='" . GetData("receta") . "'                             
                    WHERE id=" . $id, 4);
        $retorno = ClassFile::UploadImagenFile("img", "../../../../img/productos/california", "productos_" . $id, "520_300_productos_" . $id, 520, 300);
        if ($retorno["Status"] == "Uploader") {
            //  echo $retorno["NameFile"];
            $db->doQuery("UPDATE productos_detalles SET img='" . $retorno["NameFile"] . "' WHERE id=" . $id, 4);
            $val = 2;
        } else {
            //  echo $retorno["Error"];
            $val = 2;
        }
    }
}
// Consultamos la img actual del banner
$db->doQuery("SELECT * FROM productos_detalles WHERE id_productos=" . $id, 1);
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
            PRODUCTOS CALIFORNIA >> PRODUCTOS >> DETALLES
        </span>
    </div>
    <div class="content">
        <div class="formEl_b">

            <fieldset>
                <a class="uibutton confirm" href="index.php">Atr&aacute;s</a><br><br>
                <h3><?php echo ($id == 0) ? "Agregando" : "Editando" ?></h3>
                <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">
                    <input type="hidden" value="<?php echo $oficina["id"] ?>" name="id" id="id"> 
                    <div style="margin-top: 36px;">
                        <label>T&iacute;tulo</label>
                        <div>
                            <input type="text" id="titulo1" name="titulo" class="large validate[required]" data-validation-placeholder="" PlaceHolder="Agregar título" style=" margin-left: 200px; margin-top: -25px;" value="<?php echo $oficina["titulo"]; ?>" />
                            <span class="f_help" style="margin-left: 200px;"> Sin Límite<span class="titulo1"></span></span>
                        </div>
                    </div>                   
                    <div style="margin-top: 36px;">
                        <label>Texto</label>
                        <div>
                            <textarea id="texto"  class="large validate[required]" data-validation-placeholder=""  style="resize: none;height: 400px;margin-left: 200px;" placeholder="Agregar texto" name="texto"><?php echo $oficina["texto"]; ?></textarea>                                                     
                        </div>
                    </div> 
                    <div style="margin-top: 36px;">
                        <label>Receta asociada</label>
                        <div style="margin-left: 200px;">
                            <?php
                            $db->doQuery("SELECT id,titulo FROM recetas", 1);
                            $receta = $db->results;
                            ?>
                            <select name="receta">
                                <option value="0">Seleccione...</option>
                                <?php for ($a = 0, $b = count($receta); $a < $b; $a++) { ?>
                                    <option <?php echo ($oficina["receta"] == $receta[$a]["id"]) ? "selected='selected'" : "" ?> value="<?php echo $receta[$a]["id"] ?>"><?php echo utf8_encode($receta[$a]["titulo"]) ?></option> 
                                <?php }
                                ?>

                            </select>

                        </div>
                    </div>
                    <p>&nbsp;</p> 
                    <div style="margin-left: 200px;margin-top: 44px;">
                        <label style="position: absolute;margin-left: -201px;">Imagen</label>
                        <label style="color:red;">Subir imagen ( 520px  x  300px )</label><br><br>
                        <div>
                            <input type="file" name="img" id="img" />
                        </div>
                    </div>

                    <p>&nbsp;</p>          
                    <?php if ($id > 0) { ?>
                        <?php if ($oficina["img"] != "") { ?>
                            <div>
                                <label>Imagen</label>
                                <div  style="margin-left: 200px">
                                    <br><br>
                                    <img src="../../../../img/productos/california/520_300_<?php echo $oficina["img"] . "?" . rand(0, 9999999); ?>" width="520" height="300" />
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
<!--<script type="text/javascript" language="javascript">
    $('#titulo1').limit("21", ".titulo1");   
</script>-->