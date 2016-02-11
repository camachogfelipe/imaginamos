<?php
$id = $_GET["id"];
// Validamos si hizo post y desea subir una imagen
if (isset($_POST["id"])) {
    $id = $_POST["id"];

    if ($id == 0) {

        if ($_FILES['img']['type'] != "image/jpeg" && $_FILES['img']['type'] != "image/png" && $_FILES['thumb']['type'] != "image/jpeg" && $_FILES['thumb']['type'] != "image/png") {
            $val = 7;
        } else {
            $count = count($_POST["lugares"]);
            $lugares = "";
            for ($a = 0, $b = $count; $a < $b; $a++) {
                $lugares .= $_POST["lugares"][$a] . ",";
            }
            $db->doQuery("INSERT INTO recetas (id) VALUES (NULL)", INSERT_QUERY);
            $id = $db->getLastId();
            $tittulo = str_replace("'", '&#39;', GetData("titulo"));
            $tittulo = str_replace('"', '&#34;', $tittulo);
            $texto = str_replace("'", '&#39;', GetData("texto"));
            $texto = str_replace('"', '&#34;', $texto);
            $texto = strip_tags($texto, '<br><p><a><h1><h2><h3><h4><h5><h6><font><li><ul><ol>');
            $db->doQuery("UPDATE recetas SET             
                    titulo='" . $tittulo . "',
                     asociados='" . $lugares . "',
                    texto_ingredientes='" . $texto . "'                    
                    WHERE id=" . $id, 4);
            $retorno = ClassFile::UploadImagenFile("img", "../../../../img/recetas", "recetas_" . $id, "350_300_recetas_" . $id, 350, 300);
            if ($retorno["Status"] == "Uploader") {
                //  echo $retorno["NameFile"];
                $db->doQuery("UPDATE recetas SET img='" . $retorno["NameFile"] . "' WHERE id=" . $id, 4);
                $val = 1;
            } else {
                //  echo $retorno["Error"];
                $val = 2;
            }
            $retorno1 = ClassFile::UploadImagenFile("thumb", "../../../../img/recetas", "recetas_" . $id, "162_152_recetas_" . $id, 162, 152);
            if ($retorno1["Status"] == "Uploader") {
                //  echo $retorno["NameFile"];
                $db->doQuery("UPDATE recetas SET thumb='" . $retorno1["NameFile"] . "' WHERE id=" . $id, 4);
                $val = 1;
            } else {
                //  echo $retorno["Error"];
                $val = 2;
            }
        }
    } else {
        $count = count($_POST["lugares"]);
        $lugares = "";
        for ($a = 0, $b = $count; $a < $b; $a++) {
            $lugares .= $_POST["lugares"][$a] . ",";
        }
        $tittulo = str_replace("'", '&#39;', GetData("titulo"));
        $tittulo = str_replace('"', '&#34;', $tittulo);
        $texto = str_replace("'", '&#39;', GetData("texto"));
        $texto = str_replace('"', '&#34;', $texto);
        $texto = strip_tags($texto, '<br><p><ul><li><ol><a><h1><h2><h3><h4><h5><h6><font>');
        $db->doQuery("UPDATE recetas SET             
                    titulo='" . $tittulo . "',                             
                    asociados='" . $lugares . "',                             
                    texto_ingredientes='" . $texto . "'                    
                    WHERE id=" . $id, 4);
        $retorno = ClassFile::UploadImagenFile("img", "../../../../img/recetas", "recetas_" . $id, "350_300_recetas_" . $id, 350, 300);
        if ($retorno["Status"] == "Uploader") {
            //  echo $retorno["NameFile"];
            $db->doQuery("UPDATE recetas SET img='" . $retorno["NameFile"] . "' WHERE id=" . $id, 4);
            $val = 2;
        } else {
            //  echo $retorno["Error"];
            $val = 2;
        }
        $retorno1 = ClassFile::UploadImagenFile("thumb", "../../../../img/recetas", "recetas_" . $id, "162_152_recetas_" . $id, 162, 152);
        if ($retorno1["Status"] == "Uploader") {
            //  echo $retorno["NameFile"];
            $db->doQuery("UPDATE recetas SET thumb='" . $retorno1["NameFile"] . "' WHERE id=" . $id, 4);
            $val = 2;
        } else {
            //  echo $retorno["Error"];
            $val = 2;
        }
    }
}
// Consultamos la img actual del banner
$db->doQuery("SELECT * FROM recetas WHERE id=" . $id, 1);
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
            RECETAS
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
                            <span class="f_help" style="margin-left: 200px;"> Limite de caracteres 33 / <span class="titulo1"></span></span>
                        </div>
                    </div>
                    <div style="margin-top: 36px;">
                        <label>Texto ingredientes</label>
                        <div>
                            <textarea id="texto"  class="large validate[required]" data-validation-placeholder=""  style="resize: none;height: 100px;margin-left: 200px;" placeholder="Agregar texto" name="texto"><?php echo $oficina["texto_ingredientes"]; ?></textarea>                                                     

                        </div>
                    </div>

                    <div style="margin-left: 200px;margin-top: 44px;">
                        <label style="position: absolute;margin-left: -201px;">Imagen grande</label>
                        <label style="color:red;">Subir imagen ( 350px  x  300px )</label><br><br>
                        <div>
                            <input type="file" name="img" id="img" />
                        </div>
                    </div>

                    <p>&nbsp;</p>          
                    <div style="margin-left: 200px;margin-top: 44px;">
                        <label style="position: absolute;margin-left: -201px;">Imagen peque&ntilde;a</label>
                        <label style="color:red;">Subir imagen ( 162px  x  152px )</label><br><br>
                        <div>
                            <input type="file" name="thumb" id="img" />
                        </div>
                    </div>

                    <p>&nbsp;</p>          
                    <?php if ($id > 0) { ?>
                        <?php if ($oficina["img"] != "") { ?>
                            <div>
                                <label>Imagen</label>
                                <div  style="margin-left: 200px">
                                    <br><br>
                                    <img src="../../../../img/recetas/350_300_<?php echo $oficina["img"] . "?" . rand(0, 9999999); ?>" width="350" height="300" />
                                </div>
                            </div>  
                            <?php
                        }
                        if ($oficina["thumb"] != "") {
                            ?>
                            <div>
                                <label>Imagen</label>
                                <div  style="margin-left: 200px">
                                    <br><br>
                                    <img src="../../../../img/recetas/162_152_<?php echo $oficina["thumb"] . "?" . rand(0, 9999999); ?>" width="162" height="152" />
                                </div>
                            </div>  
                            <?php
                        }
                    }
                    ?>
                    <p>&nbsp;</p>
                    <div class="tabla_lugar">
                        <label>Recetas asociadas</label><br><br>
                        <table style="margin-top: 5px;margin-left: 200px;width: 500px;">                            
                            <tbody>
                                <?php
                                $db->doQuery("SELECT * FROM recetas", 1);
                                $rece = $db->results;
                                for ($a = 0, $b = count($rece); $a < $b; $a++) {
                                    echo ($a == 0) ? "<tr>" : "";
                                    echo ($a != 0 && $a % 3 == 3) ? "</tr><tr>" : "";
                                    ?>
                                <td>
                                    <input type="checkbox" name="lugares[]" style="margin-left: 7px;" value="<?php echo $rece[$a]["id"] ?>" <?php
                                if (strstr($oficina["asociados"], $rece[$a]["id"])) {
                                    echo "checked='checked'";
                                }
                                    ?>>
                                </td>
                                <td><?php echo utf8_encode($rece[$a]["titulo"]) ?></td>
                            <?php }
                            ?>


                            </tr>


                            </tbody>
                        </table>
                    </div>
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
    $('#titulo1').limit("33", ".titulo1");
  //  $("#texto").cleditor();
</script>