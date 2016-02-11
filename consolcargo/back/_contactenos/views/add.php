<div class="widget">
    <div class="header"><span><span class="ico gray window"></span>Adicionar contactenos</span>
        <br /><?php echo anchor('cms/contactenos/', 'Volver', 'class="uibutton icon special answer" style="cursor:pointer;float:right;position: relative;top: -5px"') ?>
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
                    <?php $url = 'cms/contactenos/guardarContactenos/'?>
                    <?php echo form_open_multipart($url); ?>
                    
                    <div class="section">
                        <label> Tel&eacute;fono <small>Ingrese tel&eacute;fono.</small></label>   
                        <div><input type="text" name="telefono" class="full" value="<?php echo set_value('telefono') ?>"></div>
                    </div>
                    <div class="section">
                        <label> Correo <small>Ingrese correo.</small></label>   
                        <div><input type="text" name="correo" class="full" value="<?php echo set_value('correo') ?>"></div>
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