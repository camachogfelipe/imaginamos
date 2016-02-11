<div class="widget">
    <div class="header"><span><span class="ico gray window"></span><?php echo $nombremodulo ?></span>
        <br /><?php echo anchor('cms/destacados/', 'Volver', 'class="uibutton icon special answer" style="float:right;position: relative;top: -5px"') ?>                 
    </div><!-- End header -->
    <div class="content">
        <div class="formEl_b">
            <div>
                <fieldset>
                    <div class="imu_info" id="info"></div>
                    <?php echo form_open_multipart('cms/destacados/update_record/', 'id="form"') ?>
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
                        <div><p><label>Imagen</label><p/>
                            <div>
                                <img class="cuadro_edicion_fotos"  src="<?php echo base_url()."uploads/thumbnail/".$info->imagen?>" width="400" height="200" >
                                <br />
                                <input type="file" name="nombre" id="fileUpload1" size="100" />    
                                <input type="hidden" name="imagen" id="imagen"  value="<?php echo $info->imagen?>" />
                                <input type="hidden" name="id" id="id" value="<?php echo $info->id?>"
                                </div>
                                <p> Las im&aacute;genes se redimensionar&aacute;n a 468 X 216</p>
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
        var seccion = $("#seccion").val();
        if (seccion == "" ){
                $('#info').focus();
                showError('Complete todos los campos.',3000);
            }/*else if ($('.fileName').text()!=""){
                $('#fileUpload1').uploadifyUpload();
            }*/else{
                $('#form').submit();
            }
   }                    
    $(document).ready(function() {
        var texto = '';
        /*$("#fileUpload1").uploadify({
            'uploader': '<?php echo base_url()?>assets/js/upload.swf',
            'cancelImg': '<?php echo base_url()?>assets/img/close.png',
            'script': '<?php echo base_url()?>cms/destacados/upload/',
            'folder': '',
            'multi': false,
            'auto': false,
            'buttonText': 'Imagen.',
            'displayData': 'speed',
            'simUploadLimit': 2,
            'onComplete': function(event, queueId, fileObj, response, data) {
                var responseJson = $.parseJSON(response);
                console.log(responseJson);
                if (responseJson.ok === true) {
                    $('#imagen').val(responseJson.data.file_name);
                    $('#form').submit();
                } else {
                        showError('Problemas al carga imagen.',3000);                            
                }
            }
        });*/
    });
</script>
 <script>
    <?php if (isset($update)){
            if ($update ==  1){?>
            showSuccess('Actualización correcta.',3000);
            <?php } ?>
    <?php } ?>
</script>