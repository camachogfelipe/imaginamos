<section class="title">
    <!-- We'll use $this->method to switch between sample.create & sample.edit -->
    <h4><?php echo lang('pqr:formsend'); ?></h4>
</section>
<?php echo validation_errors(); ?>
<section class="item">
    <div class="content">
        <?php echo form_open_multipart($this->uri->uri_string() . '/create_pqr', 'class="crud"'); ?>
        <div class="form_inputs">
            <div class="camp">
                <label for="name"><?php echo lang('pqr:name'); ?> <span>*</span></label>
                <div class="input">
                    <?php
                    if ($this->ion_auth->logged_in()) {
                        echo form_input('name', set_value('name', $this->ion_auth->profile()->first_name), 'class="width-15" readonly="readonly"');
                    } else {
                        echo form_input('name', set_value('name'), 'class="width-15"');
                    }
                    ?>
                </div>
            </div>
            <div class="camp">
                <label for="last_name"><?php echo lang('pqr:last_name'); ?> <span>*</span></label>
                <div class="input">
                    <?php
                    if ($this->ion_auth->logged_in()) {
                        echo form_input('last_name', set_value('last_name', $this->ion_auth->profile()->last_name), 'class="width-15" readonly="readonly"');
                    } else {
                        echo form_input('last_name', set_value('last_name'), 'class="width-15"');
                    }
                    ?>
                </div>
            </div>
            <div class="camp">
                <label for="email"><?php echo lang('pqr:email'); ?> <span>*</span></label>
                <div class="input">
                    <?php
                    if ($this->ion_auth->logged_in()) {
                        echo form_input('email', set_value('email', $this->ion_auth->profile()->email), 'class="width-15" readonly="readonly"');
                    } else {
                        echo form_input('email', set_value('email'), 'class="width-15"');
                    }
                    ?>
                </div>
            </div>
            <div class="camp">
                <label for="type_id"><?php echo lang('pqr:type'); ?> <span>*</span></label>
                <div class="selected"><?php echo form_dropdown('type_id', $types); ?></div>
            </div>
            <div class="camp">
                <label for="country_id"><?php echo lang('pqr:cuontry'); ?> <span>*</span></label>
                <div class="selected"><?php                  
                    echo form_dropdown('country_id', $countries, '', 'id=country_id');
                    ?></div>
            </div>
            <div class="camp">
                <label for="city_id"><?php echo lang('pqr:city'); ?> <span>*</span></label>
                <div class="selected"><?php echo form_dropdown('city_id', array('' => 'Seleccione...'), '', 'id=city_id'); ?></div>
            </div>
            <div class="camp">
                <label for="building_id"><?php echo lang('pqr:building'); ?> <span>*</span></label>
                <div class="selector"><?php echo form_dropdown('building_id', array('' => 'Seleccione...'), '', 'id=building_id'); ?></div>
            </div>
            <div class="camp">
                <label for="coment"><?php echo lang('pqr:coment'); ?> <span>*</span></label>
                <div class="selector"><?php echo form_textarea('coment'); ?></div>
            </div>

        </div>
        <div class="buttons">
            <?php echo form_submit('send', lang('pqr:send')); ?>
        </div>
        <?php echo form_close(); ?>
    </div>
</section>