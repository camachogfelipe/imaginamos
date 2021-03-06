<?php foreach ($datos as $obj) : ?>
    <?php echo form_open_multipart(cms_url('subcategorias/add'), array("id" => "validate_field_types", "novalidate" => "novalidate")) ?>
    <div class="row-fluid">
        <input name="id" value="<?php echo $obj->id; ?>" id="id" type="hidden">
        <input name="linea_id" value="<?php echo $obj->linea_id; ?>" id="linea_id" type="hidden">

        <div class="span3" style="height: 350px;" >
            <label class="req" >Imagen</label>
            <div class="fileupload fileupload-<?php echo!is_null($obj->imagen_path) ? "exists" : "new"; ?>" data-provides="fileupload">
                <div class="fileupload-new thumbnail" style="width: 150px; height: 150px;">
                    <img id="img" src="<?php echo!is_null($obj->imagen_path) ? base_url() . $obj->imagen_path : base_url() . "./uploads/dummy_150x150.gif" ?>" alt="" >
                </div>
                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 150px; max-height: 150px; ">
                    <img id="img" src="<?php echo!is_null($obj->imagen_path) ? base_url() . $obj->imagen_path : base_url() . "./uploads/dummy_150x150.gif" ?>" alt="" >
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

        <div class="span6">
            <label class="req">Nombre de la Sub-Categoria</label>
            <input type="text" id="categoria" name="categoria" value="<?php echo $obj->categoria; ?>" class="span12" maxlength="32">
        </div>

        <div class="span6">
            <label class="req">Linea Asociada</label>
            <select name="linea_id" class="span10">
                <?php if (!empty($lineas)) : ?>
                    <?php foreach ($lineas as $line) : ?>
                        <option value="<?php echo $line->id; ?>" <?php echo ($obj->linea_id == $line->id) ? "selected='selected'" : ""; ?> ><?php echo $line->titulo; ?></option>
                    <?php endforeach; ?>
                <?php endif; ?>
            </select>
        </div>


        <div class="span6">
            <label class="req">Categorias</label>
            <select name="categoria_id" class="span10">
                <?php if (!empty($categorias)) : ?>
                    <?php foreach ($categorias as $line) : ?>
                        <option value="<?php echo $line->id; ?>" <?php echo ($obj->categoria_id == $line->id) ? "selected='selected'" : ""; ?> ><?php echo $line->categoria; ?></option>
                    <?php endforeach; ?>
                <?php endif; ?>
            </select>
        </div>


        <div class="span8">
            <label class="req">Descripción</label>
            <textarea class="span12" name="descripcion" id="count-textarea2" data-count="645" cols="30" rows="3"><?php echo $obj->descripcion; ?></textarea>
        </div>




        <div class="formSep">
            <button type="submit" id="Guardar" class="btn btn-success" onclick="$('.fileupload').fileupload();">Guardar Cambios</button>
        </div>

    </div>
    <?php echo form_close() ?>
<?php endforeach; ?>