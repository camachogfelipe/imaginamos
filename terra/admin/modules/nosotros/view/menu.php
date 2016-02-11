<?php
$id = 1;
// Validamos si hizo post y desea subir una imagen
if (isset($_POST["id"])) {
    $id = $_POST["id"];

    if ($id == 0) {
        $id = 1;
    } else {       
        //print_r(GetData("texto"));    exit;
        $tittulo = str_replace("'", '&#39;', GetData("titulo1"));
        $tittulo = str_replace('"', '&#34;', $tittulo);
        $tittulo2 = str_replace("'", '&#39;', GetData("titulo2"));
        $tittulo2 = str_replace('"', '&#34;', $tittulo2);
				$tittulo3 = str_replace("'", '&#39;', GetData("titulo3"));
        $tittulo3 = str_replace('"', '&#34;', $tittulo3);
        $texto = str_replace("'", '&#39;', GetData("texto"));
        $texto = str_replace('"', '&#34;', $texto);
        $texto2 = str_replace("'", '&#39;', GetData("texto2"));
        $texto2 = str_replace('"', '&#34;', $texto2);
				$texto3 = str_replace("'", '&#39;', GetData("texto3"));
        $texto3 = str_replace('"', '&#34;', $texto3);
        $db->doQuery("UPDATE nosotros SET 
                        titulo1='" .$tittulo. "',
                        titulo2='" . $tittulo2 . "', 
												titulo3='" . $tittulo3 . "', 
                        texto='" . $texto . "',
                        texto2='" . $texto2 . "',
												texto3='" . $texto3 . "' 
                        WHERE id=" . $id, 4);
        $retorno = ClassFile::UploadImagenFile("img", "../../../../img/nosotros", "nosotros_" . $id, "500_150_nosotros_" . $id, 500, 150);
        if ($retorno["Status"] == "Uploader") {
            //  echo $retorno["NameFile"];
            $db->doQuery("UPDATE nosotros SET img1='" . $retorno["NameFile"] . "' WHERE id=" . $id, 4);
            $val = 2;
        } else {
            //  echo $retorno["Error"];
            $val = 2;
        } $retorno1 = ClassFile::UploadImagenFile("img1", "../../../../img/nosotros", "nosotros1_" . $id, "500_150_nosotros1_" . $id, 500, 150);
        if ($retorno1["Status"] == "Uploader") {
            //  echo $retorno["NameFile"];
            $db->doQuery("UPDATE nosotros SET img2='" . $retorno1["NameFile"] . "' WHERE id=" . $id, 4);
            $val = 2;
        } else {
            //  echo $retorno["Error"];
            $val = 2;
        } $retorno2 = ClassFile::UploadImagenFile("img2", "../../../../img/nosotros", "nosotros2_" . $id, "400_610_nosotros2_" . $id, 400, 610);
        if ($retorno2["Status"] == "Uploader") {
            //  echo $retorno["NameFile"];
            $db->doQuery("UPDATE nosotros SET img3='" . $retorno2["NameFile"] . "' WHERE id=" . $id, 4);
            $val = 2;
        } else {
            //  echo $retorno["Error"];
            $val = 2;
        }
    }
}
// Consultamos la img actual del banner
$db->doQuery("SELECT * FROM nosotros WHERE id=" . $id, 1);
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
            ¿QUIÉNES SOMOS? >> EDITANDO 
        </span>
    </div>
    <div class="content">
        <div class="formEl_b">
            <fieldset>
                <h3>CONTENIDO SUPERIOR</h3>
                <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">
                    <input type="hidden" value="<?php echo $id ?>" name="id" id="id"> 
                    <div style="margin-top: 36px;">
                        <label>T&iacute;tulo superior</label>
                        <div>
                            <input type="text" id="titulo1" name="titulo1" class="validate[required]" data-validation-placeholder="" PlaceHolder="Agrega tu título superior" style="width: 325px; margin-left: 200px; margin-top: -25px;" value="<?php echo $oficina["titulo1"]; ?>" />
                            <span class="f_help" style="margin-left: 200px;"> Límite de caracteres 35 / <span class="titulo1"></span></span>
                        </div>
                    </div> 
                    <p>&nbsp;</p>    
                    <div style="margin-top: 36px;">
                        <label>Texto superior</label>
                        <div>
                            <textarea style="width: 600px;margin-left: 200px;margin-top: -25px;height: 127px;" class="validate[required]" data-validation-placeholder=""  PlaceHolder="Agrega tu texto superior" name="texto" id="texto"><?php echo $oficina["texto"]; ?></textarea>

                        </div>
                    </div>
                    <div style="margin-left: 200px;margin-top: 44px;">
                        <label style="position: absolute;margin-left: -201px;">Imagen superior</label>
                        <label style="color:red;">Subir imagen ( 500px  x  150px )</label><br><br>
                        <div>
                            <input type="file" name="img" id="img" />
                        </div>
                    </div>
                    <p>&nbsp;</p>
                    <h3>CONTENIDO INFERIOR</h3>
                    <div style="margin-top: 36px;">
                        <label>T&iacute;tulo inferior</label>
                        <div>
                            <input type="text" id="titulo2" name="titulo2" class="validate[required]" data-validation-placeholder="" PlaceHolder="Agrega tu título inferior" style="width: 325px; margin-left: 200px; margin-top: -25px;" value="<?php echo $oficina["titulo2"]; ?>" />
                            <span class="f_help" style="margin-left: 200px;"> Límite de caracteres 35 / <span class="titulo2"></span></span>
                        </div>
                    </div> 
                    <p>&nbsp;</p>    
                    <div style="margin-top: 36px;">
                        <label>Texto inferior</label>
                        <div>
                            <textarea style="width: 600px;margin-left: 200px;margin-top: -25px;height: 127px;" class="validate[required]" data-validation-placeholder=""  PlaceHolder="Agrega tu texto inferior" name="texto2" id="texto2"><?php echo $oficina["texto2"]; ?></textarea>

                        </div>
                    </div>
                    <div style="margin-left: 200px;margin-top: 44px;">
                        <label style="position: absolute;margin-left: -201px;">Imagen inferior</label>
                        <label style="color:red;">Subir imagen ( 500px  x  150px )</label><br><br>
                        <div>
                            <input type="file" name="img1" id="img" />
                        </div>
                    </div>
                    <p>&nbsp;</p>
                    <h3>CONTENIDO INFERIOR DERECHO</h3>
                    <div style="margin-top: 36px;">
                        <label>T&iacute;tulo inferior derecho</label>
                        <div>
                            <input type="text" id="titulo3" name="titulo3" class="validate[required]" data-validation-placeholder="" PlaceHolder="Agrega tu título inferior derecho" style="width: 325px; margin-left: 200px; margin-top: -25px;" value="<?php echo $oficina["titulo3"]; ?>" />
                            <span class="f_help" style="margin-left: 200px;"> Límite de caracteres 35 / <span class="titulo2"></span></span>
                        </div>
                    </div> 
                    <p>&nbsp;</p>    
                    <div style="margin-top: 36px;">
                        <label>Texto inferior</label>
                        <div>
                            <textarea style="width: 600px;margin-left: 200px;margin-top: -25px;height: 127px;" class="validate[required]" data-validation-placeholder=""  PlaceHolder="Agrega tu texto inferior" name="texto3" id="texto3"><?php echo $oficina["texto3"]; ?></textarea>

                        </div>
                    </div>
                    <p>&nbsp;</p>
                    <h3>IMAGEN SUPERIOR DERECHA</h3>                        
                    <div style="margin-left: 200px;margin-top: 44px;">
                        <label style="position: absolute;margin-left: -201px;">Imagen derecha grande</label>
                        <label style="color:red;">Subir imagen ( 400px  x  440px )</label><br><br>
                        <div>
                            <input type="file" name="img2" id="img" />
                        </div>
                    </div>
                    <p>&nbsp;</p> 
                     <?php if ($id > 0) { ?>
                        <?php if ($oficina["img1"] != "") { ?>
                            <div>
                                <label>Imagen superior</label>
                                <div>
                                    <br><br>
                                    <img src="../../../../img/nosotros/500_150_<?php echo $oficina["img1"] . "?" . rand(0, 9999999); ?>" width="250" height="75" />
                                </div>50
                            </div>  <br>
                            <div>
                                <label>Imagen inferior</label>
                                <div>
                                    <br><br>
                                    <img src="../../../../img/nosotros/500_150_<?php echo $oficina["img2"] . "?" . rand(0, 9999999); ?>" width="250" height="75" />
                                </div>
                            </div>  <br>
                            <div>
                                <label>Imagen grande</label>
                                <div>
                                    <br><br>
                                    <img src="../../../../img/nosotros/400_610_<?php echo $oficina["img3"] . "?" . rand(0, 9999999); ?>" width="200" height="305" />
                                </div>
                            </div>  <br>
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
            echo '<script>setTimeout(\'alert("Nosotros agregado correctamente");\',400);</script>';
        }
        if ($erno == 2) {
            echo '<script>setTimeout(\'alert("Nosotros editado correctamente");\',400);</script>';
        }
    }
}
?>
<script type="text/javascript" language="javascript">
    $('#titulo1').limit("35", ".titulo1");
    $('#titulo2').limit("35", ".titulo2");
		$('#titulo3').limit("35", ".titulo3");
</script>