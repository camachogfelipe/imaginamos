<div class="widget">
    <div class="header"><span><span class="ico gray window"></span><?php echo $nombremodulo ?></span>
        <br /><?php echo anchor('cms/calidad/imagenes', 'Imagenes', 'class="uibutton icon special answer" style="float:right;position: relative;top: -5px"') ?>                 
        <?php echo anchor('cms/calidad/destacados', 'Destacados', 'class="uibutton icon special answer" style="float:right;position: relative;top: -5px"') ?>                 
    </div><!-- End header -->
    <div class="content">
        <div class="formEl_b">
            <div>
                <fieldset>
                    <div class="imu_info" id="info"></div>
                    <?php echo form_open_multipart('cms/calidad/update_record/', 'id="form"') ?>
                    <div>
                        <p><label>Texto </label></p>
                        <div>
                            <textarea cols="70" rows="20" type="text"  id="texto" name="descripcion" maxlength="1000" title="1000 caracteres máximo"   /><?php echo $info->descripcion?></textarea>
                        <input type="hidden" value="<?php echo $info->id?>" id="id" name="id" />
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