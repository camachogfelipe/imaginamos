<script language="javascript">
    $(document).ready(function(){
        
        $("#mision").cleditor();
        $("#vision").cleditor();
    })
    
</script>              
<div class="widget">
    <div class="header"><span><span class="ico gray window"></span><?php echo $nombremodulo ?></span>
        <br /><?php echo anchor('cms/empresa/imagenes', 'Imagenes', 'class="uibutton icon special answer" style="float:right;position: relative;top: -5px"') ?>                 
    </div><!-- End header -->
    <div class="content">
        <div class="formEl_b">
            <div>
                <fieldset>
                    <div class="imu_info" id="info"></div>
                    <?php echo form_open_multipart('cms/empresa/update_record/', 'id="form"') ?>
                    <div>
                        <div><p><label>Video</label><p/>
                            <div>
                                <input type="text"  id="video" name="video" class="full" value="<?php echo $info->video?>" />
                                
                            </div>
                            <br />
                            <div>
                                <iframe src="<?php echo $info->video?>" width="400" height="200" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <p><label>T&iacute;tulo </label></p>
                        <div><input style="width:250px" type="text"  id="titulo" name="titulo" class="small" value="<?php echo $info->titulo?>" maxlength="59" title="59 caracteres máximo" /> </div>
                    </div>
                    <div>
                        <p><label>Descripción </label></p>
                        <div><textarea cols="70" rows="20" type="text"  id="texto" name="descripcion" maxlength="1220" title="1220 caracteres máximo"   /><?php echo $info->descripcion?></textarea></div>
                    </div>
                    <div>
                        <div><p><label>Imagen< certificado/label><p/>
                            <div>
                                <img class="cuadro_edicion_fotos"  src="<?php echo base_url()."uploads/thumbnail/".$info->imagen?>" width="400" height="200" >
                                <br />
                                <input type="file" name="nombre" id="fileUpload1" size="100" />    
                                <input type="hidden" name="imagen" id="imagen"  value="<?php echo $info->imagen?>" />
                                <input type="hidden" name="id" id="id" value="<?php echo $info->id?>" />
                                </div>
                                <p> Las im&aacute;genes se redimensionar&aacute;n a 228 X 128</p>
                            </div>
                    </div>
                    <div>
                        <p><label>Misión </label></p>
                        <div>
                            <textarea name="mision" id="mision" cols="5" class="large"><?php echo $info->mision?></textarea>
                        </div>
                    </div>
                    <div>
                        <p><label>Visión </label></p>
                        <div>
                            <textarea name="vision" id="vision" cols="5" class="large" ><?php echo $info->vision?></textarea>
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
        var video = $("#video").val();
        var titulo = $("#titulo").val();
        var texto = $("#texto").val();
        var mision = $("#mision").val();
        var vision = $("#vision").val();
        
        if (titulo == "" || texto == "" || mision == "" || vision == "" ){
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
            'script': '<?php echo base_url()?>cms/empresa/upload/',
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