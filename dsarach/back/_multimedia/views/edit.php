<div class="widget">
    <div class="header"><span><span class="ico gray window"></span><?php echo $nombremodulo ?></span>
        <br /><?php //echo anchor('cms/multimedia/', 'Volver', 'class="uibutton icon special answer" style="float:right;position: relative;top: -5px"') ?>                 
    </div><!-- End header -->
    <div class="content">
        <div class="formEl_b">
            <div>
                <fieldset>
                    <div class="imu_info" id="info"></div>
                    <?php echo form_open_multipart('cms/multimedia/update_record/', 'id="form"') ?>
                    <div>
                        <p><label>Sección </label></p>
                        <div>
                            <select name="seccion" id="seccion">
                                <option value="">Seleccione...</option>
                                <option value="¿Qué hacemos?" <?php if ($info->seccion == "¿Qué hacemos?"){ echo "selected='selected'"; }?>>¿Qué hacemos?</option>
                                <option value="¿Cómo lo hacemos?" <?php if ($info->seccion == "¿Cómo lo hacemos?"){ echo "selected='selected'"; }?>>¿Cómo lo hacemos?</option>
                                <option value="Aplicaciones" <?php if ($info->seccion == "Aplicaciones"){ echo "selected='selected'"; }?>>Aplicaciones</option>
                                <option value="Calidad" <?php if ($info->seccion == "Calidad"){ echo "selected='selected'"; }?>>Calidad</option>
                                <option value="Beneficiate" <?php if ($info->seccion == "Beneficiate"){ echo "selected='selected'"; }?>>Beneficiate</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <p><label>T&iacute;tulo </label></p>
                        <div><input style="width:250px" type="text"  id="titulo" name="titulo" class="small" value="<?php echo $info->titulo?>" maxlength="25" title="25 caracteres máximo" /> </div>
                    </div>
                    <div>
                        <p><label>Título 2 </label></p>
                        <div><input style="width:250px" type="text"  id="subtitulo" name="subtitulo" class="small" value="<?php echo $info->subtitulo?>" maxlength="25" title="25 caracteres máximo" /> </div>
                    </div>
                    <div>
                        <p><label>Subtítulo </label></p>
                        <div><input style="width:250px" type="text"  id="subtitulo2" name="subtitulo2" class="full" value="<?php echo $info->subtitulo2?>" maxlength="158" title="158 caracteres máximo" /> </div>
                    </div>
                    <div>
                        <p><label>Texto </label></p>
                        <div><textarea cols="70" rows="20" type="text"  id="texto" name="descripcion" maxlength="650" title="650 caracteres máximo"   /><?php echo $info->descripcion?></textarea></div>
                    </div>
                    <div>
                        <div><p><label>Video</label><p/>
                            <div>
                                <input type="text"  id="video" name="video" class="full" value="<?php echo $info->video?>" />
                                <input type="hidden" name="id" id="id" value="<?php echo $info->id?>" />
                            </div>
                            <br />
                            <div>
                                <iframe src="<?php echo $info->video?>" width="400" height="200" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
                            </div>
                        </div>
                    <div style="width: 100px;height: 30px;position: relative;top: 30px">
                        <input onclick="valida();" type="button" value="Guardar" class="uibutton confirm" />
                        
                    </div>
                    <?php echo form_close() ?>
                    <p>&nbsp;</p>
                 </fieldset>
                <br>
            </div>
        </div>
    </div>	
</div><!-- End content -->
<script type="text/javascript">
    function valida(){
        var titulo = $("#titulo").val();
        var subtitulo = $("#subtitulo").val();
        var subtitulo2 = $("#subtitulo2").val();
        var texto = $("#texto").val();
        var video = $("#video").val();
        var seccion = $("#seccion").val();
        if (titulo == "" || texto == "" || subtitulo == "" || subtitulo2 == "" || seccion == ""){
                $('#info').focus();
                showError('Complete todos los campos.',3000);
            }else{
                $('#form').submit();
            }
   }                    
 
</script>
 <script>
    <?php if (isset($update)){
            if ($update ==  1){?>
            showSuccess('Actualización correcta.',3000);
            <?php } ?>
    <?php } ?>
</script>