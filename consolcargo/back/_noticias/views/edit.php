<div class="widget">
    <div class="header"><span><span class="ico gray window"></span>Editar noticias</span>
        <br /><?php echo anchor('cms/noticias/', 'Volver', 'class="uibutton icon special answer" style="cursor:pointer;float:right;position: relative;top: -5px"') ?>
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
                    <?php $url = 'cms/noticias/editarNoticias/'.$noticias->id?>
                    <?php echo form_open_multipart($url); ?>
                    
                    <div class="section">
                        <label> T&iacute;tulo <small>Ingrese t&iacute;tulo, la cantidad m&aacute;xima de caracteres es de 20.</small></label>   
                        <div><input type="text" maxlength="20" name="titulo" class="full" value="<?php echo set_value('titulo', $noticias->titulo) ?>"></div>
                    </div>
                    <div class="section">
                        <label> Texto <small>Ingrese texto, la cantidad m&aacute;xima de caracteres es de 70.</small></label>   
                        <div><input type="text" maxlength="70" name="texto" class="full" value="<?php echo set_value('texto', $noticias->texto) ?>"></div>
                    </div>
                    <div class="section">
                        <label> Link <small>Ingrese link.</small></label>   
                        <div><input type="text" name="link" class="full" value="<?php echo set_value('link', $noticias->link) ?>"></div>
                    </div>
                    
                    <div class="section">
                        <label> Imagen <small>Seleccione la imagen, esta debe tener unas dimenciones de  68px X 68px</small></label>   
                        <div><input type="file" name="imagen" class="full" /></div>
                    </div>
                    
                    <div class="section">
                        <label> Imagen Actual <small></small></label>   
                        <div><img height="200" width="200" src="<?php echo base_url('uploads/front/noticias/'.$noticias->imagen) ?>" /></div>
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