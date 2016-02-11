<div class="widget">
    <div class="header"><span><span class="ico gray window"></span><?php echo $nombremodulo ?></span>
        <br /><?php echo anchor('cms/quehacemos/ventajas/'.$quehacemos_id, 'Volver', 'class="uibutton icon special answer" style="float:right;position: relative;top: -5px"') ?>                 
    </div><!-- End header -->
    <div class="content">
        <div class="formEl_b">
            <div>
                <fieldset>
                    <div class="imu_info" id="info"></div>
                    <?php echo form_open_multipart('cms/quehacemos/new_ventajas/', 'id="form"') ?>
                    <div>
                        <p><label>T&iacute;tulo </label></p>
                        <div>
                            <input style="width:250px" type="text"  id="titulo" name="titulo" class="small" value="" maxlength="128" title="128  caracteres máximo" /> 
                            <input type="hidden" name="quehacemos_id" id="quehacemos_id" value="<?php echo $quehacemos_id?>" />
 
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
        if (titulo == ""){
                $('#info').focus();
                showError('Complete todos los campos.',3000);
            }else{
                $('#form').submit();
            }
   }                    
    $(document).ready(function() {
        var texto = '';
        $("#fileUpload1").uploadify({
            'uploader': '<?php echo base_url()?>assets/js/upload.swf',
            'cancelImg': '<?php echo base_url()?>assets/img/close.png',
            'script': '<?php echo base_url()?>cms/destacados/upload/',
            'folder': '',
            'multi': false,
            'auto': false,
            'buttonText': 'Imagen.',
            'displayData': 'speed',
            'simUploadLimit': 2,
            'fileTypeDesc': 'Image Files',
            'fileTypeExts': '*.jpg;',
            'onComplete': function(event, queueId, fileObj, response, data) {
                var responseJson = $.parseJSON(response);
                console.log(responseJson);
                if (responseJson.ok === true) {
                    $('#imagen').val(responseJson.data.file_name);
                    $('#form').submit();
                } else {
                        showError(responseJson.data,3000);                            
                }
            }
        });
    });
</script>
 <script>
    <?php if (isset($save)){
            if ($save !=  TRUE){?>
            showError('Problemas al almacenar.',3000);
            <?php } ?>
    <?php } ?>
</script>