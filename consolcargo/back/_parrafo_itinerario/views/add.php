<div class="widget">
    <div class="header"><span><span class="ico gray window"></span>Adicionar Parrafo Itinerario</span>
        <br /><?php echo anchor('cms/parrafo_itinerario/', 'Volver', 'class="uibutton icon special answer" style="cursor:pointer;float:right;position: relative;top: -5px"') ?>
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
                    <?php $url = 'cms/parrafo_itinerario/guardarParrafo_itinerario/'?>
                    <?php echo form_open_multipart($url); ?>
                    
                    <div class="section">
                        <label> Texto <small>Ingrese texto.</small></label>   
                        <div><input type="text" name="texto" class="full" value="<?php echo set_value('texto') ?>"></div>
                    </div>
                    
                    <div class="section">
                        <label> Archivo Impo<small>Seleccione el archivo de itinerarios tipo Impo, esta debe ser excel 97-2007 (.xls)</small></label>   
                        <div><input type="file" name="archivo" <?php echo set_value('archivo', $parrafo_itinerario->archivo) ?> class="full" /></div>
                    </div>
                    <div class="section">
                        <label> Archivo Expo<small>Seleccione el archivo de itinerarios tipo Expo, esta debe ser excel 97-2007 (.xls)</small></label>   
                        <div><input type="file" name="archivo1" <?php echo set_value('archivo', $parrafo_itinerario->archivo) ?> class="full" /></div>
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