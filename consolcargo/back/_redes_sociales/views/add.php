<div class="widget">
    <div class="header"><span><span class="ico gray window"></span>Adicionar redes_sociales</span>
        <br /><?php echo anchor('cms/redes_sociales/', 'Volver', 'class="uibutton icon special answer" style="cursor:pointer;float:right;position: relative;top: -5px"') ?>
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
                    <?php $url = 'cms/redes_sociales/guardarRedes_sociales/'?>
                    <?php echo form_open_multipart($url); ?>
                    
                    <div class="section">
                        <label> Facebook <small>Ingrese facebook.</small></label>   
                        <div><input type="text" name="facebook" class="full" value="<?php echo set_value('facebook') ?>"></div>
                    </div>
                    <div class="section">
                        <label> Twitter <small>Ingrese twitter.</small></label>   
                        <div><input type="text" name="twitter" class="full" value="<?php echo set_value('twitter') ?>"></div>
                    </div>
                    <div class="section">
                        <label> Youtube <small>Ingrese youtube.</small></label>   
                        <div><input type="text" name="youtube" class="full" value="<?php echo set_value('youtube') ?>"></div>
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