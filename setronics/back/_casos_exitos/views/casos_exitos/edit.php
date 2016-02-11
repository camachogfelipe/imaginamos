<?php foreach ($datos as $obj) : ?>
<?php echo form_open_multipart(cms_url('casos_exitos/add_casos_exitos'), array("id" => "validate_field_types", "novalidate" => "novalidate")) ?>
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
        <label class="req">Titulo</label>
        <input type="text" id="titulo" value="<?php echo $obj->titulo; ?>" name="titulo" class="span12" maxlength="39">
    </div>

    <div class="span6">
        <label class="req">Sector</label>
        <select name="sublinea_id" id="sublinea_id" value="<?php echo $obj->sublinea_id; ?>" class="span10">
            <?php if (!empty($sector)) : ?>
                <?php foreach ($sector as $line) : ?>
                    <option value="<?php echo $line->id; ?>" <?php echo ($obj->sublinea_id == $line->id)?"selected='selected'":"" ?> ><?php echo $line->titulo; ?></option>
                <?php endforeach; ?>
            <?php endif; ?>
        </select>
    </div>

    <div class="span8">
        <label class="req">Descripción</label>
        <textarea class="span12" name="texto" id="wysiwg_editor" data-count="100" cols="30" rows="3"><?php echo $obj->texto; ?></textarea>
    </div>


    <div class="formSep">
        <button type="submit" id="Guardar" class="btn btn-success" onclick="$('.fileupload').fileupload();">Guardar Cambios</button>
    </div>

</div>
<?php echo form_close() ?>
<?php endforeach; ?>