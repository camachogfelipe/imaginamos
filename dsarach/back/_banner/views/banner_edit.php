<div class="widget">
    <div class="header"><span><span class="ico gray window"></span><?php echo $nombremodulo ?></span>
        <br /><?php echo anchor('cms/banner/', 'Volver', 'class="uibutton icon special answer" style="float:right;position: relative;top: -5px"') ?>                 
    </div><!-- End header -->
    <div class="content">
        <div class="formEl_b">
            <div>
                <fieldset>
                    <div class="imu_info" id="info"></div>
                    <?php echo form_open_multipart('cms/banner/update_record/', 'id="form"') ?>
                    <div>
                        <p><label>T&iacute;tulo </label></p>
                        <div><input style="width:250px" type="text"  id="titulo" name="titulo" class="small" value="<?php echo $info->titulo?>" maxlength="17" title="17 caracteres máximo" /> </div>
                    </div>
                    <div>
                        <p><label>Subtítulo </label></p>
                        <div><input style="width:250px" type="text"  id="subtitulo" name="subtitulo" class="small" value="<?php echo $info->subtitulo?>" maxlength="15" title="15 caracteres máximo" /> </div>
                    </div>
                    <div>
                        <p><label>Texto </label></p>
                        <div><textarea style="width:350px;height:130px;" type="text"  id="texto" name="descripcion" maxlength="180" title="180 caracteres máximo"   /><?php echo $info->descripcion?></textarea></div>
                    </div>
                    <div>
                        <div><p><label>Imagen</label><p/>
                            <div>
                                <img class="cuadro_edicion_fotos"  src="<?php echo base_url()."uploads/thumbnail/".$info->imagen?>" width="400" height="200" >
                                <br />
                                <input type="file" class="btn btn-large btn-primary" name="nombre" id="fileUpload1" size="100" />    
                                <input type="hidden" name="imagen" id="imagen"  value="<?php echo $info->imagen?>" />
                                <input type="hidden" name="id" id="id" value="<?php echo $info->id?>" />
                                </div>
                                <p> Las im&aacute;genes se redimensionar&aacute;n a 736 X 396</p>
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
        var titulo = jQuery("#titulo").val();
        var subtitulo = jQuery("#subtitulo").val();
        var texto = jQuery("#texto").val();
        var imagen = jQuery("#imagen").val();
        if (titulo == "" || texto == "" || subtitulo == ""){
					jQuery('#info').focus();
					showError('Complete todos los campos.',3000);
				}/*else if (jQuery('.fileName').text()!=""){
                jQuery('#fileUpload1').uploadifyUpload();
				}*/else{
					jQuery('#form').submit();
				}
   }	 
	 
	 
	 
	             
    jQuery(document).ready(function() {
        var texto = '';
				
				/*$("#fileUpload1").uploadify({
					'uploader': '<?php echo base_url()?>assets/js/upload.swf',
					'script' : '<?php echo base_url()?>cms/banner/upload/',
					'buttonText': 'Imagen.',
					'cancelImg': '<?php echo base_url()?>assets/img/close.png',
					'multi': false,
          'auto': true,
					'simUploadLimit' : 2,
					'fileExt' : '*.jpg;*.png;*.jpeg;',
					'fileDesc' : 'Imágenes',
					'folder': '',
					'displayData': 'speed',
					'onComplete' : function(evt, queueId, fileObj, response, data){
						var responseJson = eval('(' + response + ')'); //jQuery.parseJSON(response);
						console.log(responseJson);
						if (responseJson.ok === true) {
							jQuery('#imagen').val(responseJson.data.file_name);
							jQuery('#form').submit();
						} else {
							showError('Problemas al cargar imagen.',3000);                            
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