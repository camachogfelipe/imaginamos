<div class="widget">
    <div class="header"><span><span class="ico gray window"></span>Adicionar itinerario</span>
        <br /><?php echo anchor('cms/itinerario/', 'Volver', 'class="uibutton icon special answer" style="cursor:pointer;float:right;position: relative;top: -5px"') ?>
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
                    <?php $url = 'cms/itinerario/importarItinerario/'?>
                    <?php echo form_open_multipart($url); ?>
                    
                    <div class="section">
                        <label> Tipo (Impo o Expo) <small>Seleccionar casilla si el tipo de itinerario es Impo.<br />Para Expo por favor no seleccionar.</small></label>   
                        <div><input type="checkbox" name="type_import" value="1" /></div>
                    </div>
                    
                    <div class="section">
                        <label> Archivo <small>Seleccione el archivo, esta debe ser excel 97-2007 (.xls)</small></label>   
                        <div><input type="file" name="archivo" class="full" /></div>
                    </div>
                    
                    <br />
                    <?php echo form_submit('Submit', 'Guardar', 'class="uibutton special"') ?>
                    <?php echo form_close();?>
                </fieldset>
            </div>

        </div>
    </div>	
</div>