<div class="widget">
    <div class="header"><span><span class="ico gray window"></span><?php echo $nombremodulo ?></span>
        <br /><?php echo anchor('cms/calidad/imagenes', 'Volver', 'class="uibutton icon special answer" style="float:right;position: relative;top: -5px"') ?>                 
    </div><!-- End header -->
    <div class="content">
        <div class="formEl_b">
            <div>
                <fieldset>
                    <div class="imu_info" id="info"></div>
                    <?php echo form_open_multipart('cms/calidad/update_imagenes/', 'id="form"') ?>
                    
                    <div>
                        <div><p><label>Imagen uno</label><p/>
                            <div>
                                <img class="cuadro_edicion_fotos" id="img1"  src="<?php echo base_url()."uploads/".$info->imagen?>" width="221" height="159" >
                                <div class="cuadro_edicion_fotos" id="divimg1"></div>
                                <br />
                                <input type="file" name="nombre" id="fileUpload1" class="fileUpload" />    
                                <input type="hidden" name="imagen" id="imagen" />
                                <input style="width:250px" type="hidden"  id="titulo" name="id" class="small" value="<?php echo $info->id?>" /> 
                            </div>
                            <p> Las im&aacute;genes se redimensionar&aacute;n a 440 X 400</p>
                        </div>
                    </div>
                    <div>
                        <div><p><label>Imagen dos</label><p/>
                            <div>
                                <img class="cuadro_edicion_fotos" id="img2"  src="<?php echo base_url()."uploads/".$info->imagen2?>" width="221" height="159" >
                                <div class="cuadro_edicion_fotos" id="divimg2"></div>
                                <br />
                                <input type="file" name="nombre" id="fileUpload2" class="fileUpload" />    
                                <input type="hidden" name="imagen2" id="imagen2" />
                            </div>
                            <p> Las im&aacute;genes se redimensionar&aacute;n a 440 X 400</p>
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
        var imagen = $("#imagen").val();
        var imagen2 = $("#imagen2").val();
        if (imagen == "" || imagen2 == "" ){
                $('#info').focus();
                showError('Complete todos los campos.',3000);
            }else{
                $('#form').submit();
            }
   }                  
    $(document).ready(function() {
        var texto = '';
        var nextinput = parseInt($("#inputTotal").val());
        $("#fileUpload1").uploadify({
            'uploader': '<?php echo base_url()?>assets/js/upload.swf',
            'cancelImg': '<?php echo base_url()?>assets/img/close.png',
            'script': '<?php echo base_url()?>cms/calidad/upload/',
            'folder': '',
            'multi': false,
            'auto': true,
            'buttonText': 'Imagen.',
            'displayData': 'speed',
            'simUploadLimit': 2,
            'queueSizeLimit' : 3,
            'fileExt': '*.jpg;*.jpeg;*.gif;*.png',
            'onComplete': function(event, queueId, fileObj, response, data) {
                var responseJson = $.parseJSON(response);
                if (responseJson.ok === true) {
                        $("#img1").attr('src','<?php echo base_url()?>uploads/'+responseJson.data.file_name);
                        $("#img1").hide(800).delay(2000).show(800);
                        $("#divimg1").html('<h2>Cargando imagen...</h2>')
                        $("#divimg1").show(850).delay(2000).hide(750);
                        $("#imagen").val(responseJson.data.file_name)
                } else {
                        showError('Problemas al carga imagen.',3000);                            
                }
            }
        });
    
    $("#fileUpload2").uploadify({
            'uploader': '<?php echo base_url()?>assets/js/upload.swf',
            'cancelImg': '<?php echo base_url()?>assets/img/close.png',
            'script': '<?php echo base_url()?>cms/calidad/upload/',
            'folder': '',
            'multi': false,
            'auto': true,
            'buttonText': 'Imagen.',
            'displayData': 'speed',
            'simUploadLimit': 2,
            'queueSizeLimit' : 3,
            'fileExt': '*.jpg;*.jpeg;*.gif;*.png',
            'onComplete': function(event, queueId, fileObj, response, data) {
                var responseJson = $.parseJSON(response);
                if (responseJson.ok === true) {
                    $("#img2").attr('src','<?php echo base_url()?>/uploads/'+responseJson.data.file_name);        
                    $("#img2").hide(800).delay(2000).show(800);
                    $("#divimg2").html('<h2>Cargando imagen...</h2>')
                    $("#divimg2").show(850).delay(2000).hide(750);
                    $("#imagen2").val(responseJson.data.file_name)
                    
                } else {
                        showError('Problemas al carga imagen.',3000);                            
                }
            }
        });
    });
</script>
 <script>
    <?php if (isset($update)){
            if ($update ==  1){?>
            showSuccess('Actualización correcta.',3000);
            <?php } ?>
    <?php } ?>
</script>