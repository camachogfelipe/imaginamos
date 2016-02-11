    <div class="<?php echo $class_span; ?>" style="height: 300px;">
        <label class="<?php echo $class_required; ?>" ><?php echo $title;  ?></label>
        <div class="fileupload fileupload-new" data-uploadtype="image"  data-provides="fileupload">
            <div class="fileupload-new thumbnail" style="width: 150px; height: 150px;">
                 <?php echo $imagen64; ?>
            </div>
            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 150px; max-height: 150px; ">
                 <?php echo $imagen64; ?>
            </div>
            <div>
                <span class="btn btn-small btn-file">
                    <span class="fileupload-new"><?php echo $label_load_img;  ?></span>
                    <span class="fileupload-exists"><?php echo $label_change;  ?></span>
                    <input type="hidden" value="<?php echo $imagen_id; ?>" name="imagen<?php echo ($n != 0)?$n:"";  ?>_id" >
                    <input type="file" value="<?php echo $imagen_path; ?>" name="imagen<?php echo ($n != 0)?$n:"";  ?>_path" id="path" />
                </span>
                <a href="#" class="btn fileupload-exists" data-dismiss="fileupload"><?php echo $label_delete;  ?></a>
            </div>
        </div>
        <span class="help-block"><?php echo $instrutions;  ?></span>
      
    </div>