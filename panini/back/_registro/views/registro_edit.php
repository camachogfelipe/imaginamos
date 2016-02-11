<div class="widget">
    <div class="header"><span><span class="ico gray sphere"></span><?php echo $nombremodulo ?></span>
        <br /><?php echo anchor('cms/registro/', 'Volver', 'class="uibutton icon special answer" style="float:right;position: relative;top: -5px"') ?>                 
    </div><!-- End header -->
    <div class="content">
        <div class="formEl_b">
            <div>
                <fieldset>
                    <div class="imu_info" id="info"></div>
                    <?php echo form_open_multipart('cms/registro/update_Registro/', 'id="form"') ?>
                        <input style="width:250px" type="hidden"  id="id" name="id" class="small" value="<?php echo $info->id; ?>" /> 
                        
                        <div class="section" >
                            <label>Raz&oacute;n Social:</label>
                            <div>
                                <label><?php echo $info->razon_social;  ?></label>
                            </div>
                        </div>
                        <div class="section" >
                            <label>NIT:</label>
                            <div>
                                <label><?php echo $info->nit;  ?></label>
                            </div>
                        </div>
                        <div class="section" >
                            <label>direcci&oacute;n :</label>
                            <div>
                                <label><?php echo $info->direccion;  ?></label>
                            </div>
                        </div>
                        <div class="section" >
                            <label>Ciudad:</label>
                            <div>
                                <label><?php echo $info->ciudad;  ?></label>
                            </div>
                        </div>
                        <div class="section" >
                            <label>Tel:</label>
                            <div>
                                <label><?php echo $info->telefono;  ?></label>
                            </div>
                        </div>
                        <div class="section" >
                            <label>Actividad Comercial:</label>
                            <div>
                                <label><?php echo $info->actividad_comercial;  ?></label>
                            </div>
                        </div>
                        <div class="section" >
                            <label>Marcas</label>
                            <div>
                                <label><?php echo $info->marcas_porta;  ?></label>
                            </div>
                        </div>
                        <div class="section" >
                            <label>Mayorista?</label>
                            <div>
                                <label><?php echo $info->mayorista;  ?></label>
                            </div>
                        </div>
                        <div class="section" >
                            <label>distribuidor?</label>
                            <div>
                                <label><?php echo $info->distribuidor;  ?></label>
                            </div>
                        </div>
                        <div class="section" >
                            <label>puntos de venta</label>
                            <div>
                                <label><?php echo $info->puntosdeventa;  ?></label>
                            </div>
                        </div>
                        <div class="section" >
                            <label>puntos</label>
                            <div>
                                <label><?php echo $info->puntos_venta;  ?></label>
                            </div>
                        </div>
                        <div class="section" >
                            <label>items</label>
                            <div>
                                <label><?php echo $info->items;  ?></label>
                            </div>
                        </div>
                        <div class="section" >
                            <label>comentario adicional</label>
                            <div>
                                <label><?php echo $info->comentarioadicional;  ?></label>
                            </div>
                        </div>
                        <!-- Break Fault -->
                        <div class="section" >
                            <label>Nombre de contacto:</label>
                            <div>
                                <label><?php echo $info->contacto_resp;  ?></label>
                            </div>
                        </div>
                        <div class="section" >
                            <label>Email:</label>
                            <div>
                                <label><?php echo $info->correo_contacto;  ?></label>
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
        var titulo2 = $("#titulo2").val();
        var titulo3 = $("#titulo3").val();
       if (titulo == "" || titulo2 == "" || titulo3==''){
                $('#info').focus();
                showError('Complete todos los campos.',3000);
            }else{
                $('#form').submit();
            }
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
                
                if (responseJson.ok === true) {
                        $("#img1").attr('src','<?php echo base_url() ?>uploads/registro/'+responseJson.data.file_name);
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
    <?php if (isset($update)){
            if ($update ==  1){?>
            showSuccess('Actualización correcta.',3000);
            <?php } ?>
    <?php } ?>
</script>