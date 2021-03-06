<div class="widget">
    <div class="header"><span><span class="ico gray window"></span>Editar servicios</span>
        <br /><?php echo anchor('cms/servicios/', 'Volver', 'class="uibutton icon special answer" style="cursor:pointer;float:right;position: relative;top: -5px"') ?>
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
                    <?php $url = 'cms/servicios/editarServicios/'.$servicios->id?>
                    <?php echo form_open_multipart($url); ?>
                    
                    <div class="section">
                        <label> T&iacute;tulo <small>Ingrese t&iacute;tulo, la cantidad m&aacute;xima de caracteres es de 56.</small></label>   
                        <div><input type="text" name="titulo" class="full" value="<?php echo set_value('titulo', $servicios->titulo) ?>"></div>
                    </div>
                    
                    <div class="section">
                        <label> Imagen <small>Seleccione la imagen, esta debe tener unas dimenciones de 248px X 96px</small></label>   
                        <div><input type="file" name="imagen" class="full" /></div>
                    </div>
                    
                    <div class="section">
                        <label> Imagen Actual <small></small></label>   
                        <div><img width="248" src="<?php echo base_url('uploads/front/servicios/'.$servicios->imagen) ?>" /></div>
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