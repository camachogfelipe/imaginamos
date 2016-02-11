<div class="widget">
    <div class="header"><span><span class="ico gray window"></span><?php echo $nombremodulo ?></span>
        <br /><?php echo anchor('cms/beneficios/', 'Volver', 'class="uibutton icon special answer" style="float:right;position: relative;top: -5px"') ?>                 
    </div><!-- End header -->
    <div class="content">
        <div class="formEl_b">
            <div>
                <fieldset>
                    <div class="imu_info" id="info"></div>
                    <?php echo form_open_multipart('cms/beneficios/new_record/', 'id="form"') ?>
                    <div>
                        <p><label>T&iacute;tulo </label></p>
                        <div><input style="width:250px" type="text"  id="titulo" name="titulo" class="small" value="" maxlength="48" title="48 caracteres máximo" /> </div>
                    </div>
                    <div>
                        <p><label>Texto </label></p>
                        <div><textarea style="width:350px;height:130px;" type="text"  id="texto" name="texto" maxlength="110" title="110 caracteres máximo"   /></textarea></div>
                    </div>
                    <div>
                        <div><p><label>Imagen</label><p/>
                            <div>
                            <input type="file" name="nombre" id="fileUpload1" />    
                            <input type="hidden" name="imagen" id="imagen" />
                            </div>
                            <p> Las im&aacute;genes se redimensionar&aacute;n a 266 X 300</p>
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
        var texto = $("#texto").val();
        var imagen = $("#imagen").val();
        if (titulo == "" || texto == ""){
                $('#info').focus();
                showError('Complete todos los campos.',3000);
            }else{
                //$('#fileUpload1').uploadifyUpload();
								$('#form').submit();
            }
   }                    
    $(document).ready(function() {
        var texto = '';
        /*$("#fileUpload1").uploadify({
            'uploader': '<?php echo base_url()?>assets/js/upload.swf',
            'cancelImg': '<?php echo base_url()?>assets/img/close.png',
            'script': '<?php echo base_url()?>cms/beneficios/upload/',
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
        });*/
    });
</script>
 <script>
    <?php if (isset($save)){
            if ($save !=  TRUE){?>
            showError('Problemas al almacenar.',3000);
            <?php } ?>
    <?php } ?>
</script>