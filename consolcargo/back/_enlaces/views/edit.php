<div class="widget">
    <div class="header"><span><span class="ico gray window"></span>Editar enlaces</span>
        <br /><?php echo anchor('cms/enlaces/index/-1/' . $tipo, 'Volver', 'class="uibutton icon special answer" style="cursor:pointer;float:right;position: relative;top: -5px"') ?>
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
                    <?php $url = 'cms/enlaces/editarEnlaces/' . $enlaces->id ?>
                    <?php echo form_open_multipart($url); ?>

                    <div><input type="hidden"  name="tipo" class="full" value="<?php echo $tipo ?>"></div>
                    <div class="section">
                        <label> T&iacute;tulo <small>Ingrese t&iacute;tulo, la cantidad m&aacute;xima de caracteres es de 40.</small></label>   
                        <div><input type="text" name="titulo" class="full" value="<?php echo set_value('titulo', $enlaces->titulo) ?>"></div>
                    </div>
                    <div class="section">
                        <label> Link <small>Ingrese link. (Incluya http:// para evitar errores)</small></label>   
                        <div><input type="text" name="link" class="full" value="<?php echo set_value('link', $enlaces->link) ?>"></div>
                    </div>

                    <?php 
                      if($tipo == 'enlaces'){ ?>
                     <div class="section">
                        <label> Archivo <small>Seleccione archivo PDF</small></label>   
                        <div><input type="file" name="path_pdf" class="full" /></div>
                    </div>
           

                    <div class="section">
                        <label><small></small></label>     
                        <div><label>Archivo Actual <small></small></label>
                         <a href="<?php echo base_url('uploads/front/enlaces/' . $enlaces->path_pdf) ?>" />&nbsp&nbsp&nbspLink Archivo</a></div>
                    </div>

                     <?php }
                    ?>


                    <?php
                    $dimension = "40 X 40 px";

                    if ($tipo == 'itinerario' || $tipo == 'enlaces') {
                        $dimension = "188 X 65 px";
                    }
                    ?>

                    <div class="section">
                        <label> Imagen <small>Seleccione la imagen, esta debe tener unas dimenciones de <? echo $dimension;?></small></label>   
                        <div><input type="file" name="imagen" class="full" /></div>
                    </div>

                    <div class="section">
                        <label> Imagen Actual <small></small></label>   
                        <div><img src="<?php echo base_url('uploads/front/enlaces/' . $enlaces->imagen) ?>" /></div>
                    </div>


                    <br />
                    <?php echo form_submit('Submit', 'Guardar', 'class="uibutton special"') ?>
                    <?php echo form_close(); ?>
                </fieldset>
            </div>

        </div>
    </div>	
</div>
<script>
//    $("#wisiwyg").cleditor();
//    $("#wisiwyg2").cleditor();
</script>