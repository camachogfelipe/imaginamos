<div class="widget">
    <div class="header"><span><span class="ico gray sphere"></span><?php echo $nombremodulo ?></span>
        <br /><?php echo anchor('cms/registro/', 'Volver', 'class="uibutton icon special answer" style="float:right;position: relative;top: -5px"') ?>                 
    </div><!-- End header -->
    <div class="content">
        <div class="formEl_b">
            <div>
                <fieldset>
                    <div class="imu_info" id="info"></div>
                    <?php echo form_open_multipart('cms/registro/new_Registro/', 'id="form"') ?>  
                    
                    <div>
                        <div class="section">
                            <label>Imagen
                        </label>
                        <label>Subir nueva imagen (694px x 477px)</label><br/><br/>
                            <div>
                                <img class="cuadro_edicion_fotos" id="img1"  src="" width="450">
                                <div class="cuadro_edicion_fotos" id="divimg1"></div>
                                <br />
                                <input type="file" name="nombre" id="fileUpload1" class="fileUpload" />    
                                <input type="hidden" name="imagen" id="imagen" />
                            </div>
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
                $('#form').submit();
            
   }                    
    $(document).ready(function() {
        var texto = '';
        var nextinput = parseInt($("#inputTotal").val()); 
    $('#fileUpload1').uploadify({
                    'uploader'          : '<?php echo site_url(); ?>'+'back/assets/components/uploadify/uploadify.swf',
                    'script'            : '<?php echo site_url(); ?>' + 'cms/registro/upload/',
                    'cancelImg'         : '<?php echo site_url(); ?>'+'back/assets/components/uploadify/cancel.png',
                    'auto'              : true,
                    'folder'            : '',
                    'queueSizeLimit'    : 3,
                    'multi'             : false,
                    'fileExt'           : '*.jpg;*.jpeg;*.png;*gif',
                    'auto'              : true,
                    'buttonText'        : 'Cargar imagen.',
                    'onComplete'  : function(event, queueId, fileObj, response, data) {
                var responseJson = $.parseJSON(response);
//                alert(responseJson.ok);
                if (responseJson.ok === true) {
                        $("#img1").attr('src','<?php echo base_url()?>uploads/registro/'+responseJson.data.file_name);
                        $("#img1").hide(800).delay(2000).show(800);
                        $("#divimg1").html('<h2>Cargando imagen...</h2>')
                        $("#divimg1").show(850).delay(2000).hide(750);
                        $("#imagen").val(responseJson.data.file_name)
                } else {
                        showError('Problemas al carga imagen.',3000);                            
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