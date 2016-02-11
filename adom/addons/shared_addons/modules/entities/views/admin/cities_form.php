<section class="title">
    <!-- We'll use $this->method to switch between sample.create & sample.edit -->
    <h4><?php echo lang('entities:create_city'); ?></h4>
</section>

<section class="item">
    <div class="content">
        <?php echo form_open_multipart($this->uri->uri_string(), 'class="crud"'); ?>

        <div class="form_inputs">

            <ul>
                <li>
                    <label for="category_id"><?php echo lang('entities:country') ?></label>
                    <div class="input">
                        <?php echo form_dropdown('country_id',$countries,@$city->country_id) ?>
                        [ <?php echo anchor('admin/entities/add_country', lang('entities:create_contry'), 'target="_blank"') ?> ]
                    </div>
                </li>

                <li class="<?php echo alternator('', 'even'); ?>">
                    <label for="name"><?php echo lang('entities:name'); ?> <span>*</span></label>
                    <div class="input"><?php echo form_input('name', set_value('name', @$city->name), 'class="width-15"'); ?></div>
                </li>

            </ul>

        </div>

        <div class="buttons">
            <?php $this->load->view('admin/partials/buttons', array('buttons' => array('save', 'cancel'))); ?>
        </div>
        <?php echo form_close(); ?>
    </div>
</section>