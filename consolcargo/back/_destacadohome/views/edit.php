<div class="widget">
    <div class="header"><span><span class="ico gray window"></span>Editar destacadohome</span>
        <br /><?php echo anchor('cms/destacadohome/', 'Volver', 'class="uibutton icon special answer" style="cursor:pointer;float:right;position: relative;top: -5px"') ?>
    </div><!-- End header -->
    <div class="content">
        <div class="formEl_b">
            <div>
                <fieldset>
                    <label><h2>Ingrese todos los datos</h2></label>
                    <?php if(validation_errors() != ''){
                    ?>
                    <div class="alertbox error"><?php echo validation_errors(); ?></div>
                    <?php
                    } ?>
                    <?php $url = 'cms/destacadohome/editarDestacadohome/'.$destacadohome->id?>
                    <?php echo form_open_multipart($url); ?>
                    
                    <div class="section">
                        <label> Texto <small>Ingrese texto.</small></label>   
                        <div><input type="text" name="texto" class="full" value="<?php echo set_value('texto', $destacadohome->texto) ?>"></div>
                    </div>
                    <div class="section">
                        <label> Web tracking <small>Ingrese web tracking.</small></label>   
                        <div><input type="text" name="web_tracking" class="full" value="<?php echo set_value('web_tracking', $destacadohome->web_tracking) ?>"></div>
                    </div>
                    <div class="section">
                        <label> Web tracking interno <small>Seleccione si web tracking es interno.</small></label>   
                        <div>
                            <select name="web_tracking_interno">
                                <?php if($destacadohome->web_tracking_interno == 'SI') {?>
                                <option value="SI" selected="selected">SI</option>                                
                                <option value="NO">NO</option>
                                <?php } else { ?>
                                <option value="SI">SI</option>                                
                                <option value="NO" selected="selected">NO</option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="section">
                        <label> Pago por factura <small>Ingrese pago por factura.</small></label>   
                        <div><input type="text" name="pago_factura" class="full" value="<?php echo set_value('pago_factura', $destacadohome->pago_factura) ?>"></div>
                    </div>
                    <div class="section">
                        <label> Pago por factura interno <small>Seleccione si pago por factura es interno.</small></label>   
                        <div>
                            <select name="pago_factura_interno">
                                <?php if($destacadohome->pago_factura_interno == 'SI') {?>
                                <option value="SI" selected="selected">SI</option>                                
                                <option value="NO">NO</option>
                                <?php } else { ?>
                                <option value="SI">SI</option>                                
                                <option value="NO" selected="selected">NO</option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="section">
                        <label> Nuestros itinerarios <small>Ingrese nuestros itinerarios.</small></label>   
                        <div><input type="text" name="itinerarios" class="full" value="<?php echo set_value('itinerarios', $destacadohome->itinerarios) ?>"></div>
                    </div>
                    <div class="section">
                        <label> Nuestros itinerarios interno <small>Seleccione si nuestros itinerarios es interno.</small></label>   
                        <div>
                            <select name="itinerarios_interno">
                                <?php if($destacadohome->itinerarios_interno == 'SI') {?>
                                <option value="SI" selected="selected">SI</option>                                
                                <option value="NO">NO</option>
                                <?php } else { ?>
                                <option value="SI">SI</option>                                
                                <option value="NO" selected="selected">NO</option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="section">
                        <label> Imagen <small>Seleccione la imagen, esta debe tener unas dimenciones de  547px X 237px</small></label>   
                        <div><input type="file" name="imagen" class="full" /></div>
                    </div>
                    
                    <div class="section">
                        <label> Imagen Actual <small></small></label>   
                        <div><img width="89%" src="<?php echo base_url('uploads/front/destacadohome/'.$destacadohome->imagen) ?>" /></div>
                    </div>
                    
                    
                    <br />
                    <?php echo form_submit('Submit', 'Guardar', 'class="uibutton special"') ?>
                    <?php echo form_close();?>
                </fieldset>
            </div>

        </div>
    </div>	
</div>
<script>
//    $("#wisiwyg").cleditor();
//    $("#wisiwyg2").cleditor();
</script>