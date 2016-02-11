<div class="widget">
    <div class="header"><span><span class="ico gray window"></span>Editar Parrafo Itinerario</span>
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
                    <?php $url = 'cms/parrafo_itinerario/editarParrafo_itinerario/'.$parrafo_itinerario->id?>
                    <?php echo form_open_multipart($url); ?>
                    
                    <div class="section">
                        <label> Texto <small>Ingrese texto.</small></label>   
                        <div><textarea class="full" name="texto" ><?php echo set_value('texto', $parrafo_itinerario->texto) ?></textarea></div>
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