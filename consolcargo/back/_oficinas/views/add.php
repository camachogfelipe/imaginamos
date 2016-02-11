<div class="widget">
    <div class="header"><span><span class="ico gray window"></span>Adicionar oficinas</span>
        <br /><?php echo anchor('cms/oficinas/', 'Volver', 'class="uibutton icon special answer" style="cursor:pointer;float:right;position: relative;top: -5px"') ?>
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
                    <?php $url = 'cms/oficinas/guardarOficinas/'?>
                    <?php echo form_open_multipart($url); ?>
                    
                    <div class="section">
                        <label> T&iacute;tulo <small>Ingrese t&iacute;tulo, la cantidad m&aacute;xima de caracteres es de 27.</small></label>   
                        <div><input type="text" maxlength="27" name="titulo" class="full" value="<?php echo set_value('titulo') ?>"></div>
                    </div>
                    <div class="section">
                        <label> Texto <small>Ingrese texto.</small></label>   
                        <div><textarea id='wisiwyg' name="texto" class="full"><?php echo set_value('texto') ?></textarea></div>
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
    $("#wisiwyg").cleditor();
//    $("#wisiwyg2").cleditor();
</script>