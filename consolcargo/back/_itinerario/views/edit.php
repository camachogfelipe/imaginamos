<div class="widget">
    <div class="header"><span><span class="ico gray window"></span>Editar itinerario</span>
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
                    <?php $url = 'cms/itinerario/editarItinerario/'.$itinerario->id?>
                    <?php echo form_open_multipart($url); ?>
                    
                     <div class="section">
                        <label> Tipo (Impo o Expo) <small>Seleccionar casilla si el tipo de itinerario es Impo.<br />Para Expo por favor no seleccionar.</small></label>   
                        <div><input type="checkbox" name="type_import" value="1" <?php echo ($itinerario->type_import==1)?"checked='true'":"" ?> /></div>
                    </div>
                    <br />
                    <div class="section">
                        <label> Carrier <small>Ingrese carrier.</small></label>   
                        <div><input type="text" name="carrier" class="full" value="<?php echo set_value('carrier', $itinerario->carrier) ?>"></div>
                    </div>
                    <div class="section">
                        <label> Vessel <small>Ingrese vessel.</small></label>   
                        <div><input type="text" name="vessel" class="full" value="<?php echo set_value('vessel', $itinerario->vessel) ?>"></div>
                    </div>
                    <div class="section">
                        <label> Voyage <small>Ingrese voyage.</small></label>   
                        <div><input type="text" name="voyage" class="full" value="<?php echo set_value('voyage', $itinerario->voyage) ?>"></div>
                    </div>
                    <div class="section">
                        <label> Port of loading <small>Ingrese port_of_loading.</small></label>   
                        <div><input type="text" name="port_of_loading" class="full" value="<?php echo set_value('port_of_loading', $itinerario->port_of_loading) ?>"></div>
                    </div>
                    <div class="section">
                        <label> Port of discharge <small>Ingrese port_of_discharge.</small></label>   
                        <div><input type="text" name="port_of_discharge" class="full" value="<?php echo set_value('port_of_discharge', $itinerario->port_of_discharge) ?>"></div>
                    </div>
                    <div class="section">
                        <label> Cut off <small>Ingrese cut_off.</small></label>   
                        <div><input type="text" name="cut_off" class="full" value="<?php echo set_value('cut_off', $itinerario->cut_off) ?>"></div>
                    </div>
                    <div class="section">
                        <label> Hora <small>Ingrese Hora.</small></label>   
                        <div><input type="text" name="hora" class="full" value="<?php echo set_value('hora', $itinerario->hora) ?>"></div>
                    </div>
                    <div class="section">
                        <label> Etd <small>Ingrese etd.</small></label>   
                        <div><input type="text" name="etd" class="full" value="<?php echo set_value('etd', $itinerario->etd) ?>"></div>
                    </div>
                    <div class="section">
                        <label> Eta <small>Ingrese eta.</small></label>   
                        <div><input type="text" name="eta" class="full" value="<?php echo set_value('eta', $itinerario->eta) ?>"></div>
                    </div>
                    <div class="section">
                        <label> Tt <small>Ingrese tt.</small></label>   
                        <div><input type="text" name="tt" class="full" value="<?php echo set_value('tt', $itinerario->tt) ?>"></div>
                    </div>
                    <div class="section">
                        <label> Requeriments <small>Ingrese requeriments.</small></label>   
                        <div><input type="text" name="requeriments" class="full" value="<?php echo set_value('requeriments', $itinerario->requeriments) ?>"></div>
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