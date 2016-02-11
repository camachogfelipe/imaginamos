<div class="widget">
    <div class="header"><span><span class="ico gray window"></span>Tiempo de ventana de ayuda </span>
        <br /><?php echo anchor('cms/tiempo_chat/', 'Volver', 'class="uibutton icon special answer" style="cursor:pointer;float:right;position: relative;top: -5px"') ?>
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
                    <?php $url = 'cms/tiempo_chat/editarTiempo_chat/'.$tiempo_chat->id?>
                    <?php echo form_open_multipart($url); ?>
                    
                    <div class="section">
                        <label>Tiempo ventana de ayuda<small>tiempo para aparecer ventana de ayuda</small></label>   
                        <div><input type="text" name="time_chat" class="full" value="<?php echo set_value('time_chat') ?>"></div>
                    </div>
                
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