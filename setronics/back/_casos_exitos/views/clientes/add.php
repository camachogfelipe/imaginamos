<?php echo form_open_multipart(cms_url('casos_exitos/add_clientes'), array("id" => "validate_field_types", "novalidate" => "novalidate")) ?>
<div class="row-fluid">
    <input name="id" value="" id="id" type="hidden">
        <div class="span3">
        <label class="req" >Imagen</label>
        <div class="fileupload fileupload-new" data-provides="fileupload">
            <div class="fileupload-new thumbnail" style="width: 150px; height: 150px;">
                <img id="img" src="<?php echo base_url(); ?>./uploads/dummy_150x150.gif" alt="">
            </div>
            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 150px; max-height: 150px; ">
            </div>
            <div>
                <span class="btn btn-small btn-file">
                    <span class="fileupload-new">Cargar Imgen</span>
                    <span class="fileupload-exists">Cambiar</span>
                    <input type="hidden" value="" name="imagen_id" >
                    <input type="file" value="" name="imagen_path" id="path" />
                </span>
                <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Eliminar</a>
            </div>
        </div>
        <span class="help-block">125px × 125px</span>
    </div>


    <div class="span3">
        <label class="req">Nombre Cliente</label>
        <input type="text" id="nombre" name="nombre" class="span12" maxlength="15">
    </div>

     <div class="span6">
        <label class="req">Caso de Exito</label>
        <select name="caso_exito_id" id="caso_exito_id" class="span10">
            <?php if (!empty($exito)) : ?>
                <?php foreach ($exito as $line) : ?>
                    <option value="<?php echo $line->id; ?>" selected="selected"><?php echo $line->titulo; ?></option>
                <?php endforeach; ?>
            <?php endif; ?>
        </select>
    </div>

    <div class="formSep">
        <button type="submit" id="Guardar" class="btn btn-success" onclick="$('.fileupload').fileupload();">Guardar Cambios</button>
    </div>
</div>
<?php echo form_close() ?>