<div class="widget">
    <div class="header"><span><span class="ico gray window"></span>Editar visitenos</span>
        <br /><?php echo anchor('cms/visitenos/', 'Volver', 'class="uibutton icon special answer" style="cursor:pointer;float:right;position: relative;top: -5px"') ?>
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
                    <?php $url = 'cms/visitenos/editarVisitenos/'.$visitenos->id?>
                    <?php echo form_open_multipart($url); ?>
                    
                    <div class="section">
                        <label> Direcci&oacute;n <small>Ingrese direcci&oacute;n, la cantidad m&aacute;xima de caracteres es de 27.</small></label>   
                        <div><input type="text" maxlength="27" name="direccion" class="full" value="<?php echo set_value('direccion', $visitenos->direccion) ?>"></div>
                    </div>
                    <div class="section">
                        <label> Barrio <small>Ingrese barrio, la cantidad m&aacute;xima de caracteres es de 27.</small></label>   
                        <div><input type="text" maxlength="27" name="barrio" class="full" value="<?php echo set_value('barrio', $visitenos->barrio) ?>"></div>
                    </div>
                    <div class="section">
                        <label> Ciudad <small>Ingrese ciudad, la cantidad m&aacute;xima de caracteres es de 27.</small></label>   
                        <div><input type="text" maxlength="27" name="ciudad" class="full" value="<?php echo set_value('ciudad', $visitenos->ciudad) ?>"></div>
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