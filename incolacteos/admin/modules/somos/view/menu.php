<?php
$id = 1;
// Validamos si hizo post y desea subir una imagen
if (isset($_POST["id"])) {
    $id = $_POST["id"];
    if ($id == 0) {
        $id = 1;
    } else {
        
            $tittulo = str_replace("'", '&#39;', GetData("titulo"));
            $tittulo = str_replace('"', '&#34;', $tittulo);
            $texto = str_replace("'", '&#39;', GetData("texto"));
            $texto = str_replace('"', '&#34;', $texto);
            $texto = strip_tags($texto, '<br><p><a><h1><h2><h3><h4><h5><h6><font>');
            if (GetData("pos_video") == 1) {
                $video = getIdByUrlYouTube(GetData("video"));
            } else {
                $video = getIdByUrlVimeo(GetData("video"));
            }

            $db->doQuery("UPDATE somos SET 
                        titulo='" . $tittulo . "',
                        video='" . $video . "',                       
                        pos_video='" . GetData("pos_video") . "',                       
                        texto='" . $texto . "'                       
                        WHERE id=" . $id, 4);
            $retorno = ClassFile::UploadImagenFile("img", "../../../../img/somos", "somos_" . $id, "920_300_somos_" . $id, 920, 300);
            if ($retorno["Status"] == "Uploader") {
                //  echo $retorno["NameFile"];
                $db->doQuery("UPDATE somos SET img='" . $retorno["NameFile"] . "' WHERE id=" . $id, 4);
                $val = 2;
            }
              $val = 2;
        }
    
}
// Consultamos la img actual del banner
$db->doQuery("SELECT * FROM somos WHERE id=" . $id, 1);
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
            QUIENES SOMOS >> INCOLACTEOS >> EDITANDO 
        </span>
    </div>
    <div class="content">
        <div class="formEl_b">
            <fieldset>
                <h3><?php echo ($id == 0) ? "" : "Editando" ?></h3>
                <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">
                    <input type="hidden" value="<?php echo $id ?>" name="id" id="id"> 
                    <?php if ($id > 0) { ?>
                        <?php if ($oficina["img"] != "") { ?>
                            <div>
                                <label>Imagen</label>
                                <div>
                                    <br><br>
                                    <center>  <img src="../../../../img/somos/920_300_<?php echo $oficina["img"] . "?" . rand(0, 9999999); ?>" width="460" height="150" /></center>
                                </div>
                            </div>  <br>

                            <?php
                        }
                    }
                    ?>
                    <p>&nbsp;</p> 
                    <div style="margin-left: 200px;margin-top: 44px;">
                        <label style="position: absolute;margin-left: -201px;">Imagen</label>
                        <label style="color:red;">Subir imagen ( 920px  x  300px )</label><br><br>
                        <div>
                            <input type="file" name="img" id="img" />
                        </div>
                    </div>
                    <div style="margin-top: 36px;">
                        <label>T&iacute;tulo </label>
                        <div>
                            <input type="text" id="titulo1" name="titulo" class="  large validate[required]" data-validation-placeholder="" PlaceHolder="Agregar título " style="margin-left: 200px; margin-top: -25px;" value="<?php echo $oficina["titulo"]; ?>" />
                            <span class="f_help" style="margin-left: 200px;"> Límite de caracteres 56 / <span class="titulo1"></span></span>
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
                        <label>V&iacute;deo</label>
                        <div style="margin-top: -16px;margin-left: 200px;">
                            <select  name="pos_video">                            
                                <option  <?php echo ($oficina["pos_video"] == 1) ? "selected='selected'" : "" ?> value="1">Youtube</option>
                                <option  <?php echo ($oficina["pos_video"] == 2) ? "selected='selected'" : "" ?> value="2">Vimeo</option>
                            </select>
                        </div>
                    </div>

                    <div style="margin-top: 36px;">
                        <label>URL V&iacute;deo </label>
                        <div>
                            <input type="text" id="video" name="video" class=" large validate[required]" data-validation-placeholder="" PlaceHolder="Agregar url vídeo " style="margin-left: 200px; margin-top: -25px;" value="<?php echo $oficina["video"]; ?>" />
                            <span style="margin-left: 200px" class="f_help">Debe copiar la url del respectivo sitio (VIMEO, YOUTUBE) y pegarlo en este campo</span>
                        </div>
                    </div> 
                     <p>&nbsp;</p>    
                    <?php if ($id > 0) { ?>
                        <?php if ($oficina["video"] != "") { ?>
                            <div>
                                <label>Visualizaci&oacute;n vídeo</label>
                                <div>
                                    <br><br>
                                    <center>
                                        <?php if ($oficina["pos_video"] == 1) { ?>
                                            <iframe width="500" height="281" src="http://www.youtube.com/embed/<?php echo $oficina["video"] ?>" frameborder="0" allowfullscreen></iframe>
                                        <?php } else { ?>
                                            <iframe src="http://player.vimeo.com/video/<?php echo $oficina["video"] ?>" width="500" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></center>
                                    <?php } ?>

                                </div>
                            </div>  <br>

                            <?php
                        }
                    }
                    ?>
                    <p>&nbsp;</p> 
                    <span class="f_help">Si despu&eacute;s de guardar no se visualiza el v&iacute;deo, por favor vuelva a editarlo</span>

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
?>
<script type="text/javascript" language="javascript">
    $('#titulo1').limit("56", ".titulo1");
    $('#texto').cleditor();
   
</script>