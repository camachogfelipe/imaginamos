<div class="widget">
    <div class="header"><span><span class="ico gray window"></span><?php echo $nombremodulo ?></span>
        <br /><?php echo anchor('cms/aplicaciones/', 'Volver', 'class="uibutton icon special answer" style="float:right;position: relative;top: -5px"') ?>                 
    </div><!-- End header -->
    <div class="content">
        <div class="formEl_b">
            <div>
                <fieldset>
                    <div class="imu_info" id="info"></div>
                    <?php echo form_open_multipart('cms/aplicaciones/update_record/', 'id="form"') ?>
                    <div>
                        <p><label>T&iacute;tulo </label></p>
                        <div><input style="width:250px" type="text"  id="titulo" name="titulo" class="small" value="<?php echo $info->titulo?>" maxlength="25" title="25 caracteres máximo" /> </div>
                    </div>
                    <div>
                        <p><label>Texto </label></p>
                        <div><textarea style="width:350px;height:130px;" type="text"  id="texto" name="descripcion" maxlength="350" title="350 caracteres máximo"   /><?php echo $info->descripcion?></textarea></div>
                    </div>
                    <div>
                        <div><p><label>Imagen</label><p/>
                            <div>
                                <img class="cuadro_edicion_fotos"  src="<?php echo base_url()."uploads/thumbnail/".$info->imagen?>" width="214" height="279" >
                                <br />
                                <input type="file" name="nombre" id="fileUpload1" size="100" />    
                                <input type="hidden" name="imagen" id="imagen"  value="<?php echo $info->imagen?>" />
                                <input type="hidden" name="id" id="id" value="<?php echo $info->id?>" />
                                </div>
                                <p id="resultadoi"> </p>
                                <p> Las im&aacute;genes se redimensionar&aacute;n a 214 X 279</p>
                            </div>
                        </div>
                    <div>
                        <div><p><label>Archivo</label><p/>
                            <div>
                                <?php if ($info->archivo != ""){?>
                                <a href="<?php echo base_url()."uploads/".$info->archivo?>" target="_blank">Ver archivo</a><br>
                                <?php }?>
                            <input type="file" name="nombre2" id="fileUpload2" />    
                            <input type="hidden" name="archivo" id="archivo" value="<?php echo $info->archivo?>" />
                            </div>
                            <p id="resultadoa"> </p>
                            <p> Solo se permiten archivos PDF</p>
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
        var texto = $("#texto").val();
        var imagen = $("#imagen").val();
        if (titulo == "" || texto == "" || subtitulo == ""){
                $('#info').focus();
                showError('Complete todos los campos.',3000);
            }else{
                $('#form').submit();
            }
   }                    
    $(document).ready(function() {
        var texto = '';
        /*$("#fileUpload1").uploadify({
            'uploader': '<?php echo base_url()?>assets/js/upload.swf',
            'cancelImg': '<?php echo base_url()?>assets/img/close.png',
            'script': '<?php echo base_url()?>cms/aplicaciones/upload/',
            'folder': '',
            'multi': false,
            'auto': true,
            'buttonText': 'Imagen.',
            'displayData': 'speed',
            'simUploadLimit': 2,
            'onComplete': function(event, queueId, fileObj, response, data) {
                var responseJson = $.parseJSON(response);
                console.log(responseJson);
                if (responseJson.ok === true) {
                    $('#imagen').val(responseJson.data.file_name);
                    $('#resultadoi').html(responseJson.data.file_name);
                } else {
                        showError('Problemas al carga imagen.',3000);                            
                }
            }
        });
        $("#fileUpload2").uploadify({
            'uploader': '<?php echo base_url()?>assets/js/upload.swf',
            'cancelImg': '<?php echo base_url()?>assets/img/close.png',
            'script': '<?php echo base_url()?>cms/aplicaciones/uploadpdf/',
            'folder': '',
            'multi': false,
            'auto': true,
            'buttonText': 'PDF.',
            'displayData': 'speed',
            'simUploadLimit': 2,
            'fileExt': '*.pdf',
            'onComplete': function(event, queueId, fileObj, response, data) {
                var responseJson = $.parseJSON(response);
                if (responseJson.ok === true) {
                    $('#archivo').val(responseJson.data.file_name);
                    $('#resultadoa').html(responseJson.data.file_name);
                } else {
                        showError(responseJson.data,3000);                            
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