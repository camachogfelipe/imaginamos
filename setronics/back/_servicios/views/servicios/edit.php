<?php foreach ($datos as $obj) : ?>
<?php echo form_open_multipart(cms_url('servicios/add'), array("id" => "validate_field_types", "novalidate" => "novalidate")) ?>
<div class="row-fluid">
    <input name="id" value="<?php echo $obj->id; ?>" id="id" type="hidden">

    <div class="span3" style="height: 400px;">
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
        <label class="req">Nombre del Servicio</label>
        <input type="text" id="titulo" value="<?php echo $obj->titulo; ?>" name="titulo" class="span12" maxlength="15">
    </div>

    <div class="span2">
        <label class="req">Precio Proveedor</label>
        <div class="input-prepend input-append">
            <span class="add-on">$</span><input type="text" size="16" id="precio_provedor" value="<?php echo $obj->precio_provedor; ?>" name="precio_provedor" class="span8"><span class="add-on">.00</span>
        </div>
    </div> 

    <div class="span2">
        <label class="req">Precio Cliente</label>
        <div class="input-prepend input-append">
            <span class="add-on">$</span><input type="text" size="16" id="precio_cliente" value="<?php echo $obj->precio_cliente; ?>" name="precio_cliente" class="span8"><span class="add-on">.00</span>
        </div>
    </div> 

    <div class="span6">
        <label class="req">Texto Introdutorio</label>
        <textarea class="span12" name="texto_intro" id="count-textarea2"  data-count="1037" cols="30" rows="3"><?php echo $obj->texto_intro; ?></textarea>
    </div>
    <div class="span8">
        <label class="req">Descripción</label>
        <textarea class="span12" name="descripcion" id="wysiwg_editor"  cols="30" rows="3"><?php echo $obj->descripcion; ?></textarea>
    </div>
    
    
    <div class="formSep">
        <button type="submit" id="Guardar" class="btn btn-success" onclick="$('.fileupload').fileupload();">Guardar Cambios</button>
    </div>

</div>
<?php echo form_close() ?>
<?php endforeach; ?>