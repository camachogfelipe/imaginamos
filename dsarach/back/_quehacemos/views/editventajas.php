<div class="widget">
    <div class="header"><span><span class="ico gray window"></span><?php echo $nombremodulo ?></span>
        <br /><?php echo anchor('cms/quehacemos/ventajas/'.$quehacemos_id, 'Volver', 'class="uibutton icon special answer" style="float:right;position: relative;top: -5px"') ?>                 
    </div><!-- End header -->
    <div class="content">
        <div class="formEl_b">
            <div>
                <fieldset>
                    <div class="imu_info" id="info"></div>
                    <?php echo form_open_multipart('cms/quehacemos/update_ventajas/', 'id="form"') ?>
                    
                    <div>
                        <p><label>T&iacute;tulo </label></p>
                        <div>
                            <input style="width:250px" type="text"  id="titulo" name="titulo" class="small" value="<?php echo $info->titulo?>" maxlength="128" title="128 caracteres máximo" /> 
                            <input type="hidden" name="id" id="id" value="<?php echo $info->id?>" />
                            <input type="hidden" name="quehacemos_id" id="quehacemos_id" value="<?php echo $info->quehacemos_id?>" />
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
        if (titulo == "" ){
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