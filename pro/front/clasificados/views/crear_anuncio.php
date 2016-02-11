<div class="selectores">
    <?php echo form_open_multipart('clasificados/save/' . ($edit_mode ? $datos->id : null), 'id="crear-form"', array('edit_mode' => $edit_mode)) ?>
    <?php if (!empty($alert_messages)) : ?>
        <div><?php echo $alert_messages ?></div>
    <?php endif; ?>

    <div>
        <small>Categoría del anuncio: </small>
        <?php echo form_dropdown('clasificados_categoria_id', $categorias, $edit_mode ? $datos->clasificados_categoria_id : $this->input->post('clasificados_categoria_id'), 'style="width:167px;" class="comboBox2"') ?>
    </div>
    <div class="clear"></div>
	
    <div class="selectores-publicar">
        <input name="titulo" class="campo4" type="text" placeholder="Título" value="<?php echo $edit_mode ? $datos->titulo : $this->input->post('titulo') ?>">
        <input name="ciudad" class="campo4" type="text" placeholder="Ciudad"  value="<?php echo $edit_mode ? $datos->ciudad : $this->input->post('ciudad') ?>">
        <input name="fecha_cierre" class="campo4" type="text" placeholder="Fecha de cierre" readonly="true" value="<?php echo $edit_mode ? $datos->fecha_cierre : $this->input->post('fecha_cierre') ?>">
        <input name="precio" class="campo2" type="number" min="0" placeholder="Precio" value="<?php echo $edit_mode ? $datos->precio : $this->input->post('precio') ?>">
        <div class="clr"></div>
    </div>
    
    <div class="area-cont1"><textarea name="introduccion" class="area1" placeholder="Introducción (120 Caracteres)" style="resize: none;"><?php echo $edit_mode ? $datos->introduccion : $this->input->post('introduccion') ?></textarea></div>
    <div class="area-cont2"><textarea name="descripcion" class="area2" placeholder="Descripción (220 Caracteres)" style="resize: none;"><?php echo $edit_mode ? $datos->descripcion : $this->input->post('descripcion') ?></textarea></div>
    

    <div style="margin: 2em 0;" class="carga-tit">
        <h3>Imagen del clasificado:</h3>
        <?php if ($edit_mode && !empty($datos->imagen)) : ?>
            <img src="<?php echo uploads_url($datos->imagen) ?>" />
        <?php endif; ?>
        <div class="clear"></div>
        <small style="font-size: .8em;"><?php echo $edit_mode ? 'Cambiar: ' : null ?></small><input type="file" name="imagen" id="imagen" />
        <div class="acotacion-campo3">Ancho de la imagen: (200px)</div>
    </div>


    <div class="clr"></div>

    <input type="submit" class="bot-publicar" value="<?php echo $edit_mode ? 'Guardar' : 'Publicar' ?>"/>
    <?php echo form_close() ?>
</div>
<div class="clr"></div>




<script type="text/javascript">
    $(function(){
        $('[name="fecha_cierre"]').datepicker({
            minDate : 1
			
        }); 
        $('#crear-form').on('submit', function() {
            var ok = true;
            if ($('[name="edit_mode"]').val() === 0) {
                ok = confirm('¿Está seguro de crear el clasificado?');
            }
            return ok;
        });
    });
</script>