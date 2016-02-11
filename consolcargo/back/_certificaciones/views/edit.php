<div class="widget">
    <div class="header"><span><span class="ico gray window"></span>Editar certificaciones</span>
        <br /><?php echo anchor('cms/certificaciones/', 'Volver', 'class="uibutton icon special answer" style="cursor:pointer;float:right;position: relative;top: -5px"') ?>
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
                    <?php $url = 'cms/certificaciones/editarCertificaciones/'.$certificaciones->id?>
                    <?php echo form_open_multipart($url); ?>
                    
                    
                    <div class="section">
                        <label> Imagen <small>Seleccione la imagen, esta debe tener unas dimenciones de  80px X 50px</small></label>   
                        <div><input type="file" name="imagen" class="full" /></div>
                    </div>
                    
                    <div class="section">
                        <label> Imagen Actual <small></small></label>   
                        <div><img src="<?php echo base_url('uploads/front/certificaciones/'.$certificaciones->imagen) ?>" /></div>
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