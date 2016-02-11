<div class="fileupload fileupload-<?= $current_file ? 'exists' : 'new' ?>" data-provides="fileupload">
    <div class="fileupload-new thumbnail" style="width: <?= $width ?>px; height: <?= $height ?>px;">
        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=Sin+imagen" />
    </div>
    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: <?= $width ?>px; max-height: <?= $height ?>px; line-height: 20px;">
        <?php if ($current_file) : ?>
            <img src="<?= base_url('files/download/' . $current_file->id) ?>" style="max-height: <?= $height ?>px;" />
        <?php endif; ?>
    </div>
    <div>
        <span class="btn btn-file gray"><span class="fileupload-new"><?php echo lang('streams:bootstrap_image.select') ?></span><span class="fileupload-exists"><?php echo lang('streams:bootstrap_image.change') ?></span><input name="<?= $params['form_slug'] ?>_file" type="file" accept="<?= $accept_input_html5 ?>" /></span>
        <a href="#" class="btn gray fileupload-exists" data-dismiss="fileupload"><?php echo lang('streams:bootstrap_image.remove') ?></a>
    </div>
</div>



 <?php echo str_replace('<input ', "<input  id='data_value".$params['form_slug']."'", form_hidden($params['form_slug'], !empty($params['value']) ? $params['value'] : 'dummy'))  ?>
