<div class="widget">
    <div class="header"><span><span class="ico gray window"></span>Editar contactenos</span>
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
                    
                    <?php $url = 'cms/contactenos/editarContactenos/'.$contactenos->id?>
                    <?php echo form_open_multipart($url); ?>
                    
                    <div class="section">
                        <label> Tel&eacute;fono <small>Ingrese tel&eacute;fono, la cantidad m&aacute;xima de caracteres es de 27.</small></label>   
                        <div><input type="text" maxlength="27" name="telefono" class="full" value="<?php echo set_value('telefono', $contactenos->telefono) ?>"></div>
                    </div>
                    <div class="section">
                        <label> Correo electr&oacute;nico <small>Ingrese correo electr&oacute;nico, la cantidad m&aacute;xima de caracteres es de 27.</small></label>   
                        <div><input type="text" maxlength="27" name="correo" class="full" value="<?php echo set_value('correo', $contactenos->correo) ?>"></div>
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