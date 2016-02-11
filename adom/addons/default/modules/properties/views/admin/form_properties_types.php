<section class="title">
    <!-- We'll use $this->method to switch between sample.create & sample.edit -->
    <h4><?php echo lang('properties:create_type'); ?></h4>
</section>

<section class="item">
    <div class="content">
        <?php echo form_open_multipart($this->uri->uri_string(), 'class="crud"'); ?>
        <div class="form_inputs">
            <ul>
                <li class="<?php echo alternator('', 'even'); ?>">
                    <label for="name"><?php echo lang('properties:name'); ?> <span>*</span></label>
                    <div class="input"><?php echo form_input('name', set_value('name', @$type->name), 'class="width-15"'); ?></div>
                </li>
            </ul>
        </div>
        <div class="buttons">
            <?php $this->load->view('admin/partials/buttons', array('buttons' => array('save', 'cancel'))); ?>
        </div>
        <?php echo form_close(); ?>
    </div>
</section>