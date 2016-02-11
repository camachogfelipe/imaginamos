<?php echo form_open_multipart(cms_url('certificaciones/add'), array("id" => "validate_field_types", "novalidate" => "novalidate")) ?>
<div class="row-fluid">
    <input name="id" value="" id="id" type="hidden">

    <div class="span3" style="height: 400px;">
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
        <label class="req">Titulo</label>
        <input type="text" id="titulo" name="titulo" class="span12" maxlength="39">
    </div>

    <div class="span6">
        <label class="req">Texto Introdutorio</label>
        <textarea class="span12" name="texto" id="count-textarea2"  data-count="295" cols="30" rows="3"></textarea>
    </div>

    <div class="span6">
        <label class="req">Folleto</label>
        <div class="fileupload fileupload-new" data-provides="fileupload">
            <input type="hidden" value="" name="">
            <span class="btn btn-small btn-file"><span class="fileupload-new">Seleccionar Archivo</span><span class="fileupload-exists">Change</span>
                <input type="file" name="path_certificado" id="imgData" ></span>
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