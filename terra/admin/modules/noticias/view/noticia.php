<?php
$id = $_GET["id"];
// Validamos si hizo post y desea subir una imagen
if (isset($_POST["id"])) {
    $id = $_POST["id"];

    if ($id == 0) {
        $db->doQuery("INSERT INTO noticias (id) VALUES (NULL)", INSERT_QUERY);
        $id = $db->getLastId();
        $tittulo = str_replace("'", '&#39;', GetData("titulo"));
        $tittulo = str_replace('"', '&#34;', $tittulo);
        $texto = str_replace("'", '&#39;', GetData("texto"));
        $texto = str_replace('"', '&#34;', $texto);
        $db->doQuery("UPDATE noticias SET             
                    titulo='" . $tittulo . "',                                      
                    fecha='" . GetData("fecha") . "',                                      
                    texto='" . $texto . "',                   
                    posicion=" . GetData("posicion") . "                  
                    WHERE id=" . $id, 4);
        $retorno = ClassFile::UploadImagenFile("img", "../../../../img/noticias/", "noticias_" . $id, "300_200_noticias_" . $id, 300, 200);
        if ($retorno["Status"] == "Uploader") {
            //  echo $retorno["NameFile"];
            $db->doQuery("UPDATE noticias SET img='" . $retorno["NameFile"] . "' WHERE id=" . $id, 4);
            $val = 1;
        } else {
            //  echo $retorno["Error"];
            $val = 2;
        }
    } else {
        $tittulo = str_replace("'", '&#39;', GetData("titulo"));
        $tittulo = str_replace('"', '&#34;', $tittulo);
        $texto = str_replace("'", '&#39;', GetData("texto"));
        $texto = str_replace('"', '&#34;', $texto);
        $db->doQuery("UPDATE noticias SET             
                    titulo='" . $tittulo . "',                                      
                    fecha='" . GetData("fecha") . "',                                      
                    texto='" . $texto . "',                   
                    posicion=" . GetData("posicion") . "                  
                    WHERE id=" . $id, 4);
        $retorno = ClassFile::UploadImagenFile("img", "../../../../img/noticias/", "noticias_" . $id, "300_200_noticias_" . $id, 300, 200);
        if ($retorno["Status"] == "Uploader") {
            //  echo $retorno["NameFile"];
            $db->doQuery("UPDATE noticias SET img='" . $retorno["NameFile"] . "' WHERE id=" . $id, 4);
            $val = 2;
        } else {
            //  echo $retorno["Error"];
            $val = 2;
        }
    }
}
// Consultamos la img actual del banner
$db->doQuery("SELECT * FROM noticias WHERE id=" . $id, 1);
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
            NOTICIAS
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
                            <input type="text" id="titulo" name="titulo" class="validate[required]" data-validation-placeholder="" PlaceHolder="Agregar título" style="width: 325px; margin-left: 200px; margin-top: -25px;" value="<?php echo $oficina["titulo"]; ?>" />
                            <span class="f_help" style="margin-left: 200px;"> Límite de caracteres 67 / <span class="titulo"></span></span>
                        </div>
                    </div> 
                    <p>&nbsp;</p>                                                    
                    <div style="margin-top: 36px;">
                        <label>Fecha</label>
                        <div>
                            <input type="text" id="fecha" name="fecha" class="datepicker  validate[required]" data-validation-placeholder="" PlaceHolder="Agregar fecha" style="width: 325px; margin-left: 200px; margin-top: -25px;" value="<?php echo $oficina["fecha"]; ?>" />                            
                        </div>
                    </div> 
                    <p>&nbsp;</p>                                                    
                    <div style="margin-top: 36px;">
                        <label>Texto</label>
                        <div>
                            <textarea style="width: 600px;margin-left: 200px;margin-top: -25px;height: 127px;" class="validate[required]" data-validation-placeholder=""  PlaceHolder="Agregar texto" name="texto" id="texto" style="width: 325px; margin-left: 200px; margin-top: -25px;"><?php echo $oficina["texto"]; ?></textarea>
                        </div>
                    </div>
                    <p>&nbsp;</p>      
                    <div style="margin-top: 36px;">
                        <label>Posicion</label>
                        <div>
                            <select name="posicion" >
                                <option <?php echo ($oficina["posicion"] =="")? "selected='selected'" :"" ;?> value="1">Seleccione ...</option>
                                <option <?php echo ($oficina["posicion"] ==1 )? "selected='selected'" :"" ;?> value="1">Ganader&iacute;a y equinos</option>
                                <option <?php echo ($oficina["posicion"] ==2 )? "selected='selected'" :"" ;?>value="2">Piscicultura</option>
                                <option <?php echo ($oficina["posicion"] ==3 )? "selected='selected'" :"" ;?>value="3">Agroindustria</option>
                            </select>
                        </div>
                    </div>
                    <p>&nbsp;</p>      
                    <div style="margin-left: 200px;margin-top: 44px;">
                        <label style="position: absolute;margin-left: -201px;">Imagen</label>
                        <label style="color:red;">Subir imagen ( 300px  x  200px )</label><br><br>
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
                                    <img src="../../../../img/noticias/300_200_<?php echo $oficina["img"] . "?" . rand(0, 9999999); ?>" width="300" height="200" />
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
            echo '<script>setTimeout(\'alert("Noticia agregada correctamente");\',400);</script>';
        }
        if ($erno == 2) {
            echo '<script>setTimeout(\'alert("Noticia editada correctamente");\',400);</script>';
        }
    }
}
?>
<script type="text/javascript" language="javascript">
    $('#titulo').limit("67", ".titulo");
   
</script>