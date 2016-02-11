<div class="widget">
    <div class="header"><span><span class="ico gray window"></span>Editar detalle servicios</span>
        <br /><?php echo anchor('cms/detalle_servicios/index/-1/' . $idServicio, 'Volver', 'class="uibutton icon special answer" style="cursor:pointer;float:right;position: relative;top: -5px"') ?>
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
                    <?php $url = 'cms/detalle_servicios/editarDetalle_servicios/'.$detalle_servicios->id.'/'.$idServicio?>
                    <?php echo form_open_multipart($url); ?>
                    
                    <div class="section">
                        <label> T&iacute;tulo <small>Ingrese t&iacute;tulo</small></label>   
                        <div><input type="text" name="titulo" class="full" value="<?php echo set_value('titulo', $detalle_servicios->titulo) ?>"></div>
                    </div>
                    
                    <div class="section">
                        <label> Texto <small>Ingrese texto.</small></label>   
                        <div><textarea id="wisiwyg" name="texto" class="full"><?php echo set_value('texto', $detalle_servicios->texto) ?></textarea></div>
                    </div>
                    <div class="section">
                        <label> Texto cont&aacute;ctenos <small>Ingrese texto cont&aacute;ctenos.</small></label>   
                        <div><textarea name="texto_contactenos" class="full"><?php echo set_value('texto_contactenos', $detalle_servicios->texto_contactenos) ?></textarea></div>
                    </div>
                    
                    <div class="section">
                        <label> Imagen <small>Seleccione la imagen, esta debe tener unas dimenciones de  902px X 208px</small></label>   
                        <div><input type="file" name="imagen" class="full" /></div>
                    </div>
                    
                    <div class="section">
                        <label> Imagen Actual <small></small></label>   
                        <div><img  width="89%" src="<?php echo base_url('uploads/front/detalle_servicios/'.$detalle_servicios->imagen) ?>" /></div>
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