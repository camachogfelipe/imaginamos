<div class="row-fluid">
    <input name="id" value="" id="id" type="hidden">

    <div class="span8">
        <label class="req">Producto</label>
        <select name="producto_id" id="producto_id" class="span10">
            <?php if (!empty($prod)) : ?>
                <?php foreach ($prod as $line) : ?>
                    <option value="<?php echo $line->id; ?>" selected="selected"><?php echo $line->titulo; ?></option>
                <?php endforeach; ?>
            <?php endif; ?>
        </select>
    </div>

    <div class="span8">
        <label class="req">Lista de Imagenes</label>
        <!-- <input id="dirup" value="<?php echo cms_url('productos/add_gallery'); ?>" dato="" type="hidden"/> -->
        <input id="dirup" value="<?php echo base_url() . "cms/productos/add_gallery"; ?>" dato="id=0" type="hidden"/>

        <div class="w-box" id="n_multiupload">
            <div class="w-box-header">
                <h4>Imagenes</h4>
            </div>
            <div class="w-box-content">
                <div id="multi_upload" class="beoro-upload">
                    <p>You browser doesn't have Flash, Silverlight or HTML5 support.</p>
                </div>
            </div>
        </div>

    </div>
    <div class="formSep">
        <button type="submit" id="Guardar" class="btn btn-success" onclick="$('.fileupload').fileupload();">Guardar Cambios</button>
    </div>

</div>
<script>
    $('#dirup').attr('dato', 'id=' + $('#producto_id').val());
    $('#producto_id').change(function(e) {
        $('#dirup').attr('dato', 'id=' + $('#producto_id').val());
    });
</script>
