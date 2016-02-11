<?php foreach ($datos as $obj) : ?>
<?php echo form_open_multipart(cms_url('casos_exitos/edit_clientes'), array("id" => "validate_field_types", "novalidate" => "novalidate")) ?>
<div class="row-fluid">
    <input name="id" value="<?php echo $obj->id; ?>" id="id" type="hidden">

    <div class="span3">
        <label class="req" >Imagen</label>
        <div class="fileupload fileupload-<?php echo !is_null($obj->imagen_path)?"exists":"new"; ?>" data-provides="fileupload">
            <div class="fileupload-new thumbnail" style="width: 150px; height: 150px;">
                <img id="img" src="<?php echo !is_null($obj->imagen_path)?base_url().$obj->imagen_path:base_url()."./uploads/dummy_150x150.gif" ?>" alt="" >
            </div>
            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 150px; max-height: 150px; ">
                <img id="img" src="<?php echo !is_null($obj->imagen_path)?base_url().$obj->imagen_path:base_url()."./uploads/dummy_150x150.gif" ?>" alt="" >
            </div>
            <div>
                <span class="btn btn-small btn-file">
                    <span class="fileupload-new">Cargar Imgen</span>
                    <span class="fileupload-exists">Cambiar</span>
                    <input type="hidden" value="<?php echo $obj->imagen_id; ?>" name="imagen_id" >
                    <input type="file" value="<?php echo $obj->imagen_path; ?>" name="imagen_path" id="path" />
                </span>
                <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Eliminar</a>
            </div>
        </div>
        <span class="help-block">280 x 300</span>
    </div>
    <div class="span3">
        <label class="req">Nombre Cliente</label>
        <input type="text" id="nombre" name="nombre" value="<?php echo $obj->nombre; ?>" class="span12" maxlength="15">
    </div>

    <div class="span6">
        <label class="req">Caso de Exito</label>
        <select name="caso_exito_id" id="caso_exito_id" value="<?php echo $obj->caso_exito_id; ?>" class="span10">
            <?php if (!empty($exito)) : ?>
                <?php foreach ($exito as $line) : ?>
                    <option value="<?php echo $line->id; ?>" <?php echo $obj->caso_exito_id === $line->id ?"selected='selected'":""; ?>><?php echo $line->titulo; ?></option>
                <?php endforeach; ?>
            <?php endif; ?>
        </select>
    </div>
    
    <div class="formSep">
        <button type="submit" id="Guardar" class="btn btn-success" onclick="$('.fileupload').fileupload();">Guardar Cambios</button>
    </div>

</div>
<?php echo form_close() ?>
<?php endforeach; ?>