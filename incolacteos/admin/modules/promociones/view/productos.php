<?php
$id = $_GET["id"];
// Validamos si hizo post y desea subir una imagen
if (isset($_POST["id"])) {
    $id = $_POST["id"];

    if ($id == 0) {

        if ($_FILES['img']['type'] != "image/jpeg" && $_FILES['img']['type'] != "image/png") {
            $val = 7;
        } else {
            $db->doQuery("INSERT INTO promociones (id) VALUES (NULL)", INSERT_QUERY);
            $id = $db->getLastId();
            $tittulo = str_replace("'", '&#39;', GetData("titulo"));
            $tittulo = str_replace('"', '&#34;', $tittulo);
            $texto = str_replace("'", '&#39;', GetData("texto"));
            $texto = str_replace('"', '&#34;', $texto);
            $db->doQuery("UPDATE promociones SET             
                    titulo='" . $tittulo . "',                             
                    texto='" . $texto . "'                                         
                    WHERE id=" . $id, 4);
            $db->doQuery("INSERT INTO promociones_detalles (id,id_promociones) VALUES (NULL,$id)", INSERT_QUERY);
            $retorno = ClassFile::UploadImagenFile("img", "../../../../img/promociones", "productos_" . $id, "166_151_productos_" . $id, 166, 151);
            if ($retorno["Status"] == "Uploader") {
                //  echo $retorno["NameFile"];
                $db->doQuery("UPDATE promociones SET img='" . $retorno["NameFile"] . "' WHERE id=" . $id, 4);
                $val = 1;
            } else {
                //  echo $retorno["Error"];
                $val = 2;
            }
        }
    } else {
        $tittulo = str_replace("'", '&#39;', GetData("titulo"));
        $tittulo = str_replace('"', '&#34;', $tittulo);
        $texto = str_replace("'", '&#39;', GetData("texto"));
        $texto = str_replace('"', '&#34;', $texto);
        $db->doQuery("UPDATE promociones SET             
                    titulo='" . $tittulo . "',                             
                    texto='" . $texto . "'                                         
                    WHERE id=" . $id, 4);
        $retorno = ClassFile::UploadImagenFile("img", "../../../../img/promociones", "productos_" . $id, "166_151_productos_" . $id, 166, 151);
        if ($retorno["Status"] == "Uploader") {
            //  echo $retorno["NameFile"];
            $db->doQuery("UPDATE promociones SET img='" . $retorno["NameFile"] . "' WHERE id=" . $id, 4);
            $val = 2;
        } else {
            //  echo $retorno["Error"];
            $val = 2;
        }
    }
}
// Consultamos la img actual del banner
$db->doQuery("SELECT * FROM promociones WHERE id=" . $id, 1);
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
           PROMOCIONES
        </span>
    </div>
    <div class="content">
        <div class="formEl_b">

            <fieldset>
                <a class="uibutton confirm" href="index.php">Atr&aacute;s</a><br><br>
                <h3><?php echo ($id == 0) ? "Agregando" : "Editando" ?></h3>
                <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">
                    <input type="hidden" value="<?php echo $id ?>" name="id" id="id"> 
                    <div style="margin-top: 36px;">
                        <label>T&iacute;tulo</label>
                        <div>
                            <input type="text" id="titulo1" name="titulo" class="large validate[required]" data-validation-placeholder="" PlaceHolder="Agregar título" style=" margin-left: 200px; margin-top: -25px;" value="<?php echo $oficina["titulo"]; ?>" />
                            <span class="f_help" style="margin-left: 200px;"> Limite de caracteres 79 / <span class="titulo1"></span></span>
                        </div>
                    </div>   
                    <p>&nbsp;</p>
                      <div style="margin-top: 36px;">
                        <label>Texto</label>
                        <div>
                            <textarea id="texto"  class="large validate[required]" data-validation-placeholder=""  style="resize: none;height: 100px;margin-left: 200px;" placeholder="Agregar texto" name="texto"><?php echo $oficina["texto"]; ?></textarea>                                                     
                             <span class="f_help" style="margin-left: 200px;"> Limite de caracteres 278 / <span class="texto"></span></span>
                        </div>
                    </div>    
                    <p>&nbsp;</p>
                    <div style="margin-left: 200px;margin-top: 44px;">
                        <label style="position: absolute;margin-left: -201px;">Imagen</label>
                        <label style="color:red;">Subir imagen ( 166px  x  151px )</label><br><br>
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
                                    <img src="../../../../img/promociones/166_151_<?php echo $oficina["img"] . "?" . rand(0, 9999999); ?>" width="166" height="151" />
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
<script type="text/javascript" language="javascript">
    $('#titulo1').limit("79", ".titulo1");
    $('#texto').limit("278", ".texto");
   
</script>