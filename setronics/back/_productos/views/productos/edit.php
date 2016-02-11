<?php foreach ($datos as $obj) : ?>
    <?php echo form_open_multipart(cms_url('productos/add'), array("id" => "validate_field_types", "novalidate" => "novalidate")) ?>
    <div class="row-fluid">
        <input name="id" value="<?php echo $obj->id; ?>" id="id" type="hidden">

        <div class="span6">
            <label class="req">Nombre del Producto</label>
            <input type="text" id="titulo" name="titulo" value="<?php echo $obj->titulo; ?>" class="span12" maxlength="24">
            <span class="help-block">Maximo de caracteres (24)</span>
        </div>

        <div class="span4">
            <label class="req">Precio Proveedor</label>
            <div class="input-prepend input-append">
                <span class="add-on">$</span><input type="text" size="16" id="precio_prov" name="precio_prov" value="<?php echo $obj->precio_prov; ?>" class="span5"><span class="add-on">.00</span>
            </div>
        </div> 

        <div class="span4">
            <label class="req">Precio Cliente</label>
            <div class="input-prepend input-append">
                <span class="add-on">$</span><input type="text" size="16" id="precio_client" name="precio_client" value="<?php echo $obj->precio_client; ?>" class="span5"><span class="add-on">.00</span>
            </div>
        </div> 

        <div class="span6">
            <label class="req">Tipo de Producto</label>
            <select name="grupo_id" id="grupo_id" class="span10">
                <?php if (!empty($grupos)) : ?>
                    <?php foreach ($grupos as $line) : ?>
                        <option value="<?php echo $line->id; ?>" <?php echo ($obj->grupo_id === $line->id)?"selected='true'":""; ?> ><?php echo $line->grupo; ?></option>
                    <?php endforeach; ?>
                <?php endif; ?>
            </select>
        </div>

        <div class="span6">
            <label class="req">Descripción Intro</label>
            <textarea class="span12" name="descripcion_intro" id="count-textarea2" data-count="63" cols="30" rows="3"><?php echo $obj->descripcion_intro; ?></textarea>
        </div>

        <div class="span6">
            <label class="req">Descripción</label>
            <textarea class="span12" name="descripcion" cols="30" rows="3"><?php echo $obj->descripcion; ?></textarea>
        </div>
        <div class="span6">
            <label class="req">Especificación Tecnica</label>
            <textarea class="span12" name="especificacion_tecnica" cols="30" rows="3"><?php echo $obj->especificacion_tecnica; ?></textarea>
        </div>

        <div class="span6">
            <label class="req">Informacion Tecnica</label>
            <div class="fileupload fileupload-exists" data-provides="fileupload">
                <input type="hidden" value="<?php echo $obj->path_info_tenica; ?>" name="path_info_tenica">
                <span class="btn btn-small btn-file">
                    <span class="fileupload-new">Seleccionar Archivo</span>
                    <span class="fileupload-exists">Cambiar</span>
                    <input type="file" name="path_info_tenica"  value="<?php echo $obj->path_info_tenica; ?>" id="imgData" >
                </span>
                <span class="fileupload-preview"><?php echo $obj->path_info_tenica; ?></span>
                <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
            </div>
            <span class="help-block">pdf|xls|docx</span>
        </div>
        
      
        <div class="span6">
            <label class="req">Folleto</label>
            <div class="fileupload fileupload-exists" data-provides="fileupload">
                <input type="hidden" value="<?php echo $obj->path_folleto; ?>" name="path_folleto">
                <span class="btn btn-small btn-file"><span class="fileupload-new">Seleccionar Archivo</span><span class="fileupload-exists">Cambiar</span>
                    <input type="file" name="path_folleto" value="<?php echo base_url().$obj->path_folleto; ?>" id="imgData" ></span>
                <span class="fileupload-preview"><?php echo $obj->path_folleto; ?></span>
                <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
            </div>
            <span class="help-block">pdf|xls|docx</span>
        </div>

        <div class="formSep">
            <button type="submit" id="Guardar" class="btn btn-success" onclick="$('.fileupload').fileupload();">Guardar Cambios</button>
        </div>

    </div>
    <?php echo form_close() ?>
<?php endforeach; ?>