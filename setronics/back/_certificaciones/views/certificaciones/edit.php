<?php foreach ($datos as $obj) : ?>
<?php echo form_open_multipart(cms_url('certificaciones/add'), array("id" => "validate_field_types", "novalidate" => "novalidate")) ?>
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

     <div class="span3">
        <label class="req">Titulo</label>
        <input type="text" id="titulo" name="titulo" value="<?php echo $obj->titulo; ?>" class="span12" maxlength="39">
    </div>

    <div class="span6">
        <label class="req">Texto Introdutorio</label>
        <textarea class="span12" name="texto" id="count-textarea2"  data-count="295" cols="30" rows="3"><?php echo $obj->texto; ?></textarea>
    </div>

    <div class="span6">
        <label class="req">Informacion Tecnica</label>
        <div class="fileupload fileupload-exists" data-provides="fileupload">
            <input type="hidden" value="<?php echo $obj->path_certificado; ?>" name="path_certificado">
            <span class="btn btn-small btn-file">
                <span class="fileupload-new">Seleccionar Archivo</span>
                <span class="fileupload-exists">Change</span>
                <input type="file" name="path_certificado" value="<?php echo $obj->path_certificado; ?>" id="imgData" >
            </span>
            <span class="fileupload-preview"></span>
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