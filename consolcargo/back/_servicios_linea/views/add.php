<div class="widget">
    <div class="header"><span><span class="ico gray window"></span>Adicionar servicios_linea</span>
        <br /><?php echo anchor('cms/servicios_linea/', 'Volver', 'class="uibutton icon special answer" style="cursor:pointer;float:right;position: relative;top: -5px"') ?>
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
                    <?php $url = 'cms/servicios_linea/guardarServicios_linea/'?>
                    <?php echo form_open_multipart($url); ?>
                    
                    <div class="section">
                        <label> Texto <small>Ingrese texto.</small></label>   
                        <div><input type="text" name="texto" class="full" value="<?php echo set_value('texto') ?>"></div>
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