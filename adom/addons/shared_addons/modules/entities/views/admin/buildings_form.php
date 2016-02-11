<section class="title">
    <!-- We'll use $this->method to switch between sample.create & sample.edit -->
    <h4><?php echo lang('entities:create_building'); ?></h4>
</section>

<section class="item">
    <div class="content">
        <?php echo form_open_multipart($this->uri->uri_string(), 'class="crud"'); ?>

        <div class="form_inputs">
            <ul>
                <li>
                    <label for="city_id"><?php echo lang('entities:city_label') ?></label>
                    <div class="input">
                        <?php echo form_dropdown('city_id', $cities, @$building->city_id) ?>
                        [ <?php echo anchor('admin/entities/cities/add_city', lang('entities:create_city'), 'target="_blank"') ?> ]
                    </div>
                </li>

                <li class="<?php echo alternator('', 'even'); ?>">
                    <label for="name"><?php echo lang('entities:name'); ?> <span>*</span></label>
                    <div class="input"><?php echo form_input('name', set_value('name', @$building->name), 'class="width-15"'); ?></div>
                </li>
                <li class="<?php echo alternator('', 'even'); ?>">
                    <label for="name"><?php echo lang('entities:admin'); ?></label>
                    <div class="input"><?php echo form_multiselect('admin[]', $admin, @$adminB) ?></div>
                </li>
            </ul>
        </div>

        <div class="buttons">
            <?php $this->load->view('admin/partials/buttons', array('buttons' => array('save', 'cancel'))); ?>
        </div>
        <?php echo form_close(); ?>
    </div>
</section>