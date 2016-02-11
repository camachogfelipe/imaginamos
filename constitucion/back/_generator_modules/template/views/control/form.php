<?php echo form_open_multipart(cms_url($direct_form), array("id" => "validate_field_types", "novalidate" => "novalidate")) ?>
<div class="row-fluid">
   
    <?php echo $form_content ?>
    
    <div class="formSep">
        <button type="submit" id="Guardar" class="btn btn-success" onclick="$('.fileupload').fileupload();">Guardar Cambios</button>
    </div>
</div>
<?php echo form_close() ?>