<div class="<?php echo $class_span; ?>" >
    <label class="<?php echo $class_required; ?>"><?php echo $title; ?></label>
    <div class="fileupload fileupload-new span10" data-uploadtype="file"  data-provides="fileupload">
        <input type="hidden">
        <div class="input-append">
            <div class="uneditable-input input-small">
                <i class="icon-file fileupload-exists"></i>
                <span class="fileupload-preview"><?php echo $dato; ?></span>
            </div>
            <span class="btn btn-file">
                <span class="fileupload-new">Seleccionar Archivo</span>
                <span class="fileupload-exists">Cambiar</span>
                <input type="hidden" value="<?php echo $dato; ?>" name="<?php echo $name; ?>" >
                <input type="file" name="<?php echo $name; ?>" required>
            </span>
            <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Quitar</a>
        </div>
    </div>
    <span class="help-block"><?php echo $instrutions;  ?></span>
</div>